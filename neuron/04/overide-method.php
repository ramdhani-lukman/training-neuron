<?php
Class Foo{
    function bar(){
        echo "This Function bar from class Parent";
    }
}

Class Bar extends Foo{
    function bar(){
        echo "OVERIDED";
    }
}

$bar    = new Bar;
$bar->bar();