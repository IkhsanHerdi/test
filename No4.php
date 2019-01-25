<?php

if(isset($_GET['send'])){
    $bilangan = $_GET['angka'];
    for ($i=1; $i <= $bilangan; $i++) {
        echo "*";
        if ($i==1 || $i==$bilangan) {
            for ($p=1; $p <= ($bilangan-2) ; $p++) { 
                echo " *";
            }
        } else {
            for ($c=1; $c <= ($bilangan-2) ; $c++) { 
                echo "&nbsp&nbsp&nbsp";
            }
        }
        echo " *<br>";
        
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Soal 4</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form action="" method="get">
        <table>
            <tr>
                <td>Besaran</td>
                <td><input type="text" name="angka" value=""></td>
            </tr>
            <tr>
                <td><input type="submit" name="send" value="send"></td>
            </tr>
        </table>
    </form>
</body>
</html>