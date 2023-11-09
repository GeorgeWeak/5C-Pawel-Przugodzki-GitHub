<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad2</title>
</head>
<body>
    <?php
    $liczba = 10;
    $suma = 0;

    while($suma <= 1000){
        $suma += $liczba;
        $liczba++;
    }
    echo "Suma kolejnych liczb naturalnych nie przekracająca 1000 to: $suma";
?>    
</body>
</html>