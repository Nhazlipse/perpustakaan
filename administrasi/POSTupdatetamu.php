<!-- operasi untuk edit data form -->
<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location:admin-login.php");
}
require_once '../database/koneksi.php';

use database\koneksi;

$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$nohp = $_POST['nope'];
$tanggal = $_POST['tanggal'];
$query = "UPDATE ttamu SET nama='$nama', alamat='$alamat', email='$email', nope='$nohp', tanggal='$tanggal' WHERE id='$id'";
$koneksi = new koneksi();
$koneksi->query($query);

if ($koneksi) {
    header("location:rekaptamu.php");
} else {
    // Notification Using Script
    echo "<script>alert('Data Gagal Diupdate');window.location='rekaptamu.php';</script>";
}
