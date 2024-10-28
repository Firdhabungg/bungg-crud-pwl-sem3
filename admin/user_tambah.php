<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menambah Data User</title>
</head>

<body>
    <form action="user_tambah_action.php" method="post">
        <table>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td>
                    <div id="app">
                        <input type="password" name="password" id="input_password">
                        <label for="show_password">
                            <input type="checkbox" id="show_password">Tampilkan Password
                        </label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td><input type="text" name="nama_lengkap"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit" name="submit">Simpan</button>
                    <button type="reset" name="reset">Reset</button>
                </td>
            </tr>
        </table>
    </form>
</body>
<script>
    const inputPassword = document.getElementById("input_password");
    const showPassword = document.getElementById("show_password");

    showPassword.addEventListener("input", (e) => {
        if (e.target.checked) {
            inputPassword.setAttribute("type", "text");
        } else {
            inputPassword.setAttribute("type", "password")
        };
    })
</script>

</html>