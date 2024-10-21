<?php
$arraynombres = array("Luis","Pedro","María","Alberto","Brenda","Zara");
$longitud = count($arraynombres);
//orden ascendente
sort($arraynombres);
echo "Datos del arreglo ordenados de forma ascendente e impresos por medio de un ciclo for","<br>";
for($i=0; $i<$longitud; $i++)
   { //Se obtiene el valor de cada elemento 
      echo $arraynombres[$i]; 
      echo "<br>"; }

echo "<p>";
array_push($arraynombres,"Carlos","Rodrigo","Gabriela","Nora");
unset($arraynombres[3],$arraynombres[7]);
$longitud = count($arraynombres);
//orden descendente
rsort($arraynombres);
echo "Posteriormente se agregaron cuatro datos y se eliminaron dos ","<br>","<br>";
echo "Datos del arreglo ordenados de forma descendente e impresos por medio de un ciclo for","<br>";
for($i=0; $i<$longitud; $i++)
   { //Se obtiene el valor de cada elemento 
      echo $arraynombres[$i]; 
      echo "<br>"; }
//var_export($arraynombres);
echo "<p>";

$longitud = count($arraynombres);
echo "El número de elementos actual en el arreglo es de: ",$longitud;
?>