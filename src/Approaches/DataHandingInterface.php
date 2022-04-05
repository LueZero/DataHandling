<?php

namespace Zero\DataHandling\Approaches;

interface DataHandingInterface
{
    public function findKeyData($keyName);
    public function findValueData($valueName);
    public function sequenceData($sort);
}
