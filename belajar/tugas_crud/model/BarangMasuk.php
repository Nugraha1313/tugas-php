<?php 
include_once './Koneksi.php';
class BarangMasuk {
    private $koneksi; 
    public function __construct() {
        global $dbh;
        $this->koneksi = $dbh;
    }
    
    public function dataBarangMasuk(){
        $sql = "SELECT barang_masuk.id,kode_transaksi, kode_barang, tanggal_transaksi, waktu_transaksi, jumlah, satuan.nama AS satuan, nip_pemberi, keterangan
                FROM barang_masuk JOIN satuan ON satuan.id = barang_masuk.satuan_id;";
        //prepare statement
        $stmt = $this->koneksi->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    }

        public function getBarangMasuk($id) {
        $sql = "SELECT * from barang_masuk 
                WHERE id = ?
                ORDER BY barang_masuk.id ASC";
        $stmt = $this->koneksi->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch();
    }


    public function simpan($data) {
        $sql = "INSERT INTO barang_masuk (kode_transaksi, kode_barang, tanggal_transaksi, waktu_transaksi, jumlah, satuan_id, nip_pemberi, keterangan)
                VALUES (?,?,?,?,?,?,?,?)";
        $stmt = $this->koneksi->prepare($sql);
        $stmt->execute($data);
        
    }

    public function ubah($data) {
        $sql = "UPDATE barang_masuk 
                SET kode_transaksi = ?, kode_barang = ?, tanggal_transaksi = ?, waktu_transaksi = ?, jumlah = ?, satuan_id = ?, nip_pemberi = ?, keterangan = ?
                WHERE id = ?";
        $stmt = $this->koneksi->prepare($sql);
        $stmt->execute($data);
    }
    
    public function hapus($id) {
        $sql = "DELETE FROM barang_masuk WHERE id = ?";
        $stmt = $this->koneksi->prepare($sql);
        $stmt->execute($id);
    }

    public function detail($id) {
        $sql = "SELECT * FROM barang_masuk WHERE id = ?";
        $stmt = $this->koneksi->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
    
}

?>