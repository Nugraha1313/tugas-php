<?php 
include_once './Koneksi.php';
class Akun {
    private $koneksi; 
    public function __construct() {
        global $dbh;
        $this->koneksi = $dbh;
    }
    
    public function getKesamaanPass($id,$pass) {
        $sql = "SELECT * FROM akun
                WHERE id = $id AND password = $pass"; 
        $stmt = $this->koneksi->prepare($sql);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function dataAkun(){
        $sql = "SELECT * FROM akun
                ORDER BY id ASC";
        //prepare statement
        $stmt = $this->koneksi->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    }

    public function cekLogin($data) {
        $sql = "SELECT * FROM akun
                WHERE username = ?
                AND password = SHA1(MD5(?))";
        $stmt = $this->koneksi->prepare($sql);
        $stmt->execute($data);
        return $stmt->fetch();
    }
    
        public function getAkun($id) {
        $sql = "SELECT * FROM akun
                WHERE id = ?
                ORDER BY id ASC";
        $stmt = $this->koneksi->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function simpan($data) {
        $sql = "INSERT INTO akun (username, password, jabatan, foto, pegawai_nip)
                VALUES (?,SHA1(MD5(?)),?,?,?)";
        $stmt = $this->koneksi->prepare($sql);
        $stmt->execute($data);
        
    }

    public function ubah($data) {
        // if(isset($_SESSION['pass_sama'])) {
        //     $sql = "UPDATE akun SET username = ?, jabatan = ?, foto = ?, pegawai_nip = ?
        //             WHERE id = ?";
        //     unset($_SESSION['pass_sama']);
        // } else {
        //     $sql = "UPDATE akun SET username = ?, password = SHA1(MD5(?)), jabatan = ?, foto = ?, pegawai_nip = ?
        //             WHERE id = ?";
        // }
        $sql = "UPDATE akun 
                SET username = ?, password = SHA1(MD5(?)), jabatan = ?, foto = ?, pegawai_nip = ?
                WHERE id = ?";
        $stmt = $this->koneksi->prepare($sql);
        $stmt->execute($data);
    }
    
    public function hapus($id) {
        $sql = "DELETE FROM akun WHERE id = ?";
        $stmt = $this->koneksi->prepare($sql);
        $stmt->execute($id);
    }

    public function detail($id) {
        $sql = "SELECT * FROM akun WHERE id = ?";
        $stmt = $this->koneksi->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function detailMember($username) {
        $sql = "SELECT * FROM akun WHERE username = ?";
        $stmt = $this->koneksi->prepare($sql);
        $stmt->execute([$username]);
        return $stmt->fetch();
    }

}

?>