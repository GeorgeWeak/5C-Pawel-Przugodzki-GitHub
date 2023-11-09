<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad1</title>
</head>
<body>
    <?php
    $liczba = 100;
    $suma = 0;

    for($a = 0; $a < 100; $a++){
        $suma += $liczba;
        $liczba += 2;
    }
    echo "Suma 100 kolejnych liczb parzystych wynosi:$suma";
    ?>
    
</body>
</html>