<?php
require_once '../database/koneksi.php';

use Database\koneksi;

$koneksi = new koneksi();

// Mengeset folder tujuan upload
$target_dir = "../upload/img/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Mengecek apakah file adalah gambar atau bukan
$check = getimagesize($_FILES["file"]["tmp_name"]);
if ($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
} else {
    echo "File is not an image.";
    $uploadOk = 0;
}

// Mengecek apakah file sudah ada
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

// Mengecek ukuran file
if ($_FILES["file"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Hanya mengijinkan beberapa tipe file
if (
    $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif"
) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        echo "The file " . basename($_FILES["file"]["name"]) . " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

if (isset($_POST['simpan'])) {
    //Get Date and Time
    date_default_timezone_set('Asia/Jakarta');
    $tgl = date('Y-m-d');

    try {
        $sql = "INSERT INTO ttamu (tanggal, nama, email, alamat, nope, pengguna, password, pp) VALUES ('$tgl', '" . $_POST['nama'] . "', '" . $_POST['email'] . "', '" . $_POST['alamat'] . "', '" . $_POST['nope'] . "', '" . $_POST['pengguna'] . "', '" . $_POST['password'] . "', '" . $_FILES["file"]["name"] . "')";
        $koneksi->query($sql);
        session_start();
        $_SESSION['pengguna'] = $_POST['pengguna'];
        $_SESSION['nama'] = $_POST['nama'];
        
        // return a success message
        echo "<script>alert('Data berhasil disimpan.');document.location='?';</script>";
        header("location: ../dashboard.php");
    } finally {
        $koneksi->close();
    }
}
