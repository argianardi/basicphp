<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>
<body>
    <?php if(isset($_POST["submit"])) : ?>
        <h1>Halo selamat datang, <?= $_POST["nama"]; ?></h1>
    <?php endif; ?>
    
    <!-- Di halaman yang sama -->
    <form action="" method="post">
        Masukkan Nama:
        <input type="text" name="nama">
        <br>
        <button type="submit" name="submit">Kirim!</button>
    </form>

    <br>

    <!-- pindah halaman -->
    <form action="acceptedpost.php" method="post">
        Masukkan nama: 
        <input type="text" name="nama">
        <br>
        <button type="submit">Kirim!</button>
    </form>
</body>
</html>