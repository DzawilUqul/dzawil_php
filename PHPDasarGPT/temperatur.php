<?php
function convert_temperature($value, $asal, $tujuan){
    $hasil = 0;
    if($asal == 'celsius'){
        if($tujuan == 'fahrenheit'){
            $hasil = ($value * 9/5) + 32;
        }elseif($tujuan == 'kelvin'){
            $hasil = $value + 273.15;
        }else{
            $hasil = $value;
        }
    }elseif($asal == 'fahrenheit'){
        if($tujuan == 'celsius'){
            $hasil = ($value - 32) * 5/9;
        }elseif($tujuan == 'kelvin'){
            $hasil = ($value - 32) * 5/9 + 273.15;
        }else{
            $hasil = $value;
        }
    }elseif($asal == 'kelvin'){
        if($tujuan == 'celsius'){
            $hasil = $value - 273.15;
        }elseif($tujuan == 'fahrenheit'){
            $hasil = ($value - 273.15) * 9/5 + 32;
        }else{
            $hasil = $value;
        }
    }
    return $hasil;
}

if(isset($_POST['submit'])){
    $asal = $_POST['asal'];
    $tujuan = $_POST['tujuan'];
    $value = $_POST['value'];

    $hasil = convert_temperature($value, $asal, $tujuan);

    echo "<h3>Hasil konversi:</h3>";
    echo "$value $asal = $hasil $tujuan";
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Suhu</title>
</head>
<body>
    <h3>Konversi Suhu</h3>

    <form method="post">
        Masukkan nilai suhu: <input type="number" name="value"><br><br>
        Konversi dari: 
        <select name="asal">
            <option value="celsius">Celsius</option>
            <option value="fahrenheit">Fahrenheit</option>
            <option value="kelvin">Kelvin</option>
        </select><br><br>
        Konversi ke: 
        <select name="tujuan">
            <option value="celsius">Celsius</option>
            <option value="fahrenheit">Fahrenheit</option>
            <option value="kelvin">Kelvin</option>
        </select><br><br>
        <input type="submit" name="submit" value="Konversi">
    </form>
    <button><a href="index.php">Kembali</a>  </button>
</body>
</html>