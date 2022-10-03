<?php 

require_once 'Person.php';


// subclass person
class Dosen extends Person {
    private $nidn, $gelar;

    public function __construct($nama, $gender, $nidn, $gelar) {
        parent::__construct($nama, $gender);
        $this->nidn = $nidn;
        $this->gelar = $gelar;
    }

    // override method
    public function cetak() {
        parent::cetak();
        echo "NIDN : $this->nidn <br>";
        echo "Gelar : $this->gelar <br>";
        echo "<hr>";
    }

}

?>