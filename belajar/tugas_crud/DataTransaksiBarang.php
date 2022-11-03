<!-- navbar -->
<?php 
    require_once 'model/TransaksiBarang.php';
    $result = new TransaksiBarang();
    $data = $result->dataTransaksiBarang();
    ?>

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h2 class="text-dark font-weight-bold">Data Transaksi Barang</h2>
        </div>
        <div class=" card-body">
            <div class="table-responsive">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-dark mb-3" data-toggle="modal" data-target="#exampleModal">
                    <i class="fas fa-fw fa-plus"></i>
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content bg-dark">
                            <div class="modal-footer bg-dark" style="margin: 0 auto;">
                                <a id="tambah" href="index.php?hal=FormBarangMasuk" class="btn btn-info mb-3">Tambah
                                    Barang
                                    Masuk</a>
                                <a id="tambah" href="index.php?hal=FormBarangKeluar" class="btn btn-primary mb-3">Tambah
                                    Barang
                                    Keluar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <table id="table-data-produk" class=" table table-bordered text-center table-striped table-hover mb-4">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>KODE TRANSAKSI</th>
                            <th>KODE BARANG</th>
                            <th>NIP</th>
                            <th>JUMLAH</th>
                            <th>SATUAN</th>
                            <th>TANGGAL & WAKTU TRANSAKSI</th>
                            <th>KETERANGAN</th>
                            <th>JENIS TRANSAKSI</th>
                            <!-- <th>FOTO</th> -->
                            <!-- <th>ACTION</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                $no = 1;
                foreach($data as $rs) {
            ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $rs['kode_transaksi']; ?></td>
                            <td><?= $rs['kode_barang']; ?></td>
                            <td><?= $rs['nip']; ?></td>
                            <td><?= $rs['jumlah']; ?></td>
                            <td><?= $rs['satuan']; ?></td>
                            <td><?= $rs['tanggal_transaksi'] . ' ' . $rs['waktu_transaksi']; ?></td>
                            <td><?= $rs['keterangan']; ?></td>
                            <td><?= $rs['jenis_transaksi']; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>