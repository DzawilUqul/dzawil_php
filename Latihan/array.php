<?php 
    $foods = array("apple", "orange", "banana", "coconut");

    echo $foods[0] . "<br>";
    echo $foods[1] . "<br><br>";

    // Add array elements to the end of an array
    array_push($foods, "pineapple", "kiwi");
    // Remove last element of an array 
    array_pop($foods);
    // Remove first array of an array
    array_shift($foods);

    foreach($foods as $food)
    {
        echo $food ."<br>";
    }

    // count array function
    echo count($foods) . "<br><br>";

    /*
        Associative array (Dictionary)
    */

    $capitals = array("USA" => "Washington D.C.",
                    "Japan" => "Kyoto",
                    "South Korea" => "Seoul",
                    "India" => "New Delhi");

    // Override the value
    $capitals["USA"] = "Las Vegas";

    // Add new key and value
    $capitals["China"] = "Beijing";

    // Remove last element
    array_pop($capitals);

    // Remove first element
    array_shift($capitals);

    echo"------ Only Keys ------ <br>";

    // Show only keys
    $keys = array_keys($capitals);

    foreach ($keys as $key) 
    {
        echo $key . "<br>";
    }

    echo"------- Only Values ------- <br>";

    // Show only values
    $values = array_values($capitals);

    foreach ($values as $value) 
    {
        echo $value . "<br>";
    }

    echo"-------- Flipped array ---------- <br>";
    $capitalsFliped = array_flip($capitals);
    foreach ($capitalsFliped as $key => $value)
    {
        echo"{$key} = {$value} <br> " ;
    }

    echo"-------- Reversed array ---------- <br>";
    $capitalsReversed = array_reverse($capitals);
    foreach ($capitalsReversed as $key => $value)
    {
        echo"{$key} = {$value} <br> " ;
    }

    echo"----- Normal array -------- <br>";
    foreach ($capitals as $key => $value)
    {
        echo"{$key} = {$value} <br> " ;
    }
    
?>