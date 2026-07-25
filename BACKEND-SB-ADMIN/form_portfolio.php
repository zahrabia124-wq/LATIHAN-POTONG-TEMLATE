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
                        <h1 class="h3 mb-0 text-gray-800">Add Portfolio</h1>

                    </div>

                    <!-- Content Start -->
                    <form action="action_insert_portfolio.php" method="post">
                        <div class="mb-3">
                            <table for="judul" class="form-label">Title</table>
                            <input type="text" class="form-control" id="judul" name="judul_portfolio">
                        </div>

                        <div class="mb-3">
                            <table for="img" class="form-label">Image</table>
                            <input type="file" class="form-control" id="img" name="img">
                        </div>

                        <div class="mb-3">
                            <table for="link" class="form-label">Link</table>
                            <input type="text" class="form-control" id="link" name="link">
                        </div>

                        <div class="mb-3">
                            <table for="deskripsi" class="form-label">Description</table>
                            <textarea name="deskripsi" id="deskripsi" cols="30" class="form-control" rows="10"></textarea>
                        </div>

                        <div class="mb-3">
                            <table for="jenis" class="form-label">Type</table>
                            <input type="text" class="form-control" id="jenis" name="jenis">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="tabel_portfolio.php" class="btn btn-secondary">Kembali</a>
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