<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Anggota</title>
</head>

<body>
    <h3>Data Anggota</h3>
    <p>[<a href="tambah_anggota.php">+Tambah Anggota</a>]</p>
    <table width="900" border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th width="30">No.</th>
            <th width="100">NIM</th>
            <th width="100">Nama</th>
            <th width="200">ALamat</th>
            <th width="150">Jenis Kelamin</th>
            <th width="150">Kelas</th>
            <th width="350">Foto</th>
            <th width="100">Kelola</th>
        </tr>
        <?php
        include 'config.php';

        $sql = "SELECT * FROM anggota";
        $result = mysqli_query($config, $sql);
        $no = 1;
        while ($student = mysqli_fetch_array($result)) {
        ?>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $student['nim']; ?></td>
                <td><?= $student['nama']; ?></td>
                <td><?= $student['alamat']; ?></td>
                <td><?= $student['jenis_kelamin']; ?></td>
                <td><?= $student['kelas']; ?></td>
                <td><img src="<?= $student['foto']; ?>" width="100% "></td>
                <td align="center">
                    <a href="hapus_anggota.php?nim=<?= $student['nim']; ?>" onclick=" return confirm('yakin hapus?');">Hapus</a>
                </td>
            </tr>
        <?php
            $no++;
        }
        echo "</table>";
        ?>


</body>

</html>