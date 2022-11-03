<?php 
ob_start(); 
session_start();
require_once '../koneksi.php';
require_once '../model/TransaksiBarang.php';

// tangkap data form
// $kode = $_POST['kode'];
// $nama = $_POST['nama'];
// $kondisi = $_POST['kondisi'];
// $harga = $_POST['harga'];
// $stok = $_POST['stok'];
// $id_jenis = $_POST['id_jenis'];
// $foto = $_POST['foto'];
// $tombol = $_POST['proses'];

// $data = [
//     $kode,
//     $nama,
//     $kondisi,
//     $harga,
//     $stok,
//     $id_jenis,
//     $foto  
// ];

// $obj = new Pegawai();
// switch($tombol) {
//     // case 'simpan':
//     //     $obj->simpan($data);
//     //     break;
//     // case 'ubah':
//     //     $data[] = $_POST['idx'];
//     //     $obj->ubah($data);
//     //     break;
//     // case 'hapus':
//     //     $id[] = $_POST['idx'];
//     //     $obj->hapus($id);
//     //     break;
//     // case 'detail':
//     //     $id[] = $_POST['idx'];
//     //     $obj->detail($id);
//     //     break;
//     default :
//         header('Location:../index.php?hal=DataPegawai');
//         break;
// }

// header('Location:../index.php?hal=DataPegawai');

?>