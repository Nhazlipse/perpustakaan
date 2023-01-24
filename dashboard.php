<?php

use database\koneksi;

include 'header.php';

$koneksi = new koneksi();

session_start();
if (!isset($_SESSION['pengguna'])) {
    header('location:user/login-user.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    <h1>Dashboard</h1>
    <h2>Selamat Datang <?php echo $_SESSION['nama']; ?></h2>

    <div class="d-flex justify-content-center align-items-center vh-100">

    <form action="operasi-upload.php" method="post" enctype="multipart/form-data">
    <label for="file">Choose a file to upload:</label>
    <input type="file" name="file" id="file">
    <br>
    <input type="submit" value="Upload">
    </form>

    </div>
    
    <a href="user/logout-user.php">Logout</a>
</body>

</html>