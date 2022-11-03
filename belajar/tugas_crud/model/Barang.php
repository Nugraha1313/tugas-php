<?php 
include_once './Koneksi.php';
class Barang {
    private $koneksi; 
    public function __construct() {
        global $dbh;
        $this->koneksi = $dbh;
    }
    
    public function dataBarang(){
        $sql = "SELECT barang.id, barang.kode, barang.nama, barang.jumlah, barang.keterangan, satuan.nama AS satuan FROM barang
                INNER JOIN satuan ON barang.SATUAN_ID = satuan.id;
                ORDER BY barang.id ASC";
        //prepare statement
        $stmt = $this->koneksi->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    }

        public function getBarang($id) {
        $sql = "SELECT * FROM barang
                WHERE id = ?
                ORDER BY id ASC";
        $stmt = $this->koneksi->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function simpan($data) {
        $sql = "INSERT INTO barang (kode, nama, jumlah, keterangan, satuan_id) 
                VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->koneksi->prepare($sql);
        $stmt->execute($data);
        
    }

    public function ubah($data) {
        $sql = "UPDATE barang 
                SET kode = ?, nama = ?, jumlah = ?, keterangan = ?, satuan_id = ?
                WHERE id = ?";
        $stmt = $this->koneksi->prepare($sql);
        $stmt->execute($data);
    }
    
    public function hapus($id) {
        $sql = "DELETE FROM barang WHERE id = ?";
        $stmt = $this->koneksi->prepare($sql);
        $stmt->execute($id);
    }

    public function detail($id) {
        $sql = "SELECT barang.id, barang.kode, barang.nama, barang.jumlah, barang.keterangan, satuan.nama AS satuan 
                FROM barang
                INNER JOIN SATUAN 
                ON barang.satuan_id = satuan.id
                WHERE barang.id = ?";
        $stmt = $this->koneksi->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
    // public function detail($id) {
    //     $sql = "SELECT * FROM barang WHERE id = ?";
    //     $stmt = $this->koneksi->prepare($sql);
    //     $stmt->execute([$id]);
    //     return $stmt->fetch();
    // }
    
    
}

?>