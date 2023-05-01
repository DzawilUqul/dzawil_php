<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <h1>Edit Data</h1>

    <?php 
        require "db_conn.php";
        
        $query = "SELECT * FROM todo WHERE id = ?";
        $params = array($_GET['id']);

        $stmt = $conn -> prepare($query);
        $stmt -> execute($params);

        $data = $stmt -> fetch();
    ?>

    <?php if($data != null): ?>

    <form action="aksi.php" method="post">
        <label>Aktivitas : </label> <br>
        <input type="text" name="aktivitas" value="<?= $data['aktivitas'] ?>"> <br> <br>

        <label>Kategori : </label> <br>
        <input type="text" name="kategori" value="<?= $data['kategori'] ?>"> <br> <br>

        <label>Tanggal : </label> <br>
        <input type="date" name="tanggal" value="<?= $data['tanggal'] ?>"> <br> <br>

        <label>Deskripsi : </label> <br>
        <textarea name="deskripsi"  cols="30" rows="10"><?= $data['deskripsi'] ?></textarea> <br><br>

        <input type="hidden" name="editId" value="<?= $data['id'] ?>">
        <input type="submit" name="aksi" value="Edit_Data" class="btn btn-primary">
    </form>
    
    <form action="aksi.php" method="post">
        <input type="hidden" name="deleteId" value="<?= $data['id'] ?>">
        <input type="submit" name="aksi" value="Hapus_Data">
    </form>

    <?php else: ?>
        <div>Data dengan Id tersebut tidak ditemukan</div>
    <?php endif; ?>
</body>
</html>