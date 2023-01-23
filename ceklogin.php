<?php
//panggil koneksi
include "koneksi.php";


//deklarasikan user dan pass
$password = md5($_POST['password']);
$username = $_POST['username'];

$login = mysqli_query($koneksi, "SELECT * FROM tuser WHERE username='$username' and  password = '$password' and status = 'Aktif' ");
$data = mysqli_fetch_array($login);


// jika tidak di temukan user/pass tuser
if ($data) {
    session_start();
    $_SESSION['id_user'] = $data['id_user'];
    $_SESSION['username'] = $data['username'];
    $_SESSION['password'] = $data['password'];
    $_SESSION['nama_pengguna'] = $data['nama_pengguna'];
    header("location: rekaptamu.php");
} else {
    echo "<script>alert('Login Gagal, Akun tidak ditemukan..!');document.location='login.php';</script>";
}
