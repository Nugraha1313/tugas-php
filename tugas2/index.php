<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Tugas 2 PHP</title>
    <style>
        * {
            /* border: 1px solid red; */
        }
    </style>
</head>

<body class="bg-light">
    <div class="container px-5 my-5">
    <h2 class="text-center">Form Input Data Pegawai</h2>
    <form id="contactForm" class="mt-5" method="POST">
        <div class="mb-3">
            <label class="form-label" for="namaPegawai">Nama Pegawai</label>
            <input class="form-control" id="namaPegawai" type="text" placeholder="Nama Pegawai" data-sb-validations="required" name="namaPegawai" required />
            <div class="invalid-feedback" data-sb-feedback="namaPegawai:required">Nama Pegawai is required.</div>
        </div>
        <!-- agama -->
        <div class="mb-3">
            <label class="form-label" for="agama">Agama</label>
            <select class="form-select" id="agama" aria-label="agama" name="agama" required>
                <option value="">-- Pilih Agama --</option>
                <option value="Islam">Islam</option>
                <option value="Kristen Katolik">Kristen Katolik</option>
                <option value="Kristen Protestan">Kristen Protestan</option>
                <option value="Hindu">Hindu</option>
                <option value="Buddha">Buddha</option>
                <option value="Konghucu">Konghucu</option>
            </select>
        </div>
        <!-- jabatan -->
        <div class="mb-3">
            <label class="form-label d-block">Jabatan</label>
            <div class="form-check">
                <input class="form-check-input" id="manager" type="radio" name="jabatan" value="Manajer" data-sb-validations="required" required="required" />
                <label class="form-check-label" for="manager">Manager</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" id="asisten" type="radio" name="jabatan" value="Asisten" data-sb-validations="required" />
                <label class="form-check-label" for="asisten">Asisten</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" id="kabag" type="radio" name="jabatan" value="Kabag" data-sb-validations="required" />
                <label class="form-check-label" for="kabag">Kabag</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" id="staff" type="radio" name="jabatan" value="Staff" data-sb-validations="required" />
                <label class="form-check-label" for="staff">Staff</label>
            </div>
            <div class="invalid-feedback" data-sb-feedback="jabatan:required">One option is required.</div>
        </div>
        <!-- status -->
        <div class="mb-3">
            <label class="form-label d-block">Status</label>
            <div class="form-check">
                <input class="form-check-input" id="menikah" type="radio" name="status" value="Menikah" data-sb-validations="required" required="required"/>
                <label class="form-check-label" for="menikah">Menikah</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" id="belumMenikah" type="radio" name="status" value="Belum Menikah" data-sb-validations="required" />
                <label class="form-check-label" for="belumMenikah">Belum Menikah</label>
            </div>
            <div class="invalid-feedback" data-sb-feedback="status:required">One option is required.</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="jumlahAnak">Jumlah Anak</label>
            <input class="form-control" id="jumlahAnak" name="jumlahAnak" type="number" placeholder="Jumlah Anak" min="0" data-sb-validations="required" required/>
            <div class="invalid-feedback" data-sb-feedback="jumlahAnak:required">Jumlah Anak is required.</div>
        </div>
        <div class="d-grid mb-3">
            <input class="btn btn-primary" type="submit" value="Submit" name="submit">
        </div>
    </form>
    <!-- php -->
    <?php
        error_reporting(0);
        $namaPegawai = $_POST['namaPegawai'];
        $agama = $_POST['agama'];
        $jabatan = $_POST['jabatan'];
        $status = $_POST['status'];
        $jumlahAnak = $_POST['jumlahAnak'];

        // gaji pokok switch case
        switch ($jabatan) {
            case 'Manajer':
                $gajiPokok = 20000000;
                break;
            case 'Asisten':
                $gajiPokok = 15000000;
                break;
            case 'Kabag':
                $gajiPokok = 10000000;
                break;
            case 'Staff':
                $gajiPokok = 4000000;
                break;
            default:
                $gajiPokok = 0;
                break;
        }

        // tunjangan jabatan
        $tunjanganJabatan = (20 / 100) * $gajiPokok;

        // tunjangan keluarga
        if($status == 'Menikah' && $jumlahAnak <= 2) {
            $tunjanganKeluarga = (5 / 100) * $gajiPokok;
        }
        else if($status == 'Menikah' && ($jumlahAnak > 2 && $jumlahAnak <= 5) ) {
            $tunjanganKeluarga = (10 / 100) * $gajiPokok;
        }
        else if($status == 'Menikah' && $jumlahAnak > 5) {
            $tunjanganKeluarga = (15 / 100) * $gajiPokok;
        }
        else {
            $tunjanganKeluarga = 0;
        }

        // gaji kotor
        $gajiKotor = $gajiPokok + $tunjanganJabatan + $tunjanganKeluarga;

        // zakat profesi ternary
        $zakatProfesi = ($agama == 'Islam' && $gajiKotor >= 6000000) ? (2.5 / 100) * $gajiKotor : 0;

        // take home pay
        $takeHomePay = $gajiKotor - $zakatProfesi;
    if (isset($_POST['submit'])) { ?>
        <br>
        <h2 class="text-center">Data Pegawai</h2> 
        <br>
        <table class="table table-bordered table-striped mt-6">
            <tbody>
                <tr>
                    <td>Nama Pegawai</td>
                    <td><?php echo $namaPegawai; ?></td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td><?php echo $agama; ?></td>
                </tr>
                <tr>
                    <td>Jabatan</td>
                    <td><?php echo $jabatan; ?></td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td><?php echo $status; ?></td>
                </tr>
                <tr>
                    <td>Jumlah Anak</td>
                    <td><?php echo $jumlahAnak; ?></td>
                </tr>
                <tr>
                    <td>Gaji Pokok</td>
                    <td><?= "Rp. " . number_format($gajiPokok, 0, ',', '.') ?></td>
                </tr>
                <tr>
                    <td>Tunjangan Jabatan</td>
                    <td><?= "Rp. " . number_format($tunjanganJabatan, 0, ',', '.') ?></td>
                </tr>
                <tr>
                    <td>Tunjangan Keluarga</td>
                    <td><?= "Rp. " . number_format($tunjanganKeluarga, 0, ',', '.') ?></td>
                </tr>
                <tr>
                    <td>Gaji Kotor</td>
                    <td><?= "Rp. " . number_format($gajiKotor, 0, ',', '.') ?></td>    
                </tr>
                <tr>
                    <td>Zakat Profesi</td>
                    <td><?= "Rp. " . number_format($zakatProfesi, 0, ',', '.') ?></td>
                </tr>
                <tr>
                    <td>Take Home Pay</td>
                    <td><?= "Rp. " . number_format($takeHomePay, 0, ',', '.') ?></td>
                </tr>
            </tbody>
        </table>
        
    <?php } ?>

</div>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>