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
                    <a href="barang_keluar.php">
                        <button class="mdc-button mdc-button--raised icon-button filled-button--secondary">
                            <i class="material-icons mdc-button__icon">cancel</i>
                        </button>
                    </a>
                    <b>Tambah Data Barang Keluar</b>
                </h6>
                <form method="post" action="">
                    <div class="mdc-card">
                        <div class="template-demo">
                            <h5 class="font-weight-light ">
                                Nama Barang Keluar
                            </h5>
                            <div class="mdc-layout-grid__inner">
                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12-desktop">
                                    <div class="mdc-text-field">
                                        <input class="mdc-text-field__input" id="text-field-hero-input" name="nama_barang">
                                        <div class="mdc-line-ripple"></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        </br>
                        <div class="template-demo">
                            <h5 class="font-weight-light ">
                                Stok Barang Keluar
                            </h5>
                            <div class="mdc-layout-grid__inner">
                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12-desktop">
                                    <div class="mdc-text-field">
                                        <input class="mdc-text-field__input" id="text-field-hero-input" name="stok">
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
                                        <input type="radio" name="tempat" value="Gudang 1"> Gudang 1 (Makanan)
                                        <input type="radio" name="tempat" value="Gudang 2"> Gudang 2 (Minuman)
                                        <input type="radio" name="tempat" value="Gudang 3"> Gudang 3 (Aksesoris)
                                    </form>
                                </div>
                            </div>
                        </div>
                        </br>
                        <button class="mdc-button mdc-button--raised icon-button filled-button--primary" name="simpan" value="simpan">
                            <i class="material-icons mdc-button__icon">add</i> Keluarkan Barang
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
    $nama_barang = $_POST['nama_barang'];
    $stok = $_POST['stok'];
    $tempat = $_POST['tempat'];
    $barang = mysqli_query($koneksi, "SELECT nama_barang, stok from barang WHERE nama_barang = '$nama_barang'");
    $cek    = mysqli_num_rows($barang);

    if ($cek == 0) {
        echo "
      <script>
      alert('Barang Yang Anda Keluar Kosong !');
      window.location.href = 'barang_keluar.php';
      </script>";
    } else {
        $queryStok = mysqli_fetch_assoc($barang);
        $stokBaru = $queryStok['stok'] - $stok;
        $sqlUpdateStok = mysqli_query($koneksi, "UPDATE barang SET stok = $stokBaru WHERE nama_barang = '$nama_barang'");

        if ($sqlUpdateStok) {
            echo "
      <script>
      alert('Data Berhasil Disimpan');
      window.location.href = 'barang_keluar.php';
      </script>";
        } else {
            echo "Gagal memperbarui stok barang";
        }
    }

    $sqlInsertBarangKeluar = mysqli_query($koneksi, "INSERT INTO barang_keluar VALUES('', '" . date("Y-m-d") . "' , '$nama_barang', '$stok','$tempat')");
    if (!$sqlInsertBarangKeluar) {
        echo "Gagal menyimpan data barang keluar";
    }
}
?>

</html>