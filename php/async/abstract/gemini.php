<?php

namespace ccxt\async\abstract;

// PLEASE DO NOT EDIT THIS FILE, IT IS GENERATED AND WILL BE OVERWRITTEN:
// https://github.com/ccxt/ccxt/blob/master/CONTRIBUTING.md#how-to-contribute-code


abstract class gemini extends \ccxt\async\Exchange {
    public function web_get_rest_api($params = array()) {
        return $this->request('rest-api', 'web', 'GET', $params);
    }
    public function public_get_v1_symbols($params = array()) {
        return $this->request('v1/symbols', 'public', 'GET', $params);
    }
    public function public_get_v1_symbols_details_symbol($params = array()) {
        return $this->request('v1/symbols/details/{symbol}', 'public', 'GET', $params);
    }
    public function public_get_v1_staking_rates($params = array()) {
        return $this->request('v1/staking/rates', 'public', 'GET', $params);
    }
    public function public_get_v1_pubticker_symbol($params = array()) {
        return $this->request('v1/pubticker/{symbol}', 'public', 'GET', $params);
    }
    public function public_get_v2_ticker_symbol($params = array()) {
        return $this->request('v2/ticker/{symbol}', 'public', 'GET', $params);
    }
    public function public_get_v2_candles_symbol_timeframe($params = array()) {
        return $this->request('v2/candles/{symbol}/{timeframe}', 'public', 'GET', $params);
    }
    public function public_get_v1_trades_symbol($params = array()) {
        return $this->request('v1/trades/{symbol}', 'public', 'GET', $params);
    }
    public function public_get_v1_auction_symbol($params = array()) {
        return $this->request('v1/auction/{symbol}', 'public', 'GET', $params);
    }
    public function public_get_v1_auction_symbol_history($params = array()) {
        return $this->request('v1/auction/{symbol}/history', 'public', 'GET', $params);
    }
    public function public_get_v1_pricefeed($params = array()) {
        return $this->request('v1/pricefeed', 'public', 'GET', $params);
    }
    public function public_get_v1_book_symbol($params = array()) {
        return $this->request('v1/book/{symbol}', 'public', 'GET', $params);
    }
    public function public_get_v1_earn_rates($params = array()) {
        return $this->request('v1/earn/rates', 'public', 'GET', $params);
    }
    public function private_post_v1_staking_unstake($params = array()) {
        return $this->request('v1/staking/unstake', 'private', 'POST', $params);
    }
    public function private_post_v1_staking_stake($params = array()) {
        return $this->request('v1/staking/stake', 'private', 'POST', $params);
    }
    public function private_post_v1_staking_rewards($params = array()) {
        return $this->request('v1/staking/rewards', 'private', 'POST', $params);
    }
    public function private_post_v1_staking_history($params = array()) {
        return $this->request('v1/staking/history', 'private', 'POST', $params);
    }
    public function private_post_v1_order_new($params = array()) {
        return $this->request('v1/order/new', 'private', 'POST', $params);
    }
    public function private_post_v1_order_cancel($params = array()) {
        return $this->request('v1/order/cancel', 'private', 'POST', $params);
    }
    public function private_post_v1_wrap_symbol($params = array()) {
        return $this->request('v1/wrap/{symbol}', 'private', 'POST', $params);
    }
    public function private_post_v1_order_cancel_session($params = array()) {
        return $this->request('v1/order/cancel/session', 'private', 'POST', $params);
    }
    public function private_post_v1_order_cancel_all($params = array()) {
        return $this->request('v1/order/cancel/all', 'private', 'POST', $params);
    }
    public function private_post_v1_order_status($params = array()) {
        return $this->request('v1/order/status', 'private', 'POST', $params);
    }
    public function private_post_v1_orders($params = array()) {
        return $this->request('v1/orders', 'private', 'POST', $params);
    }
    public function private_post_v1_mytrades($params = array()) {
        return $this->request('v1/mytrades', 'private', 'POST', $params);
    }
    public function private_post_v1_notionalvolume($params = array()) {
        return $this->request('v1/notionalvolume', 'private', 'POST', $params);
    }
    public function private_post_v1_tradevolume($params = array()) {
        return $this->request('v1/tradevolume', 'private', 'POST', $params);
    }
    public function private_post_v1_clearing_new($params = array()) {
        return $this->request('v1/clearing/new', 'private', 'POST', $params);
    }
    public function private_post_v1_clearing_status($params = array()) {
        return $this->request('v1/clearing/status', 'private', 'POST', $params);
    }
    public function private_post_v1_clearing_cancel($params = array()) {
        return $this->request('v1/clearing/cancel', 'private', 'POST', $params);
    }
    public function private_post_v1_clearing_confirm($params = array()) {
        return $this->request('v1/clearing/confirm', 'private', 'POST', $params);
    }
    public function private_post_v1_balances($params = array()) {
        return $this->request('v1/balances', 'private', 'POST', $params);
    }
    public function private_post_v1_balances_staking($params = array()) {
        return $this->request('v1/balances/staking', 'private', 'POST', $params);
    }
    public function private_post_v1_notionalbalances_currency($params = array()) {
        return $this->request('v1/notionalbalances/{currency}', 'private', 'POST', $params);
    }
    public function private_post_v1_transfers($params = array()) {
        return $this->request('v1/transfers', 'private', 'POST', $params);
    }
    public function private_post_v1_addresses_network($params = array()) {
        return $this->request('v1/addresses/{network}', 'private', 'POST', $params);
    }
    public function private_post_v1_deposit_network_newaddress($params = array()) {
        return $this->request('v1/deposit/{network}/newAddress', 'private', 'POST', $params);
    }
    public function private_post_v1_deposit_currency_newaddress($params = array()) {
        return $this->request('v1/deposit/{currency}/newAddress', 'private', 'POST', $params);
    }
    public function private_post_v1_withdraw_currency($params = array()) {
        return $this->request('v1/withdraw/{currency}', 'private', 'POST', $params);
    }
    public function private_post_v1_account_transfer_currency($params = array()) {
        return $this->request('v1/account/transfer/{currency}', 'private', 'POST', $params);
    }
    public function private_post_v1_payments_addbank($params = array()) {
        return $this->request('v1/payments/addbank', 'private', 'POST', $params);
    }
    public function private_post_v1_payments_methods($params = array()) {
        return $this->request('v1/payments/methods', 'private', 'POST', $params);
    }
    public function private_post_v1_payments_sen_withdraw($params = array()) {
        return $this->request('v1/payments/sen/withdraw', 'private', 'POST', $params);
    }
    public function private_post_v1_balances_earn($params = array()) {
        return $this->request('v1/balances/earn', 'private', 'POST', $params);
    }
    public function private_post_v1_earn_interest($params = array()) {
        return $this->request('v1/earn/interest', 'private', 'POST', $params);
    }
    public function private_post_v1_earn_history($params = array()) {
        return $this->request('v1/earn/history', 'private', 'POST', $params);
    }
    public function private_post_v1_approvedaddresses_network_request($params = array()) {
        return $this->request('v1/approvedAddresses/{network}/request', 'private', 'POST', $params);
    }
    public function private_post_v1_approvedaddresses_account_network($params = array()) {
        return $this->request('v1/approvedAddresses/account/{network}', 'private', 'POST', $params);
    }
    public function private_post_v1_approvedaddresses_network_remove($params = array()) {
        return $this->request('v1/approvedAddresses/{network}/remove', 'private', 'POST', $params);
    }
    public function private_post_v1_account($params = array()) {
        return $this->request('v1/account', 'private', 'POST', $params);
    }
    public function private_post_v1_account_create($params = array()) {
        return $this->request('v1/account/create', 'private', 'POST', $params);
    }
    public function private_post_v1_account_list($params = array()) {
        return $this->request('v1/account/list', 'private', 'POST', $params);
    }
    public function private_post_v1_heartbeat($params = array()) {
        return $this->request('v1/heartbeat', 'private', 'POST', $params);
    }
}