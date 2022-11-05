<?php
require_once("config.php");

$id = $_GET['id'];

if (isset($_POST['update'])){
    $varmatkul      = $_POST['matkul'];
    $vardosen       = $_POST['dosen'];
    $varsks         = $_POST['sks'];
    $vardeskripsi   = $_POST['deskripsi'];
   

    $result = mysqli_query($koneksi, "UPDATE kelas SET nama='$varmatkul', dosen='$vardosen', sks='$varsks', deskripsi='$vardeskripsi' WHERE id_kelas='$id'");
    
    if ($result){
        header("Location: indexkelas.php");
    }
}

    $result = mysqli_query($koneksi, "SELECT * FROM kelas WHERE id_kelas='$id'");
    while($item = mysqli_fetch_array($result)){
        $varmatkul      = $item['nama'];
        $vardosen       = $item['dosen'];
        $varsks         = $item['sks'];
        $vardeskripsi   = $item['deskripsi'];
        }
?>

<!doctype html>
<html>

<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Edit Mahasiswa</title>
</head>

<body>
    <?php
        include "header.php";
    ?>
    <div class="container" style="margin-top:20px">
        <a href="indexkls.php" class="btn btn-info">Kembali</a>
        
        <form action="editkelas.php?id=<?= $id ?>" method="post">
            <table width="50%">
                <tr>
                    <td>Nama Matkul</td>
                    <td><input type="text" name="matkul" value="<?= $varmatkul ?>"></td>
                </tr>
                <tr>
                    <td>Dosen Pengampu</td>
                    <td><input type="dosen" name="dosen" value="<?= $vardosen ?>"></td>
                </tr>
                <tr>
                    <td>SKS</td>
                    <td><input type="sks" name="sks" value="<?= $varsks?>"></td>
                </tr>
                <tr>
                    <td>Deskripsi</td>
                    <td><input type="deskripsi" name="deskripsi" value="<?= $vardeskripsi?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="update" value="Update data" class="btn btn-success"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>