<?php
include 'config.php';

$nim = $_GET['nim'];

$sql = "DELETE FROM anggota WHERE nim='$nim'";

$result = mysqli_query($config, $sql);

echo "<script>alert('Data Berhasil dihapus')</script>";
header("location:halaman_mahasiswa.php");
