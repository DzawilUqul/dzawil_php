<?php
if(isset($_GET['nama']))
{
    $nama = $_GET['nama'];
} else
{
    $nama = "Anonim";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial Hitung Bidang</title>
</head>

<body>
    <h3>Anda Masuk Sebagai <?php echo $nama; ?> </h3>
    <div id="container">
        <form action="" method="post">
            <?php
                if($_GET['bidang'] == 'persegi')
                {
                    $luas = 0;
                    $panjang = 0;
                    $lebar = 0;
                    if($_SERVER['REQUEST_METHOD']  === 'POST')
                    {
                        $panjang = $_POST['panjang'];
                        $lebar = $_POST['lebar'];
                        $luas = $panjang * $lebar;
                    }
                }
                include "bidang_persegi.php";
            ?>
        </form> 
    </div>

    <div id="menu">
    <div>Pilih menu perhitungan berikut : </div>
    <ul>
        <?php
        $bidang = ['persegi', 'lingkaran', 'segitiga'];

        $query = $_GET;
        $url = explode("?", $_SERVER['REQUEST_URI'])[0];
        foreach ($bidang as $bid) {
            $query['bidang'] = $bid;
            $url_query = $url."?".http_build_query($query);
            echo'<li><a href="'.$url_query.'">'.ucfirst($bid).'</li>';
        }
        ?>
    </ul>
</div>
</body>
</html>