    <?php
        $nama = null;
        if(isset($_POST['login']))
        {
            $nama = $_POST['nama'];
        }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div>
        <h1>Login</h1>
        <form action="" method="post">
            <input type="text" name="nama">
            <input type="submit" name="login">
            
        </form>
    </div>
</body>
</html>