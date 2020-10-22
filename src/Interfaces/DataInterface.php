<?php
namespace Zero\DataHandling\Interfaces;

interface DataInterface {
    public function column($key);
    public function cut();
}