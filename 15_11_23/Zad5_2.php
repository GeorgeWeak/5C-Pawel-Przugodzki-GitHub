<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad5</title>
</head>
<body>
    <?php
    $host ="localhost";
    $user ="root";
    $pass ="";
    $db ="15_11_23"
    $con = mysqli_connect($host,$user,$pass,$db);
    $nazwisko = $_POST["nazwisko"];
    $imie = $_POST["imie"];
    $ur = $_POST["ur"];
    $pol = "INSTER INTO 'ok'(`nazwisko` , `imie` , `dzien urodzenia`) VALUES ('$nazwisko','$imie','$ur')";
    $wynik = mysqli_query($con,$pol);
    ?>
</body>
</html>