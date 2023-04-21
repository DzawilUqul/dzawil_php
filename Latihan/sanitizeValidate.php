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
        <label>Username</label> <br>
        <input type="text" name="username"> <br>
        <label>Age</label> <br>
        <input type="text" name="age"> <br>
        <label>email</label> <br>
        <input type="text" name="email"> <br>

        <input type="submit" name="submit" value="login">
    </form>
</body>
</html>

<?php 
    if(isset($_POST["submit"]))
    {
        /*============================================================
            * Sanitizing data
            Remove any illegal character from the data.

            * Validating data
            Determine if the data is in proper form
        ============================================================*/

        // To filter special character (prevent miscellaneous script)
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        // $username = $_POST["username"];

        // Int only
        $age = filter_input(INPUT_POST,"age",FILTER_SANITIZE_NUMBER_INT);

        $age = filter_input(INPUT_POST,"age",FILTER_VALIDATE_INT);

        // prevent special character (,(,),<,>)
        $email = filter_input(INPUT_POST, "email",FILTER_SANITIZE_EMAIL);

        $email = filter_input(INPUT_POST, "email",FILTER_VALIDATE_EMAIL);

        if(empty($age))
        {
            echo "Invalid Age <br>";
        } else
        {
            echo "Your age is {$age} <br>";
        }

        if(empty($email))
        {
            echo "Invalid email";
        } else
        {
            echo "Your email is {$email}";
        }
    }
?>