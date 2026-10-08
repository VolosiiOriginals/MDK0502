<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Оператор выбора - switch</h1>
<?php 
$n = 10;
switch($n)
    {
        case 1:
            echo "n = 1";
        break;

        case 2:
            echo "n = 2";
        break;

        case 5:
            echo "n = 5";
        break;

        case 6:
            echo "n = 6";
        break;

        case 10:
            echo "n = 10";
        break;
    default:
        echo "ничего не совпало"; // если ничего не попадет
    }
?>
</body>
</html>