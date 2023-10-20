<?php
namespace ccxt;
use \ccxt\Precise;
use React\Async;
use React\Promise;

// ----------------------------------------------------------------------------

// PLEASE DO NOT EDIT THIS FILE, IT IS GENERATED AND WILL BE OVERWRITTEN:
// https://github.com/ccxt/ccxt/blob/master/CONTRIBUTING.md#how-to-contribute-code

// -----------------------------------------------------------------------------
include_once __DIR__ . '/../base/test_account.php';

function test_fetch_accounts($exchange, $skipped_properties) {
    return Async\async(function () use ($exchange, $skipped_properties) {
        $method = 'fetchAccounts';
        $accounts = Async\await($exchange->fetch_accounts());
        assert(gettype($accounts) === 'array' && array_keys($accounts) === array_keys(array_keys($accounts)), $exchange->id . ' ' . $method . ' must return an object. ' . $exchange->json($accounts));
        for ($i = 0; $i < count($accounts); $i++) {
            test_account($exchange, $skipped_properties, $method, $accounts[$i]);
        }
    }) ();
}
