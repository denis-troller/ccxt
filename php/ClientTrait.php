<?php

namespace ccxtpro;

use \ccxt\async\Throttle;

trait ClientTrait {

    public $clients = array();

    // streaming-specific options
    public $streaming = array(
        'keepAlive' => 30000,
        'heartbeat' => true,
        'ping' => null,
        'maxPingPongMisses' => 2.0,
    );

    public $newUpdates = false;

    public function inflate($data) {
        return \ccxtpro\inflate($data); // zlib_decode($data);
    }

    public function inflate64($data) {
        return \ccxtpro\inflate64($data); // zlib_decode(base64_decode($data));
    }

    public function gunzip($data) {
        return \ccxtpro\gunzip($data);
    }

    public function order_book ($snapshot = array(), $depth = PHP_INT_MAX) {
        return new OrderBook($snapshot, $depth);
    }

    public function indexed_order_book($snapshot = array(), $depth = PHP_INT_MAX) {
        return new IndexedOrderBook($snapshot, $depth);
    }

    public function counted_order_book($snapshot = array(), $depth = PHP_INT_MAX) {
        return new CountedOrderBook($snapshot, $depth);
    }

    public function client($url) {
        if (!array_key_exists($url, $this->clients)) {
            $on_message = array($this, 'handle_message');
            $on_error = array($this, 'on_error');
            $on_close = array($this, 'on_close');
            $on_connected = array($this, 'on_connected');
            $ws_options = $this->safe_value($this->options, 'ws', array());
            $options = array_replace_recursive(array(
                'log' => array($this, 'log'),
                'verbose' => $this->verbose,
                'loop' => static::$loop, // reactphp-specific
                'throttle' => new Throttle($this->tokenBucket, static::get_kernel()),
            ), $this->streaming, $ws_options);
            $this->clients[$url] = new Client($url, $on_message, $on_error, $on_close, $on_connected, $options);
        }
        return $this->clients[$url];
    }

    // the ellipsis packing/unpacking requires PHP 5.6+ :(
    public function spawn($method, ... $args) {
        static::get_kernel()->execute($method(...$args));
    }

    public function delay($timeout, $method, ... $args) {
        static::get_loop()->addTimer($timeout / 1000, function () use ($method, $args) {
            $this->spawn($method, ...$args);
        });
    }

    public function watch($url, $message_hash, $message = null, $subscribe_hash = null, $subscription = null) {
        $client = $this->client($url);
        // todo: calculate the backoff delay in php
        $backoff_delay = 0; // milliseconds
        $future = $client->future($message_hash);
        $subscribed = isset($client->subscriptions[$subscribe_hash]);
        if (!$subscribed) {
            $client->subscriptions[$subscribe_hash] = isset($subscription) ? $subscription : true;
        }
        $connected = $client->connect($backoff_delay);
        $connected->then(
            function($result) use ($client, $message_hash, $message, $subscribe_hash, $subscription, $subscribed) {
                if (!$subscribed) {
                    // todo: add PHP async rate-limiting
                    // todo: decouple signing from subscriptions
                    $options = $this->safe_value($this->options, 'ws');
                    $cost = $this->safe_value ($options, 'cost', 1);
                    if ($message) {
                        if ($this->enableRateLimit) {
                            // add cost here |
                            //               |
                            //               V
                            \call_user_func($client->throttle, $cost)->then(function ($result) use ($client, $message) {
                                $client->send($message);
                            });
                        } else {
                            $client->send($message);
                        }
                    }
                }
            }
        );
        return $future;
    }

    public function on_connected($client, $message = null) {
        // for user hooks
        // echo "Connected to " . $client->url . "\n";
    }

    public function on_error($client, $error) {
        if (array_key_exists($client->url, $this->clients) && $this->clients[$client->url]->error) {
            unset($this->clients[$client->url]);
        }
    }

    public function on_close($client, $message) {
        if ($client->error) {
            // connection closed due to an error, do nothing
        } else {
            // server disconnected a working connection
            if (array_key_exists($client->url, $this->clients)) {
                unset($this->clients[$client->url]);
            }
        }
    }

    public function close() {
        // todo: implement ClientTrait.php close
        // const clients = Object.values (this.clients || {})
        // for (let i = 0; i < clients.length; i++) {
        //     const client = clients[i]
        //     await client.close ()
        //     delete this.clients[client.url]
        // }
    }

    public function find_timeframe($timeframe, $timeframes = null) {
        $timeframes = $timeframes ? $timeframes : $this->timeframes;
        $keys = array_keys($timeframes);
        for ($i = 0; $i < count($keys); $i++) {
            $key = $keys[$i];
            if ($timeframes[$key] === $timeframe) {
                return $key;
            }
        }
        return null;
    }
}