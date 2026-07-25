<?php
include "connection.php";

$id_mobile = $_GET['id_mobile'];

$select_id = mysqli_query($koneksi, "SELECT * FROM mobile WHERE id_mobile='$id_mobile'");

if(mysqli_num_rows($select_id) > 0){
    $mobile = mysqli_fetch_object($select_id);
}else{
    die("Data tidak ditemukan.");
}
?>

<?php include "header.php"; ?>

<body id="page-top">
<div id="wrapper">

<?php include "sidebar.php"; ?>

<div id="content-wrapper" class="d-flex flex-column">
<div id="content">

<?php include "topbar.php"; ?>

<div class="container-fluid">

<h1 class="h3 mb-4 text-gray-800">Mobile</h1>

<form action="action_update_mobile.php" method="POST">

    <input type="hidden" name="id_mobile"
        value="<?php echo $mobile->id_mobile; ?>">

    <div class="mb-3">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control"
            value="<?php echo $mobile->nama; ?>">
    </div>

    <div class="mb-3">
        <label>Icon</label>
        <input type="text" name="icon" class="form-control"
            value="<?php echo $mobile->icon; ?>">
    </div>

    <button type="submit" class="btn btn-primary">Update</button>

</form>

</div>

</div>

<?php include "footer.php"; ?>

</div>

</div>

<?php include "bottom.php"; ?>
</body>
</html>