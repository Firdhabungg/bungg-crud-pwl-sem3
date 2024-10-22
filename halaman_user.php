<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data User</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- icons boostrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        * {
            font-family: 'Poppins', sans-serif;
            box-sizing: border-box;
        }

        h3 {
            display: flex;
            font-weight: 700;
            justify-content: center;
        }

        th,
        td {
            text-align: center;
        }

        table {
            width: 100%;
        }

        th,
        td {
            border: 3px solid black;
            padding: 5px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h3>Data User</h3>
        <p><a href="user_tambah.php">[<i class="bi bi-person-fill-add"></i> Tambah User]</a></p>
        <table>
            <tr>
                <th>No.</th>
                <th>Username</th>
                <th>Password</th>
                <th>Nama Lengkap</th>
                <th>E-Mail</th>
                <th>Kelola</th>
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
                        <button class="btn btn-success">
                            <a style="color: white" href="user_edit.php?user_nama=<?= $users['user_nama']; ?>"> <i class="bi bi-pencil"></i></a>
                        </button>
                        <button class="btn btn-danger">
                            <a style="color: white" href="user_hapus.php?user_nama=<?= $users['user_nama']; ?>" onclick="return confirm('yakin hapus?');"><i class="bi bi-trash"></i></a>
                        </button>

                    </td>
                </tr>
            <?php
                $no++;
            }
            echo "</table>";
            ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>