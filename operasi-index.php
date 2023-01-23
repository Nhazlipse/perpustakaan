<?php
//menyimpan data form daftar pengunjung
if (isset($_POST['simpan'])) {
    $tgl = date('Y-m-d');

    // deklarasikan dan panggil dari koneksi database
    $nama = ($_POST['nama']);
    $email = ($_POST['email']);
    $alamat = ($_POST['alamat']);
    $nope = ($_POST['nope']);
    $komentar = ($_POST['komentar']);

    $simpan = mysqli_query($koneksi, "INSERT INTO ttamu VALUES ('', '$tgl', '$nama', '$email', '$alamat', '$nope', '$komentar')");

    // notif jika saving
    if ($simpan) {
        echo "<script>alert('simpan data berhasil..!');document.location='?';</script>";
    } else {
        echo "<script>alert('simpan data gagal..!');document.location='?';</script>";
    }
}
