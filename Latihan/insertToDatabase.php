<?php 
    include("mySqli.php");

    $username = "Squidward3";
    $password = "clarinet4";

    $hashPass = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (user, password)
            VALUES ('$username', '$hashPass')";


    try 
    {
        mysqli_query($conn, $sql);
        echo "Resistered";
    } catch (mysqli_sql_exception) 
    {
        echo "Could not register user";
    }

    mysqli_close($conn);
?>