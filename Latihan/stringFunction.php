<?php 
    $username = "Dzawil,Uqul";
    $usernameImplode = array("Dzawil", "Uqul");
    $phone = "123-456-434";

    // $username = strtoupper($username);
    // $username = strtolower($username);
    
    // Replace string
    str_replace("-","/",$phone);

    // Reverse string
    $phone = strrev($phone);

    // Randomize string
    // $username = str_shuffle($username);

    // Split a string into different string (in array)
    $usernameExplode = explode(",",$username);

    // Combine string array elements into one
    $usernameImploded = implode("-", $usernameImplode); 

    echo $username . "<br>";
    echo $phone . "<br>";

    foreach ($usernameExplode as $val) 
    {
        echo $val . "<br>";
    }

    echo $usernameImploded;
?>