
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
    <title>Login</title>
</head>
<style>
    body {
        padding: 30px;
    }
    span {
        color: red;
    }
    .biodata {
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
        margin-top: 3%;
    }
</style>
<body>
    
   <form action="halaman.php" method="post">
        <div class="table">
            <div class="biodata">
                <h1>BIODATA</h1>
                <label>Nama: <span>*</span></label><br>
                <input type="text" name="nama">
                <br>
                <br>
                <label>Nis: <span>*</span></label><br>
                <input type="text" name="nis">
                <br>
                <br>
                <label>Rombel: <span>*</span></label><br>
                <input type="text" name="rombel">
                <br>
                <br>
                <label>Rayon: <span>*</span></label><br>
                <input type="text" name="rayon">
                <br>
                <br>
                <label>Status: <span>*</span></label><br>
                <input type="text" name="status">
                <br>
                <br>
                <button type="submit" name="submit"> Submit </button>
            </div>
        </div>
    </form>
    
</body>
</html>