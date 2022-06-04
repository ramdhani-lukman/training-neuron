<?php
class Shape{
    const pi = 3.14;

    function __call($name,$args){
        if($name == 'area'){
            switch(count($args)){
                case 0 : return 0;
                case 1 : return self::pi*$args[0];
                case 2 : return $args[0]*$args[1];
            }
        }   
    }
}

$circle  = new Shape(10);
echo $circle->area(3);
echo "\n";
$rect   = new Shape();
echo $rect->area(10,10);