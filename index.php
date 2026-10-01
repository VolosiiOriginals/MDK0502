<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

  <?php
        echo '<h2>Задача №1</h2>';
        $a = 5;
        $b = 10;
        echo "a = $a, b = $b <br><br> ";
        if ($a < $b) {
            echo $a + $b;
        } else {
            echo $a * $b;
        }
        echo "<br>";

        echo '<h2>Задача №2</h2>';
        $a = 50;
        $b = 60;
        $c = 180 - $a - $b;
        echo "a =$a, b =$b, c =$c, <br><br>";

        if ($a > 0 && $b > 0 && $c > 0) {
            echo "Треугольник существует. ";
            if ($a == 90 || $b == 90 || $c == 90) {
                echo "Прямоугольный.";
            } else {
                echo "Не прямоугольный.";
            }
        } else {
            echo "Треугольник не существует.";
        }
        echo "<br>";

        echo '<h2>Задача №3</h2>';
        $age = 10;

        echo "возраст =$age <br><br>";
        if ($age <= 1) {
            $ageGroup = "Котята";
        } elseif ($age <= 3) {
            $ageGroup = "Молодые коты";
        } elseif ($age <= 7) {
            $ageGroup = "Коты среднего возроста";
        } else {
            $ageGroup = "Старые коты";
        }
        echo $ageGroup;
        echo "<br>";

        echo '<h2>Задача №4</h2>';
        $a = 3;
        $b = 4;
        $c = 5;
        echo "a =$a, b =$b, c =$c, <br><br>";

        if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
            echo "Треугольник существует.";
        } else {
            echo "Треугольник не существует.";
        }
        echo "<br>";

        echo '<h2>Задача №5</h2>';
        $n = 2024;

        echo "год = $n <br><br>";

        if ($n % 400 == 0) {
            echo "Високосный";
        } elseif ($n % 100 == 0) {
            echo "Не високосный";
        } elseif ($n % 4 == 0) {
            echo "Високосный";
        } else {
            echo "Не високосный";
        }
        echo "<br>";

        echo '<h2>Задача №6</h2>';
        $a = 20;
        $b = 2000;
        $sum = $a + $b;

        echo "a = $a, b = $b <br><br>";

        if ($sum > 32767) {
            echo "Переполнение!";
        } else {
            echo $sum;
        }
        echo "<br>";
          
        echo "<h2>Задача №7</h2>";

        echo "<br>";
        
        echo "<h2>Задача №8</h2>";

        echo "<br>";

        echo '<h2>Задача №9</h2>';
        $numero = 24;
        echo "$numero <br><br>";
        if ($numero% 4 == 0 && $numero% 6 == 0) {
            echo "число $numero делится на 4 и на 6";
        }
        else {
            echo "число $numero не делится на 4 и на 6";
        }

        echo "<br>";

        echo "<h2>Задача №10</h2>";
        $x = 3;
        $y = 4;
        $r = 5;

        echo "x =$x, y =$y, r =$r, <br><br>";
        if ($x**2 + $y**2 <= $r**2) {
            echo "внутри";
        }
        else {
            echo "снаружи";
        }
    
?>
</body>
</html>