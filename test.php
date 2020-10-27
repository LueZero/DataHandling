<?php

ini_set('display_errors', '1');
error_reporting(E_ALL);

require_once __DIR__ . '/vendor/autoload.php';

use Zero\DataHandling\DataHandling;

$array = [
    [
        0 => 1234,
        "name" => [1, 2, 3, 4, 5, 6, ["www" => [6, 7, 8]],"zero"=>123],
        "zero" => [1,"zero"=>[222,111]],
    ],
    "zero" => [1, 2, 3 ],
    123,
];
$result = DataHandling::fill()->transForm($array)->findKeyData("zero");

print_r($result);