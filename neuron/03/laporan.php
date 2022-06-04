<?php
use Training\Neuron;
use Training\Neuron\BukuHadir;
use Training\Neuron\LaporanBulanan;

include 'bukuHadir.php';
$me             = new Neuron\BukuHadir;
$listKehadiran  = $me->listKehadiran();

echo '<pre>'; print_r($listKehadiran) ;echo '</pre>';

echo '<br>---------------------------------------<br>';

$laporanBulanan     = new BukuHadir;
echo $laporanBulanan->displayLaporanBulanan();