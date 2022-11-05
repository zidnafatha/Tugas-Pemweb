<?php
require_once("koneksi.php");
$id = $_GET['id'];
$result = mysqli_query($koneksi, "DELETE FROM kelas WHERE id_kelas=$id");
if($result){
    header("Location:indexkelas.php");
}
?>