<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Form Input Nilai</title>
</head>

<body>
    <div class="container px-5 my-5">
    <h2 class="text-center">Form Input Nilai</h2> <br>
    <form id="contactForm" class="mt-3" method="POST">
        <div class="mb-3">
            <label class="form-label" for="namaMahasiswa">Nama Mahasiswa</label>
            <input class="form-control" id="namaMahasiswa" type="text" placeholder="Nama Mahasiswa" data-sb-validations="required" name="namaMahasiswa" />
            <div class="invalid-feedback" data-sb-feedback="namaMahasiswa:required">Nama Mahasiswa is required.</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="mataKuliah">Mata Kuliah</label>
            <select class="form-select" id="mataKuliah" aria-label="Mata Kuliah" name="mataKuliah">
                <option value="Matematika">Matematika</option>
                <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                <option value="IPS">IPS</option>
                <option value="IPA">IPA</option>
                <option value="PKN">PKN</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label" for="nilai">Nilai</label>
            <input class="form-control" id="nilai" name="nilai" type="text" placeholder="Nilai" data-sb-validations="required" />
            <div class="invalid-feedback" data-sb-feedback="nilai:required">Nilai is required.</div>
        </div>
        <div class="d-grid">
            <input class="btn btn-primary" type="submit" value="Submit" name="submit">
        </div>
        <div class="d-none" id="submitSuccessMessage">
            <div class="text-center mb-3">
                <div class="fw-bolder">Form submission successful!</div>
                <p>To activate this form, sign up at</p>
                <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
            </div>
        </div>
        <div class="d-none" id="submitErrorMessage">
            <div class="text-center text-danger mb-3">Error sending message!</div>
        </div>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $nama = $_POST['namaMahasiswa'];
        $matkul = $_POST['mataKuliah'];
        $nilai = $_POST['nilai'];
        echo "Nama Mahasiswa : $nama <br>";
        echo "Mata Kuliah : $matkul <br>";
        echo "Nilai : $nilai <br>";
    }
     ?>
</div>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>