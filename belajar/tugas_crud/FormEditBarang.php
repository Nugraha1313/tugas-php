<!-- navbar -->
<?php 
    require_once 'model/Barang.php';
    require_once 'model/Satuan.php';
    $obj = new Barang();
    $obj2 = new Satuan();
    
    $rs = $obj->dataBarang();    
    $data_satuan = $obj2->dataSatuan();
    $id = $_REQUEST['id'];
    $data_edit = $obj->getBarang($id);
    ?>
<h2 class="text-center mt-4">EDIT BARANG</h2>
<form id="form-tambah" method="POST" action="controller/BarangController.php"
    class="mt-4 card bg-dark text-white p-5 mb-4" style="width: 60%; margin: 0 auto;">
    <div class="form-group row">
        <label for="kode" class="col-4 col-form-label">Kode</label>
        <div class="col-8">
            <input id="kode" name="kode" type="text" value="<?= $data_edit['kode']; ?>" required="required"
                class="form-control" maxlength="5">
        </div>
    </div>
    <div class="form-group row">
        <label for="nama" class="col-4 col-form-label">Nama Barang</label>
        <div class="col-8">
            <input id="nama" name="nama" type="text" value="<?= $data_edit['nama']; ?>" class="form-control"
                required="required" maxlength="45">
        </div>
    </div>
    <div class="form-group row">
        <label for="nama" class="col-4 col-form-label">Jumlah</label>
        <div class="col-8">
            <input id="jumlah" name="jumlah" type="number" min="0" value="<?= $data_edit['jumlah']; ?>"
                class="form-control" required="required">
        </div>
    </div>
    <div class="form-group row">
        <label for="nama" class="col-4 col-form-label">Keterangan</label>
        <div class="col-8">
            <input id="keterangan" name="keterangan" type="text" value="<?= $data_edit['keterangan']; ?>"
                class="form-control" required="required" maxlength="45">
        </div>
    </div>
    <div class="form-group row">
        <label for="id_jenis" class="col-4 col-form-label">Jenis</label>
        <div class="col-8">
            <select id="satuan_id" name="satuan_id" class="custom-select" required="required">
                <option value="">-- Jenis Produk --</option>
                <?php 
                        foreach($data_satuan as $satuan){
                        $sel = ($data_edit['satuan_id'] == $satuan['id']) ? 'selected' : '';
                    ?>
                <option value="<?= $satuan['id']; ?>" <?= $sel; ?>> <?= $satuan['nama']; ?></option>
                <?php 
                        }
                    ?>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <idiv class="offset-4 col-8">
            <button name="proses" type="submit" value="ubah" class="btn btn-success">Ubah</button>
            <a href="index.php?hal=DataBarang" class="btn btn-danger mx-3">Batal</a>
            <input type="hidden" name="idx" value="<?= $id; ?>">
        </idiv>
    </div>
</form>