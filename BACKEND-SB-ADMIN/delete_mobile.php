<?php
include "connection.php";

$id_mobile=$_GET['id_mobile'];
$delete = mysqli_query($koneksi, "DELETE FROM mobile WHERE id_mobile='$id_mobile'");

header("location: tabel_mobile.php");
