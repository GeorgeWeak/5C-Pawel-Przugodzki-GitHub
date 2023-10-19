<!DOCTYPE html>
<html>
<head>
    <title>Koszty przejazdu</title>
</head>
<body>
    <h2>Kalkulator kosztu przejazdu</h2>
    <form action="koszt.php" method="POST">
        <label for="kosztBenzyny">Koszt benzyny (za litr):</label>
        <input type="text" id="kosztBenzyny" name="kosztBenzyny" placeholder="Koszt benzyny" required><br><br>

        <label for="iloscKilometrow">Ilość kilometrów:</label>
        <input type="number" id="iloscKilometrow" name="iloscKilometrow" placeholder="Ilość kilometrów" required><br><br>

        <label for="srednieSpalanie">Średnie spalanie (litry na 100 km):</label>
        <input type="text" id="srednieSpalanie" name="srednieSpalanie" placeholder="Średnie spalanie" required><br><br>

        <input type="submit" value="Oblicz koszt">
    </form>
</body>
</html>
