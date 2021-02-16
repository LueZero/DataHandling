<?php

namespace Zero\DataHandling\Approach;

use Zero\DataHandling\Approach\DataProcessing;
use Zero\DataHandling\Approach\DataHandingInterface;
use Zero\DataHandling\Helper\DataLogic;

class Objects implements DataHandingInterface
{
    use DataLogic;

    public $input = [];

    public function __construct($formatData)
    {
        $this->input = $formatData;
    }

    public function findKeyData($keyName)
    {
        return static::loopObjectKeyData($this->input, $keyName);
    }

    public function findValueData($valueName)
    {
        $result = [];
        array_walk_recursive($this->input, function ($value, $key) use ($valueName, &$result) {
            if ($value == $valueName)
                $result[] = $value;
        });
        return (object) $result;
    }

    public function sequenceData($sort)
    {
        return (object) static::loopSequenceData($this->input, strtolower($sort));
    }
}
