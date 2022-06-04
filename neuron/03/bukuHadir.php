<?php
namespace Training\Neuron;


include 'LaporanBulanan.php';

class BukuHadir{
    function listKehadiran(){
        $kehadiran  = [
            ['tanggal' => '2022-06-03','status_kehadiran' => "hadir"],
            ['tanggal' => '2022-06-04','status_kehadiran' => "hadir"]
        ];
        return $kehadiran;
    }   

    function displayLaporanBulanan(){
        $objLaporan     = new LaporanBulanan;
        return $objLaporan->getLaporanBulanan();
    }
}
