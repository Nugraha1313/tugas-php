<?php 

require_once 'Bentuk2D.php';

// subclass Bentuk2D
class PersegiPanjang extends Bentuk2D {
    private $panjang, $lebar;

    public function __construct($panjang, $lebar) {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    public function namaBidang()
    {
        return "Persegi Panjang";
    }

    public function luasBidang() {
        return $this->panjang * $this->lebar;
    }

    public function kelilingBidang() {
        return 2 * ($this->panjang + $this->lebar);
    }
    

    public function keterangan() {
        return "Panjang = $this->panjang cm <br> Lebar = $this->lebar cm";
    }

}


?>