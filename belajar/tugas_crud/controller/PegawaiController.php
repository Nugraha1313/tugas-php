<?php 
ob_start(); 
session_start();
require_once '../koneksi.php';
require_once '../model/Pegawai.php';

// tangkap data form
$nip = $_POST['nip'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$alamat = $_POST['alamat'];
$jabatan_id = $_POST['jabatan_id'];
$tombol = $_POST['proses'];

$data = [
    $nip, $nama, $jenis_kelamin, $tempat_lahir, $tanggal_lahir, $alamat, $jabatan_id  
];

$obj = new Pegawai();
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
        header('Location:../index.php?hal=DataPegawai');
        break;
}

header('Location:../index.php?hal=DataPegawai');

?>