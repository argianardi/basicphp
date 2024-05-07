<?php 
session_start();
if(!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}



require 'functions.php';

// ambil data dari tabel mahasiswa / query data mahasiswa
// Pagination
$jumlahDataPerHalaman = 4;
$jumlahData = count(query("SELECT * FROM mahasiswa"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = (isset($_GET["page"])) ? $_GET["page"] : 1;
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;



$students = query("SELECT * FROM mahasiswa LIMIT $awalData, $jumlahDataPerHalaman");

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
    <a href="logout.php">Logout</a>
    <h1>Daftar Mahasiswa</h1>
    <a href="addstudent.php">Tambah Data Mahasiswa</a>
    <br><br>

    <form action="" method="post">
        <input type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian.." autocomplete="off">
        <button type="submit" name="search">Cari</button>
    </form>
    <br><br>

    <!-- Page Navigation -->
    <?php if($halamanAktif > 1) : ?>
        <a href="?page= <?= $halamanAktif - 1; ?>" style="underline: none;">&laquo;</a>
    
    <?php endif; ?>

    <?php for($i = 1; $i <= $jumlahHalaman; $i++): ?> 
        <?php if($i == $halamanAktif): ?>
            <a href="?page=<?= $i; ?>" style="font-weight: bold; color: red; underline: none;"><?= $i; ?></a>
        <?php else: ?>
            <a href="?page=<?= $i; ?>"><?= $i; ?></a>
        <?php endif; ?>
    <?php endfor; ?>

    <?php if($halamanAktif < $jumlahHalaman) : ?>
        <a href="?page= <?= $halamanAktif + 1; ?>">&raquo;</a>
    <?php endif; ?>

    <br>
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