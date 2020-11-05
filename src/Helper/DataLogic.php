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
}
