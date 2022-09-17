<?php

namespace Zero\Handling\Approaches;

use Zero\Handling\HandlingInterface;
use Zero\Handling\Approaches\DataProcessing;
use Zero\Handling\Traits\DataProcessor;

class Arrays implements HandlingInterface
{
    use DataProcessor;

    private $inputs = [];

    public function __construct($formatData)
    {
        $this->inputs = $formatData;
    }

    public function findKeyData($keyName)
    {
        return static::loopArrayKeyData($this->inputs, $keyName);
    }

    public function findValueData($valueName)
    {
        $result = [];

        array_walk_recursive($this->inputs, function ($value, $key) use ($valueName, &$result) {
            if ($value == $valueName)
                $result[] = $value;
        });
        
        return $result;
    }

    public function sortData($sort)
    {
        return static::sortLoopData($this->inputs, strtolower($sort));
    }
}
