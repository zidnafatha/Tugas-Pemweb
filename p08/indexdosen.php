<?php
require_once('koneksi.php');

$result = mysqli_query($koneksi, "SELECT * FROM dosen ORDER BY id_dosen DESC")
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Homepage Dosen</title>
</head>

<body>
    <?php
        include "header.php";
    ?>


    <h2 style="text-align: center;">Daftar Dosen</h2>
    <div class="container" style="margin-top:3%">
        <a href="adddosen.php" class="btn btn-success">Add Dosen</a>
        <br><br>
        <table width="100%" border="2" class="table table-hover table-sm table-bordered">
            <tr>
                <th>Nama</th>
                <th>NIP</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
            <?php
            while ($item = mysqli_fetch_array($result)){
            ?>
                <tr>
                    <td><?= $item['nama']; ?></td>
                    <td><?= $item['nip']; ?></td>
                    <td><?= $item['email']; ?></td>
                    <td>
                        <a href="editdosen.php?id=<?= $item['id_dosen']; ?>" class="btn btn-info btn-sm">Edit</a>
                        <a href="deletedosen.php?id=<?= $item['id_dosen']; ?>" onclick="return confirm ('Apakah Anda yakin akan menghapus data?')" class="btn btn-danger btn-sm">Delete
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>