<?php
include "connection.php";

$id_familiar=$_GET['id_familiar'];
$delete = mysqli_query($koneksi, "DELETE FROM familiar WHERE id_familiar='$id_familiar'");

header("location: tabel_familiar.php");
