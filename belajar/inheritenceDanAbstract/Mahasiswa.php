<?php 

require_once 'Person.php';

// subclass person
class Mahasiswa extends Person {
    private $semester, $jurusan;

    public function __construct($nama, $gender, $semester, $jurusan) {
        parent::__construct($nama, $gender);
        $this->semester = $semester;
        $this->jurusan = $jurusan;
    }

    // override method
    public function cetak() {
        parent::cetak();
        echo "Semester : $this->semester <br>";
        echo "Jurusan : $this->jurusan <br>";
        echo "<hr>";
    }


}

?>