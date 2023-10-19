<!DOCTYPE html>
<html>
<head>
    <title>Formularz kolorów</title>
</head>
<body>
    <h2>Wybierz kolory</h2>
    <form action="kolory.php" method="POST">
        <label for="kolorTla">Kolor tła:</label>
        <input type="text" id="kolorTla" name="kolorTla" placeholder="Kod koloru tła (np. #FF5733)" required><br><br>

        <label for="kolorTekstu">Kolor tekstu:</label>
        <input type="text" id="kolorTekstu" name="kolorTekstu" placeholder="Kod koloru tekstu (np. #000000)" required><br><br>

        <input type="submit" value="Zatwierdź">
    </form>
</body>
</html>