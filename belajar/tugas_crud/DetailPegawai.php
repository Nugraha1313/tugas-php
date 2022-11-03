<!-- navbar -->
<?php 
    require_once 'model/Pegawai.php';
    require_once 'model/Jabatan.php';

    $obj = new Pegawai();
    $obj2 = new Jabatan();
    $rs = $obj->dataPegawai();    
    
    $id = $_REQUEST['id'];
    $data = $obj->detail($id);
    $data_jabatan = $obj2->dataJabatan();
    ?>
<h2 class="text-center mt-4 ">Detail Pegawai</h2>
<div class="card bg-light mt-3" style="width: 19rem; margin: 0 auto;">
    <!-- <img src="./img/barang.jpg" class="card-img-top" alt="..."> -->
    <img src="<?php 
        if($data['jenis_kelamin'] == 'L'){
            echo './img/laki-laki.png';
        }
        else {
            echo './img/perempuan.png';
        }
    ?>" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title fw-bold"><b> <?= $data['nama']; ?> </b></h5>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item list-group-item-light"><b>NIP :</b> <?= $data['nip']; ?></li>
        <li class="list-group-item list-group-item-light"><b>Jenis Kelamin : </b><?= $data['jenis_kelamin']; ?></li>
        <li class="list-group-item list-group-item-light"><b>Tempat Lahir : </b><?= $data['tempat_lahir']; ?></li>
        <li class="list-group-item list-group-item-light"><b>Tanggal Lahir : </b><?= $data['tanggal_lahir']; ?></li>
        <li class="list-group-item list-group-item-light"><b>Alamat : </b><?= $data['alamat']; ?></li>
        <li class="list-group-item list-group-item-light"><b>Jabatan : </b>
            <?php 
                foreach($data_jabatan as $row){
                    if($row['id'] == $data['jabatan_id']){
                        echo $row['nama'];
                    }
                }
            ?>
        </li>
    </ul>
    <div class="card-body">
        <a href="index.php?hal=DataPegawai" class="btn btn-primary">BACK</a>
    </div>
</div>
<form method="POST" action="./controller/PegawaiController.php">
    <input type="hidden" name="idx" value="<?= $id; ?>">
</form>