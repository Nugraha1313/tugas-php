<!-- navbar -->
<?php 
    require_once 'model/Akun.php';
        require_once 'model/Pegawai.php';
    $obj = new Akun();
    $rs = $obj->dataAkun();    
    $arr_jabatan = ['Admin', 'Manager', 'Staff'];
    $obj2 = new Pegawai();
    $id = $_REQUEST['id'];
    $data_edit = $obj->getAkun($id);
        $data_nip = $obj2->dataPegawai();   
    ?>
<h2 class="text-center mt-4">EDIT AKUN</h2>
<form id="form-tambah" method="POST" action="controller/AkunController.php"
    class="mt-4 card bg-dark text-white p-5 mb-4" style="width: 60%; margin: 0 auto;">
    <div class="form-group row">
        <label for="username" class="col-4 col-form-label">Username</label>
        <div class="col-8">
            <input id="username" name="username" type="text" value="<?= $data_edit['username']; ?>" required="required"
                class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="password" class="col-4 col-form-label">Password</label>
        <div class="col-8">
            <input id="password" name="password" type="text" value="<?= $data_edit['password']; ?>" class="form-control"
                required="required">
        </div>
    </div>
    <div class="form-group row">
        <label for="id_jenis" class="col-4 col-form-label">Jabatan</label>
        <div class="col-8">
            <select id="jabatan" name="jabatan" class="custom-select" required="required">
                <option value="">-- Jabatan --</option>
                <?php 
                        foreach($arr_jabatan as $jabatan){
                        $sel = ($data_edit['jabatan'] == $jabatan) ? 'selected' : '';
                        if($data_edit['jabatan'] == $jabatan)
                    ?>
                <option value="<?= $jabatan; ?>" <?= $sel; ?>> <?= $jabatan; ?></option>
                <?php 
                        }
                    ?>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="foto" class="col-4 col-form-label">Foto</label>
        <div class="col-8">
            <input id="foto" name="foto" type="text" class="form-control" value="<?= $data_edit['foto']; ?>"
                required="required" maxlength="45">
        </div>
    </div>
    <div class="form-group row">
        <label for="id_jenis" class="col-4 col-form-label">NIP</label>
        <div class="col-8">
            <select id="pegawai_nip" name="pegawai_nip" class="custom-select" required="required">
                <option value="">-- Pilih NIP --</option>
                <?php 
                        foreach($data_nip as $jenis){
                        $sel = ($data_edit['pegawai_nip'] == $jenis['nip']) ? 'selected' : '';    
                    ?>
                <option value="<?= $data_edit['pegawai_nip']; ?>" <?= $sel; ?>><?= $jenis['nip']; ?>
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
            <a href="index.php?hal=DataAkun" class="btn btn-danger mx-3">Batal</a>
            <input type="hidden" name="idx" value="<?= $id; ?>">
        </idiv>
    </div>
</form>