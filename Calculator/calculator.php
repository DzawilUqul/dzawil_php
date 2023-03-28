<?php
    include "function.php";

    $hasil = null;
    $operator = '+';
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        $operator = $_POST['operator'];
        $hasil = hitung($angka1,$angka2,$operator);
        add_session_hist($angka1,$angka2,$operator,$hasil);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
    <style>
        .lihatRiwayat{
            margin-top: 10px;
        }

        #angka1{
            width: 88%;
        }

        #angka2{
            width: 88%;
        }

        .title{
            text-align: center;
        }

        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
        }
        
        h2 {
            color: #333;
        }
        
        table {
            margin: 20px auto;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.2);
            padding: 20px;
        }
        
        th {
            text-align: center;
        }
        
        input[type="text"], select {
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            width: 100%;
        }
        
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            margin-top: 10px;
        }
        
        input[type="submit"]:hover {
            background-color: #3e8e41;
        }
        
        #hasil {
            margin-top: 20px;
            font-size: 24px;
            font-weight: bold;
            text-align: center;
        }
        
        a {
            color: #4CAF50;
            text-decoration: none;
        }
        
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div>
        <div>
            <div>
                <h2 class="title">Kalkulator Keren Sekali
                </h2>
                <form action="" method="post">
                    <table>
                        <tr>
                            <th>Angka 1</th>
                            <th>Opr</th>
                            <th>Angka 2</th>
                        </tr>

                        <tr>
                            <td>
                                <input type="text" name="angka1" id="angka1">
                            </td>

                            <td>
                                <select name="operator">
                                    <option value="+" <?= ($operator == '+'? 'selected' : '') ?>> + </option>
                                    <option value="-"<?= ($operator == '-'? 'selected' : '') ?>> - </option>
                                    <option value="X"<?= ($operator == 'X'? 'selected' : '') ?>> X </option>
                                    <option value="/"<?= ($operator == '/'? 'selected' : '') ?>> / </option>
                                </select>
                            </td>

                            <td>
                                <input type="text" name="angka2" id="angka2">
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <input type="submit" value="HITUNG">
                                <a href="history.php"> <h3 class="lihatRiwayat">Lihat riwayat &raquo;</h3>   </a>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <div id="hasil"><?= $hasil ?></div>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</body>
</html>