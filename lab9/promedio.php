<?php
  function promedio($arreglo) {
    $acumulador = 0;
    $n = count($arreglo);
  
   for($i=0; $i < $n; $i++){
     $acumulador += $arreglo[$i];
   }
   
   return $acumulador / $n;
  }
  ?>