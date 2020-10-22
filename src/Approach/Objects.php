<?php
namespace Zero\DataHandling\Approach;

use Zero\DataHandling\Interfaces\DataInterface;

class Objects implements DataInterface {

    public $data;

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
