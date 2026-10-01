<h1>Циклы</h1>
<h2><i>Цикл с <u>предусловием</u></i></h2>
<?php
$a = 0;
while ($a < 10) {
    echo "$a <br>";
    $a++;
}
?>
<h2><i>Цикл с постусловием</i> - <u>do... while</u></h2>
<?php
do {
    echo "$a <br>";
    $a--;
} while ($a > 0)
?>
<h2><i>Цикл с параметром</i> - <u>for</u></h2> 
<?php
for($i = 0; $i < 10; $i++){
    echo "$i <br>";
}
?>