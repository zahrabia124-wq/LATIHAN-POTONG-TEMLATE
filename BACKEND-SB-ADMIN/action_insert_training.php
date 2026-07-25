<?php
include "connection.php";

$nama = $_POST['nama_training'];
$tahun = $_POST['tahun_training'];
$tempat = $_POST['tempat_training'];
$deskripsi = $_POST['deskripsi'];

$query = mysqli_query($koneksi, "INSERT INTO training 
VALUES (NULL, '$nama', '$tahun', '$tempat', '$deskripsi')");

if ($query) {
    header("location:tabel_training.php");
} else {
    echo "Gagal insert";
}
?>