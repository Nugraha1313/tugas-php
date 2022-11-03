<!-- navbar -->
<?php 
    require_once 'model/Barang.php';

    $obj = new Barang();
    $rs = $obj->dataBarang();    
    
    $id = $_REQUEST['id'];
    $data = $obj->detail($id);
    ?>
<h2 class="text-center mt-4 ">Detail Barang</h2>
<div class="card bg-light mt-3" style="width: 19rem; margin: 0 auto;">
    <img src="./img/barang.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title fw-bold"> <b> <?= $data['nama']; ?> </b> </h5>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item list-group-item-light"><b>Kode : </b> <?= $data['kode']; ?></li>
        <li class="list-group-item list-group-item-light"><b>Jumlah : </b><?= $data['jumlah']; ?></li>
        <li class="list-group-item list-group-item-light"><b>Satuan : </b><?= $data['satuan']; ?></li>
        <li class="list-group-item list-group-item-light"><b>Keterangan : </b> <?= $data['keterangan']; ?></li>
    </ul>
    <div class="card-body">
        <a href="index.php?hal=DataBarang" class="btn btn-primary">BACK</a>
    </div>
</div>
<form method="POST" action="./controller/BarangController.php">
    <input type="hidden" name="idx" value="<?= $id; ?>">
</form>