<?php
function mediana($arreglo) {
  asort($arreglo);
  $largo = count($arreglo);
  $apuntador = 0;
  $mediana = 0;
  if($largo % 2 == 0){
   $apuntador = ($largo/2)-1;
   $mediana = $arreglo[$apuntador]+$arreglo[$apuntador+1];
   $mediana = $mediana/2;
   return $mediana;
  }
  else{
    $apuntador = ($largo/2)+.5-1;
    $mediana = $arreglo[$apuntador];
    return $mediana;
  }
    
}
?>