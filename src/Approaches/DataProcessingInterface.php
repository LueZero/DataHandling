<?php

namespace Zero\DataHandling\Approaches;

interface DataProcessingInterface
{
    public function findKeyData($keyName);
    public function findValueData($valueName);
    public function sortData($sort);
}
