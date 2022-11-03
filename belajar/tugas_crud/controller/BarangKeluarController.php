<?php 
ob_start(); 
session_start();
require_once '../koneksi.php';
require_once '../model/BarangKeluar.php';

// tangkap data form
$kode_transaksi = 'BK' . $_POST['kode_transaksi'];
$kode_barang = $_POST['kode_barang'];
$tanggal_transaksi = $_POST['tanggal_transaksi'];
$waktu_transaksi = $_POST['waktu_transaksi'];
$jumlah = $_POST['jumlah'];
$satuan_id = $_POST['satuan_id'];
$nip_peminjam = $_POST['nip_peminjam'];
$keterangan = $_POST['keterangan'];

$tombol = $_POST['proses'];

$data = [
    $kode_transaksi, $kode_barang, $tanggal_transaksi, $waktu_transaksi, $jumlah, $satuan_id, $nip_peminjam, $keterangan
];

$obj = new BarangKeluar();
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
        header('Location:../index.php?hal=DataBarangKeluar');
        break;
}

header('Location:../index.php?hal=DataBarangKeluar');

?>