<?php
include 'config.php';

$username = $_POST['username'];
$password = $_POST['password'];
$namalengkap = $_POST['nama_lengkap'];
$email = $_POST['email'];

$sql = "INSERT INTO user (user_nama, user_password, user_namalengkap, user_email)
VALUES ('$username', '$password', '$namalengkap', '$email');";


$result = mysqli_query($config, $sql);

if ($result) {
    echo "Data berhasil ditambahkan";
} else {
    echo "Data gagal disimpan";
}
?>
<br>Kembali ke <a href="halaman_user.php">halaman user</a>