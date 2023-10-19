<!DOCTYPE html>
<html>
<head>
    <title>Sprawdź przedział</title>
</head>
<body>
    <form method="POST">
        <label for="liczba">Podaj liczbę:</label>
        <input type="text" name="liczba" id="liczba">
        <input type="submit" value="Sprawdź">
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $liczba = $_POST["liczba"];
        
        if (!is_numeric($liczba)) {
            echo "To nie jest liczba całkowita.";
        } else {
            $liczba = intval($liczba);
            
            if ($liczba >= 100 && $liczba < 150) {
                echo "Liczba $liczba mieści się w przedziale od 100 (włącznie) do 150 (wyłącznie).";
            } else {
                echo "Liczba $liczba nie mieści się w przedziale od 100 (włącznie) do 150 (wyłącznie).";
            }
        }
    }
    ?>
</body>
</html>