<?php 
include_once './Koneksi.php';
class Jabatan {
    private $koneksi; 
    public function __construct() {
        global $dbh;
        $this->koneksi = $dbh;
    }
    
    public function dataJabatan(){
        $sql = "SELECT * FROM jabatan
                ORDER BY id ASC";
        //prepare statement
        $stmt = $this->koneksi->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    }

        public function getJabatan($id) {
        $sql = "SELECT * FROM jabatan
                WHERE id = ?
                ORDER BY id ASC";
        $stmt = $this->koneksi->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function simpan($data) {
        $sql = "INSERT INTO jabatan (kode, nama)
                VALUES (?,?)";
        $stmt = $this->koneksi->prepare($sql);
        $stmt->execute($data);
        
    }

    public function ubah($data) {
        $sql = "UPDATE jabatan 
                SET kode = ?, nama = ?
                WHERE id = ?";
        $stmt = $this->koneksi->prepare($sql);
        $stmt->execute($data);
    }
    
    public function hapus($id) {
        $sql = "DELETE FROM jabatan WHERE id = ?";
        $stmt = $this->koneksi->prepare($sql);
        $stmt->execute($id);
    }

    public function detail($id) {
        $sql = "SELECT * FROM jabatan WHERE id = ?";
        $stmt = $this->koneksi->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
    
}

?>