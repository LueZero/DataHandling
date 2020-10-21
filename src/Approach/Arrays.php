<?php
namespace Zero\DataHandling\Approach;

use Zero\DataHandling\Interfaces\DataInterface;

class Arrays implements DataInterface {

    public function map()
    {
        return $this;
    }

    public function cut()
    {
      
    }

    public function __toString()
    {
        return "World.\n";
    }
}