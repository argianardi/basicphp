<?php 
    require '../functions.php';
    $keyword = $_GET["keyword"];
    $query = "SELECT * FROM mahasiswa
                WHERE
              nama LIKE '%$keyword%' OR
              nrp LIKE '%$keyword%' OR
              email LIKE '%$keyword%' OR
              jurusan LIKE '%$keyword%' 
        ";
    $students = query($query);

?>

<table border="1" cellpadding="10" cellspacing="0" id="student-table">
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