<?php

//PUNTO 1, A y B
$num1 = rand(0, 10);
$num2 = rand(0,10);

if ($num1 > $num2) {
  echo "$num1";
} else {
  echo "$num2";
}

//PUNTO 1, C
echo "<br>";
$numRandom = rand(1,5);

if ($numRandom == 3 || $numRandom == 5) {
  echo "$numRandom";
}

//PUTNO 1, D
echo "<br>";
$numRandom2 = rand(1,5);

if ($numRandom2 == 3) {
  echo "El numero es 3.";
} else {
  echo "El numero NO es 3.";
}

//PUTNO 1, E
echo "<br>";
$num50 = rand(1,100);

if ($num50 > 50) {
  echo "El numero es mayor a 50.";
} else {
  echo "El numero es menor a 50.";
}

//PUNTO 1, f y g
echo "<br>";
$numPar = rand(0,100);

if ($numPar > 50 && $numPar % 2 == 0) {
  echo "El numero cumlpe la condicion.";
} elseif ($numPar == 0) {
  echo "El numero es 0.";
} else {
  echo "El numero no cumple la condicion.";
}

//PUNTO 2
echo "<br>";
$edad = rand(1,50);
$casado = rand(0,1) ? true : false;
$sexo = ["Masculino", "Femenino", "Otro"];
$sexoFinal = $sexo[rand(0,2)];
if ($edad > 18 && $casado == true) {
  echo "Bienvenido.";
}

//PUNTO 3
echo "<br>";
$edad = rand(1,50);
$casado = rand(0,1) ? true : false;
$sexo = ["Masculino", "Femenino", "Otro"];
$sexoFinal = $sexo[rand(0,2)];
if ($edad > 18 && $casado == true || $sexoFinal == 2) {
  echo "Bienvenido.";
}

//PUTNO 4
echo "<br>";
$cantidadDeAlumnos = 100;
if ($cantidadDeAlumnos) {
  echo true;
} else {
  echo false;
}

//PUNTO 5
echo "<br>";
if ($i = 0) {
  echo true;
} else {
  echo false;
}

//PUNTO 6
echo "<br>";
$numero = rand(0,100);
$numero = $numero % 2 == 0 ?"El numero es par." : "El numero es impar.";
echo $numero;

//PUNTO 7, A
echo "<br>";
$switch = rand(1,5);
switch ($switch) {
  case '1':
  if ($switch == 1) {
    echo "i es igual a $switch";
  }
    break;

    case '1':
    if ($switch == 1) {
      echo "i es igual a $switch";
    }
      break;

      case '2':
      if ($switch == 2) {
        echo "i es igual a $switch";
      }
        break;

        case '3':
        if ($switch == 3) {
          echo "i es igual a $switch";
        }
          break;

          case '4':
          if ($switch == 4) {
            echo "i es igual a $switch";
          }
            break;

            case '5':
            if ($switch == 5) {
              echo "i es igual a $switch";
            }
              break;

}

//PUNTO 7, B
echo "<br>";
$switch = rand(1,5);
switch ($switch) {
  case '1':
  if ($switch == 1) {
    echo "i es igual a $switch";
  }
    break;

    case '1':
    if ($switch == 1) {
      echo "i es igual a $switch";
    }
      break;

      case '2':
      if ($switch == 2) {
        echo "i es igual a $switch";
      }
        break;
        
      default:
      echo "i NO es igual a 1 o 2.";
}

//PUNTO   8
echo "<br>";
for ($i=0; $i < 101 ; $i++) {
    echo "$i <br>";
}

//PUTNO 9
echo "<br>";
$frenar = rand(0,100);
for ($i=0; $i < $frenar ; $i++) {
    echo "$i <br>";
}

//PUNTO 10
echo "<br>";
for ($i=0; $i < 11; $i++) {
    echo 2 * $i;
    echo "<br>";
}

//PUNTO 11
echo "<br>";
