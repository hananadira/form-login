<?php 
    require 'controller.php';

    if (isset($_POST["submit"])) {
       
        if (tambahData($_POST) > 0 ) {
            echo "
            <script>
                alert('data berhasil di simpan');
                document.location.href='index.php'; 
            </script>
            ";
        } else {
            echo "
            <script>
                alert('data gagal di simpan');
                document.location.href='index.php'; 
            </script>
            ";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Siswa</title>
</head>
<body>
    
    <form action="" method="post">
        <label for="">nama</label>
        <input type="text" name="nama" id="">
        <br>
        <label for="">nis</label>
        <input type="number" name="nis" id="">
        <br>
        <label for="">rombel</label>
        <input type="text" name="rombel" id="">
        <br>
        <label for="">rayon</label>
        <input type="text" name="rayon" id="">
        <br>
        <label for="">satus</label>
        <input type="text" name="status" id="">
        <br>
        <button type="submit" name="submit"> Submit </button>
    </form>

</body>
</html>