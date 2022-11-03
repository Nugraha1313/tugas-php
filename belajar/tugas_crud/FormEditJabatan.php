<!-- navbar -->
<?php 
    require_once 'model/Jabatan.php';
    $obj = new Jabatan();
    $rs = $obj->dataJabatan();    
    $id = $_REQUEST['id'];
    $data_edit = $obj->getJabatan($id);
    ?>
<h2 class="text-center mt-4">EDIT JABATAN</h2>
<form id="form-tambah" method="POST" action="controller/JabatanController.php"
    class="mt-4 card bg-dark text-white p-5 mb-4" style="width: 60%; margin: 0 auto;">
    <div class="form-group row">
        <label for="kode" class="col-4 col-form-label">Kode</label>
        <div class="col-8">
            <input id="kode" name="kode" type="text" value="<?= $data_edit['kode']; ?>" required="required"
                class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="nama" class="col-4 col-form-label">Nama Jabatan</label>
        <div class="col-8">
            <input id="nama" name="nama" type="text" value="<?= $data_edit['nama']; ?>" class="form-control"
                required="required">
        </div>
    </div>
    <div class="form-group row">
        <idiv class="offset-4 col-8">
            <button name="proses" type="submit" value="ubah" class="btn btn-success">Ubah</button>
            <a href="index.php?hal=DataJabatan" class="btn btn-danger mx-3">Batal</a>
            <input type="hidden" name="idx" value="<?= $id; ?>">
        </idiv>
    </div>
</form>