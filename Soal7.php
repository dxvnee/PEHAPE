<?php
  $masukan = 8;
  echo "Masukan : $masukan\n";
  while ($masukan % 2 == 0){
      $masukan = $masukan/2;
  }
  if ($masukan == 1){
    echo "Keluaran : TRUE";
  } else {
    echo "Keluaran : FALSE";
  }


?>