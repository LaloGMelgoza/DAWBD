  <?php
  require_once("promedio.php");
  require_once("mediana.php");
  
  function lista($arreglo) {
      $n = count ($arreglo);
      $i = 0;
      $mensaje = "El arreglo contiene los siguientes numeros: ";
      $promedio = promedio($arreglo);
      $mediana = mediana($arreglo);
      $orden;
      
      for($i=0; $i<($n) ;$i++){
        $mensaje .= $arreglo[$i];
        $mensaje .= " ";
      }
      $mensaje .= "<ul>";
    
        $mensaje .= "<li>El promedio de sus elementos es de: $promedio</li>";
        $mensaje .= "<li>La mediana de sus elementos es: $mediana</li>"."<br>";
        sort($arreglo);
        for($i=0; $i<($n) ;$i++){
        $orden.= $arreglo[$i];
        $orden .= " ";
      }
        $mensaje .= "<li>El arreglo ordenado de menor a mayor es: $orden </li>";
        rsort($arreglo);
        $orden ="";
        for($i=0; $i<($n) ;$i++){
        $orden.= $arreglo[$i];
        $orden .= " ";
      }
        $mensaje .= "<li>El arreglo ordenado de mayor a menor es: $orden </li>";
      $lista .= "</ul>";
      return $mensaje;
    }
  ?>