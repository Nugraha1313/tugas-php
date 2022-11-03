<!-- navbar -->
<?php 
    require_once 'model/Satuan.php';
    $result = new Satuan();
    $data = $result->dataSatuan();
    ?>

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h2 class="text-dark font-weight-bold">Data Satuan Barang</h2>
        </div>
        <div class=" card-body">
            <div class="table-responsive">
                <a id="tambah" href="index.php?hal=FormSatuan" class="btn btn-dark mb-3">
                    <i class="fas fa-fw fa-plus"></i>
                </a>
                <table id="table-data-produk" class=" table table-bordered text-center table-striped table-hover mb-4">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>NAMA</th>
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
                            <td><?= $rs['nama']; ?></td>
                            <td>
                                <form method="POST" action="controller/SatuanController.php">
                                    <a href="index.php?hal=FormEditSatuan&id=<?= $rs['id']; ?>" class="btn btn-warning">
                                        <i class="fas fa-fw fa-pen"></i>
                                    </a>
                                    <?php 
                            $member = $_SESSION['MEMBER'];
                            if($member['jabatan'] != 'Staff') {
                        ?>
                                    <button class="btn btn-danger" name="proses" value="hapus"
                                        onclick="return confirm('Anda Yakin Data Dihapus ?')">
                                        <i class="fas fa-fw fa-trash"></i>
                                    </button>
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