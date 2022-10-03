<?php 

/*

Buatlah file kumpulan_bidang.php untuk membuat object:
Cetak dalam bentuk tabel:
	- Thead: cetak judul kolom dengan (array scalar :No, Nama Bidang, Keterangan, Luas Bidang, Keliling Bidang) 
	- Tbody: cetak data-data bidang

*/

require_once 'Lingkaran.php';
require_once 'PersegiPanjang.php';
require_once 'Segitiga.php';

$lingkaran = new Lingkaran(5);
$persegiPanjang = new PersegiPanjang(5, 10);
$segitiga = new Segitiga(5, 10);

$bidang = [$lingkaran, $persegiPanjang, $segitiga];

$judul = ['No', 'Nama Bidang', 'Keterangan', 'Luas Bidang', 'Keliling Bidang'];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Tugas 5</title>
    <style>

        table {
            width: 80% !important;
            margin: 0 auto;
        }

    </style>
</head>
<body class="bg-gray-500 dark:text-white">
    <div class="overflow-x-auto relative">
        <h1 class="text-center mt-7 mb-14 text-2xl font-bold">Bangun Ruang 2 Dimensi</h1>
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-900 uppercase bg-gray-50 dark:bg-gray-700 dark:text-white whitespace-nowrap">
                <tr>
                    <?php foreach ($judul as $j) : ?>
                        <th scope="col" class="py-3 px-6"><?= $j ?></th>
                    <?php endforeach; ?>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($bidang as $key => $b) : ?>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="py-4 px-6"><?= $key + 1 ?></td>
                        <td class="py-4 px-6"><?= $b->namaBidang() ?></td>
                        <td class="py-4 px-6"><?= $b->keterangan() ?></td>
                        <td class="py-4 px-6"><?= $b->luasBidang() ?> cm<sup>2</sup></td>
                        <td class="py-4 px-6"><?= number_format($b->kelilingBidang(), 2, '.', ''); ?> cm</td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</body>
</html>