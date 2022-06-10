<?php
$fruits     = ['Manggo','Melon','Apple'];
$serialize  = serialize($fruits);
echo $serialize;
echo "\n";
$unserialize = unserialize($serialize);
echo '<pre>'; print_r($unserialize) ;echo '</pre>';
echo "\n";
echo json_encode($fruits);