<?php
$localhost = 'localhost';
$username = 'root';
$password = '';
$dbname = 'dataweb_3055';

$config = mysqli_connect($localhost, $username, $password, $dbname);
if (!$config) {
    die('Gagal terhubung ke MySQL: ' . mysqli_connect_error());
}
