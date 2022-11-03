<?php 
ob_start(); 
session_start();
require_once '../koneksi.php';
require_once '../model/Jabatan.php';

// tangkap data form
$kode = $_POST['kode'];
$nama = $_POST['nama'];
$tombol = $_POST['proses'];

$data = [
    $kode,
    $nama
];

$obj = new Jabatan();
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
        header('Location:../index.php?hal=DataJabatan');
        break;
}

header('Location:../index.php?hal=DataJabatan');

?>