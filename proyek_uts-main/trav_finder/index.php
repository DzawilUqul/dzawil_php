<?php
    session_start();
        echo $_POST['username'] . "<br><br>"; 
        echo $_POST['password'];
require "db_conn.php";
$sql = 'select * from travel where 1';
$stmt = $conn->prepare($sql);
$stmt->execute();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Travel Terbaik</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" 
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
        crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2>List Travel Aktif</h2>
        <a href="formTambah.php" class="btn btn-primary btn-lg">Tambah Data</a> <br> <br>
        <table class="table table-bordered">
            <tr>
                <th>No.</th>
                <th>Nama Travel</th>
                <th>Asal > Tujuan</th>
                <th>Harga</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
            <?php 
            $no = 0;
            while($data = $stmt->fetch()){
            $no++;
            ?>
            <tr>
                <td><?=$no?></td>
                <td><?=$data['nama_travel']?></td>
                <td><?=$data['asal']?> > <?=$data['tujuan']?></td>
                <td style="text-align: right;"><?=number_format($data['harga'], 0, ',', '.')?></td>
                <td><?=$data['keterangan']?></td>
                <td>
                    <form action="aksi.php" method="post">
                        <a href="formEdit.php?id=<?= $data['id'] ?> ">Edit_Data</a> ||
                        
                        <input type="hidden" name="deleteId" value=" <?= $data['id'] ?> ">
                        <input type="submit" name="aksi" value="Hapus_Data">
                    </form>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>