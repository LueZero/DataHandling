<?php

namespace Zero\DataHandling\Approach;

use Zero\DataHandling\Approach\DataProcessing;
use Zero\DataHandling\Interfaces\DataHandingInterface;
use Zero\DataHandling\Helper\DataLogic;

class Objects extends DataProcessing implements DataHandingInterface
{

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function column($key)
    {
        print_R($this->data);
    }

    public function cut()
    {
    }

    public function __toString()
    {
        return "World.\n";
    }
}