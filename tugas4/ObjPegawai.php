<?php 

require 'Pegawai.php';

$pegawai1 = new Pegawai(1001, 'Nur Budi Dzat Wesi', 'Manager', 'Islam', 'Menikah');
$pegawai2 = new Pegawai(1002, 'Budi Yo Wesi', 'Asmen', 'Islam', 'Belum Menikah');
$pegawai3 = new Pegawai(1003, 'Gus Samsudin', 'Kabag', 'Kristen', 'Menikah');
$pegawai4 = new Pegawai(1004, 'Dimas Mabar', 'Kabag', 'Buddha', 'Belum Menikah');
$pegawai5 = new Pegawai(1005, 'Sumanto', 'Staff', 'Islam', 'Menikah');


$pegawai = [$pegawai1, $pegawai2, $pegawai3, $pegawai4, $pegawai5];


// foreach ($pegawai as $p) {
    # code...
    // $p->mencetak();
// }

// $pegawai1->mencetak();
// $pegawai2->mencetak();
// $pegawai3->mencetak();
// $pegawai4->mencetak();
// $pegawai5->mencetak();


?>