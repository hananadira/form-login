<?php 
    require 'controller.php';

    if(isset($_POST['register'])) {
        if ( register($_POST) > 0 ) {
            echo "<script> 
                alert ('akun berhasil ditambahkan!')
            </script>";
        } else {
            mysqli_error($conn);
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
<div class="position-absolute top-50 start-50 translate-middle">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h3 class="text-center mb-5">REGISTRASI</h3>
            <form action="" method="post">
                    <label for="">username</label>
                    <input type="text"  name="username" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping" autocomplate="off">
                    <label for="">password</label>
                    <input type="password"  name="password" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping" autocomplate="off">
                    <label for="">konfirmasi password</label>
                    <input type="password"  name="conf_password" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping" autocomplate="off">
                    <button type="submit" name="register" class="btn btn-primary mt-3">registrasi</button>
            </form>
            
        </div>
    </div>
</div>
</body>
</html>