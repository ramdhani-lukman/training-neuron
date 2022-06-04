<?php
$kendaraan  = ['motor','mobil','sepeda'];
$kendaraan2 = ['kijang','suzuki'];

/* menggabungkan array */
$mergeArray     = array_merge($kendaraan,$kendaraan2);

/* Mencari value pada sebuah array */
$inArray    = in_array('motor',$kendaraan); // true;

/* Mencari key pada sebuah asosiatif array */
$smartphone = ['ram' => '4gb','os' => "Android 10"];
$arrayExists = key_exists('ram',$smartphone); // true

