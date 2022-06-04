<?php
$name = 'ramdhani lukman';

/* Local */
function localVariable(){
    $umur   = 19;
    echo "Local variable umur = $umur";
}
/* Global */

function globalVariable(){
    global $name;
    echo "Global variable name = $name";
}

function staticVariable(){
    static $var1 = 1;
    $var2   = 1;

    $var1++;
    $var2++;

    echo "Static variable value = $var1";
    echo "Non  Static variable value = $var2";
}


// echo localVariable();
// echo globalVariable();
echo staticVariable();

/* Static */


