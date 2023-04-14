<?php

namespace ccxt\async\abstract;

// PLEASE DO NOT EDIT THIS FILE, IT IS GENERATED AND WILL BE OVERWRITTEN:
// https://github.com/ccxt/ccxt/blob/master/CONTRIBUTING.md#how-to-contribute-code


abstract class bitso extends \ccxt\async\Exchange {
    public function public_get_available_books($params = array()) {
        return $this->request('available_books', 'public', 'GET', $params);
    }
    public function public_get_ticker($params = array()) {
        return $this->request('ticker', 'public', 'GET', $params);
    }
    public function public_get_order_book($params = array()) {
        return $this->request('order_book', 'public', 'GET', $params);
    }
    public function public_get_trades($params = array()) {
        return $this->request('trades', 'public', 'GET', $params);
    }
    public function public_get_ohlc($params = array()) {
        return $this->request('ohlc', 'public', 'GET', $params);
    }
    public function private_get_account_status($params = array()) {
        return $this->request('account_status', 'private', 'GET', $params);
    }
    public function private_get_balance($params = array()) {
        return $this->request('balance', 'private', 'GET', $params);
    }
    public function private_get_fees($params = array()) {
        return $this->request('fees', 'private', 'GET', $params);
    }
    public function private_get_fundings($params = array()) {
        return $this->request('fundings', 'private', 'GET', $params);
    }
    public function private_get_fundings_fid($params = array()) {
        return $this->request('fundings/{fid}', 'private', 'GET', $params);
    }
    public function private_get_funding_destination($params = array()) {
        return $this->request('funding_destination', 'private', 'GET', $params);
    }
    public function private_get_kyc_documents($params = array()) {
        return $this->request('kyc_documents', 'private', 'GET', $params);
    }
    public function private_get_ledger($params = array()) {
        return $this->request('ledger', 'private', 'GET', $params);
    }
    public function private_get_ledger_trades($params = array()) {
        return $this->request('ledger/trades', 'private', 'GET', $params);
    }
    public function private_get_ledger_fees($params = array()) {
        return $this->request('ledger/fees', 'private', 'GET', $params);
    }
    public function private_get_ledger_fundings($params = array()) {
        return $this->request('ledger/fundings', 'private', 'GET', $params);
    }
    public function private_get_ledger_withdrawals($params = array()) {
        return $this->request('ledger/withdrawals', 'private', 'GET', $params);
    }
    public function private_get_mx_bank_codes($params = array()) {
        return $this->request('mx_bank_codes', 'private', 'GET', $params);
    }
    public function private_get_open_orders($params = array()) {
        return $this->request('open_orders', 'private', 'GET', $params);
    }
    public function private_get_order_trades_oid($params = array()) {
        return $this->request('order_trades/{oid}', 'private', 'GET', $params);
    }
    public function private_get_orders_oid($params = array()) {
        return $this->request('orders/{oid}', 'private', 'GET', $params);
    }
    public function private_get_user_trades($params = array()) {
        return $this->request('user_trades', 'private', 'GET', $params);
    }
    public function private_get_user_trades_tid($params = array()) {
        return $this->request('user_trades/{tid}', 'private', 'GET', $params);
    }
    public function private_get_withdrawals($params = array()) {
        return $this->request('withdrawals/', 'private', 'GET', $params);
    }
    public function private_get_withdrawals_wid($params = array()) {
        return $this->request('withdrawals/{wid}', 'private', 'GET', $params);
    }
    public function private_post_bitcoin_withdrawal($params = array()) {
        return $this->request('bitcoin_withdrawal', 'private', 'POST', $params);
    }
    public function private_post_debit_card_withdrawal($params = array()) {
        return $this->request('debit_card_withdrawal', 'private', 'POST', $params);
    }
    public function private_post_ether_withdrawal($params = array()) {
        return $this->request('ether_withdrawal', 'private', 'POST', $params);
    }
    public function private_post_orders($params = array()) {
        return $this->request('orders', 'private', 'POST', $params);
    }
    public function private_post_phone_number($params = array()) {
        return $this->request('phone_number', 'private', 'POST', $params);
    }
    public function private_post_phone_verification($params = array()) {
        return $this->request('phone_verification', 'private', 'POST', $params);
    }
    public function private_post_phone_withdrawal($params = array()) {
        return $this->request('phone_withdrawal', 'private', 'POST', $params);
    }
    public function private_post_spei_withdrawal($params = array()) {
        return $this->request('spei_withdrawal', 'private', 'POST', $params);
    }
    public function private_post_ripple_withdrawal($params = array()) {
        return $this->request('ripple_withdrawal', 'private', 'POST', $params);
    }
    public function private_post_bcash_withdrawal($params = array()) {
        return $this->request('bcash_withdrawal', 'private', 'POST', $params);
    }
    public function private_post_litecoin_withdrawal($params = array()) {
        return $this->request('litecoin_withdrawal', 'private', 'POST', $params);
    }
    public function private_delete_orders($params = array()) {
        return $this->request('orders', 'private', 'DELETE', $params);
    }
    public function private_delete_orders_oid($params = array()) {
        return $this->request('orders/{oid}', 'private', 'DELETE', $params);
    }
    public function private_delete_orders_all($params = array()) {
        return $this->request('orders/all', 'private', 'DELETE', $params);
    }
    public function publicGetAvailableBooks($params = array()) {
        return $this->request('available_books', 'public', 'GET', $params);
    }
    public function publicGetTicker($params = array()) {
        return $this->request('ticker', 'public', 'GET', $params);
    }
    public function publicGetOrderBook($params = array()) {
        return $this->request('order_book', 'public', 'GET', $params);
    }
    public function publicGetTrades($params = array()) {
        return $this->request('trades', 'public', 'GET', $params);
    }
    public function publicGetOhlc($params = array()) {
        return $this->request('ohlc', 'public', 'GET', $params);
    }
    public function privateGetAccountStatus($params = array()) {
        return $this->request('account_status', 'private', 'GET', $params);
    }
    public function privateGetBalance($params = array()) {
        return $this->request('balance', 'private', 'GET', $params);
    }
    public function privateGetFees($params = array()) {
        return $this->request('fees', 'private', 'GET', $params);
    }
    public function privateGetFundings($params = array()) {
        return $this->request('fundings', 'private', 'GET', $params);
    }
    public function privateGetFundingsFid($params = array()) {
        return $this->request('fundings/{fid}', 'private', 'GET', $params);
    }
    public function privateGetFundingDestination($params = array()) {
        return $this->request('funding_destination', 'private', 'GET', $params);
    }
    public function privateGetKycDocuments($params = array()) {
        return $this->request('kyc_documents', 'private', 'GET', $params);
    }
    public function privateGetLedger($params = array()) {
        return $this->request('ledger', 'private', 'GET', $params);
    }
    public function privateGetLedgerTrades($params = array()) {
        return $this->request('ledger/trades', 'private', 'GET', $params);
    }
    public function privateGetLedgerFees($params = array()) {
        return $this->request('ledger/fees', 'private', 'GET', $params);
    }
    public function privateGetLedgerFundings($params = array()) {
        return $this->request('ledger/fundings', 'private', 'GET', $params);
    }
    public function privateGetLedgerWithdrawals($params = array()) {
        return $this->request('ledger/withdrawals', 'private', 'GET', $params);
    }
    public function privateGetMxBankCodes($params = array()) {
        return $this->request('mx_bank_codes', 'private', 'GET', $params);
    }
    public function privateGetOpenOrders($params = array()) {
        return $this->request('open_orders', 'private', 'GET', $params);
    }
    public function privateGetOrderTradesOid($params = array()) {
        return $this->request('order_trades/{oid}', 'private', 'GET', $params);
    }
    public function privateGetOrdersOid($params = array()) {
        return $this->request('orders/{oid}', 'private', 'GET', $params);
    }
    public function privateGetUserTrades($params = array()) {
        return $this->request('user_trades', 'private', 'GET', $params);
    }
    public function privateGetUserTradesTid($params = array()) {
        return $this->request('user_trades/{tid}', 'private', 'GET', $params);
    }
    public function privateGetWithdrawals($params = array()) {
        return $this->request('withdrawals/', 'private', 'GET', $params);
    }
    public function privateGetWithdrawalsWid($params = array()) {
        return $this->request('withdrawals/{wid}', 'private', 'GET', $params);
    }
    public function privatePostBitcoinWithdrawal($params = array()) {
        return $this->request('bitcoin_withdrawal', 'private', 'POST', $params);
    }
    public function privatePostDebitCardWithdrawal($params = array()) {
        return $this->request('debit_card_withdrawal', 'private', 'POST', $params);
    }
    public function privatePostEtherWithdrawal($params = array()) {
        return $this->request('ether_withdrawal', 'private', 'POST', $params);
    }
    public function privatePostOrders($params = array()) {
        return $this->request('orders', 'private', 'POST', $params);
    }
    public function privatePostPhoneNumber($params = array()) {
        return $this->request('phone_number', 'private', 'POST', $params);
    }
    public function privatePostPhoneVerification($params = array()) {
        return $this->request('phone_verification', 'private', 'POST', $params);
    }
    public function privatePostPhoneWithdrawal($params = array()) {
        return $this->request('phone_withdrawal', 'private', 'POST', $params);
    }
    public function privatePostSpeiWithdrawal($params = array()) {
        return $this->request('spei_withdrawal', 'private', 'POST', $params);
    }
    public function privatePostRippleWithdrawal($params = array()) {
        return $this->request('ripple_withdrawal', 'private', 'POST', $params);
    }
    public function privatePostBcashWithdrawal($params = array()) {
        return $this->request('bcash_withdrawal', 'private', 'POST', $params);
    }
    public function privatePostLitecoinWithdrawal($params = array()) {
        return $this->request('litecoin_withdrawal', 'private', 'POST', $params);
    }
    public function privateDeleteOrders($params = array()) {
        return $this->request('orders', 'private', 'DELETE', $params);
    }
    public function privateDeleteOrdersOid($params = array()) {
        return $this->request('orders/{oid}', 'private', 'DELETE', $params);
    }
    public function privateDeleteOrdersAll($params = array()) {
        return $this->request('orders/all', 'private', 'DELETE', $params);
    }
}