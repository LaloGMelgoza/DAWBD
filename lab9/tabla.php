<?php
  function tabla($numero){
    $tabla = "<table><tbody>";
    $tabla.= "<tr>";
    
    for($i=1;$i<=$numero;$i++){
      $tabla.="<td>$i </td>";
    }
    $tabla.="</tr>";
    $tabla.= "<tr>";
    for($i=1;$i<=$numero;$i++){
      $num = $i*$i;
      $tabla.="<td>$num</td>";
    }
    $tabla.="</tr>";
    $tabla.= "<tr>";
    for($i=1;$i<=$numero;$i++){
      $num = $i*$i*$i;
      $tabla.="<td>$num</td>";
    }
    $tabla.="</tr>";
    $tabla.= "</table></tbody>";
    return $tabla;
  }
?>