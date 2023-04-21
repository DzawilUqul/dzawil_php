<?php 
    session_start();

    echo $_SESSION["username"] . "<br>";
    echo $_SESSION["password"] . "<br>";
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
    this is the home page
    <form action="" method="post">
        <input type="submit" name="logout" value="logout">
    </form>
</body>
</html>

<?php 
    if(isset($_POST["logout"]))
    {
        session_destroy();
        header("Location: session.php");
    }
?>