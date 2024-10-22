<?php
include 'config.php';

$username = $_GET['user_nama'];
$sql = "DELETE FROM user WHERE user_nama='$username'";

$result = mysqli_query($config, $sql);

echo "<script> alert('Data Berhasil dihapus')</script>";
header("Location:halaman_user.php");
