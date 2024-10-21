<?php
/* CBTIS 89 
   P28Array9.php
   Programa que almacena datos en un arreglo y posteriormente los imprime.
   Verónica Martínez Anaya
   3ºA Programación Matutino */

   $ropa = array("playeras"=>100,'camisas'=>250,'pantalones de mezclilla'=>300,'bermudas'=>200);

    echo "** COMERCIALIZADORA TEXTIL **","<br>","<br>";
   foreach($ropa as $prenda=>$precio)
   { echo $prenda . " con un precio de " . $precio;
     echo "<br>","<br>";
   }
?>