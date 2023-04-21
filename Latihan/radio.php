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
        <input type="radio" name="credit_card" value="Visa">
        Visa<br>
        <input type="radio" name="credit_card" value="Mastercard">
        Mastercard<br>
        <input type="radio" name="credit_card" value="American Express">
        American Express<br>
        <input type="submit" name="confirm" value="confirm">
    </form>
</body>
</html>

<?php 
    // if(isset($_POST["confirm"]))
    // {
    //     if(isset($_POST["credit_card"]))
    //     {
    //         $credit_card = $_POST["credit_card"];

    //         if($credit_card == "Visa")
    //         {
    //             echo"You selected Visa";
    //         }
    //         else if($credit_card == "Mastercard")
    //         {
    //             echo"You selected Mastercard";
    //         }
    //         else if($credit_card == "American Express")
    //         {
    //             echo"You selected American Express";
    //         }
    //     } else
    //     {
    //         echo"Please select card";
    //     }
    // }


    if(isset($_POST["confirm"]))
    {
        if(isset($_POST["credit_card"]))
        {
            $credit_card = $_POST["credit_card"];

            switch ($credit_card) {
                case 'Visa':
                    echo"You selected Visa";
                    break;

                case 'Mastercard':
                    echo"You selected Mastercard";
                    break;

                case 'American Express':
                    echo"You selected American Express";
                    break;
            }
        } else
        {
            echo"Please select card";
        }
    }
?>