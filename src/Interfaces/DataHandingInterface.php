<?php

namespace Zero\DataHandling\Interfaces;

interface DataHandingInterface
{
    public function findKeyData($keyName);
    public function twoDimensionalCompression($keyName);
    public function randomData($format, $floor=null);
}
