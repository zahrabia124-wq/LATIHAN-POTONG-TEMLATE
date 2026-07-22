<?php

include "connection.php";

// Mengecek apakah id_familiar dikirim melalui URL
if (!isset($_GET['id_familiar'])) {
    header("Location: tabel_familiar.php");
    exit;
}

// Mengambil id_familiar dari URL
$id_familiar = $_GET['id_familiar'];

// Mengambil data familiar berdasarkan id_familiar
$select_id = mysqli_query(
    $koneksi,
    "SELECT * FROM familiar
     WHERE id_familiar = '$id_familiar'"
);

// Mengecek apakah query berhasil
if (!$select_id) {
    die("Query error: " . mysqli_error($koneksi));
}

// Mengecek apakah data ditemukan
if (mysqli_num_rows($select_id) == 0) {
    die("Data familiar tidak ditemukan.");
}

// Mengambil data familiar
$familiar = mysqli_fetch_object($select_id);

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

                        <h1 class="h3 mb-0 text-gray-800">
                            Update Familiar
                        </h1>

                    </div>

                    <!-- Form Update Familiar -->
                    <form
                        action="action_update_familiar.php"
                        method="POST"
                    >

                        <!-- Name -->
                        <div class="mb-3">

                            <label
                                for="nama"
                                class="form-label"
                            >
                                Name
                            </label>

                            <input
                                type="text"
                                class="form-control"
                                id="nama"
                                name="nama"
                                value="<?php echo htmlspecialchars($familiar->nama); ?>"
                                required
                            >

                        </div>

                        <!-- Icon -->
                        <div class="mb-3">

                            <label
                                for="icon"
                                class="form-label"
                            >
                                Icon
                            </label>

                            <input
                                type="text"
                                class="form-control"
                                id="icon"
                                name="icon"
                                value="<?php echo htmlspecialchars($familiar->icon); ?>"
                                required
                            >

                        </div>

                        <!-- ID Familiar -->
                        <input
                            type="hidden"
                            name="id_familiar"
                            value="<?php echo $familiar->id_familiar; ?>"
                        >

                        <!-- Tombol Update -->
                        <button
                            type="submit"
                            name="submit"
                            class="btn btn-primary"
                        >
                            Update
                        </button>

                        <!-- Tombol Cancel -->
                        <a
                            href="tabel_familiar.php"
                            class="btn btn-secondary"
                        >
                            Cancel
                        </a>

                    </form>

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

    <!-- Scroll to Top Button -->
    <?php include "bottom.php"; ?>

</body>

</html>