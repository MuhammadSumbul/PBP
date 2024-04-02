<?php
include '../config/koneksi.php';
$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM user WHERE id_user = $id "));
?>

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
                    <a href="barang_masuk.php">
                        <button class="mdc-button mdc-button--raised icon-button filled-button--secondary">
                            <i class="material-icons mdc-button__icon">cancel</i>
                        </button>
                    </a>
                    <b>Tambah Data Pengguna</b>
                </h6>
                <form method="post" action="">
                    <input type="hidden" name="id_user" value="<?= $id ?>">
                    <div class="mdc-card">
                        <div class="template-demo">
                            <h5 class="font-weight-light ">
                                Nama Pengguna
                            </h5>
                            <div class="mdc-layout-grid__inner">
                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12-desktop">
                                    <div class="mdc-text-field">
                                        <input class="mdc-text-field__input" id="text-field-hero-input" name="nama_user" value="<?php echo $data['nama'] ?>">
                                        <div class="mdc-line-ripple"></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        </br>
                        <div class="template-demo">
                            <h5 class="font-weight-light ">
                                Username
                            </h5>
                            <div class="mdc-layout-grid__inner">
                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12-desktop">
                                    <div class="mdc-text-field">
                                        <input class="mdc-text-field__input" id="text-field-hero-input" name="user" value="<?php echo $data['username'] ?>">
                                        <div class="mdc-line-ripple"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </br>
                        <div class="template-demo">
                            <h5 class="font-weight-light ">
                                Password
                            </h5>
                            <div class="mdc-layout-grid__inner">
                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12-desktop">
                                    <div class="mdc-text-field">
                                        <input class="mdc-text-field__input" id="text-field-hero-input" name="pass" value="<?php echo $data['password'] ?>">
                                        <div class="mdc-line-ripple"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </br>
                        <div class="template-demo">
                            <h5 class="font-weight-light ">
                                Tempat Penyimpanan
                            </h5>
                            <div class="mdc-form-field">
                                <div class="mdc-checkbox">
                                    <form>
                                        
                                        <input type="radio" name="status" value="Manager" checked="<?php echo $data['status'] ?>"> Manager
                                        <input type="radio" name="status" value="Karyawan" checked="<?php echo $data['status'] ?>"> Karyawan
                                    </form>
                                </div>
                            </div>
                        </div>
                        </br>
                        <button class="mdc-button mdc-button--raised icon-button filled-button--primary" name="simpan" value="simpan">
                            <i class="material-icons mdc-button__icon">add</i> Tambah Pengguna
                        </button>
                    </div>
                </form>
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


<?php
include "../config/koneksi.php";
if (isset($_POST['simpan'])) {
    $nama_user = $_POST['nama_user'];
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $status = $_POST['status'];

    $sql = mysqli_query($koneksi, "UPDATE user SET nama = '$nama_user', username = '$user' , password ='$pass', status = '$status'WHERE id_user = $id ");

    if ($sql) {
        echo "
      <script>
      alert('Data Berhasil Disimpan');
      window.location.href = 'user.php';
      </script>";
    } else {
        echo "Data Tidak Masuk";
    }
}
?>

</html>