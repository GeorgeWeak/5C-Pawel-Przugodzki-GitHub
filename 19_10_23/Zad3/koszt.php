<!DOCTYPE html>
<html>
<head>
    <title>Koszt przejazdu</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       
        $kosztBenzyny = floatval($_POST["kosztBenzyny"]);
        $iloscKilometrow = intval($_POST["iloscKilometrow"]);
        $srednieSpalanie = floatval($_POST["srednieSpalanie"]);

        if ($kosztBenzyny <= 0 || $iloscKilometrow <= 0 || $srednieSpalanie <= 0) {
            echo "Podane dane są niepoprawne. Wprowadź dodatnie liczby.";
        } else {
        
            $kosztPrzejazdu = ($iloscKilometrow / 100) * $srednieSpalanie * $kosztBenzyny;

            
            echo "<p>Podane dane:</p>";
            echo "<ul>";
            echo "<li>Koszt benzyny (za litr): $kosztBenzyny</li>";
            echo "<li>Ilość kilometrów: $iloscKilometrow km</li>";
            echo "<li>Średnie spalanie (litry na 100 km): $srednieSpalanie</li>";
            echo "</ul>";
            echo "<p>Koszt przejazdu wynosi: $kosztPrzejazdu zł</p>";
        }
    }
    ?>
</body>
</html>
