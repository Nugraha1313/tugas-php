<!-- navbar -->
<?php 
    require_once 'model/Akun.php';
    $result = new Akun();
    $data = $result->dataAkun();
    ?>

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h2 class="text-dark font-weight-bold">Data Akun</h2>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <a id="tambah" href="index.php?hal=FormAkun" class="btn btn-dark mb-3">
                    <i class="fas fa-fw fa-plus"></i>
                </a>
                <table id="table-data-produk" class=" table table-bordered text-center table-striped table-hover mb-4">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>USERNAME</th>
                            <th>PASSWORD</th>
                            <th>JABATAN</th>
                            <th>FOTO</th>
                            <th>NIP</th>
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
                            <td><?= $rs['username']; ?></td>
                            <td><?= $rs['password']; ?></td>
                            <td><?= $rs['jabatan']; ?></td>
                            <td><?= $rs['foto']; ?></td>
                            <td><?= $rs['pegawai_nip']; ?></td>
                            <td>
                                <form method="POST" action="controller/AkunController.php">
                                    <a href="index.php?hal=DetailAkun&id=<?= $rs['id']; ?>" class="btn btn-primary">
                                        <i class="fas fa-fw fa-info"></i></a>
                                    <a href="index.php?hal=FormEditAkun&id=<?= $rs['id']; ?>" class="btn btn-warning">
                                        <i class="fas fa-fw fa-pen"></i></a>
                                    <button class="btn btn-danger" name="proses" value="hapus"
                                        onclick="return confirm('Anda Yakin Data Dihapus ?')">
                                        <i class="fas fa-fw fa-trash"></i></button>
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