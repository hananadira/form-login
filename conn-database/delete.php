<?php 
    require 'controller.php';

    $id = $_GET["id"];

    if (delete($id) > 0 ) {
        echo "
        <script>
            alert('data berhasil di hapus');
            document.location.href='index.php'; 
        </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal berhasil di hapus');
            document.location.href='index.php'; 
        </script>
        ";
    }

?>