<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>switch</title>
</head>
<body>
<form>
<h2>Задача №1</h2>
<p>ВВЕДИТЕ ЧИСЛО</p>
<input name="number">
<input type="submit">
</form>
<?php 
if(isset($_GET['number'])) {
    $n = $_GET['number'];


switch($n)
    {
        case 0:
          echo "$n = zero";  
        break;

        case 1:
            echo "$n = one";
        break;

        case 2:
            echo "$n = two";
        break;

        case 3:
            echo "$n = three";
        break;

        case 4:
            echo "$n = four";
        break;

        case 5:
            echo "$n =five";
        break;

        case 6:
            echo "$n = six";
        break;

        case 7:
            echo "$n = seven";
        break;

        case 8:
            echo "$n = eight";
        break;

        case 9:
            echo "$n = nine";
        break;

        default:
            echo "неверное число";
    }
}
?>

<h2>Задача №2</h2>
<form>
<p>ВВЕДИТЕ ЧИСЛО</p>
<input name="date">
<input type="submit">
</form>
<?php
if(isset($_GET['date'])) {
    $d = $_GET['date'];
switch($d)
    {
        case 1:
            echo "1 января - новый год, 7 января -  православное рождество.";
        break;

        case 2:
            echo "23 февраля - день защитника отечества.";
        break;

        case 3:
            echo "8 марта - международный женский день.";
        break;

        case 4:
            echo "5 апреля - вход господень в иерусалим (вербное воскресенье), 12 апреля - день космонавтики, 19 апреля - пасха (Светлое Христово Воскресение)";
        break;

        case 5:
            echo "1 мая - праздник весны и труда, 9 мая -день победы.";
        break;

        case 6:
            echo "12 июня — день россии.";
        break;

        case 7:
            echo "7 июля - рождество иоанна предтечи (иван купала), 12 июля - день апостолов Петра и Павла";
        break;

        case 8:
            echo "19 августа - Преображение Господне (Яблочный Спас)";
        break;

        case 9:
            echo "1 сентября - День знаний,21 сентября - рождество пресвятой богородицы.";
        break;

        case 10:
            echo "14 октября - Покров Пресвятой Богородицы.";
        break;

        case 11:
            echo "4 ноября - День народного единства.";
        break;

        case 12:
            echo"25 декабря - Рождество.";
        break;

    default:
        echo "неверное число";
    }
}
?>
<h2>Задача №3</h2>
<form>
<p>ВВЕДИТЕ ЧИСЛО</p>
<input name="kor">
<input type="submit">
</form>
<?php
$l = 0;
$s = 0;
$r = 0;
if(isset($_GET['kor'])) {
    $s = $_GET['kor'];
    $l = $s% 10; 
   

switch($l) 
{
        case 0:
            $r = 0; 
        break;

        case 1:
            $r = 1; 
        break;

        case 2:
            $r = 4; 
        break;

        case 3:
             $r = 9; 
        break;

        case 4:
             $r = 6; 
        break;

        case 5:
            $r = 5; 
        break;

        case 6:
            $r = 6; 
        break;

        case 7:
            $r = 9; 
        break;

        case 8:
            $r = 4;
        break;

        case 9:
             $r = 1; 
        break;

 default:
 $r = "Ошибка ввода";
 break;
    }
}
echo "Число:<b> $s</b><br>";
echo "Последняя цифра числа:<b>". $l.  "</b><br>";
echo "Последняя цифра его квадрата:<b>". $r; "</b>"
?> 
</b>
<h2>Задача №4</h2>
<form>
<p>ВВЕДИТЕ ЧИСЛО</p>
<input name="age">
<input type="submit">
</form>
<?php
if(isset($_GET['age'])) {
    $k = $_GET['age'];
switch ($k) 
{
    case ($k % 100 >= 11 && $k % 100 <= 14):
        echo "Мне $k лет";
        break;
    case ($k % 10 == 1):
        echo "Мне $k год";
        break;
    case ($k % 10 == 2 || $k % 10 == 3 || $k % 10 == 4):
        echo "Мне $k года";
        break;
    default:
        echo "Мне $k лет";
        break;
}
}
?>
<h2>Задача №5</h2>
<form>



</form>
<?php

$u = 3;      
$m = 250;  

    switch ($u) {
        case 1: 
            return $m * 1;
            break;
        case 2: 
            return $m * 0.000001;
            break;
        case 3: 
            return $m * 0.001;
            break;
        case 4: 
            return $m * 1000;
            break;
        case 5: 
            return $m * 100;
            break;
        default:
            echo "н"; 
    }









</body>
</html>