<?php

ini_set('display_errors', '1');
error_reporting(E_ALL);

require_once __DIR__ . '/vendor/autoload.php';

use Zero\Handling\DataProcessing;

$array = (object) [
   [
      'zero' => [ '1', '2', '4' ]
   ],
   [
      'zero' => [ '2', '1', '3' ]
   ]
];

$result = DataProcessing::get()->transForm($array)->findKeyData('zero');

$result = DataProcessing::get()->transForm($array)->findValueData('zero');

$result = DataProcessing::get()->transForm($array)->sortData('asc');

print_r($result);
