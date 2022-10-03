<?php 

require_once 'Bentuk2D.php';

// subclass Bentuk2D
class Segitiga extends Bentuk2D {
    private $alas, $tinggi;

    public function __construct($alas, $tinggi) {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }

    public function namaBidang()
    {
        return "Segitiga";
    }

    public function luasBidang() {
        return 0.5 * $this->alas * $this->tinggi;
    }

    public function kelilingBidang() {
        // dimana sisi miring = akar kuadrat dari (alas^2 + tinggi^2)
        // sehingga keliling = alas + tinggi + sisi miring
        return $this->alas + $this->tinggi + sqrt($this->alas * $this->alas + $this->tinggi * $this->tinggi);
    }

    public function keterangan() {
        return "Alas = $this->alas cm <br> Tinggi = $this->tinggi cm";
    }

}


?>