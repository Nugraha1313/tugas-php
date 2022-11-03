<!-- navbar -->
<?php 
    require_once 'model/Pegawai.php';
    require_once 'model/Jabatan.php';
    $arr_kelamin = ['L', 'P'];
    $obj = new Pegawai();
    $rs = $obj->dataPegawai();
    $obj2 = new Jabatan();
    $id_jabatan = $obj2->dataJabatan();
    // $data_nip = $obj2->dataPegawai();    
    ?>
<h2 class="text-center mt-4">TAMBAH PEGAWAI</h2>
<form id="form-tambah" method="POST" action="controller/PegawaiController.php"
    class="mt-4 card bg-dark text-white p-5 mb-4" style="margin: 0 auto; width: 60%;">
    <div class="form-group row">
        <label for="nip" class="col-4 col-form-label">NIP</label>
        <div class="col-8">
            <input id="nip" name="nip" type="text" required="required" class="form-control" maxlength="5">
        </div>
    </div>
    <div class="form-group row">
        <label for="nama" class="col-4 col-form-label">Nama</label>
        <div class="col-8">
            <input id="nama" name="nama" type="text" class="form-control" required="required" maxlength="45">
        </div>
    </div>
    <div class="form-group row">
        <label for="id_jenis" class="col-4 col-form-label">Jenis Kelamin</label>
        <div class="col-8">
            <select id="jenis_kelamin" name="jenis_kelamin" class="custom-select" required="required">
                <option value="">-- Pilih Jenis Kelamin --</option>
                <?php 
                        foreach($arr_kelamin as $jenis){
                    ?>
                <option value="<?= $jenis; ?>"><?= $jenis; ?></option>
                <?php 
                        }
                    ?>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="nama" class="col-4 col-form-label">Tempat Lahir</label>
        <div class="col-8">
            <input id="tempat_lahir" name="tempat_lahir" type="text" class="form-control" required="required"
                maxlength="45">
        </div>
    </div>
    <div class="form-group row">
        <label for="nama" class="col-4 col-form-label">Tanggal Lahir</label>
        <div class="col-8">
            <input id="tanggal_lahir" name="tanggal_lahir" type="date" class="form-control" required="required">
        </div>
    </div>
    <div class="form-group row">
        <label for="foto" class="col-4 col-form-label">Alamat</label>
        <div class="col-8">
            <input id="alamat" name="alamat" type="text" class="form-control" required="required" maxlength="45">
        </div>
    </div>
    <div class="form-group row">
        <label for="id_jenis" class="col-4 col-form-label">Jabatan</label>
        <div class="col-8">
            <select id="jabatan_id" name="jabatan_id" class="custom-select" required="required">
                <option value="">-- Pilih Jabatan --</option>
                <?php 
                        foreach($id_jabatan as $jabatan){
                    ?>
                <option value="<?= $jabatan['id']; ?>"><?= $jabatan['nama']; ?></option>
                <?php 
                        }
                    ?>
            </select>
        </div>
    </div>

    <div class="form-group row">
        <div class="offset-4 col-8 mt-4">
            <button name="proses" type="submit" value="simpan" class="btn btn-success">Simpan</button>
            <a href="index.php?hal=DataPegawai" class="btn btn-danger mx-3">Batal</a>
        </div>
    </div>
</form>iv>
</form>