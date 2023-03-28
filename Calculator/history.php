<?php
    session_start();

    if(isset($_GET['del']))
    {
        unset($_SESSION['history'][$_GET['del']]);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Perhitungan</title>
</head>
<style>
        /* Body Styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }

        /* Header Styles */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
        }

        h1 {
            margin: 0;
        }

        a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        /* Table Styles */
        table {
            margin: 20px auto;
            border-collapse: collapse;
            width: 80%;
            background-color: white;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
        }

        th, td {
            text-align: center;
            padding: 10px;
            border: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        /* Delete Link Styles */
        a.delete-link {
            color: red;
            font-weight: bold;
            text-decoration: none;
        }

        a.delete-link:hover {
            text-decoration: underline;
        }

        .deleteHistory{
            color: grey;
        }
    </style>
<body>
    <div>
        <div>
            <header>
                <h1>Riwayat Perhitungan</h1>
                <a href="calculator.php">&laquo; Kembali ke Kalkulator</a>
            </header>

            <table>
                <?php foreach($_SESSION['history'] as $idx => $data): ?>
                    <tr>
                        <?php if($data[1] == null)
                        {
                            $data[1] = 0;
                        }
                        ?>
                        <td><?= $data[0] ?></td>
                        <td><?= $data[2] ?></td>
                        <td><?= $data[1] ?></td>
                        <td>=</td>
                        <td><?= $data[3] ?></td>
                        <td>
                            <a href="history.php?del=<?=$idx?>" class="deleteHistory"> Clear History </a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </table>
        </div>
    </div>
</body>
</html>