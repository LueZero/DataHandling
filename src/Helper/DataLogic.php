<?php

namespace Zero\DataHandling\Helper;

trait DataLogic
{   
    public static function loopArrayKeyData(array $array,string $keyName,array &$result=[]) 
    {
        if(!empty($array)){
           
            foreach ($array as $key => $value) {
                
                if($key === $keyName){

                    $result[] = $value;

                }else{
                 
                    if(gettype($value) == "array") {
                     
                        static::loopArrayKeyData($value,$keyName,$result);
    
                    }
                }

            }
        }
        return $result;
    }
}
