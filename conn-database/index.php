<?php 
    require 'controller.php';
    $students = query("SELECT * FROM students");

    //cek apakah button udah di klik?
    if(isset($_POST["search"]) ) {
        $students = search($_POST["keyword"]);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="input.php">tambah data</a>
    <form action="" method="post">
        <input type="text" name="keyword" size="30">
        <button type="submit" name="search">cari</button>
    </form>

    <br>
    <table border="1">
        <thead>
            <tr>
                <th>No. </th>
                <th>Nama</th>
                <th>Nis</th>
                <th>Rombel</th>
                <th>Rayon</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1 ?>
            <?php foreach( $students as $student ) { ?>
            <tr>
                <td><?= $i ?></td>
                <td><?php echo $student["nama"] ?></td>
                <td><?php echo $student["nis"] ?></td>
                <td><?php echo $student["rombel"] ?></td>
                <td><?php echo $student["rayon"] ?></td>
                <td><?php echo $student["status"] ?></td>
                <td>
                    <a href="delete.php?id=<?= $student ["id"] ?>">hapus</a>
                    |
                    <a href="update.php?id=<?= $student ["id"] ?>">ubah</a>
                </td>
            </tr>
            <?php $i++ ?>
            <?php } ?>
        </tbody>
    </table>

</body>
</html>