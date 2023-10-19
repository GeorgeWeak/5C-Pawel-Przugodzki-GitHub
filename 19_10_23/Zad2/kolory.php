<!DOCTYPE html>
<html>
<head>
    <title>Kolory</title>
</head>
<body>
    <?php
    
    function sprawdzKolor($kodKoloru) {
        return preg_match('/^#[0-9A-Fa-f]{6}$/', $kodKoloru);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $kolorTla = $_POST["kolorTla"];
        $kolorTekstu = $_POST["kolorTekstu"];

        
        if (sprawdzKolor($kolorTla) && sprawdzKolor($kolorTekstu)) {
            echo "<p style='height: 50%; width: 50%; margin: 50px 0; border: 2px red dashed; background-color: $kolorTla; color: $kolorTekstu;'>Paweł Przygodzki</p>";
        } else {
            echo "Podane kolory są niepoprawne. Wprowadź poprawne kody kolorów w formie #RRGGBB.";
        }
    }
    ?>
</body>
</html>