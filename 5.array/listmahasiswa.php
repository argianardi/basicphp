<?php 
    $mahasiswa = ["Naruto", "0403040023", "Teknik Informatika", "naruto@konoha.com"];
    $students = [["Naruto", "0403040023", "Teknik Informatika", "naruto@konoha.com"], 
    ["Sasuke", "0404040024", "Teknik Informatika", "sasuke@konoha.com"], ["Kakashi", "0404040025", "Teknik Informatika", "kakashi@konoha.com"]];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach($mahasiswa as $mhs) : ?>
            <li><?= $mhs; ?></li>
        <?php endforeach; ?>
    </ul>

    <?php foreach($students as $student) : ?>
        <ul>
            <li>Nama : <?= $student[0]; ?></li>
            <li>NRP : <?= $student[1]; ?></li>
            <li>Jurusan : <?= $student[2]; ?></li>
            <li>Email: <?= $student[3]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>