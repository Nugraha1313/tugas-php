<!-- navbar -->
<?php 
    require_once 'model/Satuan.php';
    $ar_kondisi = ['Baru', 'Second'];
    $obj = new Satuan();
    $rs = $obj->dataSatuan();    
    ?>
<h2 class="text-center mt-4">TAMBAH PRODUK</h2>
<form id="form-tambah" method="POST" action="controller/SatuanController.php"
    class="mt-4 card bg-dark text-white p-5 mb-4" style="width: 60% ; margin: 0 auto;">
    <div class="form-group row">
        <label for="nama" class="col-4 col-form-label">Nama</label>
        <div class="col-8">
            <input id="nama" name="nama" type="text" class="form-control" required="required">
        </div>
    </div>
    <div class="form-group row">
        <div class="offset-4 col-8 mt-3">
            <button name="proses" type="submit" value="simpan" class="btn btn-success">Simpan</button>
            <a href="index.php?hal=DataSatuan" class="btn btn-danger mx-3">Batal</a>
        </div>
    </div>
</form>