<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css">
    <title>MY APP</title>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');

    * {
        font-family: 'Poppins', sans-serif;
    }

    #tambah {
        margin-left: 30px;
    }

    table {
        overflow: scroll;
    }
    </style>
</head>

<body class="bg-secondary">
    <!-- navbar -->
    <?php 
    include_once 'bagian_atas.php';
    require_once 'model/Produk.php';
    // require_once 'koneksi.php';
    $result = new Produk();
    $data = $result->dataProduk();
    ?>

    <!-- result sebuah tabel -->
    <h2 class="text-center text-white mt-5 mb-5">Data Produk</h2>
    <a id="tambah" href="FormProduk.php" class="btn btn-dark mb-3">Tambah Produk</a>
    <table class=" table table-dark text-center table-striped table-hover">
        <thead>
            <tr>
                <th>NO</th>
                <th>KODE</th>
                <th>NAMA</th>
                <th>HARGA</th>
                <th>STOK</th>
                <th>KONDISI</th>
                <!-- <th>FOTO</th> -->
                <th>KATEGORI</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $no = 1;
                foreach($data as $rs) {
            ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $rs['kode']; ?></td>
                <td><?= $rs['nama']; ?></td>
                <td><?= $rs['harga']; ?></td>
                <td><?= $rs['stok']; ?></td>
                <td><?= $rs['kondisi']; ?></td>
                <td><?= $rs['kategori']; ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
    </script>
</body>

</html>