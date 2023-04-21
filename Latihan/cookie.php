<?php 
    // "/" is the file path
    // (86400 * 2) means 2 days will expire
    setcookie("fav_food","pizza", time() + (86400 * 2), "/");
    setcookie("fav_drink","coffe", time() + (86400 * 3), "/");
    setcookie("fav_dessert","ice cream", time() + (86400 * 4), "/");

    foreach ($_COOKIE as $key => $value) 
    {
        echo "{$key} = {$value} <br>";
    }

    if(isset($_COOKIE["fav_food"]))
    {
        echo "Buy some {$_COOKIE["fav_food"]}";
    } else
    {
        echo "I dont know your fav food";
    }
?>