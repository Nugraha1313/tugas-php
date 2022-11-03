<?php 


$dsn = 'mysql:dbname=dbbarang; host=localhost';
$user = 'root';
$password = '';

// $db = new PDO($dsn, $user, $password);

try {
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $dbh->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
    // echo('Koneksi Berhasil');
}
catch (PDOException $e) {
    echo "Koneksi Gagal: " . $e->getMessage();
}

?>