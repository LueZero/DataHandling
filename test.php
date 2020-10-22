<?php

ini_set('display_errors', '1');
error_reporting(E_ALL);

require_once __DIR__ . '/vendor/autoload.php';

use Zero\DataHandling\DataHandling;

$array = [
  ["name"=>[1,2,3,4,5,6,["www"=>[6,7,8]]]],
  "zero"=>[1,2,3]
];
// $array = json_encode(["name" => [1, 2, 3]]);

$result = DataHandling::fill()->format($array)->column("zero");
print_r($array);
print_r($result);
