<?php 
include_once './Koneksi.php';
class Pegawai {
    private $koneksi; 
    public function __construct() {
        global $dbh;
        $this->koneksi = $dbh;
    }
    
    public function dataPegawai(){
        $sql = "SELECT pegawai.id,pegawai.nip,pegawai.nama,pegawai.jenis_kelamin,pegawai.tempat_lahir, pegawai.tanggal_lahir,pegawai.alamat,jabatan.nama AS jabatan
                FROM pegawai JOIN jabatan ON pegawai.jabatan_id = jabatan.id;
                ORDER BY id ASC";
        //prepare statement
        $stmt = $this->koneksi->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    }

    public function getPegawai($id) {
        $sql = "SELECT * FROM pegawai
                WHERE id = ?
                ORDER BY id ASC";
        $stmt = $this->koneksi->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function simpan($data) {
        $sql = "INSERT INTO pegawai (nip, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, alamat, jabatan_id) 
                VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->koneksi->prepare($sql);
        $stmt->execute($data);
        
    }

    public function ubah($data) {
        $sql = "UPDATE pegawai 
                SET nip = ?, nama = ?, jenis_kelamin = ?, tempat_lahir = ?, tanggal_lahir = ?, alamat = ?, jabatan_id = ?
                WHERE id = ?";
        $stmt = $this->koneksi->prepare($sql);
        $stmt->execute($data);
    }
    
    public function hapus($id) {
        $sql = "DELETE FROM pegawai WHERE id = ?";
        $stmt = $this->koneksi->prepare($sql);
        $stmt->execute($id);
    }

    public function detail($id) {
        $sql = "SELECT * FROM pegawai WHERE id = ?";
        $stmt = $this->koneksi->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
    
}

?>