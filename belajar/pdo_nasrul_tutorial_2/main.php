<?php 

$hal = $_REQUEST['hal'];

if(!empty($hal) && ($hal == 'FormProduk' || $hal == 'DataProduk' 
    || $hal == 'FormEditProduk' || $hal == 'DetailProduk' || $hal == 'GagalLogin'
    || $hal == 'FormLogin') ) {
    include_once $hal . '.php';
}
else {
    include_once 'home.php';
}
?>