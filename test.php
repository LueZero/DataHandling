<?php

ini_set('display_errors', '1');
error_reporting(E_ALL);

require_once __DIR__ . '/vendor/autoload.php';

use Zero\DataHandling\DataHandling;

$array = [
    [
       "zero"=>"1","2","4"
    ],
    [
       "zero"=>"1","2","4"
    ]
];

$result = DataHandling::fill()->transForm($array)->findKeyData("zero");

$result = DataHandling::fill()->transForm($array)->findValueData("zero");

$result = DataHandling::fill()->transForm($array)->sequenceData("desc");

print_r($result);