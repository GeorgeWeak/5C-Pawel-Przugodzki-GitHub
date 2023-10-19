<!DOCTYPE html>
<html>
<head>
    <title>Wyznacz najmniejszą liczbę</title>
</head>
<body>
    <form method="POST">
        <label for="liczba1">Podaj pierwszą liczbę:</label>
        <input type="text" name="liczba1" id="liczba1">
        <label for="liczba2">Podaj drugą liczbę:</label>
        <input type="text" name="liczba2" id="liczba2">
        <label for="liczba3">Podaj trzecią liczbę:</label>
        <input type="text" name="liczba3" id="liczba3">
        <input type="submit" value="Wyznacz najmniejszą">
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $liczba1 = $_POST["liczba1"];
        $liczba2 = $_POST["liczba2"];
        $liczba3 = $_POST["liczba3"];
        
        if (!is_numeric($liczba1) || !is_numeric($liczba2) || !is_numeric($liczba3)) {
            echo "Wprowadź trzy liczby całkowite.";
        } else {
            $liczba1 = intval($liczba1);
            $liczba2 = intval($liczba2);
            $liczba3 = intval($liczba3);
            
            $najmniejsza = min($liczba1, $liczba2, $liczba3);
            
            echo "Najmniejsza liczba to: $najmniejsza";
        }
    }
    ?>
</body>
</html>
