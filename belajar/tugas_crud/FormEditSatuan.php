<!-- navbar -->
<?php 
    require_once 'model/Satuan.php';
    $obj = new Satuan();
    $rs = $obj->dataSatuan();    
    // tangkap request id di url
    $id = $_REQUEST['id'];
    $data_edit = $obj->getSatuan($id);
    ?>
<h2 class="text-center mt-4 ">EDIT SATUAN</h2>
<form id="form-tambah" method="POST" action="controller/SatuanController.php"
    class="mt-4 card bg-dark text-white p-4 mb-4" style="width: 60%; margin: 0 auto;">
    <div class="form-group row">
        <label for="nama" class="col-4 col-form-label">Nama</label>
        <div class="col-8">
            <input id="nama" name="nama" type="text" value="<?= $data_edit['nama']; ?>" class="form-control"
                required="required">
        </div>
    </div>
    <div class="form-group row">
        <idiv class="offset-4 col-8 mt-3">
            <button name="proses" type="submit" value="ubah" class="btn btn-success">Ubah</button>
            <a href="index.php?hal=DataSatuan" class="btn btn-danger mx-3">Batal</a>
            <input type="hidden" name="idx" value="<?= $id; ?>">
        </idiv>
    </div>
</form>