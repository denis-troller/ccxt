<?php

namespace ccxt\abstract;

// PLEASE DO NOT EDIT THIS FILE, IT IS GENERATED AND WILL BE OVERWRITTEN:
// https://github.com/ccxt/ccxt/blob/master/CONTRIBUTING.md#how-to-contribute-code


abstract class zb extends \ccxt\Exchange {
    public function spot_v1_public_get_markets($params = array()) {
        return $this->request('markets', 'array(spot,v1,public)', 'GET', $params);
    }
    public function spot_v1_public_get_ticker($params = array()) {
        return $this->request('ticker', 'array(spot,v1,public)', 'GET', $params);
    }
    public function spot_v1_public_get_allticker($params = array()) {
        return $this->request('allTicker', 'array(spot,v1,public)', 'GET', $params);
    }
    public function spot_v1_public_get_depth($params = array()) {
        return $this->request('depth', 'array(spot,v1,public)', 'GET', $params);
    }
    public function spot_v1_public_get_trades($params = array()) {
        return $this->request('trades', 'array(spot,v1,public)', 'GET', $params);
    }
    public function spot_v1_public_get_kline($params = array()) {
        return $this->request('kline', 'array(spot,v1,public)', 'GET', $params);
    }
    public function spot_v1_public_get_getgroupmarkets($params = array()) {
        return $this->request('getGroupMarkets', 'array(spot,v1,public)', 'GET', $params);
    }
    public function spot_v1_public_get_getfeeinfo($params = array()) {
        return $this->request('getFeeInfo', 'array(spot,v1,public)', 'GET', $params);
    }
    public function spot_v1_private_get_order($params = array()) {
        return $this->request('order', 'array(spot,v1,private)', 'GET', $params);
    }
    public function spot_v1_private_get_ordermorev2($params = array()) {
        return $this->request('orderMoreV2', 'array(spot,v1,private)', 'GET', $params);
    }
    public function spot_v1_private_get_cancelorder($params = array()) {
        return $this->request('cancelOrder', 'array(spot,v1,private)', 'GET', $params);
    }
    public function spot_v1_private_get_cancelallordersafter($params = array()) {
        return $this->request('cancelAllOrdersAfter', 'array(spot,v1,private)', 'GET', $params);
    }
    public function spot_v1_private_get_getorder($params = array()) {
        return $this->request('getOrder', 'array(spot,v1,private)', 'GET', $params);
    }
    public function spot_v1_private_get_getorders($params = array()) {
        return $this->request('getOrders', 'array(spot,v1,private)', 'GET', $params);
    }
    public function spot_v1_private_get_getordersnew($params = array()) {
        return $this->request('getOrdersNew', 'array(spot,v1,private)', 'GET', $params);
    }
    public function spot_v1_private_get_getordersignoretradetype($params = array()) {
        return $this->request('getOrdersIgnoreTradeType', 'array(spot,v1,private)', 'GET', $params);
    }
    public function spot_v1_private_get_getunfinishedordersignoretradetype($params = array()) {
        return $this->request('getUnfinishedOrdersIgnoreTradeType', 'array(spot,v1,private)', 'GET', $params);
    }
    public function spot_v1_private_get_getfinishedandpartialorders($params = array()) {
        return $this->request('getFinishedAndPartialOrders', 'array(spot,v1,private)', 'GET', $params);
    }
    public function spot_v1_private_get_getaccountinfo($params = array()) {
        return $this->request('getAccountInfo', 'array(spot,v1,private)', 'GET', $params);
    }
    public function spot_v1_private_get_getuseraddress($params = array()) {
        return $this->request('getUserAddress', 'array(spot,v1,private)', 'GET', $params);
    }
    public function spot_v1_private_get_getpayinaddress($params = array()) {
        return $this->request('getPayinAddress', 'array(spot,v1,private)', 'GET', $params);
    }
    public function spot_v1_private_get_getwithdrawaddress($params = array()) {
        return $this->request('getWithdrawAddress', 'array(spot,v1,private)', 'GET', $params);
    }
    public function spot_v1_private_get_getwithdrawrecord($params = array()) {
        return $this->request('getWithdrawRecord', 'array(spot,v1,private)', 'GET', $params);
    }
    public function spot_v1_private_get_getchargerecord($params = array()) {
        return $this->request('getChargeRecord', 'array(spot,v1,private)', 'GET', $params);
    }
    public function spot_v1_private_get_getcnywithdrawrecord($params = array()) {
        return $this->request('getCnyWithdrawRecord', 'array(spot,v1,private)', 'GET', $params);
    }
    public function spot_v1_private_get_getcnychargerecord($params = array()) {
        return $this->request('getCnyChargeRecord', 'array(spot,v1,private)', 'GET', $params);
    }
    public function spot_v1_private_get_withdraw($params = array()) {
        return $this->request('withdraw', 'array(spot,v1,private)', 'GET', $params);
    }
    public function spot_v1_private_get_addsubuser($params = array()) {
        return $this->request('addSubUser', 'array(spot,v1,private)', 'GET', $params);
    }
    public function spot_v1_private_get_getsubuserlist($params = array()) {
        return $this->request('getSubUserList', 'array(spot,v1,private)', 'GET', $params);
    }
    public function spot_v1_private_get_dotransferfunds($params = array()) {
        return $this->request('doTransferFunds', 'array(spot,v1,private)', 'GET', $params);
    }
    public function spot_v1_private_get_createsubuserkey($params = array()) {
        return $this->request('createSubUserKey', 'array(spot,v1,private)', 'GET', $params);
    }
    public function spot_v1_private_get_getleverassetsinfo($params = array()) {
        return $this->request('getLeverAssetsInfo', 'array(spot,v1,private)', 'GET', $params);
    }
    public function spot_v1_private_get_getleverbills($params = array()) {
        return $this->request('getLeverBills', 'array(spot,v1,private)', 'GET', $params);
    }
    public function spot_v1_private_get_transferinlever($params = array()) {
        return $this->request('transferInLever', 'array(spot,v1,private)', 'GET', $params);
    }
    public function spot_v1_private_get_transferoutlever($params = array()) {
        return $this->request('transferOutLever', 'array(spot,v1,private)', 'GET', $params);
    }
    public function spot_v1_private_get_loan($params = array()) {
        return $this->request('loan', 'array(spot,v1,private)', 'GET', $params);
    }
    public function spot_v1_private_get_cancelloan($params = array()) {
        return $this->request('cancelLoan', 'array(spot,v1,private)', 'GET', $params);
    }
    public function spot_v1_private_get_getloans($params = array()) {
        return $this->request('getLoans', 'array(spot,v1,private)', 'GET', $params);
    }
    public function spot_v1_private_get_getloanrecords($params = array()) {
        return $this->request('getLoanRecords', 'array(spot,v1,private)', 'GET', $params);
    }
    public function spot_v1_private_get_borrow($params = array()) {
        return $this->request('borrow', 'array(spot,v1,private)', 'GET', $params);
    }
    public function spot_v1_private_get_autoborrow($params = array()) {
        return $this->request('autoBorrow', 'array(spot,v1,private)', 'GET', $params);
    }
    public function spot_v1_private_get_repay($params = array()) {
        return $this->request('repay', 'array(spot,v1,private)', 'GET', $params);
    }
    public function spot_v1_private_get_doallrepay($params = array()) {
        return $this->request('doAllRepay', 'array(spot,v1,private)', 'GET', $params);
    }
    public function spot_v1_private_get_getrepayments($params = array()) {
        return $this->request('getRepayments', 'array(spot,v1,private)', 'GET', $params);
    }
    public function spot_v1_private_get_getfinancerecords($params = array()) {
        return $this->request('getFinanceRecords', 'array(spot,v1,private)', 'GET', $params);
    }
    public function spot_v1_private_get_changeinvestmark($params = array()) {
        return $this->request('changeInvestMark', 'array(spot,v1,private)', 'GET', $params);
    }
    public function spot_v1_private_get_changeloop($params = array()) {
        return $this->request('changeLoop', 'array(spot,v1,private)', 'GET', $params);
    }
    public function spot_v1_private_get_getcrossassets($params = array()) {
        return $this->request('getCrossAssets', 'array(spot,v1,private)', 'GET', $params);
    }
    public function spot_v1_private_get_getcrossbills($params = array()) {
        return $this->request('getCrossBills', 'array(spot,v1,private)', 'GET', $params);
    }
    public function spot_v1_private_get_transferincross($params = array()) {
        return $this->request('transferInCross', 'array(spot,v1,private)', 'GET', $params);
    }
    public function spot_v1_private_get_transferoutcross($params = array()) {
        return $this->request('transferOutCross', 'array(spot,v1,private)', 'GET', $params);
    }
    public function spot_v1_private_get_docrossloan($params = array()) {
        return $this->request('doCrossLoan', 'array(spot,v1,private)', 'GET', $params);
    }
    public function spot_v1_private_get_docrossrepay($params = array()) {
        return $this->request('doCrossRepay', 'array(spot,v1,private)', 'GET', $params);
    }
    public function spot_v1_private_get_getcrossrepayrecords($params = array()) {
        return $this->request('getCrossRepayRecords', 'array(spot,v1,private)', 'GET', $params);
    }
    public function contract_v1_public_get_depth($params = array()) {
        return $this->request('depth', 'array(contract,v1,public)', 'GET', $params);
    }
    public function contract_v1_public_get_fundingrate($params = array()) {
        return $this->request('fundingRate', 'array(contract,v1,public)', 'GET', $params);
    }
    public function contract_v1_public_get_indexkline($params = array()) {
        return $this->request('indexKline', 'array(contract,v1,public)', 'GET', $params);
    }
    public function contract_v1_public_get_indexprice($params = array()) {
        return $this->request('indexPrice', 'array(contract,v1,public)', 'GET', $params);
    }
    public function contract_v1_public_get_kline($params = array()) {
        return $this->request('kline', 'array(contract,v1,public)', 'GET', $params);
    }
    public function contract_v1_public_get_markkline($params = array()) {
        return $this->request('markKline', 'array(contract,v1,public)', 'GET', $params);
    }
    public function contract_v1_public_get_markprice($params = array()) {
        return $this->request('markPrice', 'array(contract,v1,public)', 'GET', $params);
    }
    public function contract_v1_public_get_ticker($params = array()) {
        return $this->request('ticker', 'array(contract,v1,public)', 'GET', $params);
    }
    public function contract_v1_public_get_trade($params = array()) {
        return $this->request('trade', 'array(contract,v1,public)', 'GET', $params);
    }
    public function contract_v2_public_get_allforceorders($params = array()) {
        return $this->request('allForceOrders', 'array(contract,v2,public)', 'GET', $params);
    }
    public function contract_v2_public_get_config_marketlist($params = array()) {
        return $this->request('config/marketList', 'array(contract,v2,public)', 'GET', $params);
    }
    public function contract_v2_public_get_toplongshortaccountratio($params = array()) {
        return $this->request('topLongShortAccountRatio', 'array(contract,v2,public)', 'GET', $params);
    }
    public function contract_v2_public_get_toplongshortpositionratio($params = array()) {
        return $this->request('topLongShortPositionRatio', 'array(contract,v2,public)', 'GET', $params);
    }
    public function contract_v2_public_get_fundingrate($params = array()) {
        return $this->request('fundingRate', 'array(contract,v2,public)', 'GET', $params);
    }
    public function contract_v2_public_get_premiumindex($params = array()) {
        return $this->request('premiumIndex', 'array(contract,v2,public)', 'GET', $params);
    }
    public function contract_v2_private_get_fund_balance($params = array()) {
        return $this->request('Fund/balance', 'array(contract,v2,private)', 'GET', $params);
    }
    public function contract_v2_private_get_fund_getaccount($params = array()) {
        return $this->request('Fund/getAccount', 'array(contract,v2,private)', 'GET', $params);
    }
    public function contract_v2_private_get_fund_getbill($params = array()) {
        return $this->request('Fund/getBill', 'array(contract,v2,private)', 'GET', $params);
    }
    public function contract_v2_private_get_fund_getbilltypelist($params = array()) {
        return $this->request('Fund/getBillTypeList', 'array(contract,v2,private)', 'GET', $params);
    }
    public function contract_v2_private_get_fund_marginhistory($params = array()) {
        return $this->request('Fund/marginHistory', 'array(contract,v2,private)', 'GET', $params);
    }
    public function contract_v2_private_get_positions_getpositions($params = array()) {
        return $this->request('Positions/getPositions', 'array(contract,v2,private)', 'GET', $params);
    }
    public function contract_v2_private_get_positions_getnominalvalue($params = array()) {
        return $this->request('Positions/getNominalValue', 'array(contract,v2,private)', 'GET', $params);
    }
    public function contract_v2_private_get_positions_margininfo($params = array()) {
        return $this->request('Positions/marginInfo', 'array(contract,v2,private)', 'GET', $params);
    }
    public function contract_v2_private_get_setting_get($params = array()) {
        return $this->request('setting/get', 'array(contract,v2,private)', 'GET', $params);
    }
    public function contract_v2_private_get_trade_getallorders($params = array()) {
        return $this->request('trade/getAllOrders', 'array(contract,v2,private)', 'GET', $params);
    }
    public function contract_v2_private_get_trade_getorder($params = array()) {
        return $this->request('trade/getOrder', 'array(contract,v2,private)', 'GET', $params);
    }
    public function contract_v2_private_get_trade_getorderalgos($params = array()) {
        return $this->request('trade/getOrderAlgos', 'array(contract,v2,private)', 'GET', $params);
    }
    public function contract_v2_private_get_trade_gettradelist($params = array()) {
        return $this->request('trade/getTradeList', 'array(contract,v2,private)', 'GET', $params);
    }
    public function contract_v2_private_get_trade_getundoneorders($params = array()) {
        return $this->request('trade/getUndoneOrders', 'array(contract,v2,private)', 'GET', $params);
    }
    public function contract_v2_private_get_trade_tradehistory($params = array()) {
        return $this->request('trade/tradeHistory', 'array(contract,v2,private)', 'GET', $params);
    }
    public function contract_v2_private_post_activity_buyticket($params = array()) {
        return $this->request('activity/buyTicket', 'array(contract,v2,private)', 'POST', $params);
    }
    public function contract_v2_private_post_fund_transferfund($params = array()) {
        return $this->request('Fund/transferFund', 'array(contract,v2,private)', 'POST', $params);
    }
    public function contract_v2_private_post_positions_setmargincoins($params = array()) {
        return $this->request('Positions/setMarginCoins', 'array(contract,v2,private)', 'POST', $params);
    }
    public function contract_v2_private_post_positions_updateappendusdvalue($params = array()) {
        return $this->request('Positions/updateAppendUSDValue', 'array(contract,v2,private)', 'POST', $params);
    }
    public function contract_v2_private_post_positions_updatemargin($params = array()) {
        return $this->request('Positions/updateMargin', 'array(contract,v2,private)', 'POST', $params);
    }
    public function contract_v2_private_post_setting_setleverage($params = array()) {
        return $this->request('setting/setLeverage', 'array(contract,v2,private)', 'POST', $params);
    }
    public function contract_v2_private_post_setting_setpositionsmode($params = array()) {
        return $this->request('setting/setPositionsMode', 'array(contract,v2,private)', 'POST', $params);
    }
    public function contract_v2_private_post_trade_batchorder($params = array()) {
        return $this->request('trade/batchOrder', 'array(contract,v2,private)', 'POST', $params);
    }
    public function contract_v2_private_post_trade_batchcancelorder($params = array()) {
        return $this->request('trade/batchCancelOrder', 'array(contract,v2,private)', 'POST', $params);
    }
    public function contract_v2_private_post_trade_cancelalgos($params = array()) {
        return $this->request('trade/cancelAlgos', 'array(contract,v2,private)', 'POST', $params);
    }
    public function contract_v2_private_post_trade_cancelallorders($params = array()) {
        return $this->request('trade/cancelAllOrders', 'array(contract,v2,private)', 'POST', $params);
    }
    public function contract_v2_private_post_trade_cancelorder($params = array()) {
        return $this->request('trade/cancelOrder', 'array(contract,v2,private)', 'POST', $params);
    }
    public function contract_v2_private_post_trade_order($params = array()) {
        return $this->request('trade/order', 'array(contract,v2,private)', 'POST', $params);
    }
    public function contract_v2_private_post_trade_orderalgo($params = array()) {
        return $this->request('trade/orderAlgo', 'array(contract,v2,private)', 'POST', $params);
    }
    public function contract_v2_private_post_trade_updateorderalgo($params = array()) {
        return $this->request('trade/updateOrderAlgo', 'array(contract,v2,private)', 'POST', $params);
    }
}