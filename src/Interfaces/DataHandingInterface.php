<?php

namespace Zero\DataHandling\Interfaces;

interface DataHandingInterface
{
    public function findKeyData($keyName);
    public function findValueData($valueName);
    public function sequenceData($sort);
}
