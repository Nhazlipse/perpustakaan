<?php

include 'koneksi.php'

// Ambil file yang diupload
$profile_image = $_FILES['profile_image'];

// Tentukan lokasi untuk menyimpan gambar
$target_dir = "uploads/img/";
$target_file = $target_dir . basename($profile_image["name"]);

// Pindahkan gambar ke lokasi yang telah ditentukan
move_uploaded_file($profile_image["tmp_name"], $target_file);

// Tampilkan pesan sukses
echo "Gambar profil Anda berhasil diupload!";
?>