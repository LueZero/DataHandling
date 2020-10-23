<?php

namespace Zero\DataHandling;

use Exception;
use Zero\DataHandling\Approach\Arrays;
use Zero\DataHandling\Approach\Objects;

class DataHandling
{      
    private $format_data;

    private $type = [
        "boolean", 
        "string",
        "integer",
        "double", 
        "NULL", 
        "unknown type"
    ];

    /**
     * 填入資料
     */
    public static function fill()
    {
        return new DataHandling();
    }

    /**
     * 資料轉換
     */
    public function transform($data)
    {
        $this->format_data = $data;
        if(in_array(gettype($data),$this->type)){
            throw new Exception("資料類型不支持");
        }
        return $this->{gettype($data)}();
    }

    /**
     * Array處理
     */
    public function array()
    {  
        return new Arrays($this->format_data);
    }

    /**
     * JSON處理
     */
    public function object()
    {
        return new Objects($this->format_data);
    }
}