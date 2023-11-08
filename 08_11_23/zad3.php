<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function wartoscBezwzgledna($liczba) {
        $bezwzgledna = abs($liczba);
        echo "<p>wartosc bezwzgledna z $liczba to: $bezwzgledna</p>";
    }

    $liczbaDoPoliczenia = -8;
    wartoscBezwzgledna($liczbaDoPoliczenia);
    ?>
    
</body>
</html>l