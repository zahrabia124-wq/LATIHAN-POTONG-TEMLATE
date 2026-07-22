<?php
include "connection.php";

$id_education = $_POST['id_education'];
$vjurusan=$_POST['nama_jurusan'];
$vbelajar = $_POST['tahun_belajar'];
$vtempat = $_POST['tempat_belajar'];
$vdeskripsi = $_POST['deskripsi'];

$update_education=mysqli_query($koneksi, "UPDATE education SET
nama_jurusan= '$vjurusan', tahun_belajar='$vbelajar',
tempat_belajar='$vtempat', deskripsi='$vdeskripsi' WHERE
id_education='$id_education'");

header("location:tabel_education.php");