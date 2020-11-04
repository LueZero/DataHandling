<?php

namespace Zero\DataHandling\Approach;

use Zero\DataHandling\Approach\DataProcessing;
use Zero\DataHandling\Interfaces\DataHandingInterface;
use Zero\DataHandling\Helper\DataLogic;

class Objects implements DataHandingInterface
{
    use DataLogic;

    public $input = [];
    public $result = [];

    public function __construct($formatData)
    {
        $this->input = $formatData;
    }

    public function findKeyData($keyName)
    {
        return static::loopObjectKeyData($this->input, $keyName);
    }

    public function dimensionalCompression($keyName)
    {
        foreach ($this->input as $key => $two) {
            foreach ($two as $k => $v) {
                if ($keyName == $k)
                    $this->result[$k][] = $v;
            }
        }
        return $this->result;
    }

    public function removeData($keyName)
    {
    }

    public function addData()
    {
    }

    public function sortData()
    {
    }
}
