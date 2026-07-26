<?php

include "connection.php";

$id_sidebar_photo = $_POST['id_sidebar_photo'];
$path = "foto/";

// hanya proses ganti foto kalau user memilih file baru
if (!empty($_FILES['sidebar_photo']['name'])) {

    // pakai ekstensi asli file yg diupload, jangan dipaksa .jpg
    $ekstensi = pathinfo($_FILES['sidebar_photo']['name'], PATHINFO_EXTENSION);
    $namaimage = time() . "." . $ekstensi;

    if (!move_uploaded_file($_FILES['sidebar_photo']['tmp_name'], $path . $namaimage)) {
        die("Gagal upload foto ke folder '$path'. Cek apakah folder tersebut ada dan writable.");
    }

    // ambil nama foto lama sebelum di-overwrite di database
    $imgsidebar_photo = mysqli_query($koneksi, "SELECT * FROM sidebar_photo WHERE
    id_sidebar_photo = '$id_sidebar_photo'");
    $img = mysqli_fetch_object($imgsidebar_photo);

    $update_sidebar_photo = mysqli_query($koneksi, "UPDATE sidebar_photo SET
    sidebar_photo='$namaimage' WHERE id_sidebar_photo='$id_sidebar_photo'");

    if (!$update_sidebar_photo) {
        die("Gagal update: " . mysqli_error($koneksi));
    }

    // hapus foto lama baru setelah update berhasil, biar data gak hilang kalau query gagal
    if (is_file($path . $img->sidebar_photo)) {
        unlink($path . $img->sidebar_photo);
    }
}

header("Location:tabel_sidebar_photo.php");
exit;
?>