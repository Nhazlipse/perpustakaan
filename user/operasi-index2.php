<?php
//menyimpan data form daftar pengunjung
if (isset($_POST['simpan'])) {
    $tgl = date('Y-m-d');

// upload 
if (isset($_FILES['pp']['name']) AND !empty($_FILES['pp']['name'])) {
         
         
    $img_name = $_FILES['pp']['name'];
    $tmp_name = $_FILES['pp']['tmp_name'];
    $error = $_FILES['pp']['error'];
    
    if($error === 0){
       $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
       $img_ex_to_lc = strtolower($img_ex);

       $allowed_exs = array('jpg', 'jpeg', 'png');
       if(in_array($img_ex_to_lc, $allowed_exs)){
          $new_img_name = uniqid($pengguna, true).'.'.$img_ex_to_lc;
          $img_upload_path = '../upload/'.$new_img_name;
          move_uploaded_file($tmp_name, $img_upload_path);

    // deklarasikan dan panggil dari koneksi database
    $nama = ($_POST['nama']);
    $email = ($_POST['email']);
    $alamat = ($_POST['alamat']);
    $nope = ($_POST['nope']);
    $pengguna = ($_POST['pengguna']);
    $passwd = ($_POST['passwd']);

    $simpan = mysqli_query($koneksi, "INSERT INTO ttamu VALUES ('', '$tgl', '$nama', '$email', '$alamat', '$nope', '$pengguna', '$passwd')");

    // notif jika saving
    if ($simpan) {
        echo "<script>alert('simpan data berhasil..!');document.location='?';</script>";
    } else {
        echo "<script>alert('simpan data gagal..!');document.location='?';</script>";
    }
}}}}
