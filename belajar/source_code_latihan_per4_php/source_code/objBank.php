<?php
require 'Bank.php';
//ciptakan object
$neur = new Bank('001','Neur',5000000);
$cr7 = new Bank('007','Ronaldo',7000000);
$salah = new Bank('011','Mohammed Salah',8000000);
$leo = new Bank('030','Messi',9000000);
//use member class
$cr7->menabung(3000000); 
$leo->menabung(5000000);

$neur->menarik(3000000);
$salah->menarik(5000000);

echo '<h3 align="center">'.Bank::BANK.'</h3>';
$neur->mencetak();
$cr7->mencetak();
$salah->mencetak();
$leo->mencetak();
echo 'Jumlah Nasabah: '.Bank::$jml;