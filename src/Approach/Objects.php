<?php

namespace Zero\DataHandling\Approach;

use Zero\DataHandling\Approach\DataProcessing;
use Zero\DataHandling\Interfaces\DataHandingInterface;
use Zero\DataHandling\Helper\DataLogic;

class Objects implements DataHandingInterface
{
    use DataLogic;

    public function column($key)
    {
      
    }

    public function cut()
    {
        
    }

    public function __toString()
    {
        return "World.\n";
    }
}