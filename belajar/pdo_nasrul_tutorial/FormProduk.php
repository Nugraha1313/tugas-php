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

    form {
        width: 50%;
        margin: 0 auto;
    }

    form>div {
        padding: 10px;
    }
    </style>
</head>

<body class="bg-secondary">
    <!-- navbar -->
    <?php 
    include_once 'bagian_atas.php';
    require_once 'model/Produk.php';
    // require_once 'koneksi.php';
    // $result = new Produk();
    // $data = $result->dataProduk();
    $ar_kondisi = ['Baru', 'Second'];
    $obj = new Produk();
    $rs = $obj->dataJenis();    
    ?>
    <h2 class="text-center mt-4 text-white">TAMBAH PRODUK</h2>
    <form method="POST" action="controller/ProdukController.php" class="mt-3 card bg-dark text-white p-4 mb-4">
        <div class="form-group row">
            <label for="kode" class="col-4 col-form-label">Kode</label>
            <div class="col-8">
                <input id="kode" name="kode" type="text" required="required" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama Produk</label>
            <div class="col-8">
                <input id="nama" name="nama" type="text" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4">Kondisi</label>
            <div class="col-8">
                <?php 
                $no = 0;
                foreach($ar_kondisi as $kondisi){    
            ?>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="kondisi" id="kondisi_<?= $no; ?>" type="radio" required="required"
                        class="custom-control-input" value="<?= $kondisi; ?>">
                    <label for="kondisi_<?= $no; ?>" class="custom-control-label"><?= $kondisi; ?></label>
                </div>
                <?php 
                $no++;
                }
            ?>
            </div>
        </div>
        <div class=" form-group row">
            <label for="harga" class="col-4 col-form-label">Harga</label>
            <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Rp</div>
                    </div>
                    <input id="harga" name="harga" type="number" required="required" class="form-control" min="0">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="stok" class="col-4 col-form-label">Stok</label>
            <div class="col-8">
                <input id="stok" name="stok" type="number" class="form-control" required="required" min="0">
            </div>
        </div>
        <div class="form-group row">
            <label for="id_jenis" class="col-4 col-form-label">Jenis</label>
            <div class="col-8">
                <select id="id_jenis" name="id_jenis" class="custom-select" required="required">
                    <option value="">-- Jenis Produk --</option>
                    <?php 
                        foreach($rs as $jenis){
                    ?>
                    <option value="<?= $jenis['id']; ?>"><?= $jenis['nama']; ?></option>
                    <?php 
                        }
                    ?>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="foto" class="col-4 col-form-label">Foto</label>
            <div class="col-8">
                <input id="foto" name="foto" type="text" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="proses" type="submit" value="simpan" class="btn btn-secondary">Simpan</button>
                <a href="DataProduk.php" class="btn btn-secondary mx-3">Batal</a>
            </div>
        </div>
    </form>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
    </script>
</body>

</html>