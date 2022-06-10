<?php
class MyObject{
    static $instance;

    public function __construct(){
        $this->instance = ++self::$instance;
    }   

    public function __clone(){
        $this->instance = ++self::$instance;
    }
}

$object1 = new MyObject;
print_r($object1);

$object2 = clone $object1;
print_r($object2);