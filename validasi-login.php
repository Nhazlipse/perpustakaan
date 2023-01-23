<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $pengguna = $_POST['pengguna'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM ttamu WHERE pengguna = '$pengguna' AND password = '$password'";
    $query = mysqli_query($koneksi, $sql);
    $data = mysqli_fetch_array($query);

    if ($data['pengguna'] == $pengguna && $data['password'] == $password) {
        session_start();
        $_SESSION['pengguna'] = $data['pengguna'];
        $_SESSION['nama'] = $data['nama'];
        header("location:dashboard.php");
    } else {
        echo "<script>alert('Username atau Password Salah!');window.location='login-user.php';</script>";
    }
}
