<?php
/* CBTIS 89 
   P22Array4.php
   Programa que almacena datos en un arreglo y posteriormente los imprime.
   Verónica Martínez Anaya
   3ºA Programación Matutino */

   $equipo = array('portero'=>'Julio','defensa'=>'Diego','medio'=>'Jair','delantero'=>'Rafa');
    echo "** SELECCIÓN NACIONAL **","<br>","<br>";
   foreach($equipo as $posicion=>$jugador)
   { echo "El Jugador " . $jugador . " es el " . $posicion;
     echo "<br>","<br>";
   }
?>


