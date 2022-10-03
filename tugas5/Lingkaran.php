<?php 

require_once 'Bentuk2D.php';

// subclass Bentuk2D
class Lingkaran extends Bentuk2D {
    private $jariJari;

    public function __construct($jariJari) {
        $this->jariJari = $jariJari;
    }

    public function namaBidang()
    {
        return "Lingkaran";
    }

    public function luasBidang() {
        return 3.14 * $this->jariJari * $this->jariJari;
    }

    public function kelilingBidang() {
        return 2 * 3.14 * $this->jariJari;
    }

    public function keterangan() {
        return "Jari-jari = $this->jariJari cm";
    }

}



?>