<?php 
include_once './Koneksi.php';
class Home {
    private $koneksi; 
    public function __construct() {
        global $dbh;
        $this->koneksi = $dbh;
    }

    public function banyakAkun(){
        $sql = "SELECT count(*)  FROM akun";
        //prepare statement
        $stmt = $this->koneksi->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    }
    public function banyakPegawai(){
        $sql = "SELECT count(*)  FROM pegawai";
        //prepare statement
        $stmt = $this->koneksi->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    }
    public function banyakJabatan(){
        $sql = "SELECT count(*)  FROM jabatan";
        //prepare statement
        $stmt = $this->koneksi->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    }
    public function banyakSatuan(){
        $sql = "SELECT count(*)  FROM satuan";
        //prepare statement
        $stmt = $this->koneksi->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    }
    public function banyakBarang(){
        $sql = "SELECT count(*)  FROM barang";
        //prepare statement
        $stmt = $this->koneksi->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    }
    public function banyakTransaksi(){
        $sql = "SELECT COUNT(*) AS jumlah_transaksi FROM
                (SELECT * FROM barang_masuk 
                UNION 
                SELECT * FROM barang_keluar) tbl1;";
        //prepare statement
        $stmt = $this->koneksi->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    }


    
}

?>