<?php
// session_start();

// if (!isset($_SESSION['id'])) {
//   echo "
//   <script>
//   alert('Anda harus login dulu');
//   window.location = 'login.php';
//   </script>
//   ";
// }
// include '../config/koneksi.php';
?>

<?php
include 'menu.php';
?>

<!-- partial -->
<div class="page-wrapper mdc-toolbar-fixed-adjust">
    <main class="content-wrapper">
        <!-- Tabel Stok Barang -->
        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
            <div class="mdc-card p-0">
                <h6 class="card-title card-padding pb-0">
                    <a href="tambah_user.php">
                        <button class="mdc-button mdc-button--raised icon-button filled-button--primary">
                            <i class="material-icons mdc-button__icon">add</i>
                        </button>
                    </a>
                    <b>Data User</b>
                </h6>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th class="text-left">No</th>
                                <th class="text-left">Tanggal</th>
                                <th class="text-left">Nama Barang</th>
                                <th class="text-left">Stok Barang</th>
                                <th class="text-left">Tempat</th>
                                <th class="text-left">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include '../config/koneksi.php';
                            $t = date("Y-m-d");
                            $no = 1;
                            $sql = mysqli_query($koneksi, "SELECT * FROM user");
                            while ($r = mysqli_fetch_assoc($sql)) {
                            ?>
                                <tr>
                                    <td class="text-left"><?php echo $no++; ?></td>
                                    <td class="text-left"><?php echo $r['nama']; ?></td>
                                    <td class="text-left"><?php echo $r['username']; ?></td>
                                    <td class="text-left"><?php echo $r['password']; ?></td>
                                    <td class="text-left"><?php echo $r['status']; ?></td>
                                    <td class="text-left">
                                        <b>
                                            <?php
                                            if ($r['status'] == "Manager") {
                                            ?><p><a href="<?= 'edit_user.php?id=' . $r['id_user'] ?>">Edit</a></p>
                                            <?php
                                            } else {
                                            ?> <p><a href="<?= 'hapus_user.php?id=' . $r['id_user'] ?>">Hapus</a> - <a href="<?= 'edit_user.php?id=' . $r['id_user'] ?>">Edit</a></p>
                                            <?php
                                            }

                                            ?>

                                        </b>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
    <!-- partial:partials/_footer.html -->
    <footer>
        <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                    <span class="text-center text-sm-left d-block d-sm-inline-block tx-14">Copyright @Kelompok Berapa Lupa</span>
                </div>
            </div>
        </div>
    </footer>
    <!-- partial -->
</div>
</div>
</div>
<!-- plugins:js -->
<script src="../assets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<script src="../assets/vendors/chartjs/Chart.min.js"></script>
<script src="../assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
<script src="../assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="../assets/js/material.js"></script>
<script src="../assets/js/misc.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="../assets/js/dashboard.js"></script>
<!-- End custom js for this page-->
</body>

</html>