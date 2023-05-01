<?php 
    require "db_conn.php";

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        if($_POST['aksi'] == 'Tambah_Catatan')
        {
            TambahCatatan();
        } elseif ($_POST['aksi'] == 'Hapus_Catatan') 
        {
            HapusCatatan();
        } elseif ($_POST['aksi'] == 'Edit_Catatan')
        {
            EditCatatan();
        }

        header('Location: index.php');
    } else
    {
        echo "Halaman tdk boleh diakses langsung";
    }


    function TambahCatatan()
    {
        global $conn;

        $query = "INSERT INTO notes (judul, catatan, kategori, tanggal)
        VALUES (:judul, :catatan, :kategori, :tanggal)";

        $params = array(
            ":judul" => $_POST["judul"],
            ":catatan" => $_POST["catatan"],
            ":kategori" => $_POST["kategori"],
            ":tanggal" => $_POST["tanggal"]
        );

        try 
        {
            $stmt = $conn -> prepare($query);
            $stmt -> execute($params);

        } catch (PDOException $e) 
        {
            echo "Ada kesalahan dalam penambahan data catatan" . $e -> getMessage();
        }
    }

    function HapusCatatan()
    {
        global $conn;

        $query = "DELETE FROM notes where id = ?";
        $params = array($_POST['id_hapus_catatan']);

        try 
        {
            $stmt = $conn -> prepare($query);
            $stmt -> execute($params);

        } catch (PDOException $e) 
        {
            echo "Ada kesalahan dalam menghapus data catatan" . $e -> getMessage();
        }
    }

    function EditCatatan()
    {
        global $conn;
        $query = "UPDATE notes SET judul = :judul, catatan = :catatan, kategori = :kategori, tanggal = :tanggal WHERE id = :id";
        $params = array(
            ":judul" => $_POST['judul'],
            ":catatan" => $_POST['catatan'],
            ":kategori" => $_POST['kategori'],
            ":tanggal" => $_POST['tanggal'],
            ":id" => $_POST['editId']
        );

        try 
        {
            $stmt = $conn -> prepare($query);
            $stmt -> execute($params);
        } catch (PDOException $e) 
        {
            echo "Ada kesalahan dalam menghapus data" . $e -> getMessage();
        }
    }
?>