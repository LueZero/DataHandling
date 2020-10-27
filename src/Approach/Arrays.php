<?php

namespace Zero\DataHandling\Approach;

use Zero\DataHandling\Approach\DataProcessing;
use Zero\DataHandling\Interfaces\DataHandingInterface;
use Zero\DataHandling\Helper\DataLogic;

class Arrays implements DataHandingInterface
{
    use DataLogic;

    public function __construct($formatData)
    {
        $this->input = $formatData;
    }

    public function column($keyName)
    {
        $result = [];
        foreach ($this->input as $key => $value) {
            $key."@".gettype($value)."\n";
            if(gettype($value) == "array") {

                

            }
        }
        return [];
    }

    public function cut()
    {


    }
}
