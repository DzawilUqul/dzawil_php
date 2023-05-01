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
        <label>Judul Catatan : </label> <br>
        <input type="text" name="judul"> <br><br>

        <label>Kategori : </label> <br>
        <select name="kategori">
            <option value="kuliah">Kuliah</option>
            <option value="pribadi">Pribadi</option>
            <option value="kegiatan">Kegiatan</option>
        </select> <br><br>

        <!-- <input type="text" name="kategori"> <br><br> -->

        <label>Tanggal : </label> <br>
        <input type="date" name="tanggal"> <br><br>

        <label>Isi Catatan : </label> <br>
        <textarea name="catatan" cols="30" rows="10"></textarea> <br><br>

        <a href="index.php">Kembali</a> 
        <input type="submit" name="aksi" value="Tambah_Catatan">

    </form>
</body>
</html>