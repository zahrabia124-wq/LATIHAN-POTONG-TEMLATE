<!-- from file update_form_languange.php -->

<?php
include "connection.php";

// $vnama untuk penyimpanan sedangkan $_POST menerima inputan name="bahasa" dr
// update_form_languange.php
$id_languange = $_POST['id_languange'];
$vlanguange = $_POST['bahasa'];
$flagimage = time() . ".jpg";

// utk menyimpan file foto yg nanti kita tambahkan dari form_languange
$path = "flag/";

// update tanpa foto. Yg mau di update adlh bahasa saja selain foto.
if (empty($_FILES['flag']['name'])) {

    $sql_update_languange_no_image = mysqli_query(
        $koneksi,
        "UPDATE languange SET
        bahasa='$vlanguange'
        WHERE id_languange='$id_languange'"
    );

    header("Location:tabel_languange.php");
    exit;

} else {

    // update menggunakan foto

    // upload foto baru yg dimasukkan dari update_form_languange.php
    move_uploaded_file($_FILES['flag']['tmp_name'], $path . $flagimage);

    // hapus foto lama start
    $fotobendera = mysqli_query(
        $koneksi,
        "SELECT * FROM languange
        WHERE id_languange='$id_languange'"
    );

    // tampilkan foto
    $vflag = mysqli_fetch_object($fotobendera);

    // is_file gunanya utk mengecek terlebih dahulu file di folder flag sblm dihapus
    // unlink gunanya utk menghapus fotonya
    if (is_file($path . $vflag->flag)) {
        unlink($path . $vflag->flag);
    }

    // hapus foto lama end

    // update dgn menggunakan foto
    $sql_update_languange_image = mysqli_query(
        $koneksi,
        "UPDATE languange SET
        bahasa='$vlanguange',
        flag='$flagimage'
        WHERE id_languange='$id_languange'"
    );

    header("Location:tabel_languange.php");
    exit;
}
?>