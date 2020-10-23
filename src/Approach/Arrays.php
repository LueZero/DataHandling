<?php

namespace Zero\DataHandling\Approach;

use Zero\DataHandling\Approach\DataProcessing;
use Zero\DataHandling\Interfaces\DataHandingInterface;
use Zero\DataHandling\Helper\DataLogic;

class Arrays extends DataProcessing implements DataHandingInterface
{
    use DataLogic;

    public function __construct($format_data)
    {
        $this->data = $format_data;
    }

    public function column($key)
    {
        return static::search_column($this->data,$key);
    }

    public function cut()
    {
        
    }
}