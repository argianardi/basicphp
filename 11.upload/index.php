<?php 
require 'functions.php';

// ambil data dari tabel mahasiswa / query data mahasiswa
$students = query("SELECT * FROM mahasiswa");

// Tombol car ditekan
if(isset($_POST["search"])) {
    $students = searchStudent($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <a href="addstudent.php">Tambah Data Mahasiswa</a>
    <br><br>

    <form action="" method="post">
        <input type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian.." autocomplete="off">
        <button type="submit" name="search">Cari</button>
    </form>

    <br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach($students as $student) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="update.php?id=<?= $student["id"]; ?>">Ubah</a>|
                <a href="delete.php?id=<?= $student["id"]; ?>" onclick="return confirm('Apakah anda yakin akan menghapus data ini?');">Hapus</a>
            </td>
            <td><img src="img/<?= $student["gambar"] ?>" alt="student image" width="50"></td>
            <td><?= $student["nrp"]; ?></td> 
            <td><?= $student["nama"]; ?></td> 
            <td><?= $student["email"]; ?></td> 
            <td><?= $student["jurusan"]; ?></td> 
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>