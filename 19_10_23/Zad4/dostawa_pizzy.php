<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator kosztu dowozu pizzy</title>
</head>
<body>
    <h2>Kalkulator kosztu dowozu pizzy</h2>
    <form action="pizza.php" method="POST">
        <label for="odleglosc">Odległość (km):</label>
        <input type="number" id="odleglosc" name="odleglosc" placeholder="Odległość w km" required><br><br>

        <label for="ciepla">Czy pizza ma być dostarczona ciepła?</label>
        <input type="checkbox" id="ciepla" name="ciepla" value="1"><br><br>

        <input type="submit" value="Oblicz koszt dowozu">
    </form>
</body>
</html>