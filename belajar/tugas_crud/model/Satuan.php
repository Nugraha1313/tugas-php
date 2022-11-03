<?php 
include_once './Koneksi.php';
class Satuan {
    private $koneksi; 
    public function __construct() {
        global $dbh;
        $this->koneksi = $dbh;
    }
    
    public function dataSatuan(){
        $sql = "SELECT * FROM satuan
                ORDER BY id ASC";
        //prepare statement
        $stmt = $this->koneksi->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    }

        public function getSatuan($id) {
        $sql = "SELECT * FROM satuan
                WHERE id = ?
                ORDER BY id ASC";
        $stmt = $this->koneksi->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch();
    }


    public function simpan($data) {
        $sql = "INSERT INTO satuan (nama)
                VALUES (?)";
        $stmt = $this->koneksi->prepare($sql);
        $stmt->execute($data);
        
    }

    public function ubah($data) {
        $sql = "UPDATE satuan 
                SET nama = ?
                WHERE id = ?";
        $stmt = $this->koneksi->prepare($sql);
        $stmt->execute($data);
    }
    
    public function hapus($id) {
        $sql = "DELETE FROM satuan WHERE id = ?";
        $stmt = $this->koneksi->prepare($sql);
        $stmt->execute($id);
    }

    public function detail($id) {
        $sql = "SELECT * FROM satuan WHERE id = ?";
        $stmt = $this->koneksi->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
    
}

?>