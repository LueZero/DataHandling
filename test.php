<?php

ini_set('display_errors', '1');
error_reporting(E_ALL);

require_once __DIR__ . '/vendor/autoload.php';

use Zero\DataHandling\DataHandling;

$array = (object)[
    [
        "zero" => "456"
    ],
    [
        "zero" => "zero"
    ]
];

$result = DataHandling::fill()->transForm($array)->findKeyData("zero");
$result2 = DataHandling::fill()->transForm($array)->findValueData("zero");
print_r($result);
print_r($result2);