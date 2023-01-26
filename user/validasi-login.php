<?php
//panggil koneksi
require_once '../database/koneksi.php';

use database\koneksi;

$koneksi = new koneksi();


//deklarasikan user dan pass
$password = $_POST['password'];
$pengguna = $_POST['pengguna'];

//cek user dan pass serta status aktif
$query = "SELECT * FROM ttamu WHERE pengguna = '$pengguna' AND password = '$password'";
$login = $koneksi->query($query);


// jika tidak di temukan user/pass tuser
if (mysqli_num_rows($login) == 1) {
    $row = mysqli_fetch_assoc($login);
    if ($row['status'] == 'aktif') {
        session_start();
        $_SESSION['pengguna'] = $row['pengguna'];
        $_SESSION['nama'] = $row['nama'];
        $_SESSION['pp'] = $row['pp'];
        header("location: ../dashboard.php");
    } else {
        echo "<script>alert('Akun anda belum aktif. Silahkan hubungi admin.');document.location='login-user.php';</script>";
    }
} else {
    echo "<script>alert('Username atau Password salah.');document.location='login-user.php';</script>";
}

