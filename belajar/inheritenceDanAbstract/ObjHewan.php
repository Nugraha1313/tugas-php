<?php 

require_once "Kucing.php";
require_once "Anjing.php";
require_once "Kambing.php";

$kucing = new Kucing();
$anjing = new Anjing();
$kambing = new Kambing();

$suaraHewan = [$kucing, $anjing, $kambing];

foreach ($suaraHewan as $data) {
    echo $data->bersuara() . "<br>";
}


?>