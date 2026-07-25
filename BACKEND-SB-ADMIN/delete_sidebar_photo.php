<?php
include "connection.php";

$id_sidebar_photo = $_GET['id_sidebar_photo'];

$imgsidebar_photo = mysqli_query($koneksi, "SELECT * FROM sidebar_photo WHERE
id_sidebar_photo IN ('$id_sidebar_photo')");

// tampilkan foto
$vimg= mysqli_fetch_object($imgsidebar_photo);
$path = "foto/";

// is_file gunanya untuk mengecek apakah file ada atau tidak. jika ada maka akan dihapus\
 // is_file() untuk mengecek terlebih dahulu file di folder foto sebelum di hapus
 // unlink() untuk menghapus file foto lama di folder foto
 if (is_file($path . $vimg->sidebar_photo)) {
    unlink($path . $vimg->sidebar_photo);
 }

// ini perintah untuk menghapus data di tabel sidebar_photo berdasarkan id_profile yg dibawa
$sql_delete = mysqli_query($koneksi, "DELETE FROM sidebar_photo WHERE 
id_sidebar_photo='$id_sidebar_photo'");

// setelah data dihapus maka akan kembali ke tabel_sidebar_photo.php
// setelah proses delete dijalankan maka akan kembali ke tabel_sidebar_photo.php
header("Location:tabel_sidebar_photo.php");