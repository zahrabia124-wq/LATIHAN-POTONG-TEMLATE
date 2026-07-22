<!-- we are from tabel_profile -->

<?php
include "connection.php";

// untuk menerima id_profile yang dibawa dari tombol DELETE dari TABEL PROFILE menggunakan $id_profile
// $_GET['id_profile']; menyimpan sementara id yang nanti akan digunakan pada perintah DELETE di bawahnya.
$id_profile=$_GET['id_profile'];
 
//ini di perintah sql untuk mendelete data mendasarkan id_profile yang dibawa
$delete = mysqli_query($koneksi, "DELETE FROM profile WHERE id_profile='$id_profile'");

// setelah proses delete dijalankan, maka akan kembali ke file tabel_profile.php
header("location: tabel_profile.php");
