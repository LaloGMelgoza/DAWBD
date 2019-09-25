<?php
function moda($arreglo,$numero) {
  $largo = count ($arreglo);
    $i = 0;
    $contador = 0;
    
    for($i=0; $i<($largo) ;$i++){
      if($arreglo[$i]==$numero){
        $contador++;
      }
    }
    return $contador;
}
?>