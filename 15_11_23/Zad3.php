<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad3</title>
</head>
<body>
    <?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "ok";

    $conn = mysqli_connect($host, $username, $password, $database);

    if (!$conn) {
        die("błąd połaczenia" . mysqli_connect_error());
    }

    mysqli_connect($conn);
    
    ?>
</body>
</html>