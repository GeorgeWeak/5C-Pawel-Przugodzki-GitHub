<?php
if(!isset($_COOKIE['visits'])) {
    $ile = 1;
} else {
    $ile = (int)$_COOKIE['visits'];
    if($ile > 1){
        $ile = 1;
    }
    $ile++;
}
setcookie("visits","$ile");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad5</title>
</head>
<body>
    <?php
    if($ile == 1){
        $str = "raz";
    } else {
        $str = "razy";
    }
    echo "odwiedziles moją strone $ile $str.";

    if($ile=10){
        echo '<br> Gratulacje odwiedziles te strone'
    }
    ?>
</body>
</html>