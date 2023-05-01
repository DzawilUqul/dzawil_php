<?php 
    require "db_conn.php";
    //&& !empty($_POST['nama']) && !empty($_POST['jumlah']) && !empty($_POST['kategori']) && !empty($_POST['keterangan'])

    if ($_SERVER['REQUEST_METHOD'] == 'POST') 
    {
        if ($_POST['aksi'] == 'Tambah_Data') 
        {
            InsertData();
        } else if($_POST['aksi'] == 'Edit_Data' && $_POST['editId'] > 0)
        {
            EditData();
            echo "edit data";
        } else if($_POST['aksi'] == 'Hapus' && $_POST['deleteId'] > 0)
        {
            HapusData();
            echo "hapus data";
        }

        header('Location: index.php');
    } else 
    {
        echo "failedwadawdw";
    }

    function InsertData()
    {
        global $conn;

        $query = "INSERT INTO transaksi (nama, jumlah, kategori, keterangan)
                VALUES (:nama, :jumlah, :kategori, :keterangan)";

        $params = array(
            ':nama' => $_POST['nama'],
            ':jumlah' => $_POST['jumlah'],
            ':kategori' => $_POST['kategori'],
            ':keterangan' => $_POST['keterangan']
        );

        try 
        {
            $stmt = $conn -> prepare($query);
            $stmt -> execute($params);

        } catch (PDOException $e) 
        {
            echo "Ada Kesalahan dalam penambahan" . $e -> getMessage();
        }
    }

    function HapusData()
    {
        global $conn;

        $query = "DELETE FROM transaksi WHERE id = ?";

        $params = array($_POST['deleteId']);

        try 
        {
            $stmt = $conn -> prepare($query);
            $stmt -> execute($params);
        } catch (PDOException $e) {
            echo "Ada kesalahan dalam menghapus data" . $e -> getMessage();
        }
    }

    function EditData()
    {
        global $conn;
        $query = "UPDATE transaksi SET nama = :nama, jumlah = :jumlah, kategori = :kategori, keterangan = :keterangan WHERE id = :id";

        $params = array(
            ":nama" => $_POST["nama"],
            ":jumlah" => $_POST["jumlah"],
            ":kategori" => $_POST["kategori"],
            ":keterangan" => $_POST["keterangan"],
            ":id" => $_POST["editId"]
        );

        try 
        {
            $stmt = $conn -> prepare($query);
            $stmt -> execute($params);
        } catch (PDOException $e) 
        {
            echo "Ada kesalahan dalam edit data" . $e -> getMessage();
        }
    }
?>