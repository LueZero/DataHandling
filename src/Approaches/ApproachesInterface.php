<?php

namespace Zero\Approaches;

interface ApproachesInterface
{
    public function findKeyData($keyName);
    public function findValueData($valueName);
    public function sortData($sort);
}
