<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad4</title>
</head>
<body>
    <table>
        <tr>
            <td>IMIE</td>
            <td>NAZWISKO</td>
            <td>Data urodzenia</td>
</tr>

<?php
     $host ="localhost";
     $user = "root";
     $password = "";
     $db ="imiona";
     
     $con = mysqli_connect($host,$user,$password,$db);
     $query = 'SELECT * FROM dane';

     $result = mysqli_query($comm,$query);

     while($row = mysqli_fetch_assoc($resoult)){
        echo "<tr>";
        echo "<td>". $row['imie'] . "</td>";
        echo "<td>". $row['nazwisko'] . "</td>";
        echo "<td>". $row['Data Urodzenia'] . "</td>";
        echo "</tr>";
     }
     mysqli_close($conn);

     ?>
</body>
</html>