<?php

namespace ccxt\async\abstract;

// PLEASE DO NOT EDIT THIS FILE, IT IS GENERATED AND WILL BE OVERWRITTEN:
// https://github.com/ccxt/ccxt/blob/master/CONTRIBUTING.md#how-to-contribute-code


abstract class mexc3 extends \ccxt\async\mexc {
    public function spot_public_get_ping($params = array()) {
        return $this->request('ping', 'array(spot,public)', 'GET', $params);
    }
    public function spot_public_get_time($params = array()) {
        return $this->request('time', 'array(spot,public)', 'GET', $params);
    }
    public function spot_public_get_exchangeinfo($params = array()) {
        return $this->request('exchangeInfo', 'array(spot,public)', 'GET', $params);
    }
    public function spot_public_get_depth($params = array()) {
        return $this->request('depth', 'array(spot,public)', 'GET', $params);
    }
    public function spot_public_get_trades($params = array()) {
        return $this->request('trades', 'array(spot,public)', 'GET', $params);
    }
    public function spot_public_get_historicaltrades($params = array()) {
        return $this->request('historicalTrades', 'array(spot,public)', 'GET', $params);
    }
    public function spot_public_get_aggtrades($params = array()) {
        return $this->request('aggTrades', 'array(spot,public)', 'GET', $params);
    }
    public function spot_public_get_klines($params = array()) {
        return $this->request('klines', 'array(spot,public)', 'GET', $params);
    }
    public function spot_public_get_avgprice($params = array()) {
        return $this->request('avgPrice', 'array(spot,public)', 'GET', $params);
    }
    public function spot_public_get_ticker_24hr($params = array()) {
        return $this->request('ticker/24hr', 'array(spot,public)', 'GET', $params);
    }
    public function spot_public_get_ticker_price($params = array()) {
        return $this->request('ticker/price', 'array(spot,public)', 'GET', $params);
    }
    public function spot_public_get_ticker_bookticker($params = array()) {
        return $this->request('ticker/bookTicker', 'array(spot,public)', 'GET', $params);
    }
    public function spot_public_get_etf_info($params = array()) {
        return $this->request('etf/info', 'array(spot,public)', 'GET', $params);
    }
    public function spot_private_get_order($params = array()) {
        return $this->request('order', 'array(spot,private)', 'GET', $params);
    }
    public function spot_private_get_openorders($params = array()) {
        return $this->request('openOrders', 'array(spot,private)', 'GET', $params);
    }
    public function spot_private_get_allorders($params = array()) {
        return $this->request('allOrders', 'array(spot,private)', 'GET', $params);
    }
    public function spot_private_get_account($params = array()) {
        return $this->request('account', 'array(spot,private)', 'GET', $params);
    }
    public function spot_private_get_mytrades($params = array()) {
        return $this->request('myTrades', 'array(spot,private)', 'GET', $params);
    }
    public function spot_private_get_sub_account_list($params = array()) {
        return $this->request('sub-account/list', 'array(spot,private)', 'GET', $params);
    }
    public function spot_private_get_sub_account_apikey($params = array()) {
        return $this->request('sub-account/apiKey', 'array(spot,private)', 'GET', $params);
    }
    public function spot_private_get_capital_config_getall($params = array()) {
        return $this->request('capital/config/getall', 'array(spot,private)', 'GET', $params);
    }
    public function spot_private_get_capital_deposit_hisrec($params = array()) {
        return $this->request('capital/deposit/hisrec', 'array(spot,private)', 'GET', $params);
    }
    public function spot_private_get_capital_withdraw_history($params = array()) {
        return $this->request('capital/withdraw/history', 'array(spot,private)', 'GET', $params);
    }
    public function spot_private_get_capital_deposit_address($params = array()) {
        return $this->request('capital/deposit/address', 'array(spot,private)', 'GET', $params);
    }
    public function spot_private_get_capital_transfer($params = array()) {
        return $this->request('capital/transfer', 'array(spot,private)', 'GET', $params);
    }
    public function spot_private_get_capital_sub_account_universaltransfer($params = array()) {
        return $this->request('capital/sub-account/universalTransfer', 'array(spot,private)', 'GET', $params);
    }
    public function spot_private_get_capital_convert($params = array()) {
        return $this->request('capital/convert', 'array(spot,private)', 'GET', $params);
    }
    public function spot_private_get_capital_convert_list($params = array()) {
        return $this->request('capital/convert/list', 'array(spot,private)', 'GET', $params);
    }
    public function spot_private_get_margin_loan($params = array()) {
        return $this->request('margin/loan', 'array(spot,private)', 'GET', $params);
    }
    public function spot_private_get_margin_allorders($params = array()) {
        return $this->request('margin/allOrders', 'array(spot,private)', 'GET', $params);
    }
    public function spot_private_get_margin_mytrades($params = array()) {
        return $this->request('margin/myTrades', 'array(spot,private)', 'GET', $params);
    }
    public function spot_private_get_margin_openorders($params = array()) {
        return $this->request('margin/openOrders', 'array(spot,private)', 'GET', $params);
    }
    public function spot_private_get_margin_maxtransferable($params = array()) {
        return $this->request('margin/maxTransferable', 'array(spot,private)', 'GET', $params);
    }
    public function spot_private_get_margin_priceindex($params = array()) {
        return $this->request('margin/priceIndex', 'array(spot,private)', 'GET', $params);
    }
    public function spot_private_get_margin_order($params = array()) {
        return $this->request('margin/order', 'array(spot,private)', 'GET', $params);
    }
    public function spot_private_get_margin_isolated_account($params = array()) {
        return $this->request('margin/isolated/account', 'array(spot,private)', 'GET', $params);
    }
    public function spot_private_get_margin_maxborrowable($params = array()) {
        return $this->request('margin/maxBorrowable', 'array(spot,private)', 'GET', $params);
    }
    public function spot_private_get_margin_repay($params = array()) {
        return $this->request('margin/repay', 'array(spot,private)', 'GET', $params);
    }
    public function spot_private_get_margin_isolated_pair($params = array()) {
        return $this->request('margin/isolated/pair', 'array(spot,private)', 'GET', $params);
    }
    public function spot_private_get_margin_forceliquidationrec($params = array()) {
        return $this->request('margin/forceLiquidationRec', 'array(spot,private)', 'GET', $params);
    }
    public function spot_private_get_margin_isolatedmargindata($params = array()) {
        return $this->request('margin/isolatedMarginData', 'array(spot,private)', 'GET', $params);
    }
    public function spot_private_get_margin_isolatedmargintier($params = array()) {
        return $this->request('margin/isolatedMarginTier', 'array(spot,private)', 'GET', $params);
    }
    public function spot_private_get_rebate_taxquery($params = array()) {
        return $this->request('rebate/taxQuery', 'array(spot,private)', 'GET', $params);
    }
    public function spot_private_get_rebate_detail($params = array()) {
        return $this->request('rebate/detail', 'array(spot,private)', 'GET', $params);
    }
    public function spot_private_get_rebate_detail_kickback($params = array()) {
        return $this->request('rebate/detail/kickback', 'array(spot,private)', 'GET', $params);
    }
    public function spot_private_get_rebate_refercode($params = array()) {
        return $this->request('rebate/referCode', 'array(spot,private)', 'GET', $params);
    }
    public function spot_private_get_mxdeduct_enable($params = array()) {
        return $this->request('mxDeduct/enable', 'array(spot,private)', 'GET', $params);
    }
    public function spot_private_get_userdatastream($params = array()) {
        return $this->request('userDataStream', 'array(spot,private)', 'GET', $params);
    }
    public function spot_private_post_order($params = array()) {
        return $this->request('order', 'array(spot,private)', 'POST', $params);
    }
    public function spot_private_post_order_test($params = array()) {
        return $this->request('order/test', 'array(spot,private)', 'POST', $params);
    }
    public function spot_private_post_sub_account_virtualsubaccount($params = array()) {
        return $this->request('sub-account/virtualSubAccount', 'array(spot,private)', 'POST', $params);
    }
    public function spot_private_post_sub_account_apikey($params = array()) {
        return $this->request('sub-account/apiKey', 'array(spot,private)', 'POST', $params);
    }
    public function spot_private_post_sub_account_futures($params = array()) {
        return $this->request('sub-account/futures', 'array(spot,private)', 'POST', $params);
    }
    public function spot_private_post_sub_account_margin($params = array()) {
        return $this->request('sub-account/margin', 'array(spot,private)', 'POST', $params);
    }
    public function spot_private_post_batchorders($params = array()) {
        return $this->request('batchOrders', 'array(spot,private)', 'POST', $params);
    }
    public function spot_private_post_capital_withdraw_apply($params = array()) {
        return $this->request('capital/withdraw/apply', 'array(spot,private)', 'POST', $params);
    }
    public function spot_private_post_capital_transfer($params = array()) {
        return $this->request('capital/transfer', 'array(spot,private)', 'POST', $params);
    }
    public function spot_private_post_capital_deposit_address($params = array()) {
        return $this->request('capital/deposit/address', 'array(spot,private)', 'POST', $params);
    }
    public function spot_private_post_capital_sub_account_universaltransfer($params = array()) {
        return $this->request('capital/sub-account/universalTransfer', 'array(spot,private)', 'POST', $params);
    }
    public function spot_private_post_capital_convert($params = array()) {
        return $this->request('capital/convert', 'array(spot,private)', 'POST', $params);
    }
    public function spot_private_post_margin_trademode($params = array()) {
        return $this->request('margin/tradeMode', 'array(spot,private)', 'POST', $params);
    }
    public function spot_private_post_margin_order($params = array()) {
        return $this->request('margin/order', 'array(spot,private)', 'POST', $params);
    }
    public function spot_private_post_margin_loan($params = array()) {
        return $this->request('margin/loan', 'array(spot,private)', 'POST', $params);
    }
    public function spot_private_post_margin_repay($params = array()) {
        return $this->request('margin/repay', 'array(spot,private)', 'POST', $params);
    }
    public function spot_private_post_mxdeduct_enable($params = array()) {
        return $this->request('mxDeduct/enable', 'array(spot,private)', 'POST', $params);
    }
    public function spot_private_post_userdatastream($params = array()) {
        return $this->request('userDataStream', 'array(spot,private)', 'POST', $params);
    }
    public function spot_private_put_userdatastream($params = array()) {
        return $this->request('userDataStream', 'array(spot,private)', 'PUT', $params);
    }
    public function spot_private_delete_order($params = array()) {
        return $this->request('order', 'array(spot,private)', 'DELETE', $params);
    }
    public function spot_private_delete_openorders($params = array()) {
        return $this->request('openOrders', 'array(spot,private)', 'DELETE', $params);
    }
    public function spot_private_delete_sub_account_apikey($params = array()) {
        return $this->request('sub-account/apiKey', 'array(spot,private)', 'DELETE', $params);
    }
    public function spot_private_delete_margin_order($params = array()) {
        return $this->request('margin/order', 'array(spot,private)', 'DELETE', $params);
    }
    public function spot_private_delete_margin_openorders($params = array()) {
        return $this->request('margin/openOrders', 'array(spot,private)', 'DELETE', $params);
    }
    public function spot_private_delete_userdatastream($params = array()) {
        return $this->request('userDataStream', 'array(spot,private)', 'DELETE', $params);
    }
    public function contract_public_get_ping($params = array()) {
        return $this->request('ping', 'array(contract,public)', 'GET', $params);
    }
    public function contract_public_get_detail($params = array()) {
        return $this->request('detail', 'array(contract,public)', 'GET', $params);
    }
    public function contract_public_get_support_currencies($params = array()) {
        return $this->request('support_currencies', 'array(contract,public)', 'GET', $params);
    }
    public function contract_public_get_depth_symbol($params = array()) {
        return $this->request('depth/{symbol}', 'array(contract,public)', 'GET', $params);
    }
    public function contract_public_get_depth_commits_symbol_limit($params = array()) {
        return $this->request('depth_commits/{symbol}/{limit}', 'array(contract,public)', 'GET', $params);
    }
    public function contract_public_get_index_price_symbol($params = array()) {
        return $this->request('index_price/{symbol}', 'array(contract,public)', 'GET', $params);
    }
    public function contract_public_get_fair_price_symbol($params = array()) {
        return $this->request('fair_price/{symbol}', 'array(contract,public)', 'GET', $params);
    }
    public function contract_public_get_funding_rate_symbol($params = array()) {
        return $this->request('funding_rate/{symbol}', 'array(contract,public)', 'GET', $params);
    }
    public function contract_public_get_kline_symbol($params = array()) {
        return $this->request('kline/{symbol}', 'array(contract,public)', 'GET', $params);
    }
    public function contract_public_get_kline_index_price_symbol($params = array()) {
        return $this->request('kline/index_price/{symbol}', 'array(contract,public)', 'GET', $params);
    }
    public function contract_public_get_kline_fair_price_symbol($params = array()) {
        return $this->request('kline/fair_price/{symbol}', 'array(contract,public)', 'GET', $params);
    }
    public function contract_public_get_deals_symbol($params = array()) {
        return $this->request('deals/{symbol}', 'array(contract,public)', 'GET', $params);
    }
    public function contract_public_get_ticker($params = array()) {
        return $this->request('ticker', 'array(contract,public)', 'GET', $params);
    }
    public function contract_public_get_risk_reverse($params = array()) {
        return $this->request('risk_reverse', 'array(contract,public)', 'GET', $params);
    }
    public function contract_public_get_risk_reverse_history($params = array()) {
        return $this->request('risk_reverse/history', 'array(contract,public)', 'GET', $params);
    }
    public function contract_public_get_funding_rate_history($params = array()) {
        return $this->request('funding_rate/history', 'array(contract,public)', 'GET', $params);
    }
    public function contract_private_get_account_assets($params = array()) {
        return $this->request('account/assets', 'array(contract,private)', 'GET', $params);
    }
    public function contract_private_get_account_asset_currency($params = array()) {
        return $this->request('account/asset/{currency}', 'array(contract,private)', 'GET', $params);
    }
    public function contract_private_get_account_transfer_record($params = array()) {
        return $this->request('account/transfer_record', 'array(contract,private)', 'GET', $params);
    }
    public function contract_private_get_position_list_history_positions($params = array()) {
        return $this->request('position/list/history_positions', 'array(contract,private)', 'GET', $params);
    }
    public function contract_private_get_position_open_positions($params = array()) {
        return $this->request('position/open_positions', 'array(contract,private)', 'GET', $params);
    }
    public function contract_private_get_position_funding_records($params = array()) {
        return $this->request('position/funding_records', 'array(contract,private)', 'GET', $params);
    }
    public function contract_private_get_position_position_mode($params = array()) {
        return $this->request('position/position_mode', 'array(contract,private)', 'GET', $params);
    }
    public function contract_private_get_order_list_open_orders_symbol($params = array()) {
        return $this->request('order/list/open_orders/{symbol}', 'array(contract,private)', 'GET', $params);
    }
    public function contract_private_get_order_list_history_orders($params = array()) {
        return $this->request('order/list/history_orders', 'array(contract,private)', 'GET', $params);
    }
    public function contract_private_get_order_external_symbol_external_oid($params = array()) {
        return $this->request('order/external/{symbol}/{external_oid}', 'array(contract,private)', 'GET', $params);
    }
    public function contract_private_get_order_get_order_id($params = array()) {
        return $this->request('order/get/{order_id}', 'array(contract,private)', 'GET', $params);
    }
    public function contract_private_get_order_batch_query($params = array()) {
        return $this->request('order/batch_query', 'array(contract,private)', 'GET', $params);
    }
    public function contract_private_get_order_deal_details_order_id($params = array()) {
        return $this->request('order/deal_details/{order_id}', 'array(contract,private)', 'GET', $params);
    }
    public function contract_private_get_order_list_order_deals($params = array()) {
        return $this->request('order/list/order_deals', 'array(contract,private)', 'GET', $params);
    }
    public function contract_private_get_planorder_list_orders($params = array()) {
        return $this->request('planorder/list/orders', 'array(contract,private)', 'GET', $params);
    }
    public function contract_private_get_stoporder_list_orders($params = array()) {
        return $this->request('stoporder/list/orders', 'array(contract,private)', 'GET', $params);
    }
    public function contract_private_get_stoporder_order_details_stop_order_id($params = array()) {
        return $this->request('stoporder/order_details/{stop_order_id}', 'array(contract,private)', 'GET', $params);
    }
    public function contract_private_get_account_risk_limit($params = array()) {
        return $this->request('account/risk_limit', 'array(contract,private)', 'GET', $params);
    }
    public function contract_private_get_account_tiered_fee_rate($params = array()) {
        return $this->request('account/tiered_fee_rate', 'array(contract,private)', 'GET', $params);
    }
    public function contract_private_get_position_leverage($params = array()) {
        return $this->request('position/leverage', 'array(contract,private)', 'GET', $params);
    }
    public function contract_private_post_position_change_margin($params = array()) {
        return $this->request('position/change_margin', 'array(contract,private)', 'POST', $params);
    }
    public function contract_private_post_position_change_leverage($params = array()) {
        return $this->request('position/change_leverage', 'array(contract,private)', 'POST', $params);
    }
    public function contract_private_post_position_change_position_mode($params = array()) {
        return $this->request('position/change_position_mode', 'array(contract,private)', 'POST', $params);
    }
    public function contract_private_post_order_submit($params = array()) {
        return $this->request('order/submit', 'array(contract,private)', 'POST', $params);
    }
    public function contract_private_post_order_submit_batch($params = array()) {
        return $this->request('order/submit_batch', 'array(contract,private)', 'POST', $params);
    }
    public function contract_private_post_order_cancel($params = array()) {
        return $this->request('order/cancel', 'array(contract,private)', 'POST', $params);
    }
    public function contract_private_post_order_cancel_with_external($params = array()) {
        return $this->request('order/cancel_with_external', 'array(contract,private)', 'POST', $params);
    }
    public function contract_private_post_order_cancel_all($params = array()) {
        return $this->request('order/cancel_all', 'array(contract,private)', 'POST', $params);
    }
    public function contract_private_post_account_change_risk_level($params = array()) {
        return $this->request('account/change_risk_level', 'array(contract,private)', 'POST', $params);
    }
    public function contract_private_post_planorder_place($params = array()) {
        return $this->request('planorder/place', 'array(contract,private)', 'POST', $params);
    }
    public function contract_private_post_planorder_cancel($params = array()) {
        return $this->request('planorder/cancel', 'array(contract,private)', 'POST', $params);
    }
    public function contract_private_post_planorder_cancel_all($params = array()) {
        return $this->request('planorder/cancel_all', 'array(contract,private)', 'POST', $params);
    }
    public function contract_private_post_stoporder_cancel($params = array()) {
        return $this->request('stoporder/cancel', 'array(contract,private)', 'POST', $params);
    }
    public function contract_private_post_stoporder_cancel_all($params = array()) {
        return $this->request('stoporder/cancel_all', 'array(contract,private)', 'POST', $params);
    }
    public function contract_private_post_stoporder_change_price($params = array()) {
        return $this->request('stoporder/change_price', 'array(contract,private)', 'POST', $params);
    }
    public function contract_private_post_stoporder_change_plan_price($params = array()) {
        return $this->request('stoporder/change_plan_price', 'array(contract,private)', 'POST', $params);
    }
    public function spot2_public_get_market_symbols($params = array()) {
        return $this->request('market/symbols', 'array(spot2,public)', 'GET', $params);
    }
    public function spot2_public_get_market_coin_list($params = array()) {
        return $this->request('market/coin/list', 'array(spot2,public)', 'GET', $params);
    }
    public function spot2_public_get_common_timestamp($params = array()) {
        return $this->request('common/timestamp', 'array(spot2,public)', 'GET', $params);
    }
    public function spot2_public_get_common_ping($params = array()) {
        return $this->request('common/ping', 'array(spot2,public)', 'GET', $params);
    }
    public function spot2_public_get_market_ticker($params = array()) {
        return $this->request('market/ticker', 'array(spot2,public)', 'GET', $params);
    }
    public function spot2_public_get_market_depth($params = array()) {
        return $this->request('market/depth', 'array(spot2,public)', 'GET', $params);
    }
    public function spot2_public_get_market_deals($params = array()) {
        return $this->request('market/deals', 'array(spot2,public)', 'GET', $params);
    }
    public function spot2_public_get_market_kline($params = array()) {
        return $this->request('market/kline', 'array(spot2,public)', 'GET', $params);
    }
    public function spot2_public_get_market_api_default_symbols($params = array()) {
        return $this->request('market/api_default_symbols', 'array(spot2,public)', 'GET', $params);
    }
    public function spot2_private_get_account_info($params = array()) {
        return $this->request('account/info', 'array(spot2,private)', 'GET', $params);
    }
    public function spot2_private_get_order_open_orders($params = array()) {
        return $this->request('order/open_orders', 'array(spot2,private)', 'GET', $params);
    }
    public function spot2_private_get_order_list($params = array()) {
        return $this->request('order/list', 'array(spot2,private)', 'GET', $params);
    }
    public function spot2_private_get_order_query($params = array()) {
        return $this->request('order/query', 'array(spot2,private)', 'GET', $params);
    }
    public function spot2_private_get_order_deals($params = array()) {
        return $this->request('order/deals', 'array(spot2,private)', 'GET', $params);
    }
    public function spot2_private_get_order_deal_detail($params = array()) {
        return $this->request('order/deal_detail', 'array(spot2,private)', 'GET', $params);
    }
    public function spot2_private_get_asset_deposit_address_list($params = array()) {
        return $this->request('asset/deposit/address/list', 'array(spot2,private)', 'GET', $params);
    }
    public function spot2_private_get_asset_deposit_list($params = array()) {
        return $this->request('asset/deposit/list', 'array(spot2,private)', 'GET', $params);
    }
    public function spot2_private_get_asset_address_list($params = array()) {
        return $this->request('asset/address/list', 'array(spot2,private)', 'GET', $params);
    }
    public function spot2_private_get_asset_withdraw_list($params = array()) {
        return $this->request('asset/withdraw/list', 'array(spot2,private)', 'GET', $params);
    }
    public function spot2_private_get_asset_internal_transfer_record($params = array()) {
        return $this->request('asset/internal/transfer/record', 'array(spot2,private)', 'GET', $params);
    }
    public function spot2_private_get_account_balance($params = array()) {
        return $this->request('account/balance', 'array(spot2,private)', 'GET', $params);
    }
    public function spot2_private_get_asset_internal_transfer_info($params = array()) {
        return $this->request('asset/internal/transfer/info', 'array(spot2,private)', 'GET', $params);
    }
    public function spot2_private_get_market_api_symbols($params = array()) {
        return $this->request('market/api_symbols', 'array(spot2,private)', 'GET', $params);
    }
    public function spot2_private_post_order_place($params = array()) {
        return $this->request('order/place', 'array(spot2,private)', 'POST', $params);
    }
    public function spot2_private_post_order_place_batch($params = array()) {
        return $this->request('order/place_batch', 'array(spot2,private)', 'POST', $params);
    }
    public function spot2_private_post_order_advanced_place_batch($params = array()) {
        return $this->request('order/advanced/place_batch', 'array(spot2,private)', 'POST', $params);
    }
    public function spot2_private_post_asset_withdraw($params = array()) {
        return $this->request('asset/withdraw', 'array(spot2,private)', 'POST', $params);
    }
    public function spot2_private_post_asset_internal_transfer($params = array()) {
        return $this->request('asset/internal/transfer', 'array(spot2,private)', 'POST', $params);
    }
    public function spot2_private_delete_order_cancel($params = array()) {
        return $this->request('order/cancel', 'array(spot2,private)', 'DELETE', $params);
    }
    public function spot2_private_delete_order_cancel_by_symbol($params = array()) {
        return $this->request('order/cancel_by_symbol', 'array(spot2,private)', 'DELETE', $params);
    }
    public function spot2_private_delete_asset_withdraw($params = array()) {
        return $this->request('asset/withdraw', 'array(spot2,private)', 'DELETE', $params);
    }
}