<?php

namespace Zero\DataHandling\Approaches;

use Zero\DataHandling\Approaches\DataProcessing;
use Zero\DataHandling\Approaches\DataHandingInterface;
use Zero\DataHandling\Helpers\DataLogic;

class Objects implements DataHandingInterface
{
    use DataLogic;

    private $inputs = [];

    public function __construct($formatData)
    {
        $this->inputs = $formatData;
    }

    public function findKeyData($keyName)
    {
        return static::loopObjectKeyData($this->inputs, $keyName);
    }

    public function findValueData($valueName)
    {
        $result = [];
        array_walk_recursive($this->inputs, function ($value, $key) use ($valueName, &$result) {
            if ($value == $valueName)
                $result[] = $value;
        });
        return (object) $result;
    }

    public function sequenceData($sort)
    {
        return (object) static::loopSequenceData($this->inputs, strtolower($sort));
    }
}
