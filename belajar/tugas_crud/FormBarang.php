<!-- navbar -->
<?php 
    require_once 'model/Barang.php';
    require_once 'model/Satuan.php';
    $obj = new Barang();
    $obj2 = new Satuan();
    $rs = $obj->dataBarang();
    $data_satuan = $obj2->dataSatuan();    
    ?>
<h2 class="text-center mt-4">TAMBAH BARANG</h2>
<form id="form-tambah" method="POST" action="controller/BarangController.php"
    class="mt-4 card bg-dark text-white p-5 mb-4" style="margin: 0 auto; width: 60%;">
    <div class="form-group row">
        <label for="kode" class="col-4 col-form-label">Kode</label>
        <div class="col-8">
            <input id="kode" name="kode" type="text" required="required" class="form-control" maxlength="5">
        </div>
    </div>
    <div class="form-group row">
        <label for="nama" class="col-4 col-form-label">Nama</label>
        <div class="col-8">
            <input id="nama" name="nama" type="text" class="form-control" required="required" maxlength="45">
        </div>
    </div>
    <div class="form-group row">
        <label for="nama" class="col-4 col-form-label">Jumlah</label>
        <div class="col-8">
            <input id="jumlah" name="jumlah" type="number" min="0" class="form-control" required="required">
        </div>
    </div>
    <div class="form-group row">
        <label for="kode" class="col-4 col-form-label">Keterangan</label>
        <div class="col-8">
            <input id="keterangan" name="keterangan" type="text" required="required" class="form-control"
                maxlength="45">
        </div>
    </div>
    <div class="form-group row">
        <label for="id_jenis" class="col-4 col-form-label">Satuan</label>
        <div class="col-8">
            <select id="satuan_id" name="satuan_id" class="custom-select" required="required">
                <option value="">-- Pilih Satuan --</option>
                <?php 
                        foreach($data_satuan as $satuan){
                    ?>
                <option value="<?= $satuan['id']; ?>"><?= $satuan['nama']; ?></option>
                <?php 
                        }
                    ?>
            </select>
        </div>
    </div>

    <div class="form-group row">
        <div class="offset-4 col-8 mt-4">
            <button name="proses" type="submit" value="simpan" class="btn btn-success">Simpan</button>
            <a href="index.php?hal=DataBarang" class="btn btn-danger mx-3">Batal</a>
        </div>
    </div>
</form>