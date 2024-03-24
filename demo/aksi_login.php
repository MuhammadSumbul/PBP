<?php
include '../config/koneksi.php';
session_start();

$username = htmlspecialchars(mysqli_real_escape_string($koneksi, $_POST['username']));
$password = htmlspecialchars(mysqli_real_escape_string($koneksi, $_POST['password']));

$sql    = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username' AND password = '$password' ");
$data   = mysqli_fetch_assoc($sql);
$cek    = mysqli_num_rows($sql);


if ($cek == 1) {

    $_SESSION['id']         = $data['id_user'];
    $_SESSION['nama']       = $data['nama'];
    $_SESSION['username']   = $username;
    $_SESSION['password']   = $password;
    $_SESSION['status']     = $data['status'];

    header("location:index.php");
} else {
    echo "
    <script>
    alert('Maaf login anda salah');
    window.location = 'login.php';
    </script>
    ";
}
