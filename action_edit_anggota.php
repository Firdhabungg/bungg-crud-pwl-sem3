<?php
include 'config.php';

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$kelas = $_POST['kelas'];
$gambar = $_POST['gambar'];

$sql = "UPDATE anggota SET nim='$nim',  nama='$nama',  alamat='$alamat',  jenis_kelamin='$jenis_kelamin', kelas='$kelas', foto='$gambar'";
$result = mysqli_query($config, $sql);

if ($result) {
    echo "Data Berhasil diubah";
} else {
    echo "Data Gagal diubah";
}
?>
<p>Kembali ke <a href="halaman_mahasiswa.php">Halaman Mahasiswa</a></p>