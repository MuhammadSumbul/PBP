<?php
include '../config/koneksi.php';
$id = $_GET['id'];


$sql = mysqli_query($koneksi, "DELETE FROM user WHERE id_user = $id ");
header("Location:user.php");
