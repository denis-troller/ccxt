<?php

namespace ccxt\abstract;

// PLEASE DO NOT EDIT THIS FILE, IT IS GENERATED AND WILL BE OVERWRITTEN:
// https://github.com/ccxt/ccxt/blob/master/CONTRIBUTING.md#how-to-contribute-code


abstract class ace extends \ccxt\Exchange {
    public function public_get_oapi_v2_list_tradeprice($params = array()) {
        return $this->request('oapi/v2/list/tradePrice', 'public', 'GET', $params);
    }
    public function public_get_oapi_v2_list_marketpair($params = array()) {
        return $this->request('oapi/v2/list/marketPair', 'public', 'GET', $params);
    }
    public function public_get_open_v2_public_getorderbook($params = array()) {
        return $this->request('open/v2/public/getOrderBook', 'public', 'GET', $params);
    }
    public function private_post_v2_coin_customeraccount($params = array()) {
        return $this->request('v2/coin/customerAccount', 'private', 'POST', $params);
    }
    public function private_post_v2_kline_getkline($params = array()) {
        return $this->request('v2/kline/getKline', 'private', 'POST', $params);
    }
    public function private_post_v2_order_order($params = array()) {
        return $this->request('v2/order/order', 'private', 'POST', $params);
    }
    public function private_post_v2_order_cancel($params = array()) {
        return $this->request('v2/order/cancel', 'private', 'POST', $params);
    }
    public function private_post_v2_order_getorderlist($params = array()) {
        return $this->request('v2/order/getOrderList', 'private', 'POST', $params);
    }
    public function private_post_v2_order_showorderstatus($params = array()) {
        return $this->request('v2/order/showOrderStatus', 'private', 'POST', $params);
    }
    public function private_post_v2_order_showorderhistory($params = array()) {
        return $this->request('v2/order/showOrderHistory', 'private', 'POST', $params);
    }
    public function private_post_v2_order_gettradelist($params = array()) {
        return $this->request('v2/order/getTradeList', 'private', 'POST', $params);
    }
}