<?php
include 'config.php';
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$kelas = $_POST['kelas'];

$file_location = $_FILES['gambar']['tmp_name'];
$file_name = $_FILES['gambar']['name'];

$upload = "upload/";
$upload_file = $uploaddir . $file_name;

if (move_uploaded_file($file_location, $upload_file)) {;

    $sql = "INSERT INTO anggota (nim, nama, alamat, jenis_kelamin, kelas, foto) VALUES ('$nim', '$nama', '$alamat', '$jenis_kelamin', '$kelas', '$upload_file')";

    $result = mysqli_query($config, $sql);
    header('Location: halaman_mahasiswa.php');
} else {
    echo "Data gagal disimpan";
}
