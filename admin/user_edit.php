<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Ubah Data</title>
</head>

<body>
    <?php
    include '../config.php';
    $username = $_GET['user_nama'];

    $sql = "SELECT * FROM user WHERE user_nama='$username'";
    $result = mysqli_query($config, $sql);

    $data = mysqli_fetch_assoc($result);
    ?>
    <h3>Ubah Data Username</h3>
    <form action="user_edit_action.php" method="post">
        <table>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" value="<?= $data['user_nama'] ?>" disabled>
                    <input type="text" name="username" value="<?= $data['user_nama'] ?>" hidden>
                </td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td>
                    <input type="text" name="password" value="<?= $data['user_password'] ?>">
                </td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td>
                    <input type="text" name="namalengkap" value="<?= $data['user_namalengkap'] ?>">
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td>
                    <input type="text" name="email" value="<?= $data['user_email'] ?>">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit" name="ubah">Simpan</button>
                    <button type="reset" onclick="batalEdit()">Batal</button>
                </td>
            </tr>
        </table>
    </form>
</body>
<script>
    function batalEdit() {
        window.location.href = "halaman_user.php";
    }
</script>

</html>