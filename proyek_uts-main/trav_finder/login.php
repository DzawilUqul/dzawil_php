    <?php 
        session_start();
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
    <h1>Login</h1>
    <form action="aksi.php" method="post">
        <label>Username : </label>
        <input type="text" name="username"> <br> <br>

        <label>Password : </label>
        <input type="text" name="password"> <br> <br>

        <input type="submit" name="aksi" value="login">
    </form>

   
</body>
</html>