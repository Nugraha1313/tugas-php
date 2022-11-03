<!-- navbar -->
<?php 
    require_once 'model/Produk.php';
    // require_once 'koneksi.php';
    // $result = new Produk();
    // $data = $result->dataProduk();
    $ar_kondisi = ['Baru', 'Second'];
    $obj = new Produk();
    $rs = $obj->dataJenis();    
    ?>
<h2 class="text-center mt-4 text-white">TAMBAH PRODUK</h2>
<form id="form-tambah" method="POST" action="controller/ProdukController.php"
    class="mt-4 card bg-dark text-white p-4 mb-4">
    <div class="form-group row">
        <label for="kode" class="col-4 col-form-label">Kode</label>
        <div class="col-8">
            <input id="kode" name="kode" type="text" required="required" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="nama" class="col-4 col-form-label">Nama Produk</label>
        <div class="col-8">
            <input id="nama" name="nama" type="text" class="form-control" required="required">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-4">Kondisi</label>
        <div class="col-8">
            <?php 
                $no = 0;
                foreach($ar_kondisi as $kondisi){    
            ?>
            <div class="custom-control custom-radio custom-control-inline">
                <input name="kondisi" id="kondisi_<?= $no; ?>" type="radio" required="required"
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
                <input id="harga" name="harga" type="number" required="required" class="form-control" min="0">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="stok" class="col-4 col-form-label">Stok</label>
        <div class="col-8">
            <input id="stok" name="stok" type="number" class="form-control" required="required" min="0">
        </div>
    </div>
    <div class="form-group row">
        <label for="id_jenis" class="col-4 col-form-label">Jenis</label>
        <div class="col-8">
            <select id="id_jenis" name="id_jenis" class="custom-select" required="required">
                <option value="">-- Jenis Produk --</option>
                <?php 
                        foreach($rs as $jenis){
                    ?>
                <option value="<?= $jenis['id']; ?>"><?= $jenis['nama']; ?></option>
                <?php 
                        }
                    ?>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="foto" class="col-4 col-form-label">Foto</label>
        <div class="col-8">
            <input id="foto" name="foto" type="text" class="form-control" required="required">
        </div>
    </div>
    <div class="form-group row">
        <div class="offset-4 col-8">
            <button name="proses" type="submit" value="simpan" class="btn btn-secondary">Simpan</button>
            <a href="index.php?hal=DataProduk" class="btn btn-secondary mx-3">Batal</a>
        </div>
    </div>
</form>