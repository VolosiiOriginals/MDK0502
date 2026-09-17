<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP brate moj</h1>
    <h2>Вывод на экран</h2>
    <p><b>Команда echo</b></p>
    <?php
       echo 'Это php'; //Комментарий однострочный - обычный echo
       ?>
    <br>
    <p><b>Сокращенный echo</b></p> 
    <?='Ещё раз php'?>
    <p><b>Вывод чисел</b></p>
    <?= 1940 ?>
    <br>
    <h2>Переменные</h2>
    <p>Объявление переменной</p>
    <?php
    $num = 55;
    $num = 33;
    echo $num;
    ?>
</body>
</html>