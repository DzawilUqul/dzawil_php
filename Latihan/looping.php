<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="looping.php" method="post">
        <label>Enter a number to count to : </label>
        <input type="text" name="counter">
        <input type="submit" value="start">
    </form>
</body>
</html>

<?php 
    // to hide undefined array key
    if(!empty($_POST["counter"]))
    {
        $counter = $_POST["counter"];
    
        for($i=$counter; $i > 0 ; $i--)
        {
            echo $i . "<br>";
        }
    }
?>