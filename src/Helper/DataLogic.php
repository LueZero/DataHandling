<?php

namespace Zero\DataHandling\Helper;

trait DataLogic
{
    public static function loopArrayKeyData($array, $keyName, &$result = [])
    {
        if (!empty($array)) {

            foreach ($array as $key => $value) {

                if ($key === $keyName) {

                    $result[] = $value;
                } else {

                    if (gettype($value) == "array") {

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

                if ($key === $keyName) {

                    $result[] = $value;
                } else {

                    if (gettype((object)$value) == "object") {

                        static::loopObjectKeyData($value, $keyName, $result);
                    }
                }
            }
        }
        return (object) $result;
    }

    public static function loopSequenceData($data, $sort = "asc")
    {
        foreach ($data as $key => &$value) {

            if (gettype($value) == "array") {

                usort($value, function ($a, $b) use ($sort) {
                    if ($sort == "asc") {
                        return $a >= $b;
                    } else if ($sort == "desc") {
                        return $a <= $b;
                    } else {
                        return $a >= $b;
                    }
                });
         
                static::loopSequenceData($value);
            }
        }
        return $data;
    }
}
