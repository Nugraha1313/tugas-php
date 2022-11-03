<!-- navbar -->
<?php 
    require_once 'model/Akun.php';
    // require_once 'koneksi.php';
    // $result = new Produk();
    // $data = $result->dataProduk();
    $obj = new Akun();
    $rs = $obj->dataAkun();    

    $id = $_REQUEST['id'];
    $data = $obj->detail($id);
    // untuk detail member
    // var_dump($_SESSION['MEMBER']);
    // echo $_SESSION['MEMBER']['foto'];
    ?>
<h2 class="text-center mt-4 ">Detail Akun</h2>
<div class="card bg-light mt-3" style="width: 19rem; margin: 0 auto;">
    <img src="./img/profile.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title fw-bold"> <b>Username : </b> <?= $data['username']; ?> </h5>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item list-group-item-light"> <b>Password : </b> <?= $data['password']; ?></li>
        <li class="list-group-item list-group-item-light"><b>Jabatan : </b><?= $data['jabatan']; ?></li>
        </li>
        <li class="list-group-item list-group-item-light"><b>NIP : </b> <?= $data['pegawai_nip']; ?></li>
    </ul>
    <div class="card-body">
        <!-- <a href="#" class="card-link">BACK</a> -->
        <a href="index.php?hal=DataAkun" class="btn btn-primary">BACK</a>
    </div>
</div>
<form method="POST" action="./controller/AkunController.php">
    <input type="hidden" name="idx" value="<?= $id; ?>">
</form>