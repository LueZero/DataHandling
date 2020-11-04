<?php

ini_set('display_errors', '1');
error_reporting(E_ALL);

require_once __DIR__ . '/vendor/autoload.php';

use Zero\DataHandling\DataHandling;

$array = (object)[
    [
        "zero" => [1, "zero" => [222, 111]],
    ],
    [
        "zero" => [1, "zero" => [222, 111]],
    ],
];
// $result = DataHandling::fill()->transForm($array)->findKeyData("zero");
// $result = DataHandling::fill()->transForm($array)->twoDimensionalCompression("zero");
// $result = DataHandling::fill()->object()->randomData(["name", "phone", "email",],3);
print_r($result);
