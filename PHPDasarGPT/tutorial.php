

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $list_tuts = array(
        'https://youtu.be/TaBWhb5SPfc' => "Programmer Zaman Now",
        'https://youtu.be/l1W2OwV5rgY' => "Web Programming UNPAS",
        'https://www.youtube.com/watch?v=OK_JCtrrv-c' => "FreeCodecamp",
        'https://phptherightway.com/' => 'PHP The Right Way',
        'https://www.geeksforgeeks.org/php-tutorials/' => 'Geeks for Geeks'
    );
    ?>
    
    <h1>List Tutorial PHP</h1>
    <ul>
    <?php
    foreach($list_tuts as $url => $text){
        echo "<li><a href='$url'>$text</a></li>";
    }
    ?>
    </ul>

    <button type="button"> <a href="index.php">Kembali</a> </button>
</body>
</html>