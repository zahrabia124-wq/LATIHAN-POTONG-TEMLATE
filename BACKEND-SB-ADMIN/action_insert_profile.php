<?php
// Memanggil koneksi database
include "connection.php";

// Mengecek apakah tombol submit ditekan
if (isset($_POST['submit'])) {

    // Mengambil data dari form
    $vnama = $_POST['nama'];
    $vabout = $_POST['about'];
    $vwebsite = $_POST['website'];
    $vphone = $_POST['phone'];
    $vemail = $_POST['email'];
    $vaddress = $_POST['address'];
    $vlinkedin = $_POST['linkedin'];
    $vnationality = $_POST['nationality'];

    // Query untuk menyimpan data ke database
    $query = mysqli_query($koneksi, "INSERT INTO profile
    (nama, about, website, phone, email, address, linkedin, nationality)
    VALUES
    ('$vnama', '$vabout', '$vwebsite', '$vphone', '$vemail', '$vaddress', '$vlinkedin', '$vnationality')");

    // Mengecek apakah berhasil
    if ($query) {
        echo "<script>
                alert('Data berhasil ditambahkan');
                window.location='tabel_profile.php';
              </script>";
    } else {
        echo "<script>
                alert('Data gagal ditambahkan');
                window.history.back();
              </script>";

        echo mysqli_error($koneksi);
    }

} else {

    header("Location: form_profile.php");

}
?>