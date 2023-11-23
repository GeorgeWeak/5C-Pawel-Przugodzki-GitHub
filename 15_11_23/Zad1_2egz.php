<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad1_2</title>
</head>
<body>
    <?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "egz";
    $con = mysqli_connect($host, $user, $pass, $db);
    $ur = $_POST["ur"];
    $plec = $_POST["plec"];
    $uwagi = $_POST["uwagi"];
    $ur = $_POST["ur"];
    if(isset($_POST["zgoda"])){
        $zgoda = "tak";
    }else{
        $zgoda = "nie";
    }
    $pol = "INSERT INTO `ankieta`(`rok_urodzenia`, `plec`, `uwagi`, `zgoda`) VALUES ('$ur', '$plec', '$uwagi', '$ur')";
    $wynik mysqli_querry($con, $pol);
    ?>
</body>
</html>