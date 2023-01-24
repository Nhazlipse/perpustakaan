<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />

    <title>Update Rekap Tamu</title>
</head>

<body>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- session agar (bukan admin) tidak dapat mengakses file admin -->
    <?php
    session_start();
    if (!isset($_SESSION['username'])) {
        header("location:admin-login.php");
    }

    // deklasikan dan panggil koneksi
    require_once '../database/koneksi.php';

    use database\koneksi;

    $koneksi = new koneksi();
    $id = $_GET['id'];
    $query = "SELECT * FROM ttamu WHERE id = '$id'";
    $result = $koneksi->query($query);
    $row = mysqli_fetch_assoc($result);
    ?>

    <!-- form edit data pengunjung -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Edit Data Pengunjung</h1>
                <form action="POSTupdatetamu.php" method="POST">
                    <div class="form-group">
                        <label for="id">ID</label>
                        <input type="text" class="form-control" name="id" id="id" value="<?php echo $row['id']; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $row['nama']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" name="alamat" id="alamat" value="<?php echo $row['alamat']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="nope">No HP</label>
                        <input type="text" class="form-control" name="nope" id="nope" value="<?php echo $row['nope']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="text" class="form-control" name="email" id="email" value="<?php echo $row['email']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" class="form-control" name="tanggal" id="tanggal" value="<?php echo $row['tanggal']; ?>">
                    </div>
                    <button type="submit" class="btn btn-primary" name="Update" value="Update Data">
                        Submit
                    </button>
                    <button type="submit" action="rekaptamu.php" class="btn btn-danger">
                        Cancel
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>