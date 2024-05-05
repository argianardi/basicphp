<?php 
require 'functions.php';

    $id = $_GET["id"];
    if(deleteStudent($id) > 0) {
        echo "
            <script>
                alert('Data berhasil terhapus');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
             <script>
                alert('Data gagal ditambahkan!');
                document.locationn.href = 'index.php';
             </script>
        ";
    }