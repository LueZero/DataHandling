<?php

namespace Zero\Handling;

interface HandlingInterface
{
    public function findKeyData($keyName);
    public function findValueData($valueName);
    public function sortData($sort);
}
