<?php
//PUNTO 1
  $entero = 2;
  $decimel = 2.3;
  $comillaSimpleUnCaracter = 'a';
  $comillaSimpleCadena = 'hola';
  $comllaDoble = "chau";
  echo($entero);
  echo("<br>");
  echo($decimel);
  echo("<br>");
  echo($comillaSimpleUnCaracter);
  echo("<br>");
  echo($comillaSimpleCadena);
  echo("<br>");
  echo($comllaDoble);
  echo("<br>");

//PUNTO 1, B
  $entero = "cambien el valor";
  echo($entero);
  echo("<br>");
  $comillaSimpleCadena = 25;
  echo($comillaSimpleCadena);

//PUNTO 1, C
  $entero = "2";
  echo("<br>");
  echo($entero);

//PUNTO 2
  $_1 = "Tres ";
  $_2 = "tristes ";
  $_3 = "tigres ";
  $_4 = "tragan ";
  $_5 = "trigo ";
  $_6 = "en ";
  $_7 = "un ";
  $_8 = "trigal.";

  //PUNTO 2, III
  echo "$_1 $_2 $_3 $_4 $_5 $_6 $_7 $_8";
  echo "<br>";

  //PUNTO 2, IV
  echo "<br>";
  echo "$_1 $_2 $_5 $_8";

  //PUNTTO 3
  echo "<br>";
  $true = true;
  $false = false;
  $cero = 0;
  $uno = 1;
  $seis = 6;
  $comillaVacia = "";
  $numeroComilla = "3";
  $trueComillas = "true";
  $flaseComillas = "flase";
  $null = null;

  if ($null == true) {
    echo "TRUE";
  } else {
    echo "FALSE";
  }

//PUNTO 4, I
echo "<br>";
$arrayAnimales = ["Perro, ", "Gato, ", "Cocodrilo, ", "Caballo, ", "Zorro."];
var_dump($arrayAnimales);

//PUNTO 4, II
echo "<br>";
$arrayAnimales[] = " Conejo,";
$arrayAnimales[] = " Cabra.";
var_dump($arrayAnimales);

//PUNTO 4, III
echo "<br>";
echo "Me gustan los animales: $arrayAnimales[0]$arrayAnimales[1]$arrayAnimales[2]$arrayAnimales[3]
$arrayAnimales[4]$arrayAnimales[5]$arrayAnimales[6]";

//PUNTO 4, IV
echo "<br>";
$arrayAnimales[0] = "Lagartija, ";
var_dump ($arrayAnimales);

//PUNTO 4, V
echo "<br>";
$arrayAnimales[100] = " Rata.";
var_dump($arrayAnimales);

//PUNTO 4, VI
echo "<br>";
$arrayAnimales[16] = " Comadreja.";

//PUNTO 4, VII
echo "<br>";
echo "$arrayAnimales[0]$arrayAnimales[1]$arrayAnimales[2]$arrayAnimales[3]$arrayAnimales[4]
$arrayAnimales[5]$arrayAnimales[6]$arrayAnimales[16]$arrayAnimales[100]";

//PUNTO 5, I
echo "<br>";
echo "<br>";
$arrayAuto = ["Peugeot, ", "206, ", "2000", "DKI-712."];
var_dump ($arrayAuto);

//PUNTO 5, II
echo "<br>";
array_unshift($arrayAuto, "Matais, ");
var_dump($arrayAuto);

//PUNTO 5, III
echo "<br>";
$arrayAuto[14] = "Zurich.";
var_dump($arrayAuto);

//PUNTO 5, IV
echo "<br>";
$arrayAuto["Poliza"] = "4628351362";
var_dump($arrayAuto);

//PUNTO 5, V
echo "<br>";
$arrayAuto[4] = "IRA-486";
var_dump($arrayAuto);

//PUNTO 5, VI
echo "<br>";
$arrayAuto[0] = "Alejo, ";
var_dump($arrayAuto);

//PUNTO 6, A
echo "<br>";
echo "<br>";
$x = 2.4;
$y = 3.5;

//PUNTO 6, A, I
$suma = $x + $y;
var_dump($suma);

//PUNTO 6, A, II
echo "<br>";
$resta = $x - $y;
var_dump($resta);

//PUNTO 6, A, III
echo "<br>";
$division = $y/$x;
var_dump($division);

//PUNTO 6, A, IV
echo "<br>";
$multiplicacion = $x * $y;
var_dump($multiplicacion);

//PUNTO 6, A, V
echo "<br>";
$resto = $y % $x;
var_dump($resto);

//PUNTO 6, A, VI
echo "<br>";
$x = $x + 1;
$y = $y - 1;
var_dump($x, $y);
