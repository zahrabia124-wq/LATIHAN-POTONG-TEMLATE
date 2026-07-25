<?php
include "connection.php";

$id_mobile = $_POST['id_mobile'];
$vnama=$_POST['nama'];
$vicon = $_POST['icon'];

$update_mobile=mysqli_query($koneksi, "UPDATE mobile SET
nama='$vnama', icon='$vicon' WHERE id_mobile='$id_mobile'");

header("location:tabel_mobile.php");
