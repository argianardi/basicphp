//<?php 
// Standar Output
//  echo 'hello world';
// print 'Hello World';
// print_r('Hello World');
// var_dump('Hello World');


// Penulisan sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP
// ?>

<?php
// Variabel dan Tipe Data
$nama = 'world';
echo "nama saya $nama";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    PHP di dalam HTML
    <h1>Halo, Selamat Datang <?php echo 'Dunia'; ?></h1>
    <p><?php echo 'ini adalah paragraf'; ?></p>

    <!-- HTML di dalam PHP -->
    <?php 
        echo "<h1>Halo, Selamat Datang di PHP </h1>"; 
    ?>

    <!-- Variabel dan Tipe Data -->
    <h1>Halo, Selamat Datang <?php echo $nama; ?></h1>
</body>
</html> 

<?php
// Variabel dan Tipe Data
// $nama = 'world';
// echo "nama saya $nama";

// Operator 
// aritmatika + - * / %
// $x = 10;
// $y = 5;
// echo $x * $y;
// echo $y % $x;

// Penggabungan string / concatenation / concat
// $namaDepan = "Uzumaki";
// $namaBelakang = "Naruto";
// echo $namaDepan . " " . $namaBelakang;

// Assignment
// =, +=, -=, *=, /=, %=, .=
// $x = 10;
// $x -=5;
// // echo $x; // 5
// $y = 10;
// $y .=10;
// echo $y; // 1010
// $nama = "Uzumaki";
// $nama .= " ";
// $nama .= "Naruto";
// echo $nama; // Uzumaki Naruto

// Perbandingan
// <, >, <=, >=, ==, !=
// var_dump(1 > 5); // bool(false) 
// var_dump(2 <= 2); // bool(true) 
// var_dump(3 == '3'); // bool(true)

// Identitas
// ===, !==
// var_dump(1 === '1'); // bool(false)

// Logika
// &&, ||, !
// $x = 20;
// var_dump($x < 10 && $x % 2 == 0); // bool(false)

?> 

