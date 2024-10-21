<?php
/* CBTIS 89 
   P3Array1.php
   Programa que almacena datos en dos arreglos, posteriormente realiza operaciones entre y coloca los resultados en otros arreglos (suma, resta, multiplicación y división).
   Verónica Martínez Anaya
   3ºA Programación Matutino */

  //Almacena datos en un arreglo
  $array1 = array(10,20,30,40,50);
  $array2 = array(3,7,6,15,18);
  $arraysuma = array();
  $arrayresta = array();
  $arraymulti = array();
  $arraydivi = array();

  $longitud = count($array1);
 

  for($i=0; $i<$longitud; $i++)
  {$arraysuma[$i] = $array1[$i]+$array2[$i];
   $arrayresta[$i] = $array1[$i]-$array2[$i];
   $arraymulti[$i] = $array1[$i]*$array2[$i];
   $arraydivi[$i] = $array1[$i]/$array2[$i];
  }

 echo "SUMA ENTRE ARREGLOS <br>";
 for($i=0; $i<$longitud; $i++)
  {echo $array1[$i]."  +  ".$array2[$i]."  =  ".$arraysuma[$i]; 
   echo "<br>"; 
  }
echo "<br>";

echo "RESTA ENTRE ARREGLOS <br>";
 for($i=0; $i<$longitud; $i++)
  {echo $array1[$i]."  -  ".$array2[$i]."  =  ".$arrayresta[$i]; 
   echo "<br>"; 
  }
 echo "<br>";
 
 echo "MULTIPLICACIÓN ENTRE ARREGLOS <br>";
 for($i=0; $i<$longitud; $i++)
  {echo $array1[$i]."  X  ".$array2[$i]."  =  ".$arraymulti[$i]; 
   echo "<br>"; 
  }
  echo "<br>";
  echo "DIVISIÓN ENTRE ARREGLOS <br>";
 for($i=0; $i<$longitud; $i++)
  {echo $array1[$i]."  /  ".$array2[$i]."  =  ".$arraydivi[$i]; 
   echo "<br>"; 
  }
  ?>