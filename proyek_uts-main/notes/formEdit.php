<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit Catatan</h1>
    <?php 
        require "db_conn.php";
        $query = "SELECT * FROM notes WHERE id = ?";
        $params = array($_GET['id']);

        $stmt = $conn -> prepare($query);
        $stmt -> execute($params);
        
        $data = $stmt -> fetch();

        if($data != null):
    ?>

    <form action="aksi.php" method="post">
        <label>Judul Catatan : </label> <br>
        <input type="text" value="<?= $data['judul'] ?>" name="judul"> <br><br>

        <label>Kategori : </label> <br>
        <select name="kategori">
            <?php if($data['kategori'] == 'kuliah'){ ?>
                <option value="kuliah" selected>Kuliah</option>
                <option value="pribadi">Pribadi</option>
                <option value="kegiatan">Kegiatan</option>

            <?php }else if($data['kategori'] == 'pribadi'){ ?>
                <option value="kuliah">Kuliah</option>
                <option value="pribadi" selected>Pribadi</option>
                <option value="kegiatan">Kegiatan</option>
            <?php } else{ ?>
                <option value="kuliah">Kuliah</option>
                <option value="pribadi">Pribadi</option>
                <option value="kegiatan" selected>Kegiatan</option>
            <?php } ?>
        </select> <br><br>
        

        <!-- <input type="text" value="<?= $data['kategori'] ?>" name="kategori"> <br><br> -->

        <label>Tanggal : </label> <br>
        <input type="date" value="<?= $data['tanggal'] ?>" name="tanggal"> <br><br>

        <label>Isi Catatan : </label> <br>
        <textarea name="catatan" cols="30" rows="10"><?= $data['catatan'] ?></textarea> <br><br>

        <a href="index.php">Kembali</a> 

        <input type="hidden" name="editId" value="<?= $data['id'] ?>">
        <input type="submit" name="aksi" value="Edit_Catatan">

    </form>
        <?php else: ?>
            <div>Tidak ditemukan data dengan id tersebut</div>
        <?php endif ?>
</body>
</html>