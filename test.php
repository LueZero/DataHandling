<?php

ini_set('display_errors', '1');
error_reporting(E_ALL);

require_once __DIR__ . '/vendor/autoload.php';

use Zero\DataHandling\DataHandling;

$array = [
    [
        "1" => [1, "zero" => [222, 111]],
    ],
    [
        "2" => [1, "zero" => [222, 111]],
    ],
];
// $result = DataHandling::fill()->transForm($array)->findKeyData("zero");
// $result = DataHandling::fill()->transForm($array)->twoDimensionalCompression("zero");

print_r($result);
