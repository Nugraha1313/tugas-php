<!-- navbar -->
<?php 
    require_once 'model/Produk.php';
    // require_once 'koneksi.php';
    // $result = new Produk();
    // $data = $result->dataProduk();
    $ar_kondisi = ['Baru', 'Second'];
    $obj = new Produk();
    $rs = $obj->dataJenis();    
    // tangkap request id di url
    $id = $_REQUEST['id'];
    $data_edit = $obj->getProduk($id);
    // var_dump($data_edit);
    ?>
<h2 class="text-center mt-4 text-white">EDIT PRODUK</h2>
<form id="form-tambah" method="POST" action="controller/ProdukController.php"
    class="mt-4 card bg-dark text-white p-4 mb-4">
    <div class="form-group row">
        <label for="kode" class="col-4 col-form-label">Kode</label>
        <div class="col-8">
            <input id="kode" name="kode" type="text" value="<?= $data_edit['kode']; ?>" required="required"
                class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="nama" class="col-4 col-form-label">Nama Produk</label>
        <div class="col-8">
            <input id="nama" name="nama" type="text" value="<?= $data_edit['nama']; ?>" class="form-control"
                required="required">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-4">Kondisi</label>
        <div class="col-8">
            <?php 
                $no = 0;
                foreach($ar_kondisi as $kondisi){    
                $cek = ($data_edit['kondisi'] == $kondisi) ? 'checked' : '';
            ?>
            <div class="custom-control custom-radio custom-control-inline">
                <input name="kondisi" id="kondisi_<?= $no; ?>" <?= $cek; ?> type="radio" required="required"
                    class="custom-control-input" value="<?= $kondisi; ?>">
                <label for="kondisi_<?= $no; ?>" class="custom-control-label"><?= $kondisi; ?></label>
            </div>
            <?php 
                $no++;
                }
            ?>
        </div>
    </div>
    <div class=" form-group row">
        <label for="harga" class="col-4 col-form-label">Harga</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">Rp</div>
                </div>
                <input id="harga" name="harga" type="number" required="required" value="<?= $data_edit['harga']; ?>"
                    class="form-control" min="0">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="stok" class="col-4 col-form-label">Stok</label>
        <div class="col-8">
            <input id="stok" name="stok" type="number" class="form-control" value="<?= $data_edit['stok']; ?>"
                required="required" min="0">
        </div>
    </div>
    <div class="form-group row">
        <label for="id_jenis" class="col-4 col-form-label">Jenis</label>
        <div class="col-8">
            <select id="id_jenis" name="id_jenis" class="custom-select" required="required">
                <option value="">-- Jenis Produk --</option>
                <?php 
                        foreach($rs as $jenis){
                        $sel = ($data_edit['id_jenis'] == $jenis['id']) ? 'selected' : '';
                    ?>
                <option value="<?= $jenis['id']; ?>" <?= $sel; ?>> <?= $jenis['nama']; ?></option>
                <?php 
                        }
                    ?>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="foto" class="col-4 col-form-label">Foto</label>
        <div class="col-8">
            <input id="foto" name="foto" type="text" value="<?= $data_edit['foto']; ?>" class="form-control"
                required="required">
        </div>
    </div>
    <div class="form-group row">
        <idiv class="offset-4 col-8">
            <button name="proses" type="submit" value="ubah" class="btn btn-secondary">Ubah</button>
            <a href="index.php?hal=DataProduk" class="btn btn-secondary mx-3">Batal</a>
            <input type="hidden" name="idx" value="<?= $id; ?>">
        </idiv>
    </div>
</form>