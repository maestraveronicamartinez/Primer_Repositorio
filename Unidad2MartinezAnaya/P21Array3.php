<?php
/* CBTIS 89 
   P21Array3.php
   Programa que almacena diversos datos en un arreglo y posteriormente los imprime por medio de un ciclo for
   Verónica Martínez Anaya
   3ºA Programación Matutino */
  $arraynombres = array('Karina','Marco','Rocío','Roberto','Fer',"Juan");

   //Se obtiene el número de elementos 
   $longitud = count($arraynombres);

   //Recorre todos los elementos 
   for($i=0; $i<$longitud; $i++)
   { //Se obtiene el valor de cada elemento 
      echo $arraynombres[$i]; 
      echo "<br>"; 
   }
?>
