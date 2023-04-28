<?php
    $name = "Bro Code";
    $food = "pizza";
    $email = "fakegmail.com";

    $age = 21;
    $users = 2;

    $gpa = 2.5;

    echo"Hello {$name} <br>";
    echo"You like {$food} <br>";
    echo"Your email is {$email} <br>";
    echo"Your GPA is {$gpa}";

    // $_GET and $_POST

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
    <form action="latihan.php" method="post">
        <label> username : </label> <br>
        <input type="text" name="username"> <br>

        <label> Password : </label> <br>
        <input type="password" name="password"> <br>
        <input type="submit" name="login" value="login">
    </form>

    <!-- <form action="latihan.php" method="post">
        <label>quantity : </label> <br>
        <input type="text" name="quantity"> <br>
        <input type="submit" name="" value="total">
        
    </form> -->
</body>
</html>

<?php
    

    if(isset($_POST['login']))
    {
        echo $_POST["username"] . "<br>" ; // or
    }

    // echo "{$_POST["password"]} <br> ";

    // $item = "pizza";
    // $price = 5.99;
    // $quantity = $_POST["quantity"];
    // $total = null;

    // $total = $quantity * $price;

    // echo"You have ordered {$quantity} x {$item} <br>";
    // echo"Your total is : \${$total}";
?>

