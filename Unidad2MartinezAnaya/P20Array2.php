<?php
/* CBTIS 89 
   P20Array2.php
   Programa que almacena diversos datos en un arreglo y posteriormente los imprime por medio de un ciclo for
   Verónica Martínez Anaya
   3ºA Programación Matutino */
   $nombre = "Elena"; 
   $array = array(1, 2, 3, "casa", $nombre);

   //Se obtiene el número de elementos 
   $longitud = count($array);

   //Recorre todos los elementos 
   for($i=0; $i<$longitud; $i++)
   { //Se obtiene el valor de cada elemento 
      echo $array[$i]; 
      echo "<br>"; 
   }
?>
