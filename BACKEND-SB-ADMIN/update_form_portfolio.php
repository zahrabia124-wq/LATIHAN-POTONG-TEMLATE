<?php

include "connection.php";

// menerima id portfolio dari tombol update di tabel_portfolio.php
$id_portfolio = $_GET['id_portfolio'];

// menampilkan data portfolio berdasarkan id
$select_id = mysqli_query($koneksi, "SELECT * FROM portfolio WHERE id_portfolio='$id_portfolio'");
$portfolio = mysqli_fetch_object($select_id);

?>

<?php include "header.php" ?>

<body id="page-top">
    <div id="wrapper">
        <?php include "sidebar.php" ?>

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <?php include "topbar.php" ?>

                <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Portfolio</h1>
                    </div>

                    <form action="action_update_portfolio.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id_portfolio" value="<?php echo $portfolio->id_portfolio; ?>">

                        <div class="mb-3">
                            <label for="judul_portfolio" class="form-label">Title</label>
                            <input type="text" class="form-control" id="judul_portfolio" name="judul_portfolio" value="<?php echo $portfolio->judul_portfolio; ?>">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Foto sekarang</label><br>
                            <img src="foto/<?php echo $portfolio->img; ?>" width="150"><br><br>
                            <label for="img" class="form-label">Ganti foto (boleh kosong)</label>
                            <input type="file" class="form-control" id="img" name="img">
                        </div>

                        <div class="mb-3">
                            <label for="link" class="form-label">Link</label>
                            <input type="text" class="form-control" id="link" name="link" value="<?php echo $portfolio->link; ?>">
                        </div>

                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Description</label>
                            <textarea name="deskripsi" id="deskripsi" class="form-control" rows="10"><?php echo $portfolio->deskripsi; ?></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="jenis" class="form-label">Type</label>
                            <input type="text" class="form-control" id="jenis" name="jenis" value="<?php echo $portfolio->jenis; ?>">
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>

            <?php include "footer.php" ?>
        </div>
    </div>

    <?php include "bottom.php" ?>
</body>
</html>