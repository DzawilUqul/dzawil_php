<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="aksi.php" method="post">
        <label>Nama Transaksi : </label> <br>
        <input type="text" name="nama"> <br> <br>

        <label>Kategori : </label> <br>
        <select name="kategori">
            <option value="pemasukan">PEMASUKAN</option>
            <option value="pengeluaran">PENGELUARAN</option> 
        </select> <br> <br>
        <!-- <input type="text" name="kategori"> <br> <br> -->

        <label>Jumlah : </label> <br>
        <input type="text" name="jumlah"> <br> <br>

        <label>Keterangan : </label> <br>
        <textarea name="keterangan" cols="30" rows="10"></textarea> <br> <br>

        <a href="index.php">Kembali</a>
        <input type="submit" name="aksi" value="Tambah_Data">
    </form>
</body>
</html>