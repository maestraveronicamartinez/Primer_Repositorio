<?php

// se declara el arreglo llamado numeros
$numeros = array();

//se guardan los números del 1 al 100 en el arreglo
for ($j=1;$j<=100;$j++)
{ $numeros[]=$j;}

//ciclo que recorre todo el arreglo
foreach ($numeros as $valor) 
{ //se determina si el número es par
   if ($valor % 2 == 0)
   { // se imprime el número
      echo $valor . " ";}
}

/*
echo "<br>","<br>";

foreach ($numeros as $valor) 
{ //se determina si el número es par
   if ($valor % 2 != 0)
   { // se imprime el número
      echo $valor . " ";}
}*/

?>