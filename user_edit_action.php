<?php
include 'config.php';

$username = $_POST['username'];
$password = $_POST['password'];
$namalengkap = $_POST['namalengkap'];
$email = $_POST['email'];

$sql = "UPDATE user SET user_password='$password', user_namalengkap='$namalengkap', user_email='$email' WHERE user_nama='$username'";
$result = mysqli_query($config, $sql);

if ($result) {
    echo "Data Berhasil diubah";
} else {
    echo "Data Gagal diubah";
}
?>

<p>Kembali ke <a href="halaman_user.php">halaman user</a></p>