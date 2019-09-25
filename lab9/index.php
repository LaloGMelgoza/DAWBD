<html>
  <head>
    <title>Lab 9</title>
  </head>
  <body>
  
  <?php
include_once("cuerpo.html");
 require_once("promedio.php");
 require_once("mediana.php");
 require_once("lista.php");
 require_once("tabla.php");
 require_once("moda.php");
    
  ?>

  <?php
  echo "<h5> Primer Ejercicio:</h5>";
  $arreglo = array(6,2,3,5,4,1,7);
  echo "El promedio del arreglo [6,2,3,5,4,1,7] es: ";
  echo promedio($arreglo)."<br>";
  $arreglo = array(5,45,77,26,67);
  echo "El promedio del arreglo [5,45,77,26,67] es: ";
  echo promedio($arreglo)."<br><br>";
  echo "<h5> Segundo Ejercicio:</h5>";
  $arreglo = array(6,2,3,5,4,1,7);
  echo "La mediana del arreglo [6,2,3,5,4,1,7] es: ";
  echo mediana($arreglo)."<br>";
  $arreglo = array(5,45,77,26,67,56);
  echo "La mediana del arreglo [5,45,77,26,67,56] es: ";
  echo mediana($arreglo);
   echo "<h5> Tercer Ejercicio:</h5>";
  $arreglo = array(6,2,3,5,4,1,7);
  echo lista($arreglo)."<br>";
  echo "<h6>Siguiente arreglo</h6>";
  $arreglo = array(5,45,77,26,67,56);
  echo lista($arreglo);
  echo "<h5> Cuarto Ejercicio:</h5>";
  echo "N es igual a: 7 ";
  echo tabla(7)."<br>";
  echo "N es igual a: 4 ";
  echo tabla(4);
  echo "<h5> Quinto Ejercicio:</h5>";
  echo "El número dos en el arreglo se repite: ";
  $arreglo = array(6,2,3,5,2,1,2);
  echo moda($arreglo,2)."<br>";
  echo "El número cinco en el arreglo se repite:  ";
  $arreglo = array(5,45,5,26,5,5);
  echo moda($arreglo,5);
  ?>


</html>