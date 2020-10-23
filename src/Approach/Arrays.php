<?php

namespace Zero\DataHandling\Approach;

use Zero\DataHandling\Approach\DataProcessing;
use Zero\DataHandling\Interfaces\DataHandingInterface;
use Zero\DataHandling\Helper\DataLogic;

class Arrays extends DataProcessing implements DataHandingInterface
{

    use DataLogic;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function column($key)
    {
        return DataLogic::search_column($this->data, $key);
    }

    public function cut()
    {
    }

    public function __toString()
    {
        return json_encode($this->result);
    }
}