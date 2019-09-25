<?php
  function promedio($arreglo) {
    $acumulado = 0;
    $largo = count($arreglo);
  
   for($i=0; $i < $largo; $i++){
     $acumulado = $acumulado + $arreglo[$i];
   }
   
   $acumulado = $acumulado/$largo;
   return $acumulado;
}
  ?>