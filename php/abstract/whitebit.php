<?php

namespace ccxt\abstract;

// PLEASE DO NOT EDIT THIS FILE, IT IS GENERATED AND WILL BE OVERWRITTEN:
// https://github.com/ccxt/ccxt/blob/master/CONTRIBUTING.md#how-to-contribute-code


abstract class whitebit extends \ccxt\Exchange {
    public function web_get_v1_healthcheck($params = array()) {
        return $this->request('v1/healthcheck', 'web', 'GET', $params);
    }
    public function v1_public_get_markets($params = array()) {
        return $this->request('markets', 'array(v1,public)', 'GET', $params);
    }
    public function v1_public_get_tickers($params = array()) {
        return $this->request('tickers', 'array(v1,public)', 'GET', $params);
    }
    public function v1_public_get_ticker($params = array()) {
        return $this->request('ticker', 'array(v1,public)', 'GET', $params);
    }
    public function v1_public_get_symbols($params = array()) {
        return $this->request('symbols', 'array(v1,public)', 'GET', $params);
    }
    public function v1_public_get_depth_result($params = array()) {
        return $this->request('depth/result', 'array(v1,public)', 'GET', $params);
    }
    public function v1_public_get_history($params = array()) {
        return $this->request('history', 'array(v1,public)', 'GET', $params);
    }
    public function v1_public_get_kline($params = array()) {
        return $this->request('kline', 'array(v1,public)', 'GET', $params);
    }
    public function v1_private_post_account_balance($params = array()) {
        return $this->request('account/balance', 'array(v1,private)', 'POST', $params);
    }
    public function v1_private_post_order_new($params = array()) {
        return $this->request('order/new', 'array(v1,private)', 'POST', $params);
    }
    public function v1_private_post_order_cancel($params = array()) {
        return $this->request('order/cancel', 'array(v1,private)', 'POST', $params);
    }
    public function v1_private_post_orders($params = array()) {
        return $this->request('orders', 'array(v1,private)', 'POST', $params);
    }
    public function v1_private_post_account_order_history($params = array()) {
        return $this->request('account/order_history', 'array(v1,private)', 'POST', $params);
    }
    public function v1_private_post_account_executed_history($params = array()) {
        return $this->request('account/executed_history', 'array(v1,private)', 'POST', $params);
    }
    public function v1_private_post_account_executed_history_all($params = array()) {
        return $this->request('account/executed_history/all', 'array(v1,private)', 'POST', $params);
    }
    public function v1_private_post_account_order($params = array()) {
        return $this->request('account/order', 'array(v1,private)', 'POST', $params);
    }
    public function v2_public_get_markets($params = array()) {
        return $this->request('markets', 'array(v2,public)', 'GET', $params);
    }
    public function v2_public_get_ticker($params = array()) {
        return $this->request('ticker', 'array(v2,public)', 'GET', $params);
    }
    public function v2_public_get_assets($params = array()) {
        return $this->request('assets', 'array(v2,public)', 'GET', $params);
    }
    public function v2_public_get_fee($params = array()) {
        return $this->request('fee', 'array(v2,public)', 'GET', $params);
    }
    public function v2_public_get_depth_market($params = array()) {
        return $this->request('depth/{market}', 'array(v2,public)', 'GET', $params);
    }
    public function v2_public_get_trades_market($params = array()) {
        return $this->request('trades/{market}', 'array(v2,public)', 'GET', $params);
    }
    public function v4_public_get_assets($params = array()) {
        return $this->request('assets', 'array(v4,public)', 'GET', $params);
    }
    public function v4_public_get_collateral_markets($params = array()) {
        return $this->request('collateral/markets', 'array(v4,public)', 'GET', $params);
    }
    public function v4_public_get_fee($params = array()) {
        return $this->request('fee', 'array(v4,public)', 'GET', $params);
    }
    public function v4_public_get_orderbook_market($params = array()) {
        return $this->request('orderbook/{market}', 'array(v4,public)', 'GET', $params);
    }
    public function v4_public_get_ticker($params = array()) {
        return $this->request('ticker', 'array(v4,public)', 'GET', $params);
    }
    public function v4_public_get_trades_market($params = array()) {
        return $this->request('trades/{market}', 'array(v4,public)', 'GET', $params);
    }
    public function v4_public_get_time($params = array()) {
        return $this->request('time', 'array(v4,public)', 'GET', $params);
    }
    public function v4_public_get_ping($params = array()) {
        return $this->request('ping', 'array(v4,public)', 'GET', $params);
    }
    public function v4_public_get_markets($params = array()) {
        return $this->request('markets', 'array(v4,public)', 'GET', $params);
    }
    public function v4_private_post_collateral_account_balance($params = array()) {
        return $this->request('collateral-account/balance', 'array(v4,private)', 'POST', $params);
    }
    public function v4_private_post_collateral_account_positions_history($params = array()) {
        return $this->request('collateral-account/positions/history', 'array(v4,private)', 'POST', $params);
    }
    public function v4_private_post_collateral_account_leverage($params = array()) {
        return $this->request('collateral-account/leverage', 'array(v4,private)', 'POST', $params);
    }
    public function v4_private_post_collateral_account_positions_open($params = array()) {
        return $this->request('collateral-account/positions/open', 'array(v4,private)', 'POST', $params);
    }
    public function v4_private_post_collateral_account_summary($params = array()) {
        return $this->request('collateral-account/summary', 'array(v4,private)', 'POST', $params);
    }
    public function v4_private_post_main_account_address($params = array()) {
        return $this->request('main-account/address', 'array(v4,private)', 'POST', $params);
    }
    public function v4_private_post_main_account_balance($params = array()) {
        return $this->request('main-account/balance', 'array(v4,private)', 'POST', $params);
    }
    public function v4_private_post_main_account_create_new_address($params = array()) {
        return $this->request('main-account/create-new-address', 'array(v4,private)', 'POST', $params);
    }
    public function v4_private_post_main_account_codes($params = array()) {
        return $this->request('main-account/codes', 'array(v4,private)', 'POST', $params);
    }
    public function v4_private_post_main_account_codes_apply($params = array()) {
        return $this->request('main-account/codes/apply', 'array(v4,private)', 'POST', $params);
    }
    public function v4_private_post_main_account_codes_my($params = array()) {
        return $this->request('main-account/codes/my', 'array(v4,private)', 'POST', $params);
    }
    public function v4_private_post_main_account_codes_history($params = array()) {
        return $this->request('main-account/codes/history', 'array(v4,private)', 'POST', $params);
    }
    public function v4_private_post_main_account_fiat_deposit_url($params = array()) {
        return $this->request('main-account/fiat-deposit-url', 'array(v4,private)', 'POST', $params);
    }
    public function v4_private_post_main_account_history($params = array()) {
        return $this->request('main-account/history', 'array(v4,private)', 'POST', $params);
    }
    public function v4_private_post_main_account_withdraw($params = array()) {
        return $this->request('main-account/withdraw', 'array(v4,private)', 'POST', $params);
    }
    public function v4_private_post_main_account_withdraw_pay($params = array()) {
        return $this->request('main-account/withdraw-pay', 'array(v4,private)', 'POST', $params);
    }
    public function v4_private_post_main_account_transfer($params = array()) {
        return $this->request('main-account/transfer', 'array(v4,private)', 'POST', $params);
    }
    public function v4_private_post_trade_account_balance($params = array()) {
        return $this->request('trade-account/balance', 'array(v4,private)', 'POST', $params);
    }
    public function v4_private_post_trade_account_executed_history($params = array()) {
        return $this->request('trade-account/executed-history', 'array(v4,private)', 'POST', $params);
    }
    public function v4_private_post_trade_account_order($params = array()) {
        return $this->request('trade-account/order', 'array(v4,private)', 'POST', $params);
    }
    public function v4_private_post_trade_account_order_history($params = array()) {
        return $this->request('trade-account/order/history', 'array(v4,private)', 'POST', $params);
    }
    public function v4_private_post_order_collateral_limit($params = array()) {
        return $this->request('order/collateral/limit', 'array(v4,private)', 'POST', $params);
    }
    public function v4_private_post_order_collateral_market($params = array()) {
        return $this->request('order/collateral/market', 'array(v4,private)', 'POST', $params);
    }
    public function v4_private_post_order_collateral_trigger_market($params = array()) {
        return $this->request('order/collateral/trigger_market', 'array(v4,private)', 'POST', $params);
    }
    public function v4_private_post_order_new($params = array()) {
        return $this->request('order/new', 'array(v4,private)', 'POST', $params);
    }
    public function v4_private_post_order_market($params = array()) {
        return $this->request('order/market', 'array(v4,private)', 'POST', $params);
    }
    public function v4_private_post_order_stock_market($params = array()) {
        return $this->request('order/stock_market', 'array(v4,private)', 'POST', $params);
    }
    public function v4_private_post_order_stop_limit($params = array()) {
        return $this->request('order/stop_limit', 'array(v4,private)', 'POST', $params);
    }
    public function v4_private_post_order_stop_market($params = array()) {
        return $this->request('order/stop_market', 'array(v4,private)', 'POST', $params);
    }
    public function v4_private_post_order_cancel($params = array()) {
        return $this->request('order/cancel', 'array(v4,private)', 'POST', $params);
    }
    public function v4_private_post_orders($params = array()) {
        return $this->request('orders', 'array(v4,private)', 'POST', $params);
    }
    public function v4_private_post_profile_websocket_token($params = array()) {
        return $this->request('profile/websocket_token', 'array(v4,private)', 'POST', $params);
    }
}