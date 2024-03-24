<?php
session_start();

if (!isset($_SESSION['id'])) {
    echo "
   <script>
   alert('Anda harus login dulu');
   window.location = 'login.php';
   </script>
   ";
}
include '../config/koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Material Dash</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css" />
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../assets/vendors/flag-icon-css/css/flag-icon.min.css" />
    <link rel="stylesheet" href="../assets/vendors/jvectormap/jquery-jvectormap.css" />
    <!-- End plugin css for this page -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../assets/css/demo/style.css" />
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../assets/images/favicon.png" />
</head>

<body>
    <script src="../assets/js/preloader.js"></script>
    <div class="body-wrapper">
        <!-- partial:partials/_sidebar.html -->

        <aside class="mdc-drawer mdc-drawer--dismissible mdc-drawer--open">
            <br>
            <div class="mdc-drawer__content">
                <center>
                    <a href="index.php" class="brand-logo">
                        <img src="../assets/images/logo.png" alt="logo" />
                    </a>
                </center>

                <div class="user-info">

                    <p class="name"><?php echo $_SESSION['nama'] ?></p>
                    <p class="email"><?php echo $_SESSION['status'] ?></p>
                </div>
                <div class="mdc-list-group">
                    <nav class="mdc-list mdc-drawer-menu">
                        <div class="mdc-list-item mdc-drawer-item">
                            <a class="mdc-drawer-link" href="index.php">
                                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">home</i>
                                Dashboard
                            </a>
                        </div>
                        <div class="mdc-list-item mdc-drawer-item">
                            <a class="mdc-drawer-link" href="stok_barang.php">
                                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">track_changes</i>
                                Stok Barang
                            </a>
                        </div>
                        <div class="mdc-list-item mdc-drawer-item">
                            <a class="mdc-drawer-link" href="barang_keluar.php">
                                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">dashboard</i>
                                Barang Keluar
                            </a>
                        </div>
                        <div class="mdc-list-item mdc-drawer-item">
                            <a class="mdc-drawer-link" href="barang_masuk.php">
                                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">grid_on</i>
                                Barang Masuk
                            </a>
                        </div>
                        <?php if ($_SESSION['status'] == "Manager") { ?>
                            <div class="mdc-list-item mdc-drawer-item">
                                <a class="mdc-drawer-link" href="user.php">
                                    <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">people</i>
                                    Pengguna
                                </a>
                            </div>
                        <?php } ?>
                        <!-- <div class="mdc-list-item mdc-drawer-item">
                            <a class="mdc-expansion-panel-link" href="#" data-toggle="expansionPanel" data-target="ui-sub-menu">
                                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">dashboard</i>
                                UI Features
                                <i class="mdc-drawer-arrow material-icons">chevron_right</i>
                            </a>
                            <div class="mdc-expansion-panel" id="ui-sub-menu">
                                <nav class="mdc-list mdc-drawer-submenu">
                                    <div class="mdc-list-item mdc-drawer-item">
                                        <a class="mdc-drawer-link" href="../../pages/ui-features/buttons.html">
                                            Buttons
                                        </a>
                                    </div>
                                    <div class="mdc-list-item mdc-drawer-item">
                                        <a class="mdc-drawer-link" href="../../pages/ui-features/typography.html">
                                            Typography
                                        </a>
                                    </div>
                                </nav>
                            </div>
                        </div> -->

                    </nav>
                </div>
                <div class="profile-actions">
                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                        <a href="logout.php">
                            <button class="mdc-button mdc-button--outlined filled-button--light">
                                Logout
                            </button>
                        </a>
                    </div>
                    <!-- <a class="logout" href="logout.php">Logout</a> -->
                </div>
            </div>
        </aside>

        <!-- partial -->
        <div class="main-wrapper mdc-drawer-app-content">
            <!-- partial:partials/_navbar.html -->
            <header class="mdc-top-app-bar">
                <div class="mdc-top-app-bar__row">
                    <div class="mdc-top-app-bar__section mdc-top-app-bar__section--align-start">
                        <button class="material-icons mdc-top-app-bar__navigation-icon mdc-icon-button sidebar-toggler">
                            menu
                        </button>
                        <span class="mdc-top-app-bar__title">Selamat Datang !</span>
                        <button class="mdc-button mdc-button--outlined outlined-button--dark">
                            <?php echo date("d - F - Y") ?>
                        </button>
                    </div>
                </div>
            </header>