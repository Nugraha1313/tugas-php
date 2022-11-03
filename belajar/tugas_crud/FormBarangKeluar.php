<!-- navbar -->
<?php 
    require_once 'model/Barang.php';
    require_once 'model/BarangKeluar.php';
    require_once 'model/Satuan.php';
    require_once 'model/Pegawai.php';
    $obj = new BarangKeluar();
    $obj2 = new Satuan();
    $obj3 = new Barang();
    $obj4 = new Pegawai();
    $rs = $obj->dataBarangKeluar();
    $data_satuan = $obj2->dataSatuan();    
    $data_kode_barang = $obj3->dataBarang();
    $data_nip = $obj4->dataPegawai();
    ?>
<h2 class="text-center mt-4">TAMBAH BARANG KELUAR</h2>
<form id="form-tambah" method="POST" action="controller/BarangKeluarController.php"
    class="mt-4 card bg-dark text-white p-5 mb-4" style="margin: 0 auto; width: 60%;">
    <!-- <div class="form-group row">
        <label for="kode" class="col-4 col-form-label">Kode Transaksi</label>
        <div class="col-8">
            <input id="kode_transaksi" name="kode_transaksi" type="text" required="required" class="form-control"
                maxlength="5">
        </div>
    </div> -->
    <div class="form-group row">
        <label for="text" class="col-4 col-form-label">Kode Transaksi</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">BK</div>
                </div>
                <input id="kode_transaksi" name="kode_transaksi" type="text" class="form-control" maxlength="3">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="id_jenis" class="col-4 col-form-label">Kode Barang</label>
        <div class="col-8">
            <select id="kode_barang" name="kode_barang" class="custom-select" required="required">
                <option value="">-- Pilih Kode Barang --</option>
                <?php 
                        foreach($data_kode_barang as $kode_barang){
                    ?>
                <option value="<?= $kode_barang['kode']; ?>">
                    <?= $kode_barang['kode'] . ' (' . $kode_barang['nama'] . ')'; ?>
                </option>
                <?php 
                        }
                    ?>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="nama" class="col-4 col-form-label">Tanggal</label>
        <div class="col-8">
            <input id="tanggal_transaksi" name="tanggal_transaksi" type="date" class="form-control" required="required">
        </div>
    </div>
    <div class="form-group row">
        <label for="nama" class="col-4 col-form-label">Waktu</label>
        <div class="col-8">
            <input id="waktu_transaksi" name="waktu_transaksi" type="time" class="form-control" required="required">
        </div>
    </div>
    <div class="form-group row">
        <label for="kode" class="col-4 col-form-label">Jumlah</label>
        <div class="col-8">
            <input id="jumlah" name="jumlah" type="number" required="required" class="form-control" min="0">
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
        <label for="id_jenis" class="col-4 col-form-label">NIP Peminjam</label>
        <div class="col-8">
            <select id="nip_peminjam" name="nip_peminjam" class="custom-select" required="required">
                <option value="">-- Pilih NIP --</option>
                <?php 
                        foreach($data_nip as $nip){
                    ?>
                <option value="<?= $nip['nip']; ?>"><?= $nip['nip'] . ' (' . $nip['nama'] . ')'; ?></option>
                <?php 
                        }
                    ?>
            </select>
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
        <div class="offset-4 col-8 mt-4">
            <button name="proses" type="submit" value="simpan" class="btn btn-success">Simpan</button>
            <a href="index.php?hal=DataBarangKeluar" class="btn btn-danger mx-3">Batal</a>
        </div>
    </div>
</form>