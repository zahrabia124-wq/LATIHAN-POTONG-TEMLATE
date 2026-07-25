<?php

include "connection.php";

// Query mengambil data dari tabel languange
$select_languange = mysqli_query(
    $koneksi,
    "SELECT * FROM languange ORDER BY id_languange DESC"
);

// Cek apakah query berhasil
if (!$select_languange) {
    die("Query Error: " . mysqli_error($koneksi));
}

?>

<?php include "header.php"; ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include "sidebar.php"; ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include "topbar.php"; ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Language</h1>
                    </div>

                    <!-- Tombol Tambah -->
                    <a href="form_languange.php" class="btn btn-info mb-3">
                        Add
                    </a>

                    <!-- Tabel -->
                    <table class="table table-striped table-bordered">

                        <thead class="thead-dark">
                            <tr>
                                <th>No</th>
                                <th>Language</th>
                                <th>Flag</th>
                                <th width="180">Action</th>
                            </tr>
                        </thead>

                        <tbody>

                            <?php
                            $no = 1;
                            while ($tampil = mysqli_fetch_object($select_languange)) :
                            ?>

                                <tr>
                                    <td><?php echo $no++; ?></td>

                                    <td><?php echo $tampil->bahasa; ?></td>

                                    <td>
                                        <img src="potobende/<?php echo $tampil->flag; ?>"
                                            width="100"
                                            alt="Flag">
                                    </td>

                                    <td>

                                        <a href="update_form_languange.php?id_languange=<?php echo $tampil->id_languange; ?>"
                                            class="btn btn-success btn-sm">
                                            UPDATE
                                        </a>

                                        <a href="delete_languange.php?id_languange=<?php echo $tampil->id_languange; ?>"
                                            class="btn btn-danger btn-sm"
                                            onclick="return confirm('Yakin ingin menghapus data ini?')">
                                            DELETE
                                        </a>

                                    </td>
                                </tr>

                            <?php endwhile; ?>

                        </tbody>

                    </table>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include "footer.php"; ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Bottom -->
    <?php include "bottom.php"; ?>

</body>

</html>