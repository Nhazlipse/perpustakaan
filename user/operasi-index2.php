<?php

use database\koneksi;

if (isset($_POST['simpan'])) {
    //Get Date and Time
    date_default_timezone_set('Asia/Jakarta');
    $tgl = date('Y-m-d');

    $new_img_name = "";

    // check if the image has been uploaded
    if (isset($_FILES['pp']['name']) && !empty($_FILES['pp']['name'])) {

        $img_name = $_FILES['pp']['name'];
        $tmp_name = $_FILES['pp']['tmp_name'];
        $error = $_FILES['pp']['error'];

        // check if there is no error while uploading
        if ($error === 0) {
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_to_lc = strtolower($img_ex);

            $allowed_exs = array('jpg', 'jpeg', 'png');
            if (in_array($img_ex_to_lc, $allowed_exs)) {
                $new_img_name = uniqid() . '.' . $img_ex_to_lc;
                $img_upload_path = '../upload/' . $new_img_name;
                move_uploaded_file($tmp_name, $img_upload_path);
            } else {
                echo "<script>alert('File type not allowed.');document.location='?';</script>";
                exit();
            }
        } else {
            echo "<script>alert('An error occurred while uploading the image.');document.location='?';</script>";
            exit();
        }
    }

    // include the connection file and create a new connection
    require_once '../database/koneksi.php';
    $koneksi = new koneksi();

    try {
        // prepare the SQL statement
        $stmt = $koneksi->prepare("INSERT INTO ttamu (tanggal, nama, email, alamat, nope, pengguna, password, pp) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        // bind the parameters
        $stmt->bind_param("ssssssss", $tgl, $_POST['nama'], $_POST['email'], $_POST['alamat'], $_POST['nope'], $_POST['pengguna'], $_POST['passwd'], $new_img_name);
        // execute the SQL statement
        $stmt->execute();
        //Create A Session
        session_start();
        $_SESSION['pengguna'] = $_POST['pengguna'];
        $_SESSION['nama'] = $_POST['nama'];
        // return a success message
        echo "<script>alert('Data berhasil disimpan.');document.location='?';</script>";
        header("location: ../dashboard.php");
    } finally {
        $stmt->close();
        $koneksi->close();
    }
}
