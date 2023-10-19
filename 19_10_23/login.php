<?php

$conn = new mysqli("localhost", "nazwa_uzytkownika", "haslo", "logoowanie");

if ($conn->connect_error) {
    die("Błąd połączenia z bazą danych: " . $conn->connect_error);
}


$nazwaUzytkownika = $_POST['nazwaUzytkownika'];
$haslo = $_POST['haslo'];


$nazwaUzytkownika = $conn->real_escape_string($nazwaUzytkownika);


$query = "SELECT * FROM Uzytkownicy WHERE NazwaUzytkownika='$nazwaUzytkownika' AND Haslo='$haslo'";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    echo "Zalogowano pomyślnie.";
} else {
    echo "Błąd logowania. Spróbuj ponownie.";
}


$conn->close();
?>