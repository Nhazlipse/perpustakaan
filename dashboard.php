<?php 

include 'operasi-login.php';
include 'koneksi.php';

?>

<html>
<head>
    <link rel="stylesheet" href="style3.css">
    <title>Dashboard</title>
</head>

<body>
    <div class="dashboard">
    <?php

if(isset($_POST['logged_in']) && $_POST['logged_in'] == true) {
    $pengguna = $_POST['username'];

    // Retrieve user data from the database
    $query_sql = "SELECT * FROM ttamu WHERE pengguna = '$pengguna'";
    $result = mysqli_query($koneksi, $query_sql);

    if(mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        echo "Welcome, ".$user['username']."!";
        echo "<br>";
        echo "Name: ".$user['name'];
        echo "<br>";
        echo "Email: ".$user['email'];
    } else {
        echo "User not found.";
    }
} else {
    echo "You must be logged in to view this page.";
}
?>

        <form action="login-user.php" method="post">
            <input type="submit" value="Logout" class="tombol" />
        </form>
    </div>
</body>
</html>