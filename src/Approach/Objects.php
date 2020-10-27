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
    
    public function findKeyData($key)
    {
      
    }

    public function __toString()
    {
        return "World.\n";
    }
}