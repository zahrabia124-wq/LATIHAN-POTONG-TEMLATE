<?php

include "connection.php";

$id_job=$_GET['id_job'];

// ini perintah sql untuk mendelete data mendasarkan id_job yang dibawa 
$delete = mysqli_query($koneksi, "DELETE FROM job WHERE id_job='$id_job'");

// setelah proses delete dijalankan, maka akan kembali ke file tabel_job.php
header("Location: tabel_job.php");
