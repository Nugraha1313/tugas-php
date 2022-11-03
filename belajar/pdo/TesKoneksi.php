<?php 

$dsn = 'mysql:dbname=dbpegawai_kampusmerdeka; host=localhost';
$user = 'root';
$password = '';


try {
    //code...
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Sukses Terkoneksi';
} catch (PDOException $e) {
    //throw $th;
    echo 'Gagal Terkoneksi, karena ' . $e->getMessage();
}

$sql = 'SELECT * from divisi order by id asc';
// foreach ($dbh->query($sql) as $row) {
//     print $row['id'] . "\n";
//     print $row['nama'] . "\t \n";
// }



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach($dbh->query($sql) as $row){
            ?>
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['nama'] ?></td>
            </tr>
            <?php 
                }
            ?>
        </tbody>
    </table>
</body>

</html>