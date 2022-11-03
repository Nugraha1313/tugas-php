<!-- navbar -->
<?php 
    require_once 'model/Produk.php';
    // require_once 'koneksi.php';
    // $result = new Produk();
    // $data = $result->dataProduk();
    $ar_kondisi = ['Baru', 'Second'];
    $obj = new Produk();
    $rs = $obj->dataJenis();    

    $id = $_REQUEST['id'];
    $data = $obj->detail($id);
    ?>
<h2 class="text-center mt-4 text-white">Detail Produk</h2>
<div class="card bg-light mt-3" style="width: 19rem; margin: 0 auto;">
    <img src="<?php 
        if($data['id_jenis'] === 1)
            echo './assets/images/elektronik.jpg';
        else if($data['id_jenis'] === 2)
            echo './assets/images/furniture.jpg';
    ?>" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title fw-bold"><?= $data['nama']; ?></h5>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item list-group-item-light">Kode : <?= $data['kode']; ?></li>
        <li class="list-group-item list-group-item-light">Kondisi : <?= $data['kondisi']; ?></li>
        <li class="list-group-item list-group-item-light">Harga : Rp<?= number_format($data['harga'], 0, ',', '.'); ?>
        </li>
        <li class="list-group-item list-group-item-light">Stok : <?= $data['stok']; ?></li>
        <li class="list-group-item list-group-item-light">Jenis Produk :
            <?= $kategori = ($data['id_jenis'] === 1)? 'Elektronik' : 'Furniture'; ?></li>
    </ul>
    <div class="card-body">
        <!-- <a href="#" class="card-link">BACK</a> -->
        <a href="index.php?hal=DataProduk" class="btn btn-primary">BACK</a>
    </div>
</div>
<form method="POST" action="./controller/ProdukController.php">
    <input type="hidden" name="idx" value="<?= $id; ?>">
</form>