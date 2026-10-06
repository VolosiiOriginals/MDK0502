<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вложенные циклы</title>
</head>
<body>
   <h1>Вложенные циклы</h1>
   <h2>Задача №1</h2> 
   <?php
   for ($i = 1; $i <= 9; $i++) {
     for($j = 1; $j <= 9; $j++) {
        echo "$i * $j = " .($i * $j) . "<br>";
     }
   }


   ?>
   <h2>Задача №2</h2>
   <?php
   for ($a = 0; $a < 4; $a++) {
    for($b = 0; $b < 3; $b++) {
     echo'X';
 }
        echo'<br>';
}

 ?>  
    <h2>Задача №3</h2> 
   <?php

   for ($i = 1; $i <= 9; $i++) {
     for($j = 1; $j <= 9; $j++) {
           echo '<table border="1">';
           echo '<th>';
           echo 'Произведение';
           echo '</th>';
           echo '<th>';
           echo 'Результат';
           echo '</th>';
           echo '<tr>';
           echo '<td>';
           echo "$i * $j";
           echo '</td>';
           echo '<td>';
           echo ($i * $j);
           echo '</td>'; 
           echo '</table>';     
     }
   }
?>
   <h2>Задача №4</h2>
<?php 
 echo '<table border="1">';
 for($i = 10; $i <= 99; $i += 10)
?>
 
  <h2>Задача №5</h2>
<?php 





?>


  <h2>Задача №6</h2>
<?php 





?>



  <h2>Задача №7</h2>
<?php 





?>


</body>
</html>