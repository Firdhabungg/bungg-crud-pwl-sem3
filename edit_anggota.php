<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Edit Anggota</title>
</head>

<body>
    <?php
    include 'config.php';
    $nim = $_GET['nim'];

    $sql = "SELECT * FROM anggota WHERE nim='$nim'";
    $result = mysqli_query($config, $sql);

    $data = mysqli_fetch_array($result);
    ?>
    <h3>Ubah data Mahasiswa</h3>
    <form action="action_edit_anggota.php" method="post">
        <table>
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td><input type="text" value="<?= $data['nim'] ?>" disabled>
                    <input type="text" name="nim" value="<?= $data['nim']; ?>" hidden>
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" value="<?= $data['nama']; ?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><textarea type="text" name="alamat"><?= $data['alamat']; ?></textarea></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><input type="text" name="jenis_kelamin" value="<?= $data['jenis_kelamin']; ?>"></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td><select name="kelas">
                        <option value="SI01" <?php if ($data['kelas'] == 'SI01') echo 'selected'; ?>>SI01</option>
                        <option value="SI02" <?php if ($data['kelas'] == 'SI02') echo 'selected'; ?>>SI02</option>
                        <option value="SI03" <?php if ($data['kelas'] == 'SI03') echo 'selected'; ?>>SI03</option>
                        <option value="SI04" <?php if ($data['kelas'] == 'SI04') echo 'selected'; ?>>SI04</option>
                        <option value="SI05" <?php if ($data['kelas'] == 'SI05') echo 'selected'; ?>>SI05</option>
                        <option value="SI06" <?php if ($data['kelas'] == 'SI06') echo 'selected'; ?>>SI06</option>
                    </select></td>
            </tr>
            <tr>
                <td>Foto</td>
                <td>:</td>
                <td><input type="file" name="gambar" value="<?php $data['foto'];  ?>"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit" name="submit">Ubah</button>
                    <button type="reset" name="reset" onclick="if(confirm('Batal Edit?')) {window.location.href = 'halaman_mahasiswa.php';}">Batal</button>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>