<?php
session_start();
 
if(isset($_POST['submit'])){
    if(!empty($_POST['username'])){
        $_SESSION['username'] = $_POST['username'];
    }
    else{
        echo "Username is required!";
    }
}
 
if(isset($_SESSION['username'])){
?>
    <h1>Selamat datang di aplikasi latihan PHP <?php echo $_SESSION['username']; ?></h1>
    <h3>Silahkan pilih menu berikut : </h3>  
    <ul>
        <li><a href="tutorial.php">List Tutorial PHP</a></li>
        <li><a href="temperatur.php">Konversi Temperatur</a></li>
        <li><a href="logout.php">Keluar</a></li>
    </ul>
<?php
}
else{
?>
    <h1>Masukkan nama :</h1>
    <form method="post" action="index.php">
        <input type="text" name="username"><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
<?php
}
?>