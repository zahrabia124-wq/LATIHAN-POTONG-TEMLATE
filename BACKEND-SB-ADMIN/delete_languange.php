<?php
include "connection.php";

$id_languange = $_GET['id_languange'];

$delete = mysqli_query(
    $koneksi,
    "DELETE FROM languange WHERE id_languange='$id_languange'"
);

header("Location: tabel_languange.php");
exit;
?>