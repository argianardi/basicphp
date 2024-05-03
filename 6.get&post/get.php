<?php 
    // Variable Scope
    $x = 10;

    // function tampilX() {
    //     $x = 50;
    //     echo $x;
    // }

    // tampilX(); // 50
    // echo "<br>";

    // echo $x; // 10

    // function tampilX() {
    //     global $x;
    //     echo $x;
    // }

    // tampilX(); // 10
    // echo "<br>";
    // echo $x; // 10

    // Variable Superglobal
    // variabel yang dimiliki php dan bisa kita akses kapanpun dan dimanapun
    // var_dump($_GET); // array(0) { } 
    //    $_GET["nama"] = "Naruto Uzumaki";
    //    $_GET["nrp"] = "0430400023";
    //    var_dump($_GET); // array(2) { ["nama"]=> string(15) "Naruto Uzumaki " ["nrp"]=> string(9) "023034340" } 
    // memasuk key dan value kedalam variabel GET melalui url
    // url https://localhost/phpdasar/6.get&post/get&post.php?nama=Naruto%20Uzumaki%20&%20nrp=023034340
        //    var_dump($_GET); // array(2) { ["nama"]=> string(15) "Naruto Uzumaki " ["nrp"]=> string(9) "023034340" } 

    // var_dump($_POST); // array(0) { }
    // var_dump($_SERVER);
    // echo $_SERVER["SERVER_NAME"] // localhost

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
    <title>GET & POst</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach($students as $student) : ?>
            <li>
                <a href="detailstudent.php?nama=<?= $student["nama"]; ?>&nrp=<?= $student["nrp"]; ?>&email=<?= $student["email"]; ?>&jurusan=<?= $student["jurusan"]; ?>&gambar=<?= $student["gambar"]; ?> "><?= $student["nama"]; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>