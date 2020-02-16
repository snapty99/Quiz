<?php
$count = 1;
$m = 5;
 for ($i = 1 ; $i <= 5; $i++){
     $m = 5 - $i;
     for($j = 1 ; $j <= $m ; $j++){
         echo "&nbsp&nbsp&nbsp";
     }
     for($k = 1; $k <= $count; $k++){
         echo "O";
     }
     $count = $count + 2 ;
     echo "<br>";
 }
?>
