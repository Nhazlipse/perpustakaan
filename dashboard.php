<?php

use database\koneksi;

include 'header.php';

$koneksi = new koneksi();

session_start();
if (!isset($_SESSION['pengguna'])) {
    header('location:user/login-user.php');
    exit;
}

$pp = $_SESSION['pp'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Dashboard</title>
</head>

<body>
    <div align="center">
        <div class="kontainer">
        <font size="10" color="white" face="sans-sherif" box shadow="p-4">Dashboard</font><br>
    <font size="6" color="white" face="sans-sherif">Selamat Datang <?php echo $_SESSION['nama']; ?></font>

    <div class="d-flex justify-content-center align-items-center vh-100">

        <div class="shadow w-350 p-4 text-center bg-white">
            <?php
            if ($pp == null) {
                echo "<img src='upload/img/user.png' class='img-fluid' alt='Responsive image'>";
            } else {
                echo "<img src='upload/img/$pp' class='img-fluid' alt='Responsive image'>";
            }
            ?>
            <br>

            <!-- menampilkan Nama -->
            <font size="5" color="black" face="sans-sherif"><?= $_SESSION['nama'] ?></font><br>
            <!-- menampilkan komentar -->
            <?php 
            if(isset($_SESSION['komentar'])){
                echo '<font size="4" color="grey" face="sans-serif">'.$_SESSION['komentar'].'</font><br>';
            }
            ?>
            <br>
            <a href="user/logout-user.php" class="btn btn-danger">Logout</a>
        </div>
        </div>
</body>

</html>