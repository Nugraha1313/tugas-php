<?php error_reporting(0); 
// var_dump($_SESSION['MEMBER']);
?>
<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php?hal=home">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-clipboard"></i>
            </div>
            <div class="sidebar-brand-text mx-3">InvenTs</div>
        </a>

        <!-- Divider -->
        <!-- <hr class="sidebar-divider my-0">
            <li class="nav-item">
                <h2 class="text-center">ADMIN</h2>
            </li> -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="index.php?hal=home">
                <i class="fas fa-fw fa-home"></i>
                <span>Dashboard</span></a>
        </li>
        <?php 
                    $member = $_SESSION['MEMBER'];
                    if(isset($member)) {
                        ?>
        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Interface
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Components</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="buttons.html">Buttons</a>
                        <a class="collapse-item" href="cards.html">Cards</a>
                    </div>
                </div>
            </li> -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-database"></i>
                <span>Data</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <?php if($member['jabatan'] != 'Staff') { ?>
                    <a class="collapse-item" href="index.php?hal=DataAkun">Akun</a>
                    <?php } ?>
                    <a class="collapse-item" href="index.php?hal=DataPegawai">Pegawai</a>
                    <a class="collapse-item" href="index.php?hal=DataJabatan">Jabatan</a>
                    <a class="collapse-item" href="index.php?hal=DataSatuan">Satuan</a>
                    <a class="collapse-item" href="index.php?hal=DataBarang">Barang</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-handshake"></i>
                <span>Transaksi</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="index.php?hal=DataTransaksiBarang">Transaksi Barang</a>
                    <a class="collapse-item" href="index.php?hal=DataBarangMasuk">Barang Masuk</a>
                    <a class="collapse-item" href="index.php?hal=DataBarangKeluar">Barang Keluar</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <?php } ?>
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

        <!-- Sidebar Message -->

    </ul>