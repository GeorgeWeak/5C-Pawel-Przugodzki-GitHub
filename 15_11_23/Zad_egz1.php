<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad1</title>
</head>
<body>
    <form method = "POST" action="Zad1_2egz.php">
        <label for="ur">Podaj date urodzenia(YYYY-MM-DD)</label></br>
        <input type="text"name="ur"><br>
        <label for="plec">Podaj płeć</label><br>
        <select name="plec">
            <option value="Kobieta"></option>
            <option value="Mężczyzna"></option>
</select><br>
<label for="uwagi">Podaj swoje uwagi</label><br>
<input type="text"name="uwagi"><br>
<label for="zgoda">Czy zgadzasz się na udział w ankiecie</label><br>
<input type="checkbox"name="zgoda"><br>
<input type="submit" value="wyslij">
</form>
    
</body>
</html>