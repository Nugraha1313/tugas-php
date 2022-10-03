<?php 

require_once "Dosen.php";
require_once "Mahasiswa.php";

// ciptakan objek
$dosen1 = new Dosen('Budi','L','111','S.Kom, M.Kom');
$dosen2 = new Dosen('Siti','P','112','S.T, M.T');
$mahasiswa1 = new Mahasiswa('Deden', 'L', 3, 'TI');
$mahasiswa2 = new Mahasiswa('Mimin', 'P', 5, 'SI');

$data = [$dosen1, $dosen2, $mahasiswa1, $mahasiswa2];

echo '<h3>Data Dosen dan Mahasiswa</h3>';

foreach ($data as $d) {
    $d->cetak();
}


?>