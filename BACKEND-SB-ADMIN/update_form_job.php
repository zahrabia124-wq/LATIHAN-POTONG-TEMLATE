<?php
include "connection.php";

$id_job = $_GET['id_job'];

$select_id = mysqli_query($koneksi, "SELECT * FROM job WHERE id_job='$id_job'");
$job = mysqli_fetch_object($select_id);

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
                        <h1 class="h3 mb-0 text-gray-800">Update Job</h1>
                    </div>

                    <!-- Content Start -->
                    <form action="action_update_job.php" method="post">

                        <div class="mb-3">
                            <table for="job" class="form-label">Profession</table>
                            <input type="text" class="form-control" id="job" name="nama_pekerjaan" value="<?php echo $job->nama_pekerjaan; ?>">
                        </div>

                        <div class="mb-3">
                            <table for="work" class="form-label">Year</table>
                            <input type="text" class="form-control" id="work" name="tahun_bekerja" value="<?php echo $job->tahun_bekerja; ?>">
                        </div>

                        <div class="mb-3">
                            <table for="place" class="form-label">Place</table>
                            <input type="text" class="form-control" id="place" name="tempat_bekerja" value="<?php echo $job->tempat_bekerja; ?>">
                        </div>

                        <div class="mb-3">
                            <table for="deskripsi" class="form-label">Responsibilities</table>
                            <textarea name="deskripsi" id="deskripsi" cols="30" rows="10" class="form-control"><?php echo $job->deskripsi; ?></textarea>
                        </div>

                        <input type="hidden" name="id_job" value="<?php echo $job->id_job; ?>">

                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="tabel_job.php" class="btn btn-secondary">Kembali</a>

                    </form>

                    <!-- content end -->

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