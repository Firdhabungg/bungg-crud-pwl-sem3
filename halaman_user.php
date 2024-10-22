<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data User</title>
</head>

<body>
    <h3>Data User</h3>
    <p><a href="user_tambah.php">[+Tambah User]</a></p>
    <table width="720" border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th width="10">No.</th>
            <th width="30">Username</th>
            <th width="30">Password</th>
            <th width="120">Nama Lengkap</th>
            <th width="30">E-Mail</th>
            <th width="120">Kelola</th>
        </tr>
        <?php
        include 'config.php';

        $sql = "SELECT * FROM user ORDER BY user_namalengkap";

        $result = mysqli_query($config, $sql);

        $no = 1;
        while ($users = mysqli_fetch_array($result)) {
        ?>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $users['user_nama']; ?></td>
                <td><?= $users['user_password']; ?></td>
                <td><?= $users['user_namalengkap']; ?></td>
                <td><?= $users['user_email']; ?></td>
                <td align="center">
                    <a href="user_edit.php?user_nama=<?= $users['user_nama']; ?>">Edit</a> | <a href="user_hapus.php?user_nama=<?= $users['user_nama']; ?>" onclick="return confirm('yakin hapus?');">Hapus</a>
                </td>
            </tr>
        <?php
            $no++;
        }
        echo "</table>";
        ?>
</body>

</html>