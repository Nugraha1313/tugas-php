<?php 
ob_start(); 
session_start();
require_once '../koneksi.php';
require_once '../model/Member.php';

// tangkap data form
$username = $_POST['username'];
$password = $_POST['password'];

$data = [
    $username, //? pertama
    $password //? kedua
];

$obj = new Member();
$result = $obj->cekLogin($data);
if(!(empty($result))) {
    // simpan session
    $_SESSION['MEMBER'] = $result;
    // landing page
    header('Location:../index.php?hal=DataProduk');
}
else {
    header('Location:../index.php?hal=GagalLogin');
    
}
// header('Location:../index.php?hal=DataProduk');

?>