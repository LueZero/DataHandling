<?php

namespace Zero\DataHandling\Interfaces;

interface DataHandingInterface
{
    public function findKeyData($keyName);
    public function dimensionalCompression($keyName);
    public function removeData($keyName);
    public function addData();
    public function sortData();
}
