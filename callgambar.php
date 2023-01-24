<?php

include 'user/operasi-index2.php';
//panggil koneksi
require_once 'database/koneksi.php';

use database\koneksi;

$koneksi = new koneksi();

    //get image path from database
    $query = "SELECT pp FROM ttamu WHERE name='$pengguna'";
    $result = $koneksi->query($query);
    $row = mysqli_fetch_assoc($result);
    $image_path = $row['image_path'];
    mysqli_close($koneksi);

    //check if image file exists
    if (file_exists($image_path)) {
        echo "<img src='$image_path'>";
    } else {
        echo "Sorry, the image file does not exist.";
    }
?>