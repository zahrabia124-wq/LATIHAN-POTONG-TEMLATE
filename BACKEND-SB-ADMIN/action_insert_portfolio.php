<?php
include "connection.php";

// $vnama untuk menyimpan sedangkan $_POST menerima inputan name="judul_portfolio" dr form_portfolio.php
//untuk membuat nama secara random hrs menggunakan time(); dgn ekstensi ".jpg"
$vjudul =$_POST['judul_portfolio'];
$namaimage = time() . ".jpg";
$vimage= $_POST['img'];
$vlink = $_POST['link'];
$vdeskripsi = $_POST['deskripsi'];
$vtype = $_POST['jenis'];

// untuk menyimpan file foto yang nanti tambahkan dari file form_portfolio
$path="foto/";

// mysqli_query adalah perintah utk menyatukan koneksi database dengan query tabel.
// (judul_portfolio, img, link, deskripsi) adalah nama2 kolom database
// ('$vjudul','$vimg','$vlink','$vdeskripsi) adalah variabel di atas yang sudah kita bikin sebelumnya.

// untuk meng upload foto digunakan fungsi move_uploaded_file
move_uploaded_file($FILES['img']['tmp_name'], $path . $namaimage);


 $query = mysqli_query($koneksi,"INSERT INTO portfolio (judul_portfolio,img,link,deskripsi,jenis)
 values ('$vjudul','$vimage','$vlink','$vdeskripsi','$vjenis')");

if ($query) {
// untuk mengarahkan location untuk mengarah halaman ke tabel_profile
 header("location:tabel_portfolio.php");
  exit;
} else {
    echo "Gagal insert:" . mysqli_error($koneksi);
}
?>