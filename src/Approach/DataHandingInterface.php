<?php

namespace Zero\DataHandling\Approach;

interface DataHandingInterface
{
    public function findKeyData($keyName);
    public function findValueData($valueName);
    public function sequenceData($sort);
}
