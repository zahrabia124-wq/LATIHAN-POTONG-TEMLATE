<?php

include "connection.php";

// mengambil data dari update_form_portfolio.php
$id_portfolio = $_POST['id_portfolio'];
$vjudul = $_POST['judul_portfolio'];
$vlink = $_POST['link'];
$vdeskripsi = $_POST['deskripsi'];
$vjenis = $_POST['jenis'];
$path = "foto/";

// jika tidak memilih foto baru, update data selain foto
if (empty($_FILES['img']['name'])) {
    $sql_update_portfolio = mysqli_query($koneksi, "UPDATE portfolio SET
        judul_portfolio='$vjudul',
        link='$vlink',
        deskripsi='$vdeskripsi',
        jenis='$vjenis'
        WHERE id_portfolio='$id_portfolio'");
} else {
    // membuat nama foto baru lalu menyimpan foto baru
    $ekstensi = pathinfo($_FILES['img']['name'], PATHINFO_EXTENSION);
    $vimage = time() . "." . $ekstensi;
    move_uploaded_file($_FILES['img']['tmp_name'], $path . $vimage);

    // mengambil nama foto lama untuk dihapus
    $imgportfolio = mysqli_query($koneksi, "SELECT * FROM portfolio WHERE id_portfolio='$id_portfolio'");
    $img = mysqli_fetch_object($imgportfolio);

    // update data dan foto baru
    $sql_update_portfolio = mysqli_query($koneksi, "UPDATE portfolio SET
        judul_portfolio='$vjudul',
        img='$vimage',
        link='$vlink',
        deskripsi='$vdeskripsi',
        jenis='$vjenis'
        WHERE id_portfolio='$id_portfolio'");

    // hapus foto lama jika update berhasil
    if ($sql_update_portfolio && is_file($path . $img->img)) {
        unlink($path . $img->img);
    }
}

if ($sql_update_portfolio) {
    header("Location: tabel_portfolio.php");
} else {
    echo "Gagal update: " . mysqli_error($koneksi);
}
?>