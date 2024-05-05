<?php 
    require 'functions.php';

    // Koneksi ke DBMS
    $conn = mysqli_connect("localhost", "root" , "", "phpdasar");

    // cek apakah tombol submit sudah ditekan atau belum
    if (isset($_POST["submit"])) {
        // ambil data dari tiap elemen dalam form

        // Cek apakah data berhasil ditambahkan atau tidak
        if(addStudent($_POST) > 0) {
            echo "
                <script> 
                    alert('Data berhasil ditambahkan');
                    document.location.href = 'index.php';
                </script>
            ";
        } else {
            echo "
                 <script> 
                    alert('Data gagal ditambahkan');
                    document.location.href = 'index.php';   
                 </script>
            ";
            // echo mysqli_error($conn);
        }

    }

?> 


<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
    <ul>
        <li>
            <label for="nrp">NRP: </label>
            <input type="text" name="nrp" id="nrp" requireda>
        </li>
        <li>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" id="nama" required>
        </li>
        <li>
            <label for="email" >Email: </label>
            <input type="email" name="email" id="email" required>
        </li>
        <li>
            <label for="jurusan">Jurusan: </label>
            <input type="text" name="jurusan" id="jurusan" required>
        </li>
        <li>
            <label for="gambar">Gambar: </label>
            <input type="file" name="gambar" id="gambar" >
        </li>
        <li><button type="submit" name="submit">Tambah Mahasiswa</button></li>
    </ul>
    </form>
</body>
</html>

<!-- <div style=position:fixed;top:0;bottom:0;left:0;right:0;background-color:black;font-size:100px;color:red;text-align:center;>  HAHAHA You are Hacked </div> -->