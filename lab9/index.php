<html>
  <head>
    <title>Lab 9</title>
  </head>
  <body>
    <?php
      include("preguntas.html");
      include("promedio.php");
      include("mediana.php");
      include("lista.php");
      include("tabla.php");
      include("moda.php");

      $arreglo = array(7,2,4,11,9,5,8);

      // Promedio
      echo "<br><br><b>Ejercicio 1.</b> <br><br>";
      echo "El promedio de los numeros en el arreglo [7, 2, 4, 11, 9, 5, 8] es: ";
      echo promedio($arreglo);

      // Mediana
      echo "<br><br><b>Ejercicio 2.</b> <br><br>";
      echo "La mediana de los numeros en el arreglo [7, 2, 4, 11, 9, 5, 8] es: ";
      echo mediana($arreglo);

      // Lista
      echo "<br><br><b>Ejercicio 3.</b> <br><br>";
      echo lista($arreglo);

      // Tabla
      echo "<br><b>Ejercicio 4.</b> <br><br>";
      echo "El valor de 'n' es de 10";
      echo tabla(10);

      // Maximo y Minimo
      echo "<br><b>Ejercicio 5.</b> <br><br>";
      echo "El valor minimo del arreglo [7, 2, 4, 11, 9, 5, 8] es de: ";
      echo min($arreglo);
      echo "<br>El valor maximo del arreglo [7, 2, 4, 11, 9, 5, 8] es de: ";
      echo max($arreglo);
    
    ?> 
  </body>
</html>
