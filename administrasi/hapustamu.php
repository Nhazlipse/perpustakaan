<!-- session agar (bukan admin) tidak dapat mengakses file admin -->
<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location:login.php");
}

// hapus data pengungjung
include 'koneksi.php';
$id = $_GET['id'];
$sql = "DELETE FROM ttamu WHERE id = $id";
if (mysqli_query($koneksi, $sql)) {
    header("location: rekaptamu.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}
mysqli_close($koneksi);
