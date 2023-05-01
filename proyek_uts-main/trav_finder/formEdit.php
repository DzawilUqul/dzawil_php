<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tambah Data</h1>

    <?php 
        require "db_conn.php";

        $query = "SELECT * FROM travel WHERE id = ?";
        $params = array($_GET['id']);

        $stmt = $conn -> prepare($query);
        $stmt -> execute($params);

        $data = $stmt ->fetch();

        if($data !=null):
    ?>

    <form action="aksi.php" method="post">

        <label>Nama Travel : </label> <br>
        <input type="text" name="nama_travel" value=" <?=$data['nama_travel'] ?> " > <br> <br>

        <label>Asal : </label> <br>
        <input type="text" name="asal" value=" <?=$data['asal'] ?> " > <br> <br>

        <label>Tujuan : </label> <br>
        <input type="text" name="tujuan" value=" <?=$data['tujuan'] ?> " > <br> <br>

        <label>Harga : </label> <br>
        <input type="text" name="harga" value=" <?=$data['harga'] ?> " > <br> <br>

        <label>keterangan : </label> <br>
        <textarea name="keterangan" id="" cols="30" rows="10"><?=$data['keterangan'] ?></textarea> <br> <br>

        <input type="hidden" name="editId" value="<?= $data['id'] ?>">
        <input type="submit" name="aksi" value="Edit_Data">

    </form>
        
    <?php else: ?>
        <div>Data dengan id tersebut tidak ditemukan</div>
    <?php endif ?>
</body>
</html>