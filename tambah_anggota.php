<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tambah Data Anggota</title>
</head>

<body>
    <h3>Menambah Data Anggota</h3>
    <form action="tambah_anggota_action.php" method="post" enctype="multipart/form-data">
        <table border="1" cellpadding="5" cellspacing="0">
            <tr>
                <td>NIM</td>
                <td>:
                    <input type="text" name="nim">
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:
                    <input type="text" name="nama">
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:
                    <textarea name="alamat"></textarea>
                </td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:
                    <input type="radio" name="jenis_kelamin" value="L">Laki-laki
                    <input type="radio" name="jenis_kelamin" value="P">Perempuan
                </td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:
                    <select name="kelas">
                        <option value="si01">SI01</option>
                        <option value="si02">SI02</option>
                        <option value="si03">SI03</option>
                        <option value="si04">SI04</option>
                        <option value="si05">SI05</option>
                        <option value="si06">SI06</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Foto</td>
                <td>:
                    <input type="file" name="gambar">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit" name="simpan">Simpan</button>
                    <button type="reset" name="reset">Batal</button>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>