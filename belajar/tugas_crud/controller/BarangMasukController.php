<?php 
ob_start(); 
session_start();
require_once '../koneksi.php';
require_once '../model/BarangMasuk.php';

// tangkap data form
$kode_transaksi = 'BM' . $_POST['kode_transaksi'];
$kode_barang = $_POST['kode_barang'];
$tanggal_transaksi = $_POST['tanggal_transaksi'];
$waktu_transaksi = $_POST['waktu_transaksi'];
$jumlah = $_POST['jumlah'];
$satuan_id = $_POST['satuan_id'];
$nip_pemberi = $_POST['nip_pemberi'];
$keterangan = $_POST['keterangan'];

$tombol = $_POST['proses'];

$data = [
    $kode_transaksi, $kode_barang, $tanggal_transaksi, $waktu_transaksi, $jumlah, $satuan_id, $nip_pemberi, $keterangan
];

$obj = new BarangMasuk();
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
        header('Location:../index.php?hal=DataBarangMasuk');
        break;
}

header('Location:../index.php?hal=DataBarangMasuk');

?>