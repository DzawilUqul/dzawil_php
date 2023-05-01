<?php 
    require "db_conn.php";

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        if($_POST['aksi'] == 'Tambah_Data')
        {
            TambahData();
        } else if($_POST['aksi'] == 'Hapus_Data' && $_POST['deleteId'] > 0)
        {
            HapusData();
        } else if($_POST['aksi'] == 'Edit_Data' && $_POST['editId'] > 0)
        {
            EditData();
        }

        header('Location: index.php');
    } else 
    {
        echo "Halaman tidak boleh diakses secara langsung";
    }

    function TambahData()
    {
        global $conn;
        $query = "INSERT INTO todo (aktivitas, kategori, deskripsi, tanggal)
        VALUES (:aktivitas, :kategori, :deskripsi, :tanggal)";

        $params = array(
            ":aktivitas" => $_POST['aktivitas'],
            ":kategori" => $_POST['kategori'],
            ":deskripsi" => $_POST['deskripsi'],
            ":tanggal" => $_POST['tanggal'],
        );

        try
        {
            $stmt = $conn -> prepare($query);
            $stmt -> execute($params);

        } catch(PDOException $e)
        {
            echo "Ada kesalahan dalam penambahan data" . $e -> getMessage();
        }
    }

    function HapusData()
    {
        global $conn;
        $query = "DELETE FROM todo WHERE id = ?";

        $params = array($_POST['deleteId']);

        try 
        {
            $stmt = $conn -> prepare($query);
            $stmt -> execute($params);

        } catch (PDOException $e) 
        {
            echo "Ada kesalahan dalam menghapus data " . $e -> getMessage();
        }
    }

    function EditData()
    {
        global $conn;
        $query = "UPDATE todo SET aktivitas = :aktivitas, kategori = :kategori, deskripsi = :deskripsi, tanggal = :tanggal WHERE id = :id";

        $params = array(
            ":aktivitas" => $_POST['aktivitas'],
            ":kategori" => $_POST['kategori'],
            ":deskripsi" => $_POST['deskripsi'],
            ":tanggal" => $_POST['tanggal'],
            ":id" => $_POST['editId']
        );

        try 
        {
            $stmt = $conn -> prepare($query);
            $stmt -> execute($params);

        } catch (PDOException $e) 
        {
            echo "Ada kesalahan dalam edit data " . $e -> getMessage();
        }
    }
?>