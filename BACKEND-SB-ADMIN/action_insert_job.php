<?php
include "connection.php";

$vjob = $_POST['nama_pekerjaan'];
$vtahun_bekerja = $_POST['tahun_bekerja'];
$vtempat_bekerja = $_POST['tempat_bekerja'];
$vdeskripsi = $_POST['deskripsi'];

$sql_insert = mysqli_query($koneksi, "INSERT INTO job (nama_pekerjaan, tahun_bekerja, tempat_bekerja, deskripsi)
VALUES ('$vjob','$vtahun_bekerja','$vtempat_bekerja','$vdeskripsi')");

header("location:tabel_job.php");
?>