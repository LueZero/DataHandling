<?php

namespace Zero;

use Zero\Approaches\ApproachesInterface;
use Zero\Approaches\Arrays;
use Zero\Approaches\Objects;

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
     * @return \Zero\Approaches\ApproachesInterface
     */
    public static function get()
    {
        return new DataProcessing();
    }

    /**
     * 資料轉換
     * @return \Zero\Approaches\ApproachesInterface
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
