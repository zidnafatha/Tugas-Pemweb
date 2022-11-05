<?php
require_once("koneksi.php");

$id = $_GET['id'];

if (isset($_POST['update'])){
    $varnama    = $_POST['nama'];
    $varemail   = $_POST['email'];
    $varmobile  = $_POST['mobile'];

    $result = mysqli_query($koneksi, "UPDATE mahasiswa SET nama='$varnama', email='$varemail', mobile='$varmobile' WHERE id_mahasiswa='$id'");
    
    if ($result){
        header("Location: indexmhs.php");
    }
}

    $result = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id_mahasiswa='$id'");
    while($item = mysqli_fetch_array($result)){
        $varnama    = $item['nama'];
        $varemail   = $item['email'];
        $varmobile  = $item['mobile'];
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
        <a href="index.php" class="btn btn-info">Kembali</a>
        
        <form action="editmhs.php?id=<?= $id ?>" method="post">
            <table width="50%">
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" value="<?= $varnama ?>"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email" value="<?= $varemail ?>"></td>
                </tr>
                <tr>
                    <td>Mobile</td>
                    <td><input type="number" name="mobile" value="<?= $varmobile ?>"></td>
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