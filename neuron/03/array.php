<?php
$kendaraan = ['motor','mobil','sepeda'];

echo "Jumlah item pada array kendaraan adalah : ".count($kendaraan);
echo '<br>---------------------------------------<br>';
$removeSpaceArray = array_map('trim',$kendaraan);
print_r($removeSpaceArray);

$upperArray         = array_map('trim',$kendaraan);
print($kendaraan);

$rangeGaji          = [10000,20000,30000,100202,203000,40000];

function rupiah($jumlah){
    return number_format($jumlah,0,',','.');
}

print_r(array_map('rupiah',$rangeGaji));
