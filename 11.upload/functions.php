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

        // Upload Gambar
        $gambar = uploadImage();
        if(!$gambar) {
            return false;
        }

        // insert data
        $query = "INSERT INTO mahasiswa (nrp, nama, email, jurusan, gambar)
                    VALUES
                    ('$nrp', '$nama', '$email', '$jurusan', '$gambar')
                ";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    // Upload Gambar
    function uploadImage(){
        $namaFile = $_FILES['gambar']['name'];
        $ukuranFile = $_FILES['gambar']['size'];
        $error = $_FILES['gambar']['error'];
        $tmpName = $_FILES['gambar']['tmp_name'];

        // Cek apakah tidak ada gambar yang diupload
        if($error === 4){
            echo " <script>
                    alert('Pilih gambar terlebih dahulu!');
                   </script>
                 ";
            return false;
        }

        // Cek apakah yang diupload adalah gambar (cek extensi)
        $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
        $ekstensiGambar = explode('.', $namaFile);
        $ekstensiGambar = strtolower(end($ekstensiGambar));
        if(!in_array($ekstensiGambar, $ekstensiGambarValid)){
            echo "
                <script>
                    alert('Yang anda upload bukan gambar!');
                </script>
            ";
            return false;
        }

        // Cek jika ukuran gambar terlalu besar
        if($ukuranFile > 1000000){
            echo "
                <script>
                    alert('Ukuran gambar terlalu besar!');
                </script>
            ";
        }

        // Lolos pengecekan, gambar siap diupload
        // Generate nama gambar baru
        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .=  $ekstensiGambar;
        move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

        return $namaFileBaru;
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
        $gambarLama = htmlspecialchars($data["gambarLama"]);

        // Cek apakah user mengubah gambar atau tidak
        if($_FILES['gambar']['error'] === 4) {
            $gambar = $gambarLama;
        } else{
            $gambar = uploadImage();
        }

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