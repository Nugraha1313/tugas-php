<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Tugas 4</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');
        
        * {
            font-family: 'Poppins', sans-serif;
        }

        table {
            width: 95% !important;
            margin: 0 auto;
        }

    </style>
</head>
<body class="bg-light">
    <?php 
        require 'ObjPegawai.php';
    ?>
    <h2 class="text-center mt-4 mb-5">Data Pegawai</h2>
    <table class="table table-bordered table-light table-striped">
        <tr>
            <th>No</th>
            <th>NIP</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Agama</th>
            <th>Status</th>
            <th>Gaji Pokok</th>
            <th>Tunjangan Jabatan</th>
            <th>Tunjangan Keluarga</th>
            <th>Zakat Profesi</th>
            <th>Gaji Bersih</th>
        </tr>
        <?php 
            $no = 1;
            foreach($pegawai as $data){
        ?>
        <tr>
            <td><?= $no++ ?></td>
            <?= $data->mencetak2(); ?>
        </tr>
        <?php } ?>

    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>