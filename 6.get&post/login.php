<?php 

if (isset($_POST["submit"])) {
    // cek apakah tombol submit sudah ditekan atau belum
  
    if ($_POST["username"] == "admin" && $_POST["password"] == "password") {
        // cek usernama & password

        header("Location: admin.php");
        // jika benar redirect ke halaman admin

    } else {
        $error = true;
        // jika salah, tampilkan pesan  kesalahan
        var_dump($error);
    }
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
    <h1>Login Admin</h1>

    <?php if(isset($error)) : ?>
        <p style="color: red; font-style: italic;"> Username / Password salah</p>
    <?php endif; ?>

    <ul>
        <form action="" method="post">
            <li>
                <label for="username"> User Name</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="submit">Login</button>
            </li>
        </form>
    </ul>
</body>
</html>