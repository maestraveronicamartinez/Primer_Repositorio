<?php
/* CBTIS 89 
   P23Array5.php
   Programa que almacena datos en un arreglo y posteriormente los imprime.
   Verónica Martínez Anaya
   3ºA Programación Matutino */

   $frutas = array('manzana'=>25,'mango'=>40,'limón'=>35,'naranja'=>20);
    echo "** FRUTERÍA DEL SUR **","<br>","<br>";
   foreach($frutas as $fruta=>$precio)
   { echo "El kilo de " . $fruta . " cuesta " . $precio;
     echo "<br>","<br>";
   }
?>