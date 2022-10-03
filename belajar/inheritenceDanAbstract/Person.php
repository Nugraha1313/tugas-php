<?php 

class Person {
    private $nama, $gender;

    public function __construct($nama, $gender) {
        $this->nama = $nama;
        $this->gender = $gender;
    }

    public function cetak() {
        echo "Nama : $this->nama <br>";
        echo "Jenis Kelamin : $this->gender <br>";
    }

}


?>