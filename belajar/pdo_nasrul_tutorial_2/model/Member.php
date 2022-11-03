<?php 
include_once 'koneksi.php';
class Member {
    private $koneksi; 
    public function __construct() {
        global $dbh;
        $this->koneksi = $dbh;
    }

    public function cekLogin($data) {
        $sql = "SELECT * FROM member
                WHERE username = ?
                AND password = SHA1(MD5(?))";
        $stmt = $this->koneksi->prepare($sql);
        $stmt->execute($data);
        return $stmt->fetch();
    }


    
}

?>