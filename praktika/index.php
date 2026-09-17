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
    $num = 10;
    $n = $num + 5;
    echo "n = $n, num = $num";
    ?>
    <br>
    <h2>Арифметические операции</h2>
    <p><?= '| + | - | * | / | ** | % |' ?> </p>
    <br>
    <h2>Использование скобок</h2>
    <p>Приоритет операций</p> 
    <?= 5 + 5 * 5 ?>
    <br>
    <?= (5 + 5) * 5 ?>
    <br>
    <?= 5 + 5 * 5 - 5 ?>
    <h2>Пример</h2>
    <p>( a + b) / c при a = 10 | b = 20 | c = 15</p>
    <?php 
       $a = 10;
       $b = 20;
       $c = 15;
       $res = ($a + $b) / $c;  
       echo "Результат: $res"
     ?>
</body>
</html>