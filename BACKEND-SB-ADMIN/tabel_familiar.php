<?php

include "connection.php";

$select_familiar = mysqli_query(
    $koneksi,
    "SELECT * FROM familiar ORDER BY id_familiar DESC");
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
                        <h1 class="h3 mb-0 text-gray-800">Familiar</h1>

                    </div>
                    <a href="form_familiar.php" class="btn btn-info mb-2">Add</a>

                    <!-- content start -->
                     <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">name</th>
                                <th scope="col">icon</th>

                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php
                        while ($tampil = mysqli_fetch_object ($select_familiar)) :
                        ?>
                          <tr>
                            <th scope="row"><?php echo
                            $tampil->nama; ?></th>

                          <td>
                            <i style="font-size:50px" class="<?php echo $tampil->icon; ?>">

                           </i>
                          </td>
                        
                           <td>
                            <a href="delete_familiar.php?id_familiar=<?php echo $tampil->id_familiar; ?>" class="btn btn-danger" onlick="return confirm('Confirm to delete?')">DELETE</a> 
                        <a href="update_form_familiar.php?id_familiar=<?php echo $tampil->id_familiar; ?>" class="btn btn-success">UPDATE</a>
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