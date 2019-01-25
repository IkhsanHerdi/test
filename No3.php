<?php

if(isset($_POST['send'])){
    $bilangan = $_POST['angka'];
    for ($i=1; $i <= $bilangan; $i++) { 
        for ($k=1; $k <= $i ; $k++) { 
            echo $k;
        }
        echo "<br>";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Soal 3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>Angka</td>
                <td><input type="text" name="angka" value=""></td>
            </tr>
            <tr>
                <td><input type="submit" name="send" value="send"></td>
            </tr>
        </table>
    </form>
</body>
</html>