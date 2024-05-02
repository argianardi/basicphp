<?php 
// Date
//    echo date("l = d = M = Y"); //Wednesday = 01 = May = 2024

// Time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 Januari 1970
//    echo time(); //1714582080

// Tampilakan nama hari di 2 hari ke depan
// $days = 500;
// echo date("l, d/M/Y", time() + 60*60*24*$days); // Saturday, 13/Sep/2025

// mktime
// untuk membuat detik sendiri dari 1 januari 1970 sampai detik sekarang
// mktime(0,0,0,0,0,0) === (jam, menit, detik, bulan, tanggal, tahun)
// Lihat hari kelahiran berdasarkan tanggal lahir
// echo date("l", mktime(0,0,0,1,20,2024)); // Saturday

// strtotime
// echo strtotime("1 may 2024"); // 1714514400
// echo date("l", strtotime("1 may 2024")); // Wednesday

// Fanction date Yang sering digunakan
// * time()
// * date()
// * mktime()
// * strtotime()

// String
// * strlen()
// * strcmp()
// * explode()
// * htmlspecialchars()

// utility
// * var_dump()
// * isset()
// * empty()
// * die()
// * sleep()
?>