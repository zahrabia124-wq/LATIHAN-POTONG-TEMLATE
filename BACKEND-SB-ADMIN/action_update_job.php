<?php

include "connection.php";

// menerima input dari update_form_job.php

$id_job = $_POST['id_job'];
$vjob = $_POST['nama_pekerjaan'];
$vwork = $_POST['tahun_bekerja'];
$vplace = $_POST['tempat_bekerja'];
$vdeskripsi = $_POST['deskripsi'];

$update_job = mysqli_query($koneksi, "UPDATE job SET
nama_pekerjaan='$vjob',tahun_bekerja='$vwork',tempat_bekerja='$vplace',
deskripsi='$vdeskripsi' WHERE id_job='$id_job'");

header("Location:tabel_job.php");

?>