<?php   
    require "menu.php";
    
    $menu = array_merge($makanan, $minuman);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuitansi Pemesanan</title>
</head>
<body>
    <div class="container">
        <h1>Kuitansi Pemesanan</h1>

        <table>
            <tr>
                <th>No.</th>
                <th>Pesanan</th>
                <th>Qty</th>
                <th>Jumlah</th>
            </tr>

            <?php
                $no = 0;
                $total = 0;
                foreach($_POST as $name => $qty){
                    if($qty == "" || $qty == 0) continue;

                    $no++;
                    $harga = $menu[$name];
                    $jumlah = $harga * $qty;
                    $total += $jumlah;
            ?>

            <tr>
                <td><?= $no ?></td>
                <td><?= strtoupper(str_replace('_', ' ', $name)) ?></td>
                <td>Rp. <?= $harga ?> x <?= $qty ?> </td>
                <td>Rp. <?= $jumlah ?>  </td>
            </tr>

            <?php } ?>

            <tr>
                <th colspan="3">Total Bayar</th>
                <th> Rp. <?= $total ?> </th>
            </tr>

        </table>

        <a href="index.php"> Kembali ke pemesanan menu </a>
    </div>
</body>
</html>