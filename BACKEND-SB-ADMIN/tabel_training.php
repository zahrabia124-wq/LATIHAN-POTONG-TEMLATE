<?php
include "connection.php";

$select_training = mysqli_query($koneksi, "SELECT * FROM training ORDER BY id_training DESC");

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
                        <h1 class="h3 mb-0 text-gray-800">Training</h1>
                    </div>
                    <a href="form_training.php" class="btn btn-info mb-2">Add</a>


                    <!-- Content Start -->
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Training</th>
                                <th scope="col">Year</th>
                                <th scope="col">Place</th>
                                <th scope="col">Description</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($tampil = mysqli_fetch_object($select_training)) :
                            ?>
                                <tr>
                                    <th scope="row"><?php echo $tampil->nama_training; ?></th>
                                    <td><?php echo $tampil->tahun_training; ?></td>
                                    <td><?php echo $tampil->tempat_training; ?></td>
                                    <td><?php echo $tampil->deskripsi; ?></td>

                                    <td>
                                        <a href="delete_training.php?id_training=<?php echo $tampil->id_training; ?>" class="btn btn-danger" onclick="return confirm('confirm to delete?')">DELETE</a>
                                        <a href="update_form_training.php?id_training=<?php echo $tampil->id_training;?>" class="btn btn-success">UPDATE</a>
                                    </td>
                                </tr>
                            <?php endwhile ?>
                        </tbody>
                    </table>

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