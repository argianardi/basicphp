<?php 
require 'functions.php';

// Cek apakah tombol login ditekan
if(isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Ambil username dari tabel users
    $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

    // Cek username yang diinputkan user ada yang sama atau tidak dengan username ditabel users
    if(mysqli_num_rows($result) === 1) {
        
        // Cek apakah password yang diinputkan user sama atau tidak dengan password yang ada di tabel users
        $row = mysqli_fetch_assoc($result) ;
        if(password_verify($password, $row["password"])) {
            header("Location: index.php");
            exit;
        }
    } 

    $error = true;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Halaman Login</h1>

    <!-- Error mesage -->
    <?php if(isset($error)) : ?>
        <p style="color: red; font-style: italic;">Username / password salah</p>
    <?php endif; ?>


    <form action="" method="post">
    <ul>
        <li>
            <label for="username">Username : </label>
            <input type="text" name="username" id="username">
        </li>
        <li>
            <label for="password">Password :</label>
            <input type="password" name="password" id="password">
        </li>
        <li><button type="submit" name="login">Login</button></li>
    </ul>

    </form>
</body>
</html>