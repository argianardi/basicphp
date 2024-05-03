<?php 
require 'functions.php';

// ambil data dari tabel mahasiswa / query data mahasiswa
$students = query("SELECT * FROM mahasiswa");

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
                <a href="">Ubah</a>|
                <a href="">Hapus</a>
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