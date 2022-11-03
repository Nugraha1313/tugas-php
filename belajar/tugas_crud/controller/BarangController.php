<?php 
ob_start(); 
session_start();
require_once '../koneksi.php';
require_once '../model/Barang.php';

// tangkap data form
$kode = $_POST['kode'];
$nama = $_POST['nama'];
$jumlah = $_POST['jumlah'];
$keterangan = $_POST['keterangan'];
$satuan_id = $_POST['satuan_id'];

$tombol = $_POST['proses'];

$data = [
    $kode,
    $nama,
    $jumlah,
    $keterangan,
    $satuan_id
];

$obj = new Barang();
switch($tombol) {
    case 'simpan':
        $obj->simpan($data);
        break;
    case 'ubah':
        $data[] = $_POST['idx'];
        $obj->ubah($data);
        break;
    case 'hapus':
        $id[] = $_POST['idx'];
        $obj->hapus($id);
        break;
    case 'detail':
        $id[] = $_POST['idx'];
        $obj->detail($id);
        break;
    default :
        header('Location:../index.php?hal=DataBarang');
        break;
}

header('Location:../index.php?hal=DataBarang');

?>