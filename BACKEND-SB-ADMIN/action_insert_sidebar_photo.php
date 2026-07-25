<?php
include "connection.php";

$namaimage = time() .".jpg";

// untuk menyimpan file foto yang nanti ditambahkan dari form_portfolio.php
$path= "foto/";

// mysqli_query() untuk menyimpan data ke database,
// mysqli_query perintah untuk menyatukan koneksi database dg query tabel.
// (judul, img, link dll) adl nama kolom tabel

//untuk mengupload foto digunakan fungsi move_uploaded_file()
move_uploaded_file($_FILES['sidebar_photo']['tmp_name'], $path . $namaimage);

$sql_insert = mysqli_query($koneksi, "INSERT INTO sidebar_photo (sidebar_photo)
VALUES ('$namaimage')");

// header("Location:tabel_language.php"); untuk mengarahkan ke halaman tabel_profile
header("Location:tabel_sidebar_photo.php");