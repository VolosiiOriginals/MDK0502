<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <h2>Задание №1</h2>
    <?php
    $strSkob = "Ja napisal (etot) tekst ispolzuja skobki";
    echo $strSkob;
    ?>
    <h2>Задание №2</h2>
    <?php
    $text = 'Privet v konce tocka. .....';
    $count = str_word_count($text);
    echo $count; 
    ?>
    <h2>Задание №3</h2>
    <?php
    $text2 = 'jaj aja colovek hleb voda';
    ?>
    <h2>Задание№4</h2>
    <?php
    $text4 = 'qwerty nnnn';
    $uniq = count_chars($text4, 3);
    $count4 = strlen($uniq);
    echo "кол-во символов $count4";

    
    ?>
    <h2>Задание№5</h2>
    <?php
    $text5 = 'rok tok';
    $rcount = substr_count($text5, 'r');
    $tcount = substr_count($text5, 't');
    $kcount = substr_count($text5, 'k');
    echo "кол-во R: $rcount <br> кол-во T: $tcount <br> кол-во К: $kcount "
    ?>
    <h2>Задание№6</h2>
    <?php
    $text6 = "odinadcatilkasnik krutoj paren";

    ?>
    <h2>Задание№7</h2>
    <?php

    ?>
    <h2>Задание№8</h2>
    <?php

    ?>
    <h2>Задание№9</h2>
    <?php

    ?>




    </center>
</body>
</html>