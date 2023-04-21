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
        <label>x : </label>
        <input type="text" name="x">
        <input type="submit" value="total">

        <label>y : </label>
        <input type="text" name="y">
        <input type="submit" value="total">
    </form>
</body>
</html>

<?php 
    $x = $_POST["x"];
    $x = $_POST["y"];
    $total = null;

    // $total = abs($x);    // absolute value
    // $total = round($x);  // round value
    // $total = floor($x);  // round down
    // $total = ceil($x);   // round up
    // $total = pow($x,$y); // power function
    // $total = sqrt($x);   // square root
    // $total = max($x,$y); // max number between
    // $total = min($x,$y); // min number between
    // $total = pi();       // pi function (3.14)
    // $total = rand(1,6);     // generate random number between

    echo $x;
?>