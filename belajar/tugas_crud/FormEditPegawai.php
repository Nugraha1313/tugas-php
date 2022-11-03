<!-- navbar -->
<?php 
    require_once 'model/Barang.php';
    require_once 'model/BarangMasuk.php';
    require_once 'model/Satuan.php';
    require_once 'model/Pegawai.php';
    require_once 'model/Jabatan.php';
    $obj = new Pegawai();
    $obj2 = new Satuan();
    $obj3 = new Pegawai();
    $obj4 = new Jabatan();
    $jenis_kelamin = ['L', 'P'];
    $rs = $obj->dataPegawai();    
    $data_satuan = $obj2->dataSatuan();
    $id = $_REQUEST['id'];
    $data_edit = $obj->getPegawai($id);
    $data_jabatan = $obj4->dataJabatan();
    // $data_nip = $obj3->dataPegawai();
    ?>
<h2 class="text-center mt-4">EDIT PEGAWAI</h2>
<form id="form-tambah" method="POST" action="controller/PegawaiController.php"
    class="mt-4 card bg-dark text-white p-5 mb-4" style="width: 60%; margin: 0 auto;">
    <div class="form-group row">
        <label for="kode" class="col-4 col-form-label">NIP</label>
        <div class="col-8">
            <input id="nip" name="nip" type="text" value="<?= $data_edit['nip']; ?>" required="required"
                class="form-control" maxlength="5">
        </div>
    </div>
    <div class="form-group row">
        <label for="kode" class="col-4 col-form-label">Nama</label>
        <div class="col-8">
            <input id="nama" name="nama" type="text" value="<?= $data_edit['nama']; ?>" required="required"
                class="form-control" maxlength="45">
        </div>
    </div>
    <div class="form-group row">
        <label for="id_jenis" class="col-4 col-form-label">Jenis Kelamin</label>
        <div class="col-8">
            <select id="jenis_kelamin" name="jenis_kelamin" class="custom-select" required="required">
                <option value="">-- Jenis Kelamin --</option>
                <?php 
                        foreach($jenis_kelamin as $gender){
                        $selected = ($gender == $data_edit['jenis_kelamin']) ? 'selected' : '';
                    ?>
                <option value="<?= $gender; ?>" <?= $selected; ?>><?= $gender; ?></option>
                <?php 
                        }
                    ?>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="kode" class="col-4 col-form-label">Tempat Lahir</label>
        <div class="col-8">
            <input id="tempat_lahir" name="tempat_lahir" type="text" value="<?= $data_edit['tempat_lahir']; ?>"
                required="required" class="form-control" maxlength="45">
        </div>
    </div>
    <div class="form-group row">
        <label for="nama" class="col-4 col-form-label">Tanggal Lahir</label>
        <div class="col-8">
            <input id="tanggal_lahir" name="tanggal_lahir" type="date" value="<?= $data_edit['tanggal_lahir']; ?>"
                class="form-control" required="required">
        </div>
    </div>
    <div class="form-group row">
        <label for="kode" class="col-4 col-form-label">Alamat</label>
        <div class="col-8">
            <input id="alamat" name="alamat" type="text" value="<?= $data_edit['alamat']; ?>" required="required"
                class="form-control" maxlength="45">
        </div>
    </div>
    <div class="form-group row">
        <label for="id_jenis" class="col-4 col-form-label">Jabatan</label>
        <div class="col-8">
            <select id="jabatan_id" name="jabatan_id" class="custom-select" required="required">
                <option value="">-- Pilih Jabatan --</option>
                <?php 
                        foreach($data_jabatan as $jabatan){
                        $sel = ($jabatan['id'] == $data_edit['jabatan_id']) ? 'selected' : '';
                    ?>
                <option value="<?= $jabatan['id']; ?>" <?= $sel; ?>>
                    <?=  $jabatan['nama']; ?>
                </option>
                <?php 
                        }
                    ?>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <idiv class="offset-4 col-8">
            <button name="proses" type="submit" value="ubah" class="btn btn-success">Ubah</button>
            <a href="index.php?hal=DataPegawai" class="btn btn-danger mx-3">Batal</a>
            <input type="hidden" name="idx" value="<?= $id; ?>">
        </idiv>
    </div>
</form>