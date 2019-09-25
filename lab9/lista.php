 <?php
 require_once("promedio.php");
 require_once("mediana.php");
 
 function lista($arreglo) {
    $largo = count ($arreglo);
    $i = 0;
    $mensaje = "El arreglo contiene los siguientes elementos: ";
    $promedio = promedio($arreglo);
    $mediana = mediana($arreglo);
    $ordenado;
    
    for($i=0; $i<($largo) ;$i++){
      $mensaje .= $arreglo[$i];
      $mensaje .= " ";
    }
    $mensaje .= "<ul>";
   
      $mensaje .= "<li>El promedio es: $promedio</li>";
      $mensaje .= "<li>La mediana es: $mediana</li>"."<br>";
      sort($arreglo);
      for($i=0; $i<($largo) ;$i++){
      $ordenado.= $arreglo[$i];
      $ordenado .= " ";
    }
      $mensaje .= "<li>El arreglo ordenado de menor a mayor es: $ordenado </li>";
      rsort($arreglo);
      $ordenado ="";
      for($i=0; $i<($largo) ;$i++){
      $ordenado.= $arreglo[$i];
      $ordenado .= " ";
    }
      $mensaje .= "<li>El arreglo ordenado de mayor a menor es: $ordenado </li>";
    $lista .= "</ul>";
    return $mensaje;
  }
  ?>