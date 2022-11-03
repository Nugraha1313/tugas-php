<?php 
include_once 'koneksi.php';
class Produk {
    private $koneksi;
    public function __construct() {
        global $dbh;
        $this->koneksi = $dbh;
    }
    /**
     * Fungsi untuk mendapatkan data produk
     *
     * @return $data
     */
    public function dataProduk(){
        $sql = "SELECT produk.*,jenis.nama AS kategori FROM produk JOIN jenis 
                ON jenis.id = produk.id_jenis
                ORDER BY id ASC";
        //prepare statement
        $stmt = $this->koneksi->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    }

    public function getProduk($id) {
        $sql = "SELECT produk.*,jenis.nama AS kategori FROM produk JOIN jenis 
                ON jenis.id = produk.id_jenis
                WHERE produk.id = ?
                ORDER BY id ASC";
        $stmt = $this->koneksi->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function dataJenis(){
        $sql = "SELECT * FROM jenis";
        //prepare statement
        $stmt = $this->koneksi->query($sql);
        return $stmt;
    }

    public function simpan($data) {
        $sql = "INSERT INTO produk (kode, nama, kondisi, harga, stok, id_jenis, foto)
                VALUES (?,?,?,?,?,?,?)";
        $stmt = $this->koneksi->prepare($sql);
        $stmt->execute($data);
        
    }

    public function ubah($data) {
        $sql = "UPDATE produk 
                SET kode = ?, nama = ?, kondisi = ?, harga = ?, stok = ?, id_jenis = ?, foto = ?
                WHERE id = ?";
        $stmt = $this->koneksi->prepare($sql);
        $stmt->execute($data);
    }
    
    public function hapus($id) {
        $sql = "DELETE FROM produk WHERE id = ?";
        $stmt = $this->koneksi->prepare($sql);
        $stmt->execute($id);
    }

    public function detail($id) {
        $sql = "SELECT * FROM produk WHERE id = ?";
        $stmt = $this->koneksi->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
    
}

?>