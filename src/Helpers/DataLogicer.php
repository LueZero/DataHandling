<?php

namespace Zero\DataHandling\Helpers;

trait DataLogicer
{
    public static function loopArrayKeyData($array, $keyName, &$result = [])
    {
        if (!empty($array)) {

            foreach ($array as $key => $value) {

                if ((string) $key === (string) $keyName) {

                    $result[] = $value;
                    
                } else {

                    if (gettype($value) == 'array') {

                        static::loopArrayKeyData($value, $keyName, $result);
                    }
                }
            }
        }

        return $result;
    }

    public static function loopObjectKeyData($object, $keyName, &$result = [])
    {
        if (!empty($object)) {

            foreach ($object as $key => $value) {

                if ((string) $key === (string) $keyName) {

                    $result[] = $value;
                } else {

                    if (gettype($value) == 'array') {
                        static::loopObjectKeyData($value, $keyName, $result);
                    }
                }
            }
        }

        return (object) $result;
    }

    public static function loopSequenceData(&$data, $sort = '')
    {   
        $data = (array) $data;

        if (static::isAssoc($data)) {
            if ($sort == 'asc') {
                sort($data);
            } else if ($sort == 'desc') {
                arsort($data);
            }
        } else {
            if ($sort == 'asc') {
                sort($data);
            } else if ($sort == 'desc') {
                arsort($data);
            }
        }
        
        foreach ($data as &$a) {
            if (is_array($a))
                static::loopSequenceData($a, $sort);
        }

        return $data;
    }

    public static function isAssoc($arr)
    {   
        return array_keys($arr) !== range(0, count($arr) - 1);
    }
}
