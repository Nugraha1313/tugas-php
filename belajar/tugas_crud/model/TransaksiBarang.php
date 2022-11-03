<?php 
include_once './Koneksi.php';
class TransaksiBarang {
    private $koneksi; 
    public function __construct() {
        global $dbh;
        $this->koneksi = $dbh;
    }
    
    public function dataTransaksiBarang(){
        $sql = "SELECT 
	barang_masuk.id,kode_transaksi, kode_barang, tanggal_transaksi, waktu_transaksi, jumlah, satuan.nama AS satuan, nip_pemberi AS nip, keterangan, 'Pengembalian' AS jenis_transaksi 
FROM 
	barang_masuk
JOIN
	satuan
ON
	satuan.id = barang_masuk.satuan_id
UNION
SELECT 
	barang_keluar.id,kode_transaksi, kode_barang, tanggal_transaksi, waktu_transaksi, jumlah, satuan.nama, nip_peminjam, keterangan, 'Peminjaman' FROM barang_keluar
JOIN
	satuan
ON
	satuan.id = barang_keluar.satuan_id;";
        //prepare statement
        $stmt = $this->koneksi->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    }

    
    
}

?>