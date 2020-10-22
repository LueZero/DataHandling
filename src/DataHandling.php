<?php 
namespace Zero\DataHandling;

use Zero\DataHandling\Approach\Arrays;
use Zero\DataHandling\Approach\Objects;

class DataHandling {

    /**
     * 填入資料
     */
    public static function fill() 
    {   
        return new DataHandling();
    }

    /**
     * 格式
     */
    public function format($data)
    {
        if (method_exists($this, gettype($data))) {
            return $this->{gettype($data)}($data);
        }
    }

    /**
     * 陣列處理
     */
    public function array($data)
    {   
        return new Arrays($data);
    }

    /**
     * JSON處理
     */
    public function object($data)
    {
        return new Objects($data);
    }
}