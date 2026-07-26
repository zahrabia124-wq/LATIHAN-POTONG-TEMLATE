<?php
include "connection.php";

// menyimpan sementara id_profile dari tombol UPDATE tabel_profile.php sebelum
// dieksekusi ke bawah berikut ini
// $_GET['id_profile']; yg menerima id_profile dr tombol UPDATE tabel_profile.php
$id_sidebar_photo = $_GET['id_sidebar_photo'];

// menampilkan data profile yg didapat atau dikirim dari tombol UPDATE
// tabel_profile.php di atas
$select_id = mysqli_query($koneksi, "SELECT * FROM sidebar_photo WHERE
id_sidebar_photo='$id_sidebar_photo'");

// fungsi untuk menampilkan isi tabel menggunakan mysqli_fetch_object (->)
// selanjutnya menuju form bawah dengan menggunakan value untuk inputan setiap data
$data_sidebar_photo = mysqli_fetch_object($select_id);

if (!$data_sidebar_photo) {
    die("Data sidebar photo dengan id_sidebar_photo='$id_sidebar_photo' tidak ditemukan.");
}

// di bawah ini adalah isi asli dr form_profile
?>

<?php

include "connection.php";

$select_sidebar_photo = mysqli_query(
    $koneksi,
    "SELECT * FROM sidebar_photo");
?>

<?php include "header.php" ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include "sidebar.php" ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include "topbar.php" ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">

                        <h1 class="h3 mb-0 text-gray-800">
                            sidebar foto
                        </h1>

                    </div>

                    <!-- Content Start -->

                    <form action="action_update_sidebar_photo.php" method="post"
                    enctype="multipart/form-data">

                    <div class="mb-3">
                    <label for="sidebar_photo" class="form-label">
                    Sidebar Photo
                    </label>

        <input type="file"
               class="form-control"
               id="sidebar_photo"
               name="sidebar_photo">
               

    </div>

  <input type="hidden"
       name="id_sidebar_photo"
       value="<?php echo $data_sidebar_photo->id_sidebar_photo; ?>">


    <button type="submit" class="btn btn-primary">
        Submit
    </button>
</form>



                    <!-- Content End -->

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->

            <?php include "footer.php" ?>

            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->

    <?php include "bottom.php" ?>

</body>