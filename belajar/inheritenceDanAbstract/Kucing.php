<?php 

require_once 'Hewan.php';

//  subclass Hewan
class Kucing extends Hewan {
    public function bersuara() {
        echo "Meong Meong";
    }
}

?>