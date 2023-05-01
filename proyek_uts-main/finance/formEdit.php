
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

        $query = "SELECT * FROM transaksi WHERE id = ?";
        $params = array($_GET['id']);

        $stmt = $conn -> prepare($query);
        $stmt -> execute($params);
        $data = $stmt -> fetch();

        if($data != null):
    ?>
    <form action="aksi.php" method="post">
        <label>Nama Transaksi : </label> <br>
        <input type="text" name="nama" value="<?= $data['nama'] ?> "> <br> <br>

        <label>Kategori : </label> <br>
        <select name="kategori">
            <?php if($data['kategori'] == 'pemasukan'): ?>
                <option value="pemasukan" selected>PEMASUKAN</option>
                <option value="pengeluaran">PENGELUARAN</option>

            <?php else: ?>
                <option value="pemasukan">PEMASUKAN</option>
                <option value="pengeluaran" selected>PENGELUARAN</option>
            
            <?php endif ?>
        </select> <br> <br>


        <label>Jumlah : </label> <br>
        <input type="text" name="jumlah" value="<?= $data['jumlah'] ?> "> <br> <br>

        <label>Keterangan : </label> <br>
        <textarea name="keterangan" id="" cols="30" rows="10"><?= $data['keterangan'] ?></textarea> <br> <br>

        <a href="index.php">Kembali</a>
        <input type="hidden" name="editId" value="<?= $data['id'] ?>">
        <input type="submit" name="aksi" value="Edit_Data">
    </form>
    <?php else:?>
        <div>Data dengan id tersebut tidak ditemukan</div>
    <?php endif; ?>
</body>
</html>