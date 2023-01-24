<!-- session agar (bukan admin) tidak dapat mengakses file admin -->
<?php
require_once '../database/koneksi.php';

use database\koneksi;

session_start();
if (!isset($_SESSION['username'])) {
    header("location:admin-login.php");
}

// hapus data pengungjung
$id = $_GET['id'];
$sql = "DELETE FROM ttamu WHERE id = $id";
$koneksi = new koneksi();
$koneksi->query($sql);

if ($koneksi) {
    header("location:rekaptamu.php");
} else {
    // Notification Using Script
    echo "<script>alert('Data Gagal Diupdate');window.location='rekaptamu.php';</script>";
}
