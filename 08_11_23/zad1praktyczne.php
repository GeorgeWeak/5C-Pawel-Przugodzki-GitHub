<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator walut</title>
</head>
<body>
    <form method="post">
        <label>podaj kwote pln</label>
        <input type="number" name="PLN">
</br>
<select name="waluta">
    <option value="euro">euro</option>
    <option value="dolar">dolar</option>
    <option value="frank">frank</option>
</select>
</br>
    <?php
    if (!empty($_POST)){
        @$pln = $_POST["PLN"];
        @$waluta = $_POST["waluta"];
        switch($waluta){
        case "euro":
        echo "$pln PLN to " . $pln *4.32 . "€";
        break;
        case "dolar":
            echo "$pln PLN to " . $pln *3.21 . "$";
            break;
            case "frank":
                echo "$pln PLN to " . $pln * 3.98 . "CHF";

        }
    }
    ?>
    
</body>
</html>