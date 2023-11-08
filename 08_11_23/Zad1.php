<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Porownanie zmiennych</title>
</head>
<body>
    <?php
    $zmienna1 = 10;
    $zmienna2 = 5;

    $wiekszawaWartosc = ($zmienna1 > $zmienna2) ?$zmienna1 : $zmienna2;
    echo "<p>Wieksza wartosc to $wiekszaWartosc</p>"
    ?>
    
</body>
</html>