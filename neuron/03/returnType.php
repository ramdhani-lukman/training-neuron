<?php
class Process{
    function returnInteger() :int {
        return 10;
    }

    function returnArray():array{
        return [1,2,3];
    }

    function returnString():string{
        return "A";
    }

}

$integer = new Process;

echo $integer->returnInteger();
print_r($integer->returnArray());
echo $integer->returnString();
