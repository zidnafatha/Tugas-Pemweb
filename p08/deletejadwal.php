<?php
require_once("koneksi.php");
$kelas  = $_GET['id_kelas'];
$mahasiswa = $_GET['id_mahasiswa'];

$result = mysqli_query($koneksi, "DELETE FROM klsmhs WHERE id_kelas=$kelas AND id_mahasiswa=$mahasiswa");
if($result){
    header("Location:indexjadwal.php");
}
?>