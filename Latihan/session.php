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
    <form action="" method="post">
        <label>username : </label> <br>
        <input type="text" name="username" id=""> <br>

        <label>password : </label> <br>
        <input type="password" name="password" id=""> <br>

        <input type="submit" name="login">
    </form>
</body>
</html>

<?php 
    if(isset($_POST["login"]))
    {
        
        if(!empty($_POST["username"]) && !empty($_POST["password"]))
        {
            $_SESSION["username"] = $_POST["username"];
            $_SESSION["password"] = $_POST["password"];

            header("Location: homeSession.php");
        } else
        {
            echo "Missing username/password";
        }
    }
?>