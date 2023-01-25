<?php
//panggil koneksi
require_once '../database/koneksi.php';

use database\koneksi;

$koneksi = new koneksi();


//deklarasikan user dan pass
$password = $_POST['password'];
$pengguna = $_POST['pengguna'];


$query = "SELECT * FROM ttamu WHERE pengguna='$pengguna' and  password = '$password'";
$login = $koneksi->query($query);
$data = mysqli_fetch_array($login);


// jika tidak di temukan user/pass tuser
if ($data) {
    session_start();
    $_SESSION['nama'] = $data['nama'];
    $_SESSION['pengguna'] = $data['pengguna'];
    $_SESSION['password'] = $data['password'];
    $_SESSION['pp'] = $data['pp'];
    header("location:../dashboard.php");
} else {
    echo "<script>alert('Login Gagal, Akun tidak ditemukan..!');document.location='login-user.php';</script>";
}
