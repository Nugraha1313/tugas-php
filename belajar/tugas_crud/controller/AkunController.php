<?php 
ob_start(); 
session_start();
require_once '../koneksi.php';
require_once '../model/Akun.php';

$obj = new Akun();
// tangkap data form
$username = $_POST['username'];
$password = $_POST['password'];
// getKesamaanPass
$id_user= $_POST['idx'];
// artinya password idak diubah samsek artinyo dakk usah update password nyo jadi tetaap


// perkondisian
$jabatan = $_POST['jabatan'];
$foto = $_POST['foto'];
$pegawai_nip = $_POST['pegawai_nip'];
$tombol = $_POST['proses'];
// if($id_user != null && $password != null) {
//     if($obj->getKesamaanPass($id_user,$password)== true) {
//         $_SESSION['pass_sama'] = 'password sama';
//         $data = [$username,$jabatan,$foto,$pegawai_nip];
//     }
// }
// else {
    
// $data = [
//     $username, //? pertama
//     $password, //? kedua
//     $jabatan,
//     $foto,
//     $pegawai_nip
// ];
// }
$data = [
    $username, //? pertama
    $password, //? kedua
    $jabatan,
    $foto,
    $pegawai_nip
];
switch($tombol) {
    case 'simpan':
        $obj->simpan($data);
        break;
    case 'ubah':
        // tangkap hiddep field untuk where id
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
        header('Location:../index.php?hal=DataAkun');
        break;
}

header('Location:../index.php?hal=DataAkun');










/* $obj = new Akun();
$result = $obj->cekLogin($data);
if(!(empty($result))) {
    $_SESSION['LOGIN'] = $result;
    header('Location:../index.php?hal=home');
}
else {
    header('Location:../index.php?hal=GagalLogin');
    
} */

?>