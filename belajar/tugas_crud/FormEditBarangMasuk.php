<!-- navbar -->
<?php 
    require_once 'model/Barang.php';
    require_once 'model/BarangMasuk.php';
    require_once 'model/Satuan.php';
    require_once 'model/Pegawai.php';
    $obj = new BarangMasuk();
    $obj2 = new Satuan();
    $obj3 = new Pegawai();
    $rs = $obj->dataBarangMasuk();    
    $data_satuan = $obj2->dataSatuan();
    $id = $_REQUEST['id'];
    $data_edit = $obj->getBarangMasuk($id);
    $data_nip = $obj3->dataPegawai();
    ?>
<h2 class="text-center mt-4">EDIT BARANG MASUK</h2>
<form id="form-tambah" method="POST" action="controller/BarangMasukController.php"
    class="mt-4 card bg-dark text-white p-5 mb-4" style="width: 60%; margin: 0 auto;">
    <!-- <div class="form-group row">
        <label for="kode" class="col-4 col-form-label">Kode Transaksi</label>
        <div class="col-8">
            <input id="kode_transaksi" name="kode_transaksi" type="text" value="<?= $data_edit['kode_transaksi']; ?>"
                required="required" class="form-control" maxlength="5">
        </div>
    </div> -->
    <div class="form-group row">
        <label for="text" class="col-4 col-form-label">Kode Transaksi</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">BM</div>
                </div>
                <input id="kode_transaksi" name="kode_transaksi" type="text"
                    value="<?= $data_edit['kode_transaksi'][2] . $data_edit['kode_transaksi'][3] . $data_edit['kode_transaksi'][4] ; ?>"
                    required="required" class="form-control" maxlength="3">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="kode" class="col-4 col-form-label">Kode Barang</label>
        <div class="col-8">
            <input id="kode_barang" name="kode_barang" type="text" value="<?= $data_edit['kode_barang']; ?>"
                required="required" class="form-control" maxlength="5">
        </div>
    </div>
    <div class="form-group row">
        <label for="nama" class="col-4 col-form-label">Tanggal</label>
        <div class="col-8">
            <input id="tanggal_transaksi" name="tanggal_transaksi" type="date"
                value="<?= $data_edit['tanggal_transaksi']; ?>" class="form-control" required="required">
        </div>
    </div>
    <div class="form-group row">
        <label for="nama" class="col-4 col-form-label">Waktu</label>
        <div class="col-8">
            <input id="waktu_transaksi" name="waktu_transaksi" type="time" value="<?= $data_edit['waktu_transaksi']; ?>"
                class="form-control" required="required">
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
        <label for="id_jenis" class="col-4 col-form-label">Satuan</label>
        <div class="col-8">
            <select id="satuan_id" name="satuan_id" class="custom-select" required="required">
                <option value="">-- Pilih Satuan --</option>
                <?php 
                        foreach($data_satuan as $satuan){
                        $selected = ($satuan['id'] == $data_edit['satuan_id']) ? 'selected' : '';
                    ?>
                <option value="<?= $satuan['id']; ?>" <?= $selected; ?>><?= $satuan['nama']; ?></option>
                <?php 
                        }
                    ?>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="id_jenis" class="col-4 col-form-label">NIP Pemberi</label>
        <div class="col-8">
            <select id="nip_pemberi" name="nip_pemberi" class="custom-select" required="required">
                <option value="">-- Pilih NIP --</option>
                <?php 
                        foreach($data_nip as $nip){
                        $sel = ($nip['nip'] == $data_edit['nip_pemberi']) ? 'selected' : '';
                    ?>
                <option value="<?= $nip['nip']; ?>" <?= $sel; ?>> <?=  $nip['nip']. ' (' . $nip['nama'] . ')'; ?>
                </option>
                <?php 
                        }
                    ?>
            </select>
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
        <idiv class="offset-4 col-8">
            <button name="proses" type="submit" value="ubah" class="btn btn-success">Ubah</button>
            <a href="index.php?hal=DataBarangMasuk" class="btn btn-danger mx-3">Batal</a>
            <input type="hidden" name="idx" value="<?= $id; ?>">
        </idiv>
    </div>
</form>