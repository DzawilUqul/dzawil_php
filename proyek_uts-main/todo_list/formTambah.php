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

    <form action="aksi.php" method="post">
    <label>Aktivitas : </label> <br>
        <input type="text" name="aktivitas"> <br> <br>

        <label>Kategori : </label> <br>
        <input type="text" name="kategori"> <br> <br>

        <label>Tanggal : </label> <br>
        <input type="date" name="tanggal"> <br> <br>

        <label>Deskripsi : </label> <br>
        <textarea name="deskripsi"  cols="30" rows="10"></textarea> <br><br>

        <input type="submit" name="aksi" value="Tambah_Data">
    </form>
</body>
</html>