<?php

namespace Zero\DataHandling\Approach;

use Zero\DataHandling\Approach\DataProcessing;
use Zero\DataHandling\Interfaces\DataHandingInterface;
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

    public function twoDimensionalCompression($keyName)
    {
        $result = [];
        foreach ($this->input as $key => $two) {
            foreach ($two as $k => $v) {
                if ($keyName == $k)
                    $result[$k][] = $v;
            }
        }
        return $result;
    }

    public function __toString()
    {
        return "World.\n";
    }
}