<?php 
    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "business_db";

    
    try 
    {
        $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
        // header("Location: mySqliIndex.php");
    } catch (mysqli_sql_exception $e) 
    {
        echo "Koneksi gagal" . $e;
    }

    // if($conn)
    // {
    //     "connected";
    // }
?>