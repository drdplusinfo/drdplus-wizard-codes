<?php
declare(strict_types = 1); // on PHP 7+ are standard PHP methods strict to types of given parameters

require_once __DIR__ . '/../../vendor/autoload.php';

error_reporting(-1);
ini_set('display_errors', '1');

ini_set('xdebug.max_nesting_level', '100');

if ((int)ini_get('zend.assertions') !== 1) {
    trigger_error("Assert() wil not be evaluated. Please set in on in php.ini for testing\n", E_USER_WARNING);
}
ini_set('assert.active', '1'); // enable assert() evaluation
ini_set('assert.exception', '1'); // throw an exception instead of an error