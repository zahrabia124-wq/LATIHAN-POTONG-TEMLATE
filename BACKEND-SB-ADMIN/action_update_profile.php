<!-- from file update_form_profile.php -->
<?php
include "connection.php";

// $vnama untuk penyimpanan sedangkan $_POST menerima inputan
// name="nama" dr form_profile.php

$id_profile   = $_POST['id_profile'];
$vnama        = $_POST['nama'];
$vdeskripsi   = $_POST['about'];
$vwebsite     = $_POST['website'];
$vphone       = $_POST['phone'];
$vemail       = $_POST['email'];
$vcity        = $_POST['address'];
$vlinkedin    = $_POST['linkedin'];
$vNationality = $_POST['nationality'];

$update_profile = mysqli_query($koneksi,
"UPDATE profile SET
nama='$vnama',
about='$vdeskripsi',
website='$vwebsite',
phone='$vphone',
email='$vemail',
address='$vcity',
linkedin='$vlinkedin',
nationality='$vNationality'
WHERE id_profile='$id_profile'"
);

header("Location:tabel_profile.php");
?>