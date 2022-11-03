<!-- navbar -->
<?php 
    require_once 'model/Pegawai.php';
    $result = new Pegawai();
    $data = $result->dataPegawai();
    ?>

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h2 class="text-dark font-weight-bold">Data Pegawai</h2>
        </div>
        <div class=" card-body">
            <div class="table-responsive">
                <a id="tambah" href="index.php?hal=FormPegawai" class="btn btn-dark mb-3">
                    <i class="fas fa-fw fa-plus"></i>
                </a>
                <table id="table-data-produk" class=" table table-bordered text-center table-striped table-hover mb-4">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>NIP</th>
                            <th>NAMA</th>
                            <th>JENIS KELAMIN</th>
                            <th>TEMPAT, TANGGAL LAHIR</th>
                            <th>ALAMAT</th>
                            <th>JABATAN</th>
                            <!-- <th>FOTO</th> -->
                            <th class="">ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                $no = 1;
                foreach($data as $rs) {
            ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $rs['nip']; ?></td>
                            <td><?= $rs['nama']; ?></td>
                            <td><?= $rs['jenis_kelamin']; ?></td>
                            <td><?= $rs['tempat_lahir'] . ', ' . $rs['tanggal_lahir']; ?></td>
                            <td><?= $rs['alamat']; ?></td>
                            <td><?= $rs['jabatan']; ?></td>
                            <td>
                                <form method="POST" action="controller/PegawaiController.php">
                                    <a href="index.php?hal=DetailPegawai&id=<?= $rs['id']; ?>" class="btn btn-primary">
                                        <i class="fas fa-fw fa-info"></i>
                                    </a>
                                    <a href="index.php?hal=FormEditPegawai&id=<?= $rs['id']; ?>"
                                        class="btn btn-warning">
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