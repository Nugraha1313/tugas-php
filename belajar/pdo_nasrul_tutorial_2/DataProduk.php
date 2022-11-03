<!-- navbar -->
<?php 
    require_once 'model/Produk.php';
    // require_once 'koneksi.php';
    $result = new Produk();
    $data = $result->dataProduk();
    ?>

<!-- result sebuah tabel -->
<h2 class="text-center text-white mt-5 mb-5">Data Produk</h2>
<?php 
    $member = $_SESSION['MEMBER'];
    if(isset($member)) {
?>
<a id="tambah" href="index.php?hal=FormProduk" class="btn btn-dark mb-3">Tambah Produk</a>
<?php } ?>
<table id="table-data-produk" class=" table table-dark text-center table-striped table-hover mb-4">
    <thead>
        <tr>
            <th>NO</th>
            <th>KODE</th>
            <th>NAMA</th>
            <th>HARGA</th>
            <th>STOK</th>
            <th>KONDISI</th>
            <!-- <th>FOTO</th> -->
            <th>KATEGORI</th>
            <th>ACTION</th>
        </tr>
    </thead>
    <tbody>
        <?php 
                $no = 1;
                foreach($data as $rs) {
            ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $rs['kode']; ?></td>
            <td><?= $rs['nama']; ?></td>
            <td><?= 'Rp' . number_format($rs['harga'], 0, ',', '.'); ?></td>
            <td><?= $rs['stok']; ?></td>
            <td><?= $rs['kondisi']; ?></td>
            <td><?= $rs['kategori']; ?></td>
            <td>
                <form method="POST" action="controller/ProdukController.php">
                    <a href="index.php?hal=DetailProduk&id=<?= $rs['id']; ?>" class="btn btn-primary">Detail</a>
                    <?php 
                        $role = $member['roles'];
                        if(isset($member)) {
                    ?>
                    <a href="index.php?hal=FormEditProduk&id=<?= $rs['id']; ?>" class="btn btn-warning">Ubah</a>
                    <?php 
                        if($role != 'staff') {    
                    ?>

                    <button class="btn btn-danger" name="proses" value="hapus"
                        onclick="return confirm('Anda Yakin Data Dihapus ?')">Hapus</button>
                    <?php }} ?>
                    <input type="hidden" name="idx" value="<?= $rs['id']; ?>">
                </form>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>