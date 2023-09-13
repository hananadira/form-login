<?php 

    if(isset($_POST["submit"])) {
        if( $_POST["username"] == "nanannss14" && $_POST["password"] == "nana14") {
            header("location: masuk.php");
        } else {
            $error = true;
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
    <title>Login</title>
</head>
<style>
    span {
        color: red;
    }
    body {
        padding: 30px;
    }
    .login {
        text-align: center;
    }
    .table {
        border-style: dotted solid;
        margin-right: 380px;
        margin-left: 380px;
        padding-top: 50px;
        position: relative;
        border: 1px solid #868B8E;
        border-radius: 15px;
        padding-bottom: 65px;
        margin-top: 10%;
    }
    h1 {
        text-align: center;
    }
</style>
<body>

    <?php if(isset($error)) { ?>
    </p>username/password salah</p>
   <?php } ?>

   <form action="" method="post">
        <div class="table">
            <div class="login">
            <h1>LOGIN</h1>
                <label>username: <span>*</span></label><br>
                <input type="string" name="username">
                <br>
                <label>password: <span>*</span></label><br>
                <input type="password" name="password">
                <br>
                <br>
                <button type="submit" name="submit"> Submit </button>
            </div>
    </div>
   </form>
    
</body>
</html>