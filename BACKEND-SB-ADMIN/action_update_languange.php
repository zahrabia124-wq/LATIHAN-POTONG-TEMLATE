<?php
include "connection.php";

$id_languange = $_POST['id_languange'];
$vlanguange = $_POST['bahasa'];
$vflagimage = time() . ".jpg";

// untuk menyimpan file foto yang nanti ditambahkan dari form_languange
$path = "potobende/";

// untuk meng-upload foto digunakan fungsi move_uploaded_file
if ($_FILES['flag']['name'] != "") {

    move_uploaded_file($_FILES['flag']['tmp_name'], $path . $vflagimage);

    $sql_update = mysqli_query(
        $koneksi,
        "UPDATE languange SET
        bahasa='$vlanguange',
        flag='$vflagimage'
        WHERE id_languange='$id_languange'"
    );

} else {

    $sql_update = mysqli_query(
        $koneksi,
        "UPDATE languange SET
        bahasa='$vlanguange'
        WHERE id_languange='$id_languange'"
    );

}

// header location untuk mengarahkan halaman ke tabel_languange
header("Location:tabel_languange.php");

?>