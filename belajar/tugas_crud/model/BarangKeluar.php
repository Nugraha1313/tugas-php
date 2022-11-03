<?php 
include_once './Koneksi.php';
class BarangKeluar {
    private $koneksi; 
    public function __construct() {
        global $dbh;
        $this->koneksi = $dbh;
    }
    
    public function dataBarangKeluar(){
        $sql = "SELECT barang_keluar.id,kode_transaksi, kode_barang, tanggal_transaksi, waktu_transaksi, jumlah, satuan.nama AS satuan, nip_peminjam, keterangan
                FROM barang_keluar JOIN	satuan ON satuan.id = barang_keluar.satuan_id;";
        //prepare statement
        $stmt = $this->koneksi->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    }

    public function getBarangKeluar($id) {
        $sql = "SELECT * from barang_keluar 
                WHERE id = ?
                ORDER BY id ASC";
        $stmt = $this->koneksi->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch();
    }


    public function simpan($data) {
        $sql = "INSERT INTO barang_keluar (kode_transaksi, kode_barang, tanggal_transaksi, waktu_transaksi, jumlah, satuan_id, nip_peminjam, keterangan)
                VALUES (?,?,?,?,?,?,?,?)";
        $stmt = $this->koneksi->prepare($sql);
        $stmt->execute($data);
        
    }

    public function ubah($data) {
        $sql = "UPDATE barang_keluar 
                SET kode_transaksi = ?, kode_barang = ?, tanggal_transaksi = ?, waktu_transaksi = ?, jumlah = ?, satuan_id = ?, nip_peminjam = ?, keterangan = ?
                WHERE id = ?";
        $stmt = $this->koneksi->prepare($sql);
        $stmt->execute($data);
    }
    
    public function hapus($id) {
        $sql = "DELETE FROM barang_keluar WHERE id = ?";
        $stmt = $this->koneksi->prepare($sql);
        $stmt->execute($id);
    }

    public function detail($id) {
        $sql = "SELECT * FROM barang_keluar WHERE id = ?";
        $stmt = $this->koneksi->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
    
}

?>