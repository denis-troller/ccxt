<?php

namespace ccxt\abstract;

// PLEASE DO NOT EDIT THIS FILE, IT IS GENERATED AND WILL BE OVERWRITTEN:
// https://github.com/ccxt/ccxt/blob/master/CONTRIBUTING.md#how-to-contribute-code


abstract class itbit extends \ccxt\Exchange {
    public function public_get_markets_symbol_ticker($params = array()) {
        return $this->request('markets/{symbol}/ticker', 'public', 'GET', $params);
    }
    public function public_get_markets_symbol_order_book($params = array()) {
        return $this->request('markets/{symbol}/order_book', 'public', 'GET', $params);
    }
    public function public_get_markets_symbol_trades($params = array()) {
        return $this->request('markets/{symbol}/trades', 'public', 'GET', $params);
    }
    public function private_get_wallets($params = array()) {
        return $this->request('wallets', 'private', 'GET', $params);
    }
    public function private_get_wallets_walletid($params = array()) {
        return $this->request('wallets/{walletId}', 'private', 'GET', $params);
    }
    public function private_get_wallets_walletid_balances_currencycode($params = array()) {
        return $this->request('wallets/{walletId}/balances/{currencyCode}', 'private', 'GET', $params);
    }
    public function private_get_wallets_walletid_funding_history($params = array()) {
        return $this->request('wallets/{walletId}/funding_history', 'private', 'GET', $params);
    }
    public function private_get_wallets_walletid_trades($params = array()) {
        return $this->request('wallets/{walletId}/trades', 'private', 'GET', $params);
    }
    public function private_get_wallets_walletid_orders($params = array()) {
        return $this->request('wallets/{walletId}/orders', 'private', 'GET', $params);
    }
    public function private_get_wallets_walletid_orders_id($params = array()) {
        return $this->request('wallets/{walletId}/orders/{id}', 'private', 'GET', $params);
    }
    public function private_post_wallet_transfers($params = array()) {
        return $this->request('wallet_transfers', 'private', 'POST', $params);
    }
    public function private_post_wallets($params = array()) {
        return $this->request('wallets', 'private', 'POST', $params);
    }
    public function private_post_wallets_walletid_cryptocurrency_deposits($params = array()) {
        return $this->request('wallets/{walletId}/cryptocurrency_deposits', 'private', 'POST', $params);
    }
    public function private_post_wallets_walletid_cryptocurrency_withdrawals($params = array()) {
        return $this->request('wallets/{walletId}/cryptocurrency_withdrawals', 'private', 'POST', $params);
    }
    public function private_post_wallets_walletid_orders($params = array()) {
        return $this->request('wallets/{walletId}/orders', 'private', 'POST', $params);
    }
    public function private_post_wire_withdrawal($params = array()) {
        return $this->request('wire_withdrawal', 'private', 'POST', $params);
    }
    public function private_delete_wallets_walletid_orders_id($params = array()) {
        return $this->request('wallets/{walletId}/orders/{id}', 'private', 'DELETE', $params);
    }
}