<?php 
    $students = [
      [
        "nama" => "Naruto", 
        "nrp" => "0403040023", 
        "email" => "naruto@konoha.com", 
        "jurusan" => "Teknik Informatika",
        "gambar" => "naruto.jpg",
      ], 
      [
        "nama" => "Sasuke", 
        "nrp" => "0404040024", 
        "jurusan" =>"Teknik Informatika", 
        "email" => "sasuke@konoha.com",
        "gambar" => "sasuke.jpeg"
      ], 
      [
        "nama" => "Kakashi", 
        "email" => "kakashi@konoha.com",
        "jurusan" => "Teknik Informatika", 
        "nrp" => "0404040025", 
        "gambar" => "kakasi.jpeg"
      ]
    ];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Array</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach($students as $student) : ?>
    <ul>
        <li><img src="img/<?= $student["gambar"] ?>" alt="gambar mahasiswa"></li>
        <li>Nama: <?= $student["nama"]; ?></li>
        <li>NRP: <?= $student["nrp"]; ?></li>
        <li>Email: <?= $student["email"]; ?></li>
        <li>Jurusan : <?= $student["jurusan"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>