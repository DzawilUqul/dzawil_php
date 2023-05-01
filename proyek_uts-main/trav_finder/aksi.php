<?php 
    require "db_conn.php";
    session_start();

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        if($_POST['aksi'] == 'Tambah_Data')
        {
            TambahData();
        } else if($_POST['aksi'] == 'Hapus_Data')
        {
            HapusData();
        } else if($_POST['aksi'] == 'Edit_Data')
        {
            EditData();
        } else if($_POST['aksi'] == 'login')
        {
            Login();
        }

        // header('Location: index.php');
    } else 
    {
        echo "Halaman tidak boleh diakses secara langsung";
    }

    function TambahData()
    {
        global $conn;
        $query = "INSERT INTO travel (nama_travel, keterangan, asal, tujuan, harga)
                  VALUES (:nama_travel, :keterangan, :asal, :tujuan, :harga)";

        $params = array(
            ':nama_travel' => $_POST['nama_travel'],
            ':keterangan' => $_POST['keterangan'],
            ':asal' => $_POST['asal'],
            ':tujuan' => $_POST['tujuan'],
            ':harga' => $_POST['harga'],
        );

        try 
        {
            $stmt = $conn -> prepare($query);
            $stmt -> execute($params);

        } catch (PDOException $e) 
        {
            echo "Ada kesalahan dalam penambahan data" . $e -> getMessage();
        }

    }

    function HapusData()
    {
        global $conn;
        $query = "DELETE FROM travel WHERE id = ?";
        $params = array($_POST['deleteId']);

        try 
        {
            $stmt = $conn -> prepare($query);
            $stmt -> execute($params);
        } catch (PDOException $e) 
        {
            echo "Ada kesalahan dalam menghapus data" . $e -> getMessage();
        }
    }

    function EditData()
    {
        global $conn;
        $query = "UPDATE travel SET nama_travel = :nama_travel, keterangan = :keterangan, asal = :asal, tujuan = :tujuan, harga = :harga WHERE id = :id";
        $params = array(
            ':nama_travel' => $_POST['nama_travel'],
            ':keterangan' => $_POST['keterangan'],
            ':asal' => $_POST['asal'],
            ':tujuan' => $_POST['tujuan'],
            ':harga' => $_POST['harga'],
            ':id' => $_POST['editId'],
        );

        try 
        {
            $stmt = $conn -> prepare($query);
            $stmt -> execute($params);

        } catch (PDOException $e) 
        {
            echo "Ada kesalahan dalam mengedit data" . $e -> getMessage();
            echo $query;
        }
        
    }

    function Login()
    {
        echo $_POST['username'] . "<br> <br> ";
        echo $_POST['password'];
    }
?>