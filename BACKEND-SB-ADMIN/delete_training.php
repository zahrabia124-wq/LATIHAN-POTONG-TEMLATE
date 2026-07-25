<?php

include "connection.php";

// untuk menerima id_training yang dibawa dari tombol DELETE dari TABEL TRAINING menggunakan $id_training

// $_GET['id_training']; menyimpan sementara id yang nanti akan digunakan pada perintah DELETE di bawahnya.

$id_training=$_GET['id_training'];

// ini perintah sql untuk mendelete data mendasarkan id_training yang dibawa 
$delete = mysqli_query($koneksi, "DELETE FROM training WHERE id_training='$id_training'");

// setelah proses delete dijalankan, maka akan kembali ke file tabel_training.php
header("Location: tabel_training.php");