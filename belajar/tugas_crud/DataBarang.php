<!-- navbar -->
<?php 
    require_once 'model/Barang.php';
    $result = new Barang();
    $data = $result->dataBarang();
    ?>

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h2 class="text-dark font-weight-bold">Data Barang</h2>
        </div>
        <div class=" card-body">
            <div class="table-responsive">
                <a id="tambah" href="index.php?hal=FormBarang" class="btn btn-dark mb-3">
                    <i class="fas fa-fw fa-plus"></i>
                </a>
                <table id="table-data-produk" class=" table table-bordered text-center table-striped table-hover mb-4">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>KODE</th>
                            <th>NAMA</th>
                            <th>JUMLAH</th>
                            <th>SATUAN</th>
                            <th>KETERANGAN</th>
                            <!-- <th>FOTO</th> -->
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
                            <td><?= $rs['jumlah']; ?></td>
                            <td><?= $rs['satuan']; ?></td>
                            <td><?= $rs['keterangan']; ?></td>
                            <td>
                                <form method="POST" action="controller/BarangController.php">
                                    <a href="index.php?hal=DetailBarang&id=<?= $rs['id']; ?>" class="btn btn-primary">
                                        <i class="fas fa-fw fa-info"></i>
                                    </a>
                                    <a href="index.php?hal=FormEditBarang&id=<?= $rs['id']; ?>" class="btn btn-warning">
                                        <i class="fas fa-fw fa-pen"></i>
                                    </a>
                                    <?php 
                            $member = $_SESSION['MEMBER'];
                            if($member['jabatan'] != 'Staff') {
                        ?>
                                    <button class="btn btn-danger" name="proses" value="hapus"
                                        onclick="return confirm('Anda Yakin Data Dihapus ?')">
                                        <i class="fas fa-fw fa-trash"></i></button>
                                    <?php } ?>
                                    <input type="hidden" name="idx" value="<?= $rs['id']; ?>">
                                </form>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>