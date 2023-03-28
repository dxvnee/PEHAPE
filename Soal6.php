<?php
   $angka = 8;
   $counter = 0;

   for ($i = 1; $i <= $angka; $i++){
     if ($angka % $i == 0){
          $counter++;
     }
   }

   if ($counter == 2){
     print $angka." is prime\n";
   } else {
     print $angka." is not prime\n";
   }



?>