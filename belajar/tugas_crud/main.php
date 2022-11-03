<?php 

$hal = $_REQUEST['hal'];

if(!empty($hal) && ($hal == 'DataBarangMasuk' || $hal == 'DataBarang' || $hal == 'DataBarangKeluar' 
    || $hal == 'DataJabatan' || $hal == 'DataSatuan' || $hal == 'GagalLogin'
    || $hal == 'DataPegawai' || $hal == 'DataAkun' || $hal == 'DataTransaksiBarang'
    || $hal == 'DetailSatuan' || $hal == 'FormEditSatuan' || $hal == 'FormSatuan' 
    || $hal == 'DetailJabatan' || $hal == 'FormEditJabatan' || $hal == 'FormJabatan'
    || $hal == 'DetailAkun' || $hal == 'FormEditAkun' || $hal == 'FormAkun' 
    || $hal == 'DetailPegawai' || $hal == 'FormEditPegawai' || $hal == 'FormPegawai'
    || $hal == 'DetailBarang' || $hal == 'FormEditBarang' || $hal == 'FormBarang'
    || $hal == 'DetailBarangMasuk' || $hal == 'FormEditBarangMasuk' || $hal == 'FormBarangMasuk'
    || $hal == 'DetailBarangKeluar' || $hal == 'FormEditBarangKeluar' || $hal == 'FormBarangKeluar'
    || $hal == 'FormLogin' || $hal == 'DetailMember') ) {
    include_once $hal . '.php';
}
else {
    include_once 'home.php';
}
?>