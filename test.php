<?php

ini_set('display_errors', '1');
error_reporting(E_ALL);

require_once __DIR__ . '/vendor/autoload.php';

use Zero\DataHandling\DataHandling;

$array = (object) [
   [
      'zero' => [ '1', '2', '4' ]
   ],
   [
      'zero' => [ '2', '1', '3' ]
   ]
];

$result = DataHandling::fill()->transForm($array)->findKeyData('zero');

$result = DataHandling::fill()->transForm($array)->findValueData('zero');

$result = DataHandling::fill()->transForm($array)->sequenceData('asc');

print_r($result);
