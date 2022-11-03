<?php 

$hal = $_REQUEST['hal'];

if(!empty($hal)) {
    include_once $hal . '.php';
}
else {
    include_once 'home.php';
}

?>