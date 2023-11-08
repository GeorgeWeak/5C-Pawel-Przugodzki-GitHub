<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function obliczPierwiastek($liczba) {
        if (liczba >=0) {
            $pierwiastek = sqrt($liczba);
            echo "<p>Pierwisatek z $liczba to: $pierwiastek</p>";
        } else {
            echo "<p>Nie można obliczyc pierwiasta z liczby ujemnej</p>"
        
        }
    }
    ?>
    
</body>
</html>