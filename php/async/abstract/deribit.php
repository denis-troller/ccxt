<?php

namespace ccxt\async\abstract;

// PLEASE DO NOT EDIT THIS FILE, IT IS GENERATED AND WILL BE OVERWRITTEN:
// https://github.com/ccxt/ccxt/blob/master/CONTRIBUTING.md#how-to-contribute-code


abstract class deribit extends \ccxt\async\Exchange {
    public function public_get_auth($params = array()) {
        return $this->request('auth', 'public', 'GET', $params);
    }
    public function public_get_exchange_token($params = array()) {
        return $this->request('exchange_token', 'public', 'GET', $params);
    }
    public function public_get_fork_token($params = array()) {
        return $this->request('fork_token', 'public', 'GET', $params);
    }
    public function public_get_set_heartbeat($params = array()) {
        return $this->request('set_heartbeat', 'public', 'GET', $params);
    }
    public function public_get_disable_heartbeat($params = array()) {
        return $this->request('disable_heartbeat', 'public', 'GET', $params);
    }
    public function public_get_get_time($params = array()) {
        return $this->request('get_time', 'public', 'GET', $params);
    }
    public function public_get_hello($params = array()) {
        return $this->request('hello', 'public', 'GET', $params);
    }
    public function public_get_status($params = array()) {
        return $this->request('status', 'public', 'GET', $params);
    }
    public function public_get_test($params = array()) {
        return $this->request('test', 'public', 'GET', $params);
    }
    public function public_get_subscribe($params = array()) {
        return $this->request('subscribe', 'public', 'GET', $params);
    }
    public function public_get_unsubscribe($params = array()) {
        return $this->request('unsubscribe', 'public', 'GET', $params);
    }
    public function public_get_unsubscribe_all($params = array()) {
        return $this->request('unsubscribe_all', 'public', 'GET', $params);
    }
    public function public_get_get_announcements($params = array()) {
        return $this->request('get_announcements', 'public', 'GET', $params);
    }
    public function public_get_get_book_summary_by_currency($params = array()) {
        return $this->request('get_book_summary_by_currency', 'public', 'GET', $params);
    }
    public function public_get_get_book_summary_by_instrument($params = array()) {
        return $this->request('get_book_summary_by_instrument', 'public', 'GET', $params);
    }
    public function public_get_get_contract_size($params = array()) {
        return $this->request('get_contract_size', 'public', 'GET', $params);
    }
    public function public_get_get_currencies($params = array()) {
        return $this->request('get_currencies', 'public', 'GET', $params);
    }
    public function public_get_get_delivery_prices($params = array()) {
        return $this->request('get_delivery_prices', 'public', 'GET', $params);
    }
    public function public_get_get_funding_chart_data($params = array()) {
        return $this->request('get_funding_chart_data', 'public', 'GET', $params);
    }
    public function public_get_get_funding_rate_history($params = array()) {
        return $this->request('get_funding_rate_history', 'public', 'GET', $params);
    }
    public function public_get_get_funding_rate_value($params = array()) {
        return $this->request('get_funding_rate_value', 'public', 'GET', $params);
    }
    public function public_get_get_historical_volatility($params = array()) {
        return $this->request('get_historical_volatility', 'public', 'GET', $params);
    }
    public function public_get_get_index($params = array()) {
        return $this->request('get_index', 'public', 'GET', $params);
    }
    public function public_get_get_index_price($params = array()) {
        return $this->request('get_index_price', 'public', 'GET', $params);
    }
    public function public_get_get_index_price_names($params = array()) {
        return $this->request('get_index_price_names', 'public', 'GET', $params);
    }
    public function public_get_get_instrument($params = array()) {
        return $this->request('get_instrument', 'public', 'GET', $params);
    }
    public function public_get_get_instruments($params = array()) {
        return $this->request('get_instruments', 'public', 'GET', $params);
    }
    public function public_get_get_last_settlements_by_currency($params = array()) {
        return $this->request('get_last_settlements_by_currency', 'public', 'GET', $params);
    }
    public function public_get_get_last_settlements_by_instrument($params = array()) {
        return $this->request('get_last_settlements_by_instrument', 'public', 'GET', $params);
    }
    public function public_get_get_last_trades_by_currency($params = array()) {
        return $this->request('get_last_trades_by_currency', 'public', 'GET', $params);
    }
    public function public_get_get_last_trades_by_currency_and_time($params = array()) {
        return $this->request('get_last_trades_by_currency_and_time', 'public', 'GET', $params);
    }
    public function public_get_get_last_trades_by_instrument($params = array()) {
        return $this->request('get_last_trades_by_instrument', 'public', 'GET', $params);
    }
    public function public_get_get_last_trades_by_instrument_and_time($params = array()) {
        return $this->request('get_last_trades_by_instrument_and_time', 'public', 'GET', $params);
    }
    public function public_get_get_mark_price_history($params = array()) {
        return $this->request('get_mark_price_history', 'public', 'GET', $params);
    }
    public function public_get_get_order_book($params = array()) {
        return $this->request('get_order_book', 'public', 'GET', $params);
    }
    public function public_get_get_trade_volumes($params = array()) {
        return $this->request('get_trade_volumes', 'public', 'GET', $params);
    }
    public function public_get_get_tradingview_chart_data($params = array()) {
        return $this->request('get_tradingview_chart_data', 'public', 'GET', $params);
    }
    public function public_get_get_volatility_index_data($params = array()) {
        return $this->request('get_volatility_index_data', 'public', 'GET', $params);
    }
    public function public_get_ticker($params = array()) {
        return $this->request('ticker', 'public', 'GET', $params);
    }
    public function private_get_logout($params = array()) {
        return $this->request('logout', 'private', 'GET', $params);
    }
    public function private_get_enable_cancel_on_disconnect($params = array()) {
        return $this->request('enable_cancel_on_disconnect', 'private', 'GET', $params);
    }
    public function private_get_disable_cancel_on_disconnect($params = array()) {
        return $this->request('disable_cancel_on_disconnect', 'private', 'GET', $params);
    }
    public function private_get_get_cancel_on_disconnect($params = array()) {
        return $this->request('get_cancel_on_disconnect', 'private', 'GET', $params);
    }
    public function private_get_subscribe($params = array()) {
        return $this->request('subscribe', 'private', 'GET', $params);
    }
    public function private_get_unsubscribe($params = array()) {
        return $this->request('unsubscribe', 'private', 'GET', $params);
    }
    public function private_get_unsubscribe_all($params = array()) {
        return $this->request('unsubscribe_all', 'private', 'GET', $params);
    }
    public function private_get_change_api_key_name($params = array()) {
        return $this->request('change_api_key_name', 'private', 'GET', $params);
    }
    public function private_get_change_scope_in_api_key($params = array()) {
        return $this->request('change_scope_in_api_key', 'private', 'GET', $params);
    }
    public function private_get_change_subaccount_name($params = array()) {
        return $this->request('change_subaccount_name', 'private', 'GET', $params);
    }
    public function private_get_create_api_key($params = array()) {
        return $this->request('create_api_key', 'private', 'GET', $params);
    }
    public function private_get_create_subaccount($params = array()) {
        return $this->request('create_subaccount', 'private', 'GET', $params);
    }
    public function private_get_disable_api_key($params = array()) {
        return $this->request('disable_api_key', 'private', 'GET', $params);
    }
    public function private_get_disable_tfa_for_subaccount($params = array()) {
        return $this->request('disable_tfa_for_subaccount', 'private', 'GET', $params);
    }
    public function private_get_enable_affiliate_program($params = array()) {
        return $this->request('enable_affiliate_program', 'private', 'GET', $params);
    }
    public function private_get_enable_api_key($params = array()) {
        return $this->request('enable_api_key', 'private', 'GET', $params);
    }
    public function private_get_get_access_log($params = array()) {
        return $this->request('get_access_log', 'private', 'GET', $params);
    }
    public function private_get_get_account_summary($params = array()) {
        return $this->request('get_account_summary', 'private', 'GET', $params);
    }
    public function private_get_get_affiliate_program_info($params = array()) {
        return $this->request('get_affiliate_program_info', 'private', 'GET', $params);
    }
    public function private_get_get_email_language($params = array()) {
        return $this->request('get_email_language', 'private', 'GET', $params);
    }
    public function private_get_get_new_announcements($params = array()) {
        return $this->request('get_new_announcements', 'private', 'GET', $params);
    }
    public function private_get_get_portfolio_margins($params = array()) {
        return $this->request('get_portfolio_margins', 'private', 'GET', $params);
    }
    public function private_get_get_position($params = array()) {
        return $this->request('get_position', 'private', 'GET', $params);
    }
    public function private_get_get_positions($params = array()) {
        return $this->request('get_positions', 'private', 'GET', $params);
    }
    public function private_get_get_subaccounts($params = array()) {
        return $this->request('get_subaccounts', 'private', 'GET', $params);
    }
    public function private_get_get_subaccounts_details($params = array()) {
        return $this->request('get_subaccounts_details', 'private', 'GET', $params);
    }
    public function private_get_get_transaction_log($params = array()) {
        return $this->request('get_transaction_log', 'private', 'GET', $params);
    }
    public function private_get_list_api_keys($params = array()) {
        return $this->request('list_api_keys', 'private', 'GET', $params);
    }
    public function private_get_remove_api_key($params = array()) {
        return $this->request('remove_api_key', 'private', 'GET', $params);
    }
    public function private_get_remove_subaccount($params = array()) {
        return $this->request('remove_subaccount', 'private', 'GET', $params);
    }
    public function private_get_reset_api_key($params = array()) {
        return $this->request('reset_api_key', 'private', 'GET', $params);
    }
    public function private_get_set_announcement_as_read($params = array()) {
        return $this->request('set_announcement_as_read', 'private', 'GET', $params);
    }
    public function private_get_set_api_key_as_default($params = array()) {
        return $this->request('set_api_key_as_default', 'private', 'GET', $params);
    }
    public function private_get_set_email_for_subaccount($params = array()) {
        return $this->request('set_email_for_subaccount', 'private', 'GET', $params);
    }
    public function private_get_set_email_language($params = array()) {
        return $this->request('set_email_language', 'private', 'GET', $params);
    }
    public function private_get_set_password_for_subaccount($params = array()) {
        return $this->request('set_password_for_subaccount', 'private', 'GET', $params);
    }
    public function private_get_toggle_notifications_from_subaccount($params = array()) {
        return $this->request('toggle_notifications_from_subaccount', 'private', 'GET', $params);
    }
    public function private_get_toggle_subaccount_login($params = array()) {
        return $this->request('toggle_subaccount_login', 'private', 'GET', $params);
    }
    public function private_get_execute_block_trade($params = array()) {
        return $this->request('execute_block_trade', 'private', 'GET', $params);
    }
    public function private_get_get_block_trade($params = array()) {
        return $this->request('get_block_trade', 'private', 'GET', $params);
    }
    public function private_get_get_last_block_trades_by_currency($params = array()) {
        return $this->request('get_last_block_trades_by_currency', 'private', 'GET', $params);
    }
    public function private_get_invalidate_block_trade_signature($params = array()) {
        return $this->request('invalidate_block_trade_signature', 'private', 'GET', $params);
    }
    public function private_get_verify_block_trade($params = array()) {
        return $this->request('verify_block_trade', 'private', 'GET', $params);
    }
    public function private_get_buy($params = array()) {
        return $this->request('buy', 'private', 'GET', $params);
    }
    public function private_get_sell($params = array()) {
        return $this->request('sell', 'private', 'GET', $params);
    }
    public function private_get_edit($params = array()) {
        return $this->request('edit', 'private', 'GET', $params);
    }
    public function private_get_edit_by_label($params = array()) {
        return $this->request('edit_by_label', 'private', 'GET', $params);
    }
    public function private_get_cancel($params = array()) {
        return $this->request('cancel', 'private', 'GET', $params);
    }
    public function private_get_cancel_all($params = array()) {
        return $this->request('cancel_all', 'private', 'GET', $params);
    }
    public function private_get_cancel_all_by_currency($params = array()) {
        return $this->request('cancel_all_by_currency', 'private', 'GET', $params);
    }
    public function private_get_cancel_all_by_instrument($params = array()) {
        return $this->request('cancel_all_by_instrument', 'private', 'GET', $params);
    }
    public function private_get_cancel_by_label($params = array()) {
        return $this->request('cancel_by_label', 'private', 'GET', $params);
    }
    public function private_get_close_position($params = array()) {
        return $this->request('close_position', 'private', 'GET', $params);
    }
    public function private_get_get_margins($params = array()) {
        return $this->request('get_margins', 'private', 'GET', $params);
    }
    public function private_get_get_mmp_config($params = array()) {
        return $this->request('get_mmp_config', 'private', 'GET', $params);
    }
    public function private_get_get_open_orders_by_currency($params = array()) {
        return $this->request('get_open_orders_by_currency', 'private', 'GET', $params);
    }
    public function private_get_get_open_orders_by_instrument($params = array()) {
        return $this->request('get_open_orders_by_instrument', 'private', 'GET', $params);
    }
    public function private_get_get_order_history_by_currency($params = array()) {
        return $this->request('get_order_history_by_currency', 'private', 'GET', $params);
    }
    public function private_get_get_order_history_by_instrument($params = array()) {
        return $this->request('get_order_history_by_instrument', 'private', 'GET', $params);
    }
    public function private_get_get_order_margin_by_ids($params = array()) {
        return $this->request('get_order_margin_by_ids', 'private', 'GET', $params);
    }
    public function private_get_get_order_state($params = array()) {
        return $this->request('get_order_state', 'private', 'GET', $params);
    }
    public function private_get_get_stop_order_history($params = array()) {
        return $this->request('get_stop_order_history', 'private', 'GET', $params);
    }
    public function private_get_get_trigger_order_history($params = array()) {
        return $this->request('get_trigger_order_history', 'private', 'GET', $params);
    }
    public function private_get_get_user_trades_by_currency($params = array()) {
        return $this->request('get_user_trades_by_currency', 'private', 'GET', $params);
    }
    public function private_get_get_user_trades_by_currency_and_time($params = array()) {
        return $this->request('get_user_trades_by_currency_and_time', 'private', 'GET', $params);
    }
    public function private_get_get_user_trades_by_instrument($params = array()) {
        return $this->request('get_user_trades_by_instrument', 'private', 'GET', $params);
    }
    public function private_get_get_user_trades_by_instrument_and_time($params = array()) {
        return $this->request('get_user_trades_by_instrument_and_time', 'private', 'GET', $params);
    }
    public function private_get_get_user_trades_by_order($params = array()) {
        return $this->request('get_user_trades_by_order', 'private', 'GET', $params);
    }
    public function private_get_reset_mmp($params = array()) {
        return $this->request('reset_mmp', 'private', 'GET', $params);
    }
    public function private_get_set_mmp_config($params = array()) {
        return $this->request('set_mmp_config', 'private', 'GET', $params);
    }
    public function private_get_get_settlement_history_by_instrument($params = array()) {
        return $this->request('get_settlement_history_by_instrument', 'private', 'GET', $params);
    }
    public function private_get_get_settlement_history_by_currency($params = array()) {
        return $this->request('get_settlement_history_by_currency', 'private', 'GET', $params);
    }
    public function private_get_cancel_transfer_by_id($params = array()) {
        return $this->request('cancel_transfer_by_id', 'private', 'GET', $params);
    }
    public function private_get_cancel_withdrawal($params = array()) {
        return $this->request('cancel_withdrawal', 'private', 'GET', $params);
    }
    public function private_get_create_deposit_address($params = array()) {
        return $this->request('create_deposit_address', 'private', 'GET', $params);
    }
    public function private_get_get_current_deposit_address($params = array()) {
        return $this->request('get_current_deposit_address', 'private', 'GET', $params);
    }
    public function private_get_get_deposits($params = array()) {
        return $this->request('get_deposits', 'private', 'GET', $params);
    }
    public function private_get_get_transfers($params = array()) {
        return $this->request('get_transfers', 'private', 'GET', $params);
    }
    public function private_get_get_withdrawals($params = array()) {
        return $this->request('get_withdrawals', 'private', 'GET', $params);
    }
    public function private_get_submit_transfer_to_subaccount($params = array()) {
        return $this->request('submit_transfer_to_subaccount', 'private', 'GET', $params);
    }
    public function private_get_submit_transfer_to_user($params = array()) {
        return $this->request('submit_transfer_to_user', 'private', 'GET', $params);
    }
    public function private_get_withdraw($params = array()) {
        return $this->request('withdraw', 'private', 'GET', $params);
    }
}