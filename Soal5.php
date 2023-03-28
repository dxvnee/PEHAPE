<?php
   $masukan = 80;

   if ($masukan >= 80 && $masukan <= 100){
        echo "A";
   } else if ($masukan <= 79 && $masukan >= 70){
        echo "B";
   } else if ($masukan <= 69 && $masukan >= 60){
        echo "C";
   } else if ($masukan <= 59 && $masukan >= 50){
        echo "D";
   } else if ($masukan <= 49 && $masukan >= 0){
        echo "E";
   }

?>