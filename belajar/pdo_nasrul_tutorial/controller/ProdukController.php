<?php 
require_once '../koneksi.php';
require_once '../model/Produk.php';

// tangkap data form
$kode = $_POST['kode'];
$nama = $_POST['nama'];
$kondisi = $_POST['kondisi'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$id_jenis = $_POST['id_jenis'];
$foto = $_POST['foto'];

$data = [
    $kode,
    $nama,
    $kondisi,
    $harga,
    $stok,
    $id_jenis,
    $foto  
];

$obj = new Produk();
$obj->simpan($data);

// header('location:http://localhost:8080/tugas-php/belajar/pdo_nasrul_tutorial/DataProduk.php');
header('location:../DataProduk.php');

?>