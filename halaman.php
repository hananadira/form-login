<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    h1 {
        text-align: center;
    }
    table {
        border-collapse: collapse;
        color: #232323;
    }
    table, th, td {
        border-style: dotted solid;
        margin-right: auto;
        margin-left: auto;
        padding: 25px;
        position: relative;
        border: 1px solid #868B8E;
    }
</style>
<body>
    
    <h1>Biodata</h1>
    <table>
        <th>Nama</th>
        <th>Nis</th>
        <th>Rayon</th>
        <th>Rombel</th>
        <th>Status</th>

        <tr>
            <td><?= $_POST["nama"]?></td>
            <td><?= $_POST["nis"]?></td>
            <td><?= $_POST["rayon"]?></td>
            <td><?= $_POST["rombel"]?></td>
            <td><?= $_POST["status"]?></td>
        </tr>
    </table>

</body>
</html>