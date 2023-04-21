<?php 
    /* ==========================================================================
    * isset() = Returns TRUE if a variable is declared and not null
    * empty() = Returns TRUE if a variable is not declared, false, null
    =============================================================================*/

    // TRUE , FALSE, "", "bro" will return TRUE
    $username = null;

    if(isset($username))
    {
        echo"This is variable is set";
    } else
    {
        echo "This variable is NOT set";
    }

    echo "<br>";

    // variable is not declared, false, "", null will return TRUE
    $username2 = "";

    if(empty($username2))
    {
        echo"This is variable is set";
    } else
    {
        echo "This variable is NOT set";
    }
?>