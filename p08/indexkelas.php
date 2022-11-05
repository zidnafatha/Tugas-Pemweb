<?php
require_once('koneksi.php');

$result = mysqli_query($koneksi, "SELECT * FROM kelas ORDER BY id_kelas DESC")
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Homepage Kelas</title>
</head>

<body>
    <?php
        include "header.php";
    ?>

    <h2 style="text-align: center;">Kelas Mahasiswa</h2>
    <div class="container" style="margin-top:3%">

        <a href="addkelas.php" class="btn btn-success">Add Kelas</a>
        <br><br>
        <table width="100%" border="2" class="table table-hover table-sm table-bordered">
            <tr>
                <th>Nama Matkul</th>
                <th>Dosen Pengampu</th>
                <th>SKS</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
            <?php
            while ($item = mysqli_fetch_array($result)){
            ?>
                <tr>
                    <td><?= $item['nama']; ?></td>
                    <td><?= $item['dosen']; ?></td>
                    <td><?= $item['sks']; ?></td>
                    <td><?= $item['deskripsi']; ?></td>
                    <td>
                        <a href="editkelas.php?id=<?= $item['id_kelas']; ?>" class="btn btn-info btn-sm">Edit</a>
                        <a href="deletekelas.php?id=<?= $item['id_kelas']; ?>" onclick="return 
                        confirm ('Apakah Anda yakin akan menghapus data?')" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>