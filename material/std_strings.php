<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Строки</title>
</head>
<body>
    <h1>Функции для строк</h1>
    <h2>Стандартные функции для строк</h2>
    <?php
        $str = "Hello world!";
        $strR = "Привет мир!";
        echo "Длина str: " . strlen($str) . "<br>";
        echo "Длина strR: " . mb_strlen($strR) . " символов<br>";
    ?>
        <h2>Функция strpos mb_strpose</h2>
    <?php
        $strTemp = strpos($str, 'world');
        echo "Позиция world: " . $strTemp . "<br>";

        $strTemp = mb_strpos($strR, 'мир');
        echo "Позиция слова 'мир' (mb_strpos): " . $strTemp . "<br>";
    ?>
       <h2>Изменение регистра - strtlower mb_strtlower</h2>
    <?php
     $strcyr = "Кирилл";
     $strLow = strtolower($str);
     echo "Строка в нижнем регистре - $strLow"; 


     $strLowmb = mb_strtolower($strcyr);
     echo "Кирилица в нижнем регистре - $strLowmb"
     
    ?>
    <h2>Поиск подстроки substr</h2>
    <?php
     $str = "world";
     echo $str . "<br>";
     echo substr($str, 0, -1) . "<br>";
     echo substr($str, 1, -1) . "<br>";
     echo substr($str, -2, -1) . "<br>";
    ?>

    <h2>strrev - Переворот строки</h2>
    <?php
    $str2 = "Ja ljublju tropi";
    $strRew = strrev($str2);
    echo "Переверот - $strRew"

    ?>
    <h2>Превращение строки в массив - explode</h2>
    <?php
    $str1 = 'Работа со строками';
    $arr = explode(' ', $str1);
    var_dump($arr);
    ?>
    <h2>Превращение массива в строку - implode</h2>
    <?php
    $str2 = implode (' ; $arr');
    echo $str2;
    ?>
</body>
</html>
