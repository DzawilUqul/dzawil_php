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
        <label>Enter a country</label>
        <input type="text" name="country">
        <input type="submit"> 
    </form>
</body>
</html>

<?php 
    $capitals = array("USA" => "Washington D.C.",
    "Japan" => "Kyoto",
    "South Korea" => "Seoul",
    "India" => "New Delhi");

    // Check $_POST["country"] as a key with $capitals array
    $capital = $capitals[$_POST["country"]];
    echo $capital;
?>