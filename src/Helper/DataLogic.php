<?php

namespace Zero\DataHandling\Helper;

trait DataLogic
{
    public static function search_column($data, $key)
    {   
        return (empty(array_column($data, $key)) == true ? $data[$key] : array_column($data, $key));
    }
}
