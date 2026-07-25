<?php

include "connection.php";

$id_training = $_POST['id_training'];
$vtraining = $_POST['nama_training'];
$vyear = $_POST['tahun_training'];
$vplace = $_POST['tempat_training'];
$vdeskripsi = $_POST['deskripsi'];

$update_training = mysqli_query($koneksi, "UPDATE training SET 
nama_training='$vtraining', 
tahun_training='$vyear', 
tempat_training='$vplace', 
deskripsi='$vdeskripsi' 
WHERE id_training='$id_training'");

header("Location:tabel_training.php");