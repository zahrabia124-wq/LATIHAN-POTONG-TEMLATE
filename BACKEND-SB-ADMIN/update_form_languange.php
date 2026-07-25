<?php
include "connection.php";

// menyimpan sementara id_languange dari tombol UPDATE tabel_languange.php sebelum
// dieksekusi ke bawah berikut ini
// $_GET['id_languange']; yg menerima id_languange dr tombol UPDATE tabel_languange.php
$id_languange = $_GET['id_languange'];

// menampilkan data languange yg didapat atau dikirim dari tombol UPDATE
// tabel_languange.php di atas
$select_id = mysqli_query(
    $koneksi,
    "SELECT * FROM languange WHERE id_languange='$id_languange'"
);

// fungsi untuk menampilkan isi tabel menggunakan mysqli_fetch_object (->)
// selanjutnya menuju form bawah dengan menggunakan value untuk inputan setiap data
$languange = mysqli_fetch_object($select_id);

?>

<?php include "header.php" ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include "sidebar.php" ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include "topbar.php" ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">

                        <h1 class="h3 mb-0 text-gray-800">
                            Language
                        </h1>

                    </div>

                    <!-- Content Start -->

                    <form action="action_update_languange.php" method="post" enctype="multipart/form-data">

                        <div class="mb-3">
                            <label for="languange" class="form-label">Language</label>
                            <input type="text"
                                class="form-control"
                                id="languange"
                                name="bahasa"
                                value="<?php echo $languange->bahasa ?>">
                        </div>

                        <div class="mb-3">
                            <label for="flag" class="form-label">Flag</label>
                            <input type="file"
                                class="form-control"
                                id="flag"
                                name="flag">

                            <?php if ($languange->flag != "") { ?>
                                <br>
                                <img src="upload/<?php echo $languange->flag ?>" width="80">
                            <?php } ?>
                        </div>

                        <input type="hidden"
                            name="id_languange"
                            value="<?php echo $languange->id_languange ?>">

                        <button type="submit" class="btn btn-primary">
                            Submit
                        </button>

                    </form>

                    <!-- Content End -->

                </div>

            </div>

            <!-- Footer -->
            <?php include "footer.php" ?>

        </div>

    </div>

    <!-- Scroll to Top Button -->
    <?php include "bottom.php" ?>

</body>

</html>