<?php
require_once("koneksi.php");
$id = $_GET['id'];
$result = mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id_mahasiswa=$id");
if($result){
    header("Location:indexmhs.php");
}
?>