<?php 
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/style.css">
    <title>My App</title>
    <style>
    #tambah {
        margin-left: 30px;
    }

    #form-tambah {
        width: 50%;
        margin: 0 auto;
    }

    #form-tambah>div {
        padding: 10px;
    }
    </style>
</head>

<body class="bg-secondary">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container-fluid ">
            <a class="navbar-brand" href="index.php?hal=home">MY APP</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse dropdown-menu-dark" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <!-- <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li> -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Data
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="index.php?hal=DataProduk">Data Produk</a></li>
                            <?php 
                                $member = $_SESSION['MEMBER'];
                                if(isset($member)) {
                             ?>
                            <li><a class="dropdown-item" href="index.php?hal=FormProduk">Tambah Produk</a></li>
                            <?php } ?>
                        </ul>
                    </li>

                    <?php 
                        if(!isset($member)) {
                    ?>
                    <a class="nav-link" href="index.php?hal=FormLogin">Login</a>
                    <?php } else { ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <?= $member['username'] ?>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="index.php?hal=Profile">Profile</a></li>
                            <li><a class="dropdown-item" href="Logout.php">Logout</a></li>
                        </ul>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>