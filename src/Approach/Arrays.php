<?php
namespace Zero\DataHandling\Approach;

use Zero\DataHandling\Interfaces\DataInterface;

class Arrays implements DataInterface {

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function column($key)
    {
        return ( empty(array_column($this->data,$key)) == true ? $this->data[$key] : array_column($this->data,$key));
    }

    public function cut()
    {
      
    }

    public function __toString()
    {
        return json_encode($this->result);
    }
}