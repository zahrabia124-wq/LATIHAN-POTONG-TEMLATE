<?php
include "connection.php";

// untuk menerima id_profile yang dibawa dari tombol DELETE dari TABEL PORTFOLIO menggunakan $id_portfolio
// $_GET['id_portfolio']; menyimpan sementara id yang nanti akan digunakan pada perintah DELETE dibawahnya.
$id_portfolio = $_GET['id_portfolio'];

$imgportfolio = mysqli_query($koneksi, "SELECT* FROM portfolio WHERE id_portfolio IN ('$id_portfolio')");
$vimg = mysqli_fetch_Object($imgportfolio);
$path= "foto/";

// is_file untuk mengecek dulu file di folder foto sblm dihapus
//unlink untuk menghapus fotonya
if (is_file($path . $img->img)){
    unlink($path . $vimg->img);
}

// ini perintah sql untuk mendelete data berdasarkan id_portfolio yang dibawa
$sql_delete = mysqli_query( $koneksi,"DELETE FROM portfolio WHERE id_portfolio='$id_portfolio'"
);
// setelah proses delete dijalankan, maka akan kembali ke file tabel_portfolio.php
header("Location: tabel_portfolio.php");
exit;
?>