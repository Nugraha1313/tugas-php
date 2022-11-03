<!-- navbar -->
<?php 
    require_once 'model/Akun.php';
    require_once 'model/Pegawai.php';
    $arr_jabatan = ['Admin', 'Manager', 'Staff'];
    $obj = new Akun();
    $obj2 = new Pegawai();
    $rs = $obj->dataAkun();
    $data_nip = $obj2->dataPegawai();    
    ?>
<h2 class="text-center mt-4">TAMBAH AKUN</h2>
<form id="form-tambah" method="POST" action="controller/AkunController.php"
    class="mt-4 card bg-dark text-white p-5 mb-4" style="margin: 0 auto; width: 60%;">
    <div class="form-group row">
        <label for="username" class="col-4 col-form-label">Username</label>
        <div class="col-8">
            <input id="username" name="username" type="text" required="required" class="form-control" maxlength="45">
        </div>
    </div>
    <div class="form-group row">
        <label for="nama" class="col-4 col-form-label">Password</label>
        <div class="col-8">
            <input id="password" name="password" type="password" class="form-control" required="required"
                maxlength="45">
        </div>
    </div>
    <div class="form-group row">
        <label for="id_jenis" class="col-4 col-form-label">Jabatan</label>
        <div class="col-8">
            <select id="jabatan" name="jabatan" class="custom-select" required="required">
                <option value="">-- Pilih Jabatan --</option>
                <?php 
                        foreach($arr_jabatan as $jenis){
                    ?>
                <option value="<?= $jenis; ?>"><?= $jenis; ?></option>
                <?php 
                        }
                    ?>
            </select>
        </div>
    </div>

    <div class="form-group row">
        <label for="foto" class="col-4 col-form-label">Foto</label>
        <div class="col-8">
            <input id="foto" name="foto" type="text" class="form-control" required="required" maxlength="45">
        </div>
    </div>

    <!-- <div class="form-group row">
        <label for="foto" class="col-4 col-form-label">NIP</label>
        <div class="col-8">
            <input id="foto" name="foto" type="text" class="form-control" required="required" maxlength="5">
        </div>
    </div> -->
    <div class="form-group row">
        <label for="id_jenis" class="col-4 col-form-label">NIP</label>
        <div class="col-8">
            <select id="pegawai_nip" name="pegawai_nip" class="custom-select" required="required">
                <option value="">-- Pilih NIP --</option>
                <?php 
                        foreach($data_nip as $jenis){
                    ?>
                <option value="<?= $jenis['nip']; ?>"><?= $jenis['nip']; ?></option>
                <?php 
                        }
                    ?>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <div class="offset-4 col-8 mt-4">
            <button name="proses" type="submit" value="simpan" class="btn btn-success">Simpan</button>
            <a href="index.php?hal=DataAkun" class="btn btn-danger mx-3">Batal</a>
        </div>
    </div>
</form>