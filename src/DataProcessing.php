<?php

namespace Zero\Handling;

use Zero\Handling\HandlingInterface;
use Zero\Handling\Approaches\Arrays;
use Zero\Handling\Approaches\Objects;

class DataProcessing
{
    protected $inputs;

    protected $banTypes = [
        'boolean',
        'string',
        'integer',
        'double',
        'NULL',
        'unknown type'
    ];

    /**
     * 取得
     * @return \Zero\Handling\HandlingInterface
     */
    public static function Get()
    {
        return new DataProcessing();
    }

    /**
     * 資料轉換
     * @return \Zero\Handling\Approaches\HandlingInterface
     */
    public function transForm($data)
    {
        $this->inputs = $data;

        if (in_array(gettype($data), $this->banTypes)) {
            throw new \Exception('資料類型不支持 ' . gettype($data));
        }

        return $this->{gettype($this->inputs)}();
    }

    /**
     * Array處理
     */
    public function array()
    {
        return new Arrays($this->inputs);
    }

    /**
     * JSON處理
     */
    public function object()
    {
        return new Objects($this->inputs);
    }
}
