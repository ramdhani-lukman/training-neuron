<?php
$topiSaya   = "bundar";

// logical to check condition
if($topiSaya != 'bundar'){
    echo "Bukan topi saya";
}else{
    echo "topi saya";
}

$nilai = 80;
echo '<br>---------------------------------------<br>';
echo $topiSaya == "bundar" ? "topi saya" : "Bukan topi saya";

echo '<br>---------------------------------------<br>';
echo ($nilai>90) ? "Bagus" : ($nilai >= 80 ? "Bagus ugha" : ($nilai >= 70 ? "Biasa ajh" : "Jelek"));