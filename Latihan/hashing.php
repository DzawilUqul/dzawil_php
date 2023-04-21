<?php 
    $password = "pizza123";

    /* ========================================================================
    * PASSWORD_DEFAULT is bcrypt php algorithm to hashing password,
      is recommended to store the result in database 60 or 255 char
    ========================================================================*/  

    $hash = password_hash($password, PASSWORD_DEFAULT);

    // echo $hash;

    $inputPass = "pizza123";

    // password_verify does verify the plain text vs $hash
     if(password_verify($inputPass,$hash))
     {
        echo "You're logged in";
     } else
     {
        echo "Incorrect password";
     }
?>