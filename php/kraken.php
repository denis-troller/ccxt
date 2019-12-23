<?php

namespace ccxtpro;

// PLEASE DO NOT EDIT THIS FILE, IT IS GENERATED AND WILL BE OVERWRITTEN:
// https://github.com/ccxt/ccxt/blob/master/CONTRIBUTING.md#how-to-contribute-code

use \ccxtpro\ClientTrait; // websocket functionality
use Exception; // a common import
use \ccxt\ExchangeError;

class kraken extends \ccxt\kraken {

    use ClientTrait;

    public function describe () {
        return array_replace_recursive(parent::describe (), array(
            'has' => array(
                'ws' => true,
                'watchTicker' => true,
                'watchOrderBook' => true,
            ),
            'urls' => array(
                'api' => array(
                    'ws' => array(
                        'public' => 'wss://ws.kraken.com',
                        'private' => 'wss://ws-auth.kraken.com',
                        'beta' => 'wss://beta-ws.kraken.com',
                    ),
                ),
            ),
            'versions' => array(
                'ws' => '0.2.0',
            ),
            'options' => array(
                'subscriptionStatusByChannelId' => array(),
            ),
            'exceptions' => array(
                'ws' => array(
                    'exact' => array(
                        'Event(s) not found' => '\\ccxt\\BadRequest',
                    ),
                    'broad' => array(
                        'Currency pair not in ISO 4217-A3 format' => '\\ccxt\\BadSymbol',
                    ),
                ),
            ),
        ));
    }

    public function handle_ticker ($client, $message) {
        //
        //     array(
        //         0, // channelID
        //         array(
        //             "a" => array( "5525.40000", 1, "1.000" ), // ask, wholeAskVolume, askVolume
        //             "b" => array( "5525.10000", 1, "1.000" ), // bid, wholeBidVolume, bidVolume
        //             "c" => array( "5525.10000", "0.00398963" ), // closing price, volume
        //             "h" => array( "5783.00000", "5783.00000" ), // high price today, high price 24h ago
        //             "l" => array( "5505.00000", "5505.00000" ), // low price today, low price 24h ago
        //             "o" => array( "5760.70000", "5763.40000" ), // open price today, open price 24h ago
        //             "p" => array( "5631.44067", "5653.78939" ), // $vwap today, $vwap 24h ago
        //             "t" => array( 11493, 16267 ), // number of trades today, 24 hours ago
        //             "v" => array( "2634.11501494", "3591.17907851" ), // volume today, volume 24 hours ago
        //         ),
        //         "$ticker",
        //         "XBT/USD"
        //     )
        //
        $wsName = $message[3];
        $name = 'ticker';
        $messageHash = $name . ':' . $wsName;
        $market = $this->safe_value($this->options['marketsByWsName'], $wsName);
        $symbol = $market['symbol'];
        $ticker = $message[1];
        $vwap = floatval ($ticker['p'][0]);
        $quoteVolume = null;
        $baseVolume = floatval ($ticker['v'][0]);
        if ($baseVolume !== null && $vwap !== null) {
            $quoteVolume = $baseVolume * $vwap;
        }
        $last = floatval ($ticker['c'][0]);
        $timestamp = $this->milliseconds ();
        $result = array(
            'symbol' => $symbol,
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
            'high' => floatval ($ticker['h'][0]),
            'low' => floatval ($ticker['l'][0]),
            'bid' => floatval ($ticker['b'][0]),
            'bidVolume' => floatval ($ticker['b'][2]),
            'ask' => floatval ($ticker['a'][0]),
            'askVolume' => floatval ($ticker['a'][2]),
            'vwap' => $vwap,
            'open' => floatval ($ticker['o'][0]),
            'close' => $last,
            'last' => $last,
            'previousClose' => null,
            'change' => null,
            'percentage' => null,
            'average' => null,
            'baseVolume' => $baseVolume,
            'quoteVolume' => $quoteVolume,
            'info' => $ticker,
        );
        // todo => add support for multiple tickers (may be tricky)
        // kraken confirms multi-pair subscriptions separately one by one
        // trigger correct watchTickers calls upon receiving any of symbols
        // --------------------------------------------------------------------
        // if there's a corresponding watchTicker call - trigger it
        $client->resolve ($result, $messageHash);
    }

    public function watch_balance ($params = array ()) {
        $this->load_markets();
        throw new NotImplemented($this->id . ' watchBalance() not implemented yet');
    }

    public function handle_trades ($client, $message) {
        //
        //     array(
        //         0, // channelID
        //         array( //     price        volume         time             side type misc
        //             array( "5541.20000", "0.15850568", "1534614057.321597", "s", "l", "" ),
        //             array( "6060.00000", "0.02455000", "1534614057.324998", "b", "l", "" ),
        //         ),
        //         "$trade",
        //         "XBT/USD"
        //     )
        //
        // todo => incremental trades – add max limit to the dequeue of trades, unshift and push
        //
        //     $trade = $this->handle_trade ($client, delta, $market);
        //     $this->trades[] = $trade;
        //     tradesCount .= 1;
        //
        $wsName = $message[3];
        // $name = 'ticker';
        // $messageHash = $name . ':' . $wsName;
        $market = $this->safe_value($this->options['marketsByWsName'], $wsName);
        $symbol = $market['symbol'];
        // for ($i = 0; $i < is_array($message[1]) ? count($message[1]) : 0; $i++)
        $timestamp = intval ($message[2]);
        $result = array(
            'id' => null,
            'order' => null,
            'info' => $message,
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
            'symbol' => $symbol,
            // 'type' => type,
            // 'side' => side,
            'takerOrMaker' => null,
            // 'price' => price,
            // 'amount' => amount,
            // 'cost' => price * amount,
            // 'fee' => fee,
        );
        $result['id'] = null;
        throw NotImplemented ($this->id . ' handleTrades() not implemented yet (wip)');
    }

    public function handle_ohlcv ($client, $message) {
        //
        //     array(
        //         216, // channelID
        //         array(
        //             '1574454214.962096', // Time, seconds since epoch
        //             '1574454240.000000', // End timestamp of the interval
        //             '0.020970', // Open price at midnight UTC
        //             '0.020970', // Intraday high price
        //             '0.020970', // Intraday low price
        //             '0.020970', // Closing price at midnight UTC
        //             '0.020970', // Volume weighted average price
        //             '0.08636138', // Accumulated volume today
        //             1, // Number of trades today
        //         ),
        //         'ohlc-1', // Channel Name of subscription
        //         'ETH/XBT', // Asset pair
        //     )
        //
        $wsName = $message[3];
        $name = 'ohlc';
        $candle = $message[1];
        // var_dump (
        //     $this->iso8601 (intval (floatval ($candle[0]) * 1000)), '-',
        //     $this->iso8601 (intval (floatval ($candle[1]) * 1000)), ' => [',
        //     floatval ($candle[2]),
        //     floatval ($candle[3]),
        //     floatval ($candle[4]),
        //     floatval ($candle[5]),
        //     floatval ($candle[7]), ']'
        // );
        $result = [
            intval (floatval ($candle[0]) * 1000),
            floatval ($candle[2]),
            floatval ($candle[3]),
            floatval ($candle[4]),
            floatval ($candle[5]),
            floatval ($candle[7]),
        ];
        $messageHash = $name . ':' . $wsName;
        $client->resolve ($result, $messageHash);
    }

    public function reqid () {
        $reqid = $this->sum ($this->safe_integer($this->options, 'reqid', 0), 1);
        $this->options['reqid'] = $reqid;
        return $reqid;
    }

    public function watch_public ($name, $symbol, $params = array ()) {
        $this->load_markets();
        $market = $this->market ($symbol);
        $wsName = $this->safe_value($market['info'], 'wsname');
        $messageHash = $name . ':' . $wsName;
        $url = $this->urls['api']['ws']['public'];
        $requestId = $this->reqid ();
        $subscribe = array(
            'event' => 'subscribe',
            'reqid' => $requestId,
            'pair' => array(
                $wsName,
            ),
            'subscription' => array(
                'name' => $name,
            ),
        );
        $request = array_replace_recursive($subscribe, $params);
        return $this->watch ($url, $messageHash, $request, $messageHash);
        // $future = $this->watch ($url, array( $messageHash, $requestId ), $request, $messageHash);
        // $client = $this->clients[$url];
        // $client['futures'][$requestId] = $future;
        // return $future;
    }

    public function watch_ticker ($symbol, $params = array ()) {
        return $this->watch_public ('ticker', $symbol, $params);
    }

    public function watch_trades ($symbol, $params = array ()) {
        return $this->watch_public ('trade', $symbol, $params);
    }

    public function watch_order_book ($symbol, $limit = null, $params = array ()) {
        $name = 'book';
        $request = array();
        if ($limit !== null) {
            $request['subscription'] = array(
                'depth' => $limit, // default 10, valid options 10, 25, 100, 500, 1000
            );
        }
        return $this->watch_public ($name, $symbol, array_merge($request, $params));
    }

    public function watch_ohlcv ($symbol, $timeframe = '1m', $since = null, $limit = null, $params = array ()) {
        $name = 'ohlc';
        $request = array(
            'subscription' => array(
                'interval' => intval ($this->timeframes[$timeframe]),
            ),
        );
        return $this->watch_public ($name, $symbol, array_merge($request, $params));
    }

    public function load_markets ($reload = false, $params = array ()) {
        $markets = parent::load_markets($reload, $params);
        $marketsByWsName = $this->safe_value($this->options, 'marketsByWsName');
        if (($marketsByWsName === null) || $reload) {
            $marketsByWsName = array();
            for ($i = 0; $i < count($this->symbols); $i++) {
                $symbol = $this->symbols[$i];
                $market = $this->markets[$symbol];
                if (!$market['darkpool']) {
                    $info = $this->safe_value($market, 'info', array());
                    $wsName = $this->safe_string($info, 'wsname');
                    $marketsByWsName[$wsName] = $market;
                }
            }
            $this->options['marketsByWsName'] = $marketsByWsName;
        }
        return $markets;
    }

    public function watch_heartbeat ($params = array ()) {
        $this->load_markets();
        $event = 'heartbeat';
        $url = $this->urls['api']['ws']['public'];
        return $this->watch ($url, $event);
    }

    public function handle_heartbeat ($client, $message) {
        //
        // every second (approx) if no other updates are sent
        //
        //     array( "$event" => "heartbeat" )
        //
        $event = $this->safe_string($message, 'event');
        $client->resolve ($message, $event);
    }

    public function handle_trade ($client, $trade, $market = null) {
        //
        // public trades
        //
        //     array(
        //         "t", // $trade
        //         "42706057", // $id
        //         1, // 1 = buy, 0 = sell
        //         "0.05567134", // $price
        //         "0.00181421", // $amount
        //         1522877119, // $timestamp
        //     )
        //
        $id = (string) $trade[1];
        $side = $trade[2] ? 'buy' : 'sell';
        $price = floatval ($trade[3]);
        $amount = floatval ($trade[4]);
        $timestamp = $trade[5] * 1000;
        $symbol = null;
        if ($market !== null) {
            $symbol = $market['symbol'];
        }
        return array(
            'info' => $trade,
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
            'symbol' => $symbol,
            'id' => $id,
            'order' => null,
            'type' => null,
            'takerOrMaker' => null,
            'side' => $side,
            'price' => $price,
            'amount' => $amount,
            'cost' => $price * $amount,
            'fee' => null,
        );
    }

    public function handle_order_book ($client, $message) {
        //
        // first $message (snapshot)
        //
        //     array(
        //         1234, // channelID
        //         array(
        //             "as" => array(
        //                 array( "5541.30000", "2.50700000", "1534614248.123678" ),
        //                 array( "5541.80000", "0.33000000", "1534614098.345543" ),
        //                 array( "5542.70000", "0.64700000", "1534614244.654432" )
        //             ),
        //             "bs" => array(
        //                 array( "5541.20000", "1.52900000", "1534614248.765567" ),
        //                 array( "5539.90000", "0.30000000", "1534614241.769870" ),
        //                 array( "5539.50000", "5.00000000", "1534613831.243486" )
        //             )
        //         ),
        //         "book-10",
        //         "XBT/USD"
        //     )
        //
        // subsequent updates
        //
        //     array(
        //         1234,
        //         array( // optional
        //             "$a" => array(
        //                 array( "5541.30000", "2.50700000", "1534614248.456738" ),
        //                 array( "5542.50000", "0.40100000", "1534614248.456738" )
        //             )
        //         ),
        //         array( // optional
        //             "$b" => array(
        //                 array( "5541.30000", "0.00000000", "1534614335.345903" )
        //             )
        //         ),
        //         "book-10",
        //         "XBT/USD"
        //     )
        //
        $messageLength = is_array($message) ? count($message) : 0;
        $wsName = $message[$messageLength - 1];
        $market = $this->safe_value($this->options['marketsByWsName'], $wsName);
        $symbol = $market['symbol'];
        $timestamp = null;
        $messageHash = 'book:' . $wsName;
        // if this is $a snapshot
        if (is_array($message[1]) && array_key_exists('as', $message[1])) {
            // todo get depth from marketsByWsName
            $this->orderbooks[$symbol] = $this->limited_order_book(array(), 10);
            $orderbook = $this->orderbooks[$symbol];
            $sides = array(
                'as' => 'asks',
                'bs' => 'bids',
            );
            $keys = is_array($sides) ? array_keys($sides) : array();
            for ($i = 0; $i < count($keys); $i++) {
                $key = $keys[$i];
                $side = $sides[$key];
                $bookside = $orderbook[$side];
                $deltas = $this->safe_value($message[1], $key, array());
                $timestamp = $this->handle_deltas ($bookside, $deltas, $timestamp);
            }
            $orderbook['timestamp'] = $timestamp;
            // the .limit () operation will be moved to the watchOrderBook
            $client->resolve ($orderbook->limit (), $messageHash);
        } else {
            $orderbook = $this->orderbooks[$symbol];
            // else, if this is an $orderbook update
            $a = null;
            $b = null;
            if ($messageLength === 5) {
                $a = $this->safe_value($message[1], 'a', array());
                $b = $this->safe_value($message[2], 'b', array());
            } else {
                if (is_array($message[1]) && array_key_exists('a', $message[1])) {
                    $a = $this->safe_value($message[1], 'a', array());
                } else {
                    $b = $this->safe_value($message[1], 'b', array());
                }
            }
            if ($a !== null) {
                $timestamp = $this->handle_deltas ($orderbook['asks'], $a, $timestamp);
            }
            if ($b !== null) {
                $timestamp = $this->handle_deltas ($orderbook['bids'], $b, $timestamp);
            }
            $orderbook['timestamp'] = $timestamp;
            // the .limit () operation will be moved to the watchOrderBook
            $client->resolve ($orderbook->limit (), $messageHash);
        }
    }

    public function handle_deltas ($bookside, $deltas, $timestamp) {
        for ($j = 0; $j < count($deltas); $j++) {
            $delta = $deltas[$j];
            $price = floatval ($delta[0]);
            $amount = floatval ($delta[1]);
            $timestamp = max ($timestamp || 0, intval (floatval ($delta[2]) * 1000));
            $bookside->store ($price, $amount);
        }
        return $timestamp;
    }

    public function handle_system_status ($client, $message) {
        //
        // todo => answer the question whether handleSystemStatus should be renamed
        // and unified as handleStatus for any usage pattern that
        // involves system status and maintenance updates
        //
        //     {
        //         connectionID => 15527282728335292000,
        //         event => 'systemStatus',
        //         status => 'online', // online|maintenance|(custom status tbd)
        //         version => '0.2.0'
        //     }
        //
        return $message;
    }

    public function handle_subscription_status ($client, $message) {
        //
        // todo => answer the question whether handleSubscriptionStatus should be renamed
        // and unified as handleResponse for any usage pattern that
        // involves an identified request/response sequence
        //
        //     {
        //         channelID => 210,
        //         channelName => 'book-10',
        //         event => 'subscriptionStatus',
        //         reqid => 1574146735269,
        //         pair => 'ETH/XBT',
        //         status => 'subscribed',
        //         subscription => array( depth => 10, name => 'book' )
        //     }
        //
        $channelId = $this->safe_string($message, 'channelID');
        $this->options['subscriptionStatusByChannelId'][$channelId] = $message;
        // $requestId = $this->safe_string($message, 'reqid');
        // if (is_array($client->futures) && array_key_exists($requestId, $client->futures)) {
        //     unset($client->futures[$requestId]);
        // }
    }

    public function handle_error_message ($client, $message) {
        //
        //     {
        //         $errorMessage => 'Currency pair not in ISO 4217-A3 format foobar',
        //         event => 'subscriptionStatus',
        //         pair => 'foobar',
        //         reqid => 1574146735269,
        //         status => 'error',
        //         subscription => array( name => 'ticker' )
        //     }
        //
        $errorMessage = $this->safe_value($message, 'errorMessage');
        if ($errorMessage !== null) {
            $requestId = $this->safe_value($message, 'reqid');
            if ($requestId !== null) {
                $broad = $this->exceptions['ws']['broad'];
                $broadKey = $this->find_broadly_matched_key($broad, $errorMessage);
                $exception = null;
                if ($broadKey === null) {
                    $exception = new ExchangeError ($errorMessage);
                } else {
                    $exception = new $broad[$broadKey] ($errorMessage);
                }
                // var_dump ($requestId, $exception);
                $client->reject ($exception, $requestId);
                // throw $exception;
                return false;
            }
        }
        return true;
    }

    public function sign_message ($client, $messageHash, $message, $params = array ()) {
        // todo => kraken signMessage not implemented yet
        return $message;
    }

    public function handle_message ($client, $message) {
        if (gettype($message) === 'array' && count(array_filter(array_keys($message), 'is_string')) == 0) {
            $channelId = (string) $message[0];
            $subscriptionStatus = $this->safe_value($this->options['subscriptionStatusByChannelId'], $channelId, array());
            $subscription = $this->safe_value($subscriptionStatus, 'subscription', array());
            $name = $this->safe_string($subscription, 'name');
            $methods = array(
                'book' => array($this, 'handle_order_book'),
                'ohlc' => array($this, 'handle_ohlcv'),
                'ticker' => array($this, 'handle_ticker'),
                'trade' => array($this, 'handle_trades'),
            );
            $method = $this->safe_value($methods, $name);
            if ($method === null) {
                return $message;
            } else {
                return $this->call ($method, $client, $message);
            }
        } else {
            if ($this->handle_error_message ($client, $message)) {
                $event = $this->safe_string($message, 'event');
                $methods = array(
                    'heartbeat' => array($this, 'handle_heartbeat'),
                    'systemStatus' => array($this, 'handle_system_status'),
                    'subscriptionStatus' => array($this, 'handle_subscription_status'),
                );
                $method = $this->safe_value($methods, $event);
                if ($method === null) {
                    return $message;
                } else {
                    return $this->call ($method, $client, $message);
                }
            }
        }
    }
}
