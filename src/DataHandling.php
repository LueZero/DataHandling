<?php

namespace Zero\DataHandling;

use Zero\DataHandling\Approach\Arrays;
use Zero\DataHandling\Approach\Objects;

class DataHandling
{       
    private $format_data = [];

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
    public function format($data,$format)
    {
        return $this->{gettype($data)}();
    }

    /**
     * 資料轉換
     */
    public function transform($data)
    {
        $this->format_data = json_decode($data,true);
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