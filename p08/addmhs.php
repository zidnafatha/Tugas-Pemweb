<!DOCTYPE html>
<html lang=en>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Add Mahasiswa</title>
</head>
<body>
    <?php
        include "header.php";
    ?>
    <div class="container" style="margin-top:20px">
        <a href="indexmhs.php" class="btn btn-info">Kembali</a>

        <form action="addmhs.php" method="post">
            <table width="50%">
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email"></td>
                </tr>
                <tr>
                    <td>Mobile</td>
                    <td><input type="number" name="mobile"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="Add data" class="btn btn-success"></td>
                </tr>
            </table>
        </form>
        <?php
            if(isset($_POST['submit'])){
                $varnama    = $_POST['nama'];
                $varemail   = $_POST['email'];
                $varmobile  = $_POST['mobile'];

                include_once("koneksi.php");
                $result = mysqli_query($koneksi, "INSERT INTO mahasiswa(nama, email, mobile) VALUES ('$varnama','$varemail','$varmobile')");

                echo 'Data Berhasil Ditambahkan';
            }
        ?>
    </div>
</body>
</html>