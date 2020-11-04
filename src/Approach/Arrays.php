<?php

namespace Zero\DataHandling\Approach;

use Zero\DataHandling\Approach\DataProcessing;
use Zero\DataHandling\Interfaces\DataHandingInterface;
use Zero\DataHandling\Helper\DataLogic;

class Arrays implements DataHandingInterface
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
        return static::loopArrayKeyData($this->input, $keyName);
    }

    public function twoDimensionalCompression($keyName)
    {
        $result = [];
        foreach ($this->input as $key => $two) {
            foreach ($two as $k => $v) {
                if ($keyName == $k)
                    $this->result[$k][] = $v;
            }
        }
        return $this->result;
    }

    public function randomData($format,$floor=null)
    {
        foreach ($format as $value) {
            if(!empty($floor)){
                for ($i=0; $i < $floor; $i++) {
                    $this->result[$i][$value] = rand(0, 99999);
                }
            }else{
                $this->result[$value] = rand(0, 99999);
            }
        }
        return $this->result;
    }
}
