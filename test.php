<?php

ini_set('display_errors', '1');
error_reporting(E_ALL);

require_once __DIR__ . '/vendor/autoload.php';

use Zero\DataHandling\DataHandling;

$array = [1,2,3];
$result = DataHandling::fill($array)->format(["key"])->map();
echo $result;
