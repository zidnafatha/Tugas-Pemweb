<?php
require_once('koneksi.php');
include "header.php";

$result = mysqli_query($koneksi, "SELECT * FROM mahasiswa ORDER BY id_mahasiswa DESC")
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Homepage Mahasiswa</title>
</head>
<body>

    <h2 style="text-align: center;">Daftar Mahasiswa</h2>
    <div class="container" style="margin-top:3%">
        <a href="addmhs.php" class="btn btn-success">Add Mahasiswa</a>
        <br><br>
        <table width="100%" border="2" class="table table-hover table-sm table-bordered">
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Aksi</th>
            </tr>
            <?php
            while ($item = mysqli_fetch_array($result)){
            ?>
                <tr>
                    <td><?= $item['nama']; ?></td>
                    <td><?= $item['email']; ?></td>
                    <td><?= $item['mobile']; ?></td>
                    <td>
                        <a href="editmhs.php?id=<?= $item['id_mahasiswa']; ?>" class="btn btn-info btn-sm">Edit</a>
                        <a href="deletemhs.php?id=<?= $item['id_mahasiswa']; ?>" onclick="return confirm ('Apakah Anda yakin akan menghapus data?')" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>