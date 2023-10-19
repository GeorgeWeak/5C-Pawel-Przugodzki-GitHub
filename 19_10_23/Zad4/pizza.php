<!DOCTYPE html>
<html>
<head>
    <title>Koszt dowozu pizzy</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $odleglosc = intval($_POST["odleglosc"]);
        $ciepla = isset($_POST["ciepla"]) ? true : false;

        if ($odleglosc <= 0) {
            echo "Podana odległość jest niepoprawna. Wprowadź dodatnią liczbę kilometrów.";
        } else {
            
            $koszt = $odleglosc * 50; 

            if ($ciepla) {
                $koszt += $koszt * 0.15; 
            }

           
            echo "<p>Odległość: $odleglosc km</p>";
            echo "<p>Pizza dostarczana ciepła: " . ($ciepla ? "Tak" : "Nie") . "</p>";
            echo "<p>Koszt dowozu pizzy: $koszt zł</p>";
        }
    }
    ?>
</body>
</html>