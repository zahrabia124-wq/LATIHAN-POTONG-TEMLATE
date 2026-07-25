<?php

include "connection.php";

$id_sidebar_photo = $_POST['id_sidebar_photo'];
$namaimage = time() . ".jpg";

$path = "foto/";


// upload foto baru yang di masukan dari update_form_portfolio.php
move_uploaded_file($_FILES['sidebar_photo']['tmp_name'], $path . $namaimage);

// hapus foto lama start
$imgsidebar_photo = mysqli_query($koneksi, "SELECT * FROM  sidebar_photo WHERE 
id_sidebar_photo IN ('$id_sidebar_photo')");

// tampilkan foto
$img = mysqli_fetch_object($imgsidebar_photo);
$path = "foto/";

// is_file gunanya utk mengecek terlebih dahulu file di folder foto sebelum di hapus
// unlik gunanya utk mnghps foto nhya
if (is_file($path . $vimg->sidebar_photo)) {
    unlink($path . $vimg->sidebar_photo);
}
// hapus foto lama end

// update dg menggunakan foto dg menambahkan img='$namaimage'
$update_sidebar_photo_no_img = mysqli_query($koneksi, "UPDATE sidebar_photo
SET sidebar_photo='$namaimage' WHERE id_sidebar_photo='$id_sidebar_photo'");

header("Location:tabel_sidebar_photo.php");

?>