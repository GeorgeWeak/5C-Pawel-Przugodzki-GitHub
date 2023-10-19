<!DOCTYPE html>
<html>
<head>
    <title>Sprawdź czy są takie same</title>
</head>
<body>
    <form method="POST">
        <label for="liczba1">Podaj pierwszą liczbę:</label>
        <input type="text" name="liczba1" id="liczba1">
        <label for="liczba2">Podaj drugą liczbę:</label>
        <input type="text" name="liczba2" id="liczba2">
        <label for="liczba3">Podaj trzecią liczbę:</label>
        <input type="text" name="liczba3" id="liczba3">
        <input type="submit" value="Sprawdź">
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
            
            if ($liczba1 == $liczba2 || $liczba1 == $liczba3 || $liczba2 == $liczba3) {
                echo "Przynajmniej dwie z podanych liczb są takie same.";
            } else {
                echo "Wszystkie trzy podane liczby są różne od siebie.";
            }
        }
    }
    ?>
</body>
</html>