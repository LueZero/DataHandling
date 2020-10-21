<?php 
namespace Zero\DataHandling;

use Zero\DataHandling\Approach\Arrays;
use Zero\DataHandling\Approach\Json;

class DataHandling {
    /**
     * 數據資料
     */
    private $data;

    /**
     * 類型
     */
    private $type;

    /**
     * 最變成的格式
     */
    private $format;

    public function __construct($array)
    {
       $this->array = $array;
    }

    /**
     * 填入資料
     */
    public static function fill($array) 
    {   
        return new DataHandling($array);
    }

    /**
     * 格式
     */
    public function format($format)
    {
        $this->format = $format;
        return $this->{gettype($this->array)}();
    }

    /**
     * 陣列處理
     */
    public function array()
    {
        return new Arrays();
    }

    /**
     * JSON處理
     */
    public function json()
    {
        return new Json();
    }
}