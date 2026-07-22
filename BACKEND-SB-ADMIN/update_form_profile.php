<!-- we are dr file tabel_profile -->
<!-- next: copy the data from form_profile -->

<?php
include "connection.php";

// menyimpan sementara id_profile dari tombol UPDATE tabel_profile.php
// $_GET['id_profile']; yg menerima id_profile dr tombol UPDATE
// tabel_profile.php

$id_profile = $_GET['id_profile'];

// menampilkan data profile yg didapat atau dikirim dari tombol UPDATE
// tabel_profile.php di atas
$select_id = mysqli_query($koneksi, "SELECT * FROM profile WHERE id_profile='$id_profile'");

// fungsi untuk menampilkan isi tabel menggunakan mysqli_fetch_object
// (--)

// selanjutnya menuju form bawah dengan menggunakan value
// inputan setiap data
$profile = mysqli_fetch_object($select_id);

// di bawah ini adalah isi asli dr form_profile
?>

<?php include "header.php" ?>

<body id="page-top">

<div id="wrapper">
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">

        <?php include "topbar.php" ?>

            <div class="container-fluid">

                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">update</h1>
                </div>

                <form action="action_update_profile.php"
                      method="post">

                    <div class="mb-3">
                        <label for="nama" class="form-label">
                         Name
                        </label>

                        <!-- value $profile->nama untuk
                             menampilkan data yang diklik dari table
                             profile di database -->

                        <input type="text" class="form-control"
                        id="nama" name="nama" value="<?php echo $profile->nama ?>">
                    </div>

                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">
                            Overview
                        </label>

                        <!-- khusus TEXTAREA letak php nya echo
                             $profile->deskripsi di antara tag
                             penutup dan pembuka -->

                        <textarea name="about" id="deskripsi"
                        cols="30" class="form-control"
                        rows="10"><?php echo $profile->about ?></textarea>

                    </div>

                    <div class="mb-3">
                        <label for="website" class="form-label">
                         Website
                        </label>
                        <input type="text" class="form-control" 
                        id="website" name="website" value="<?php echo $profile->website ?>">
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">
                         Phone
                        </label>
                        <input type="text" class="form-control"
                        id="phone" name="phone" value="<?php echo $profile->phone ?>">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control"
                        id="email" name="email" aria-describedby="emailHelp"
                        value="<?php echo $profile->email ?>">
                        <div id="emailHelp" class="form-text">
                        We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">
                         Address
                        </label>
                        <textarea name="address" id="address"
                        cols="20" class="form-control" rows="5"><?php echo $profile->address ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="linkedin" class="form-label">
                         Linkedin
                        </label>
                        <input type="text" class="form-control"
                        id="linkedin" name="linkedin" value="<?php echo $profile->linkedin ?>">
                    </div>
                    <div class="mb-3">
                       <label for="nationality" class="form-label">
                         Nationality
                       </label>
                       <input type="text" class="form-control"
                       id="nationality" name="nationality" value="<?php echo $profile->nationality ?>">
                    </div>
                       <input type="hidden" value="<?php echo $profile->id_profile ?>"
                       name="id_profile">
                       <button type="submit" class="btn btn-primary">
                         Submit
                       </button>

                </form>
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