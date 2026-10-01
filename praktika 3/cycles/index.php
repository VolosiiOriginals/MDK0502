<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Циклы</h1>
<h2>Задача №1</h2>
<?php
$startNumber = 2; 
$multiplier = 2; 
$quantity = 15; 
$currentstartNumber = $startNumber;
for ($i = 0; $i < $quantity; $i++) {
 echo "$currentstartNumber. ";
 $currentstartNumber *= $multiplier;
}
?>
<h2>Задача №2</h2>
<?php
$lastNumber = 4; 
$sum = 0; 
for ($i = 1; $i <= $lastNumber; $i++) {
    $sum += $i; 
}
echo $sum;
?>
<h2>Задача №3</h2>
<?php
$lastNumber = 10; 
$multiplicationResult = 1;
for ($i = 1; $i <= $lastNumber; $i++) {
    if ($i % 2 == 0) {
        $multiplicationResult *= $i;
    }
}
echo $multiplicationResult;
?>
<h2>Задача №4</h2>
<?php


?> 
<h2>Задача №5</h2>
<?php


?>
</body>
</html>