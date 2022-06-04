<?php
$pesanKonfirmasi    = "Selamat, 
Anda berhak mendapatkan hadiah mobil ABCD";
// echo $pesanKonfirmasi;

$name  = "Ramdhani";

/* Herodoc */
$pesan = <<<TEXT
Selamat, $name
Anda berhak mendapatkan hadiah mobil ABCD
TEXT;
echo $pesan;
echo "\n";

/* Nerdoc */
$pesan = <<<'TEXT'
Selamat, $name
Anda berhak mendapatkan hadiah mobil ABCD
TEXT;

echo $pesan;