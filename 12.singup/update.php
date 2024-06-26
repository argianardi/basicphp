<?php 
require 'functions.php';

// Ambil id dari URL
$id = $_GET["id"];

// Query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

// Cek apakan button submit sudah ditekan atau belum
if(isset($_POST["submit"])) {
    // Cek apakah data berhasil diubah atau tidak
    if(update($_POST) > 0) {
        echo "
            <script>
                alert('Data berhasil diubah!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal diubah!');
                document.location.href = 'index.php';
            </script>
        ";
    }
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa</title>
</head>
<body>
    <h1>Edit Mahasiswa</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
        <input type="hidden" name="gambarLama" value="<?= $mhs['gambar']; ?>">
        <ul>
            <li>
                <label for="nrp">NRP:</label>
                <input type="text" name="nrp" id="nrp" value="<?= $mhs["nrp"]; ?>">
            </li>
            <li>
                <label for="nama">Nama: </label>
                <input type="text" name="nama" id="nama" value="<?= $mhs["nama"]; ?>">
            </li>
            <li>
                <label for="email">Email: </label>
                <input type="email" name="email" id="email" value="<?= $mhs["email"]; ?>">
            </li>
            <li>
                <label for="jurusan">Jurusan: </label>
                <input type="text" name="jurusan" id="jurusan" value="<?= $mhs["jurusan"]; ?>">
            </li>
            <li>
                <label for="gambar">Gambar: </label><br>
                <img src="img/<?= $mhs['gambar']; ?>" alt="student image" width="80"> <br>
                <input type="file" name="gambar" id="gambar" value="<?= $mhs["gambar"]; ?>">
            </li>
            <li>
                <button type="submit" name="submit" >Edit Data</button>
            </li>
        </ul>
    </form>

</body>
</html>