<?php 
    require "db_conn.php";

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        if($_POST['aksi'] == 'Tambah Data')
        {
            insert_data();
        } elseif (($_POST['aksi'] == 'Edit_Data') && ($_POST['id'] >0)) 
        {
            update_data();
        } elseif (($_POST['aksi'] == 'Hps') && ($_POST['del'] > 0)) 
        {
            delete_data();
        }

        header("Location: index.php");
        exit;
    } else
    {
        echo "Halaman ini tidak boleh diakses secara langsung";
        exit;
    }

    function insert_data()
    {
        global $conn;

        $query = "INSERT INTO barang (nama, harga, jml, keterangan, foto) 
                    VALUES (:nama, :harga, :jml, :keterangan, :foto)";
        
        $params = array(
            ':nama' => $_POST['nama'],
            ':harga' => $_POST['harga'],
            ':jml' => $_POST['jml'],
            ':keterangan' => $_POST['keterangan'],
            ':foto' => $_FILES['foto']['name']
        );

        try 
        {
            $stmt = $conn->prepare($query);
            $stmt -> execute($params);
        } catch (PDOException $e) {
            echo "Kesalahan tambah : " . $e -> getMessage();
        }
    }

    function update_data()
    {
        global $conn;

        $query = "UPDATE barang SET nama = :nama, harga = :harga, jml = :jml, keterangan = :keterangan ";
        $params = array(
            ':nama' => $_POST['nama'],
            ':harga' => $_POST['harga'],
            ':jml' => $_POST['jml'],
            ':keterangan' => $_POST['keterangan'],
            ':id' => $_POST['id'],
        );

        if(!empty($_FILES['foto']['name']))
        {
            $query .= ', foto = :foto';
            $params[':foto'] = $_FILES['foto']['name'];
        }
        $query .= " WHERE id = :id";

        try 
        {
            $stmt = $conn -> prepare($query);
            $stmt -> execute($params);
        } catch (PDOException $e) {
            echo "Kesalahan edit: " . $e -> getMessage();
            echo $query;
        }
    }


    function delete_data()
    {
        global $conn;

        $query = 'DELETE FROM barang WHERE id = ?';

        try 
        {
            $stmt = $conn -> prepare($query);
            $stmt -> execute(array($_POST['del']));
        } catch (PDOException $e) {
            echo "Kesalahan hapus : " . $e -> getMessage();
            echo $query;
        }
    }
?>