<?php
$kendaraan  = ['z','motor','mobil','sepeda'];

asort($kendaraan);
// print_r($kendaraan);
echo '<br>---------------------------------------<br>';
rsort($kendaraan);
// print_r($kendaraan);
echo '<br>---------------------------------------<br>';

$string = "Hello world";
$slug   = explode(" ",$string);
print_r($slug);