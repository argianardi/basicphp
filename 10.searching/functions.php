<?php 
    // Koneksi ke database
    $conn = mysqli_connect("localhost", "root", "", "phpdasar");

    function query($query) {
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    // Add Student
    function addStudent($data) {
        global $conn;

        $nrp = htmlspecialchars($data["nrp"]);
        $nama = htmlspecialchars($data["nama"]);
        $email = htmlspecialchars($data["email"]);
        $jurusan = htmlspecialchars($data["jurusan"]);
        $gambar = htmlspecialchars($data["gambar"]);

        // insert data
        $query = "INSERT INTO mahasiswa (nrp, nama, email, jurusan, gambar)
                    VALUES
                    ('$nrp', '$nama', '$email', '$jurusan', '$gambar')
                ";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    // Delete Student
    function deleteStudent($id) {
        global $conn;
        mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");

        return mysqli_affected_rows($conn);
    }

    // Update Student
    function update($data){
        global $conn;

        $id = $data["id"];
        $nrp = htmlspecialchars($data["nrp"]);
        $nama = htmlspecialchars($data["nama"]);
        $email = htmlspecialchars($data["email"]);
        $jurusan = htmlspecialchars($data["jurusan"]);
        $gambar = htmlspecialchars($data["gambar"]);

        $query = "UPDATE mahasiswa SET
                    nrp = '$nrp',
                    nama = '$nama',
                    email = '$email',
                    jurusan = '$jurusan',
                    gambar = '$gambar'
                 WHERE id = $id
                ";

        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }

    // Search Student
    function searchStudent($keyword) {
        $query = "SELECT * FROM mahasiswa
                WHERE
                nama  LIKE '%$keyword%' OR
                nrp LIKE '%$keyword%' OR
                email LIKE '%$keyword%' OR
                jurusan LIKE '%$keyword%'
            ";
        
        return query($query);
    }
?>