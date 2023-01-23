<?php

require_once '../database/koneksi.php';

use database\koneksi;

$koneksi = new koneksi();

$stmt = $koneksi->prepare("SELECT * FROM ttamu WHERE pengguna = ? AND password = ?");
$stmt->bind_param("ss", $_POST['pengguna'], $_POST['password']);
$stmt->execute();

$result = $stmt->get_result();
if ($result->num_rows === 0) {
    echo "<script>alert('Username atau password salah.');document.location='?';</script>";
} else {
    $row = $result->fetch_assoc();
    session_start();
    $_SESSION['pengguna'] = $row['pengguna'];
    $_SESSION['nama'] = $row['nama'];
    header("location: ../dashboard.php");
}
