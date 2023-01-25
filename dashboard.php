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

    <div class="shadow w-350 p-3 text-center">
    		<img src="upload/img<?=$_FILES["file"]["name"]?>"
    		     class="img-fluid rounded-circle">
            <h3 class="display-4 "><?=$_SESSION['nama']?></h3>

    </div>
    
    <a href="user/logout-user.php">Logout</a>
</body>

</html>