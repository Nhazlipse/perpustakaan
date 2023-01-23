<?php

// Connect to the database
include 'koneksi.php';

// Check if the form has been submitted
if (isset($_POST['submit'])) {
    // Get the entered username and password
    $pengguna = $_POST['pengguna'];
    $password = $_POST['password'];

    // Check if the entered login information is correct
    $query = "SELECT * FROM ttamu WHERE pengguna = '$pengguna' AND password = '$password'";
    $result = $koneksi->query($query);
    if ($result->num_rows > 0) {
        // Login successful, redirect to protected page
        session_start();
        $_SESSION['pengguna'] = $pengguna;
        $_SESSION['pp'] = $pp;
        header("Location: dashboard.php");
    } else {
        // Login failed, display an error message
        echo "Invalid username or password";
    }
}

?>
