<?php
//array scalar (1 dimensi)
$m1 = ['nim' => '09021182024010', 'nama' => 'Rizky Akbar', 'nilai' => '98'];
$m2 = ['nim' => '09021183024020', 'nama' => 'Monkey D Luffy', 'nilai' => '100'];
$m3 = ['nim' => '09011282024010', 'nama' => 'Rahmad D Jeki', 'nilai' => '27'];
$m4 = ['nim' => '08021182073010', 'nama' => 'Kaido', 'nilai' => '30'];
$m5 = ['nim' => '09021282024320', 'nama' => 'Big Mom', 'nilai' => '45'];
$m6 = ['nim' => '07021391024011', 'nama' => 'Monkey D Bayu', 'nilai' => '60'];
$m7 = ['nim' => '05023182024012', 'nama' => 'Vinsmoke Budi', 'nilai' => '76'];
$m8 = ['nim' => '06021182024013', 'nama' => 'Charlotte Dimas', 'nilai' => '65'];
$m9 = ['nim' => '09022112024014', 'nama' => 'Setiawan Akagami', 'nilai' => '100'];
$m10 = ['nim' => '05021182021015', 'nama' => 'Takanome No Wahyu', 'nilai' => '89'];

$judul = ['No', 'NIM', 'Nama', 'Nilai',  'Keterangan', 'Grade', 'Predikat'];
//array assosiative (> 1 dimensi)
$mahasiswa = [$m1, $m2, $m3, $m4, $m5, $m6, $m7, $m8, $m9, $m10];

// aggregasi mahasiswa
$jumlah_mahasiswa = count($mahasiswa);
$jumlah_nilai = array_column($mahasiswa, 'nilai');
$total_nilai = array_sum($jumlah_nilai);
$max_nilai = max($jumlah_nilai);
$min_nilai = min($jumlah_nilai);
$rata2_nilai = $total_nilai / $jumlah_mahasiswa;

// keterangan mahasiswa uuntuk ditampilkan di footer
$keterangan_mahasiswa = [
    'Jumlah Mahasiswa' => $jumlah_mahasiswa,
    // 'Total Nilai' => $total_nilai,
    'Nilai Tertinggi' => $max_nilai,
    'Nilai Terendah' => $min_nilai,
    'Rata-Rata Nilai' => $rata2_nilai
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Tugas 3</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');
        * {
            font-family: 'Poppins', sans-serif;
        }

        table {
            margin: auto;
            width: 80% !important;
        }

    </style>
</head>
<body class="bg-light">
     <h3 class="text-center mb-3 mt-3">Daftar Nilai Mahasiswa</h3>
        <table class="table table-striped table-bordered table-dark table-hover">
            <thead class="text-center">
                <tr>
                    <?php
                    foreach($judul as $jdl){
                    ?>
                    <th ><?= $jdl ?></th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody class="text-center">
                <?php
                $no = 1;
                foreach($mahasiswa as $mhs){
                //rumus2
                // keterangan
                $keterangan = ($mhs['nilai'] >= 60) ? 'Lulus' : 'Tidak Lulus';
                // grade if
                if($mhs['nilai'] >= 85 && $mhs['nilai'] <= 100) $grade='A';
                else if($mhs['nilai']>= 75 && $mhs['nilai'] < 85) $grade='B';
                else if($mhs['nilai']>= 60 && $mhs['nilai'] < 75) $grade='C';
                else if($mhs['nilai']>= 30 && $mhs['nilai'] < 60) $grade='D'; 
                else if($mhs['nilai']>= 0 && $mhs['nilai'] < 30) $grade='E';
                else $grade = "";
                
                switch ($grade) {
                    case 'A': $predikat = 'Memuaskan'; break;
                    case 'B': $predikat = 'Bagus'; break;
                    case 'C': $predikat = 'Cukup'; break;
                    case 'D': $predikat = 'Kurang'; break;
                    case 'E': $predikat = 'Buruk'; break;
                    default: $predikat = '';
                }

                ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $mhs['nim'] ?></td>
                    <td><?= $mhs['nama'] ?></td>
                    <td><?= $mhs['nilai'] ?></td>
                    <td><?= $keterangan ?></td>
                    <td><?= $grade ?></td>
                    <td><?= $predikat ?></td>
                </tr>
                <?php $no++; } ?>
            </tbody>
            <tfoot>
                <?php
                foreach ($keterangan_mahasiswa as $ket => $hasil) {
                ?>
                <tr>
                    <th colspan="6"><?= $ket ?></th>
                    <th><?= $hasil ?></th>
                </tr>
                <?php } ?>
            </tfoot>
        </table>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
        </script>
</body>
</html>