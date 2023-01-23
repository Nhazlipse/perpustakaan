<?php
include 'header.php';
include 'validasi-login.php'
?>


<!-- awal Row -->
<form method="post" action="validasi-login.php">
    <label for="username">Username:</label>
    <input type="text" id="pengguna" name="pengguna">
    <br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password">
    <br>
    <input type="submit" name="submit" value="Login">
</form>
<!-- end Row -->



<?php include 'footer.php'; ?>