<?php

namespace Zero\DataHandling;

use Exception;
use Zero\DataHandling\Approaches\Arrays;
use Zero\DataHandling\Approaches\Objects;
use Zero\DataHandling\Approaches\DataHandingInterface;

class DataHandling
{
    protected $formatData;

    protected $type = [
        'boolean', 
        'string',
        'integer',
        'double', 
        'NULL', 
        'unknown type'
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
    public function transForm($data): DataHandingInterface
    {
        $this->formatData = $data;
        if(in_array(gettype($data),$this->type)){
            throw new Exception('資料類型不支持');
        }
        return $this->{gettype($data)}();
    }

    /**
     * Array處理
     */
    public function array()
    {  
        return new Arrays($this->formatData);
    }

    /**
     * JSON處理
     */
    public function object()
    {
        return new Objects($this->formatData);
    }
}