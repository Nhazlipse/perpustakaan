<!-- operasi untuk edit data form -->
<?php
include 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$nohp = $_POST['nope'];
$tanggal = $_POST['tanggal'];
$komentar = $_POST['komentar'];
$query = "UPDATE ttamu SET nama='$nama', alamat='$alamat', email='$email', nope='$nohp', tanggal='$tanggal', komentar='$komentar' WHERE id='$id'";
$result = mysqli_query($koneksi, $query);
if ($result) {
    header("location:rekaptamu.php");
} else {
    echo "Gagal " . $query . "<br>" . mysqli_error($koneksi);
}
mysqli_close($koneksi);
