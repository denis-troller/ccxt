<?php
namespace ccxt;
use \ccxt\Precise;

// ----------------------------------------------------------------------------

// PLEASE DO NOT EDIT THIS FILE, IT IS GENERATED AND WILL BE OVERWRITTEN:
// https://github.com/ccxt/ccxt/blob/master/CONTRIBUTING.md#how-to-contribute-code

// -----------------------------------------------------------------------------
include_once __DIR__ . '/test_shared_methods.php';

function test_balance($exchange, $skipped_properties, $method, $entry) {
    $format = array(
        'free' => array(),
        'used' => array(),
        'total' => array(),
        'info' => array(),
    );
    assert_structure($exchange, $skipped_properties, $method, $entry, $format);
    $log_text = log_template($exchange, $method, $entry);
    //
    $codes_total = is_array($entry['total']) ? array_keys($entry['total']) : array();
    $codes_free = is_array($entry['free']) ? array_keys($entry['free']) : array();
    $codes_used = is_array($entry['used']) ? array_keys($entry['used']) : array();
    $all_codes = $exchange->array_concat($codes_total, $codes_free);
    $all_codes = $exchange->array_concat($all_codes, $codes_used);
    $codes_length = count($codes_total);
    $free_length = count($codes_free);
    $used_length = count($codes_used);
    assert(($codes_length === $free_length) || ($codes_length === $used_length), 'free and total and used codes have different lengths' . $log_text);
    for ($i = 0; $i < count($all_codes); $i++) {
        $code = $all_codes[$i];
        // testSharedMethods.assertCurrencyCode (exchange, skippedProperties, method, entry, code);
        assert(is_array($entry['total']) && array_key_exists($code, $entry['total']), 'code ' . $code . ' not in total' . $log_text);
        assert(is_array($entry['free']) && array_key_exists($code, $entry['free']), 'code ' . $code . ' not in free' . $log_text);
        assert(is_array($entry['used']) && array_key_exists($code, $entry['used']), 'code ' . $code . ' not in used' . $log_text);
        $total = $exchange->safe_string($entry['total'], $code);
        $free = $exchange->safe_string($entry['free'], $code);
        $used = $exchange->safe_string($entry['used'], $code);
        assert($total !== null, 'total is undefined' . $log_text);
        assert($free !== null, 'free is undefined' . $log_text);
        assert($used !== null, 'used is undefined' . $log_text);
        assert(Precise::string_ge($total, '0'), 'total is not positive' . $log_text);
        assert(Precise::string_ge($free, '0'), 'free is not positive' . $log_text);
        assert(Precise::string_ge($used, '0'), 'used is not positive' . $log_text);
        $sum_free_used = Precise::string_add($free, $used);
        assert(Precise::string_eq($total, $sum_free_used), 'free and used do not sum to total' . $log_text);
    }
}
