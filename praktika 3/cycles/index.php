<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Циклы</title>
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
$days = 3;
$currentDistance = 10.0;
$total = $currentDistance;
for ($i = 2; $i <= $days; $i++) {
    $currentDistance *=1.1;
    $total +=$currentDistance;
}
echo "Путь за $days дней -  $total"
?> 
<h2>Задача №5</h2>
<?php
for ($y = 0; $y <= 16; $y++) {
    $x = 32 - 2 * $y;
    echo "($y, $x)";
}
?>
</body>
</html>