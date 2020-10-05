'use strict';

//  ---------------------------------------------------------------------------

const ccxt = require ('ccxt');
const { AuthenticationError, InvalidNonce, BadRequest } = require ('ccxt/js/base/errors');
const { ArrayCache } = require ('./base/Cache');

//  ---------------------------------------------------------------------------

module.exports = class bittrex extends ccxt.bittrex {
    describe () {
        return this.deepExtend (super.describe (), {
            'has': {
                'ws': true,
                // 'watchBalance': true,
                'watchHeartbeat': true,
                'watchOHLCV': true,
                'watchOrderBook': true,
                'watchTicker': true,
                // 'watchTickers': false, // for now
                // 'watchTrades': true,
            },
            'urls': {
                'api': {
                    'ws': 'wss://socket-v3.bittrex.com/signalr/connect',
                    'signalr': 'https://socket-v3.bittrex.com/signalr',
                },
            },
            'api': {
                'signalr': {
                    'get': [
                        'negotiate',
                        'start',
                    ],
                },
            },
            'options': {
                'tradesLimit': 1000,
                'hub': 'c3',
            },
        });
    }

    createSignalRQuery (params = {}) {
        const hub = this.safeString (this.options, 'hub', 'c2');
        const hubs = [
            { 'name': hub },
        ];
        const ms = this.milliseconds ();
        return this.extend ({
            'transport': 'webSockets',
            'connectionData': this.json (hubs),
            'clientProtocol': 1.5,
            '_': ms, // no cache
            'tid': this.sum (ms % 10, 1), // random
        }, params);
    }

    async negotiate (params = {}) {
        const client = this.client (this.urls['api']['ws']);
        const messageHash = 'negotiate';
        let future = this.safeValue (client.subscriptions, messageHash);
        if (future === undefined) {
            future = client.future (messageHash);
            client.subscriptions[messageHash] = future;
            const request = this.createSignalRQuery (params);
            const response = await this.signalrGetNegotiate (this.extend (request, params));
            //
            //     {
            //         Url: '/signalr/v1.1/signalr',
            //         ConnectionToken: 'lT/sa19+FcrEb4W53On2v+Pcc3d4lVCHV5/WJtmQw1RQNQMpm7K78w/WnvfTN2EgwQopTUiFX1dioHN7Bd1p8jAbfdxrqf5xHAMntJfOrw1tON0O',
            //         ConnectionId: 'a2afb0f7-346f-4f32-b7c7-01e04584b86a',
            //         KeepAliveTimeout: 20,
            //         DisconnectTimeout: 30,
            //         ConnectionTimeout: 110,
            //         TryWebSockets: true,
            //         ProtocolVersion: '1.5',
            //         TransportConnectTimeout: 5,
            //         LongPollDelay: 0
            //     }
            //
            const result = {
                'request': request,
                'response': response,
            };
            client.resolve (result, messageHash);
        }
        return await future;
    }

    async start (negotiation, params = {}) {
        const connectionToken = this.safeString (negotiation['response'], 'ConnectionToken');
        const request = this.createSignalRQuery (this.extend (negotiation['request'], {
            'connectionToken': connectionToken,
        }));
        return await this.signalrGetStart (request);
    }

    async watchHeartbeat (params = {}) {
        await this.loadMarkets ();
        const negotiate = this.negotiate ();
        return await this.afterAsync (negotiate, this.subscribeToHeartbeat, params);
    }

    async subscribeToHeartbeat (negotiation, params = {}) {
        await this.loadMarkets ();
        const connectionToken = this.safeString (negotiation['response'], 'ConnectionToken');
        const query = this.extend (negotiation['request'], {
            'connectionToken': connectionToken,
            // 'tid': this.milliseconds () % 10,
        });
        const url = this.urls['api']['ws'] + '?' + this.urlencode (query);
        const requestId = this.milliseconds ().toString ();
        const messageHash = 'heartbeat';
        const hub = this.safeString (this.options, 'hub', 'c3');
        const subscriptions = [ messageHash ];
        const method = 'Subscribe';
        const request = {
            'H': hub,
            'M': method,
            'A': [ subscriptions ], // arguments
            'I': requestId, // invocation request id
        };
        const subscription = {
            'id': requestId,
            'params': params,
            'negotiation': negotiation,
        };
        return await this.watch (url, messageHash, request, messageHash, subscription);
    }

    handleHeartbeat (client, message) {
        //
        // every 20 seconds (approx) if no other updates are sent
        //
        //     {}
        //
        client.resolve (message, 'heartbeat');
    }

    async watchTicker (symbol, params = {}) {
        await this.loadMarkets ();
        const negotiate = this.negotiate ();
        return await this.afterAsync (negotiate, this.subscribeToTicker, symbol, params);
    }

    async subscribeToTicker (negotiation, symbol, params = {}) {
        await this.loadMarkets ();
        const connectionToken = this.safeString (negotiation['response'], 'ConnectionToken');
        const query = this.extend (negotiation['request'], {
            'connectionToken': connectionToken,
            // 'tid': this.milliseconds () % 10,
        });
        const market = this.market (symbol);
        const url = this.urls['api']['ws'] + '?' + this.urlencode (query);
        const requestId = this.milliseconds ().toString ();
        const name = 'ticker';
        const messageHash = name + '_' + market['id'];
        const method = 'Subscribe';
        const hub = this.safeString (this.options, 'hub', 'c3');
        const subscriptions = [ messageHash ];
        const request = {
            'H': hub,
            'M': method,
            'A': [ subscriptions ], // arguments
            'I': requestId, // invocation request id
        };
        const subscription = {
            'id': requestId,
            'marketId': market['id'],
            'symbol': symbol,
            'params': params,
            'negotiation': negotiation,
        };
        return await this.watch (url, messageHash, request, messageHash, subscription);
    }

    handleTicker (client, message) {
        //
        // summary subscription update
        //
        //     ...
        //
        // ticker subscription update
        //
        //     {
        //         symbol: 'BTC-USDT',
        //         lastTradeRate: '10701.02140008',
        //         bidRate: '10701.02140007',
        //         askRate: '10705.71049998'
        //     }
        //
        const ticker = this.parseTicker (message);
        const symbol = ticker['symbol'];
        const market = this.market (symbol);
        this.tickers[symbol] = ticker;
        const name = 'ticker';
        const messageHash = name + '_' + market['id'];
        client.resolve (ticker, messageHash);
    }

    async watchOrderBook (symbol, limit = undefined, params = {}) {
        limit = (limit === undefined) ? 25 : limit; // 25 by default
        if ((limit !== 1) && (limit !== 25) && (limit !== 500)) {
            throw new BadRequest (this.id + ' watchOrderBook() limit argument must be undefined, 1, 25 or 100, default is 25');
        }
        await this.loadMarkets ();
        const negotiate = this.negotiate ();
        //
        //     1. Subscribe to the relevant socket streams
        //     2. Begin to queue up messages without processing them
        //     3. Call the equivalent v3 REST API and record both the results and the value of the returned Sequence header. Refer to the descriptions of individual streams to find the corresponding REST API. Note that you must call the REST API with the same parameters as you used to subscribed to the stream to get the right snapshot. For example, orderbook snapshots of different depths will have different sequence numbers.
        //     4. If the Sequence header is less than the sequence number of the first queued socket message received (unlikely), discard the results of step 3 and then repeat step 3 until this check passes.
        //     5. Discard all socket messages where the sequence number is less than or equal to the Sequence header retrieved from the REST call
        //     6. Apply the remaining socket messages in order on top of the results of the REST call. The objects received in the socket deltas have the same schemas as the objects returned by the REST API. Each socket delta is a snapshot of an object. The identity of the object is defined by a unique key made up of one or more fields in the message (see documentation of individual streams for details). To apply socket deltas to a local cache of data, simply replace the objects in the cache with those coming from the socket where the keys match.
        //     7. Continue to apply messages as they are received from the socket as long as sequence number on the stream is always increasing by 1 each message (Note: for private streams, the sequence number is scoped to a single account or subaccount).
        //     8. If a message is received that is not the next in order, return to step 2 in this process
        //
        const future = this.afterAsync (negotiate, this.subscribeToOrderBook, symbol, limit, params);
        return await this.after (future, this.limitOrderBook, symbol, limit, params);
    }

    async subscribeToOrderBook (negotiation, symbol, limit = undefined, params = {}) {
        await this.loadMarkets ();
        const market = this.market (symbol);
        const connectionToken = this.safeString (negotiation['response'], 'ConnectionToken');
        const query = this.extend (negotiation['request'], {
            'connectionToken': connectionToken,
            // 'tid': this.milliseconds () % 10,
        });
        const url = this.urls['api']['ws'] + '?' + this.urlencode (query);
        const requestId = this.milliseconds ().toString ();
        const name = 'orderbook';
        const messageHash = name + '_' + market['id'] + '_' + limit.toString ();
        const method = 'Subscribe';
        const hub = this.safeString (this.options, 'hub', 'c3');
        const subscriptions = [ messageHash ];
        const request = {
            'H': hub,
            'M': method,
            'A': [ subscriptions ], // arguments
            'I': requestId, // invocation request id
        };
        const subscription = {
            'id': requestId,
            'symbol': symbol,
            'messageHash': messageHash,
            'negotiation': negotiation,
            'method': this.handleSubscribeToOrderBook,
            'limit': limit,
            'params': params,
        };
        return await this.watch (url, messageHash, request, messageHash, subscription);
    }

    async fetchOrderBookSnapshot (client, message, subscription) {
        const symbol = this.safeString (subscription, 'symbol');
        const limit = this.safeInteger (subscription, 'limit');
        const messageHash = this.safeString (subscription, 'messageHash');
        try {
            // 2. Initiate a REST request to get the snapshot data of Level 2 order book.
            // todo: this is a synch blocking call in ccxt.php - make it async
            const snapshot = await this.fetchOrderBook (symbol, limit);
            const orderbook = this.orderbooks[symbol];
            const messages = orderbook.cache;
            // make sure we have at least one delta before fetching the snapshot
            // otherwise we cannot synchronize the feed with the snapshot
            // and that will lead to a bidask cross as reported here
            // https://github.com/ccxt/ccxt/issues/6762
            const firstMessage = this.safeValue (messages, 0, {});
            const data = this.safeValue (firstMessage, 'data', {});
            const sequenceStart = this.safeInteger (data, 'sequence');
            const nonce = this.safeInteger (snapshot, 'nonce');
            const previousSequence = sequenceStart - 1;
            // console.log (snapshot, nonce < previousSequence);
            // if the received snapshot is earlier than the first cached delta
            // then we cannot align it with the cached deltas and we need to
            // retry synchronizing in maxAttempts
            if (nonce < previousSequence) {
                const options = this.safeValue (this.options, 'fetchOrderBookSnapshot', {});
                const maxAttempts = this.safeInteger (options, 'maxAttempts', 3);
                let numAttempts = this.safeInteger (subscription, 'numAttempts', 0);
                // retry to syncrhonize if we haven't reached maxAttempts yet
                if (numAttempts < maxAttempts) {
                    // safety guard
                    if (messageHash in client.subscriptions) {
                        numAttempts = this.sum (numAttempts, 1);
                        subscription['numAttempts'] = numAttempts;
                        client.subscriptions[messageHash] = subscription;
                        this.spawn (this.fetchOrderBookSnapshot, client, message, subscription);
                    }
                } else {
                    // throw upon failing to synchronize in maxAttempts
                    throw new InvalidNonce (this.id + ' failed to synchronize WebSocket feed with the snapshot for symbol ' + symbol + ' in ' + maxAttempts.toString () + ' attempts');
                }
            } else {
                orderbook.reset (snapshot);
                // unroll the accumulated deltas
                // 3. Playback the cached Level 2 data flow.
                for (let i = 0; i < messages.length; i++) {
                    const message = messages[i];
                    this.handleOrderBookMessage (client, message, subscription, orderbook);
                }
                this.orderbooks[symbol] = orderbook;
                client.resolve (orderbook, messageHash);
            }
        } catch (e) {
            client.reject (e, messageHash);
        }
    }

    handleSubscribeToOrderBook (client, message, subscription) {
        const symbol = this.safeString (subscription, 'symbol');
        const limit = this.safeString (subscription, 'limit');
        if (symbol in this.orderbooks) {
            delete this.orderbooks[symbol];
        }
        this.orderbooks[symbol] = this.orderBook ({}, limit);
        this.spawn (this.fetchOrderBookSnapshot, client, message, subscription);
    }

    handleDelta (bookside, delta) {
        //
        //     {
        //         quantity: '0.05100000',
        //         rate: '10694.86410031'
        //     }
        //
        const price = this.safeFloat (delta, 'rate');
        const amount = this.safeFloat (delta, 'quantity');
        bookside.store (price, amount);
    }

    handleDeltas (bookside, deltas) {
        //
        //     [
        //         { quantity: '0.05100000', rate: '10694.86410031' },
        //         { quantity: '0', rate: '10665.72578226' }
        //     ]
        //
        for (let i = 0; i < deltas.length; i++) {
            this.handleDelta (bookside, deltas[i]);
        }
    }

    handleOrderBook (client, message, subscription) {
        //
        //     {
        //         marketSymbol: 'BTC-USDT',
        //         depth: 25,
        //         sequence: 3009387,
        //         bidDeltas: [
        //             { quantity: '0.05100000', rate: '10694.86410031' },
        //             { quantity: '0', rate: '10665.72578226' }
        //         ],
        //         askDeltas: []
        //     }
        //
        const marketId = this.safeString (message, 'marketSymbol');
        const symbol = this.safeSymbol (marketId, undefined, '-');
        const orderbook = this.safeValue (this.orderbooks, symbol);
        if (orderbook['nonce'] !== undefined) {
            this.handleOrderBookMessage (client, message, subscription, orderbook);
        } else {
            orderbook.cache.push (message);
        }
    }

    handleOrderBookMessage (client, message, subscription, orderbook) {
        //
        //     {
        //         marketSymbol: 'BTC-USDT',
        //         depth: 25,
        //         sequence: 3009387,
        //         bidDeltas: [
        //             { quantity: '0.05100000', rate: '10694.86410031' },
        //             { quantity: '0', rate: '10665.72578226' }
        //         ],
        //         askDeltas: []
        //     }
        //
        const messageHash = this.safeString (subscription, 'messageHash');
        const nonce = this.safeInteger (message, 'sequence');
        if (nonce > orderbook['nonce']) {
            this.handleDeltas (orderbook['asks'], this.safeValue (message, 'askDeltas', []));
            this.handleDeltas (orderbook['bids'], this.safeValue (message, 'bidDeltas', []));
            orderbook['nonce'] = nonce;
            client.resolve (orderbook, messageHash);
        }
        return orderbook;
    }

    handleSystemStatus (client, message) {
        // send signalR protocol start() call
        const negotiate = this.negotiate ();
        this.spawn (this.afterAsync, negotiate, this.start);
        return message;
    }

    handleSubscriptionStatus (client, message) {
        //
        // success
        //
        //     { R: [ { Success: true, ErrorCode: null } ], I: '1601891513224' }
        //
        // failure
        // todo add error handling and future rejections
        //
        //     {
        //         I: '1580494127086',
        //         E: "There was an error invoking Hub method 'c2.QuerySummaryState'."
        //     }
        //
        const I = this.safeString (message, 'I'); // noqa: E741
        let subscription = this.safeValue (client.subscriptions, I);
        if (subscription === undefined) {
            const subscriptionsById = this.indexBy (client.subscriptions, 'id');
            subscription = this.safeValue (subscriptionsById, I, {});
        } else {
            // clear if subscriptionHash === requestId (one-time request)
            delete client.subscriptions[I];
        }
        const method = this.safeValue (subscription, 'method');
        if (method === undefined) {
            client.resolve (message, I);
        } else {
            method.call (this, client, message, subscription);
        }
        return message;
    }

    handleMessage (client, message) {
        // console.dir (message, { depth: null });
        //
        // subscription confirmation
        //
        //     {
        //         R: [
        //             { Success: true, ErrorCode: null }
        //         ],
        //         I: '1601899375696'
        //     }
        //
        // heartbeat subscription update
        //
        //     {
        //         C: 'd-6010FB90-B,0|o_b,0|o_c,2|8,1F4E',
        //         M: [
        //             { H: 'C3', M: 'heartbeat', A: [] }
        //         ]
        //     }
        //
        // heartbeat empty message
        //
        //     {}
        //
        // ticker subscription update
        //
        //     {
        //         C: 'd-ED78B69D-E,0|rq4,0|rq5,2|puI,60C',
        //         M: [
        //             {
        //                 H: 'C3',
        //                 M: 'ticker',
        //                 A: [
        //                     'q1YqrsxNys9RslJyCnHWDQ12CVHSUcpJLC4JKUpMSQ1KLEkFShkamBsa6VkYm5paGJuZAhUkZaYgpAws9QwszAwsDY1MgFKJxdlIuiz0jM3MLIHATKkWAA=='
        //                 ]
        //             }
        //         ]
        //     }
        //
        // orderbook subscription update
        //
        //     {
        //         C: 'd-6089E69C-B,0|3tG,0|3tH,2|Cu,48D8A',
        //         M: [
        //             {
        //                 H: 'C3',
        //                 M: 'orderBook',
        //                 A: [
        //                 'fY/LDoIwFAX/5a5r09sXlqXyB+DKsCjSRMJDoWVBCP9u3RgTosuTzExyVujt1LqQL3316CCFU3E+XPKsAAK1e4Y7pFwR8G6c3XBzcRmlhZEEqqbOXBesh/S6wjjbITRhiQUW1cmGyAKyBA0VmDDGhISN/AMTypFHkPEdSJlGoxH1t6GNolxxg0eh94YUWr5jPwwFW0nA+vbzodxe'
        //                 ]
        //             }
        //         ]
        //     }
        //
        const methods = {
            // 'uE': this.handleExchangeDelta,
            // 'uO': this.handleOrderDelta,
            // 'uB': this.handleBalanceDelta,
            // 'uS': this.handleSummaryDelta,
            'orderBook': this.handleOrderBook,
            'heartbeat': this.handleHeartbeat,
            'ticker': this.handleTicker,
        };
        const M = this.safeValue (message, 'M', []);
        for (let i = 0; i < M.length; i++) {
            const methodType = this.safeValue (M[i], 'M');
            const method = this.safeValue (methods, methodType);
            if (method !== undefined) {
                if (methodType === 'heartbeat') {
                    method.call (this, client, message);
                } else {
                    const A = this.safeValue (M[i], 'A', []);
                    for (let k = 0; k < A.length; k++) {
                        const inflated = this.inflate64 (A[k]);
                        const update = JSON.parse (inflated);
                        method.call (this, client, update);
                    }
                }
            }
        }
        // resolve invocations by request id
        if ('I' in message) {
            this.handleSubscriptionStatus (client, message);
        }
        if ('S' in message) {
            this.handleSystemStatus (client, message);
        }
        const keys = Object.keys (message);
        const numKeys = keys.length;
        if (numKeys < 1) {
            this.handleHeartbeat (client, message);
        }
    }
};
