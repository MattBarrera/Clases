<?php
  $usuario = [
    "nombre" => "Matias",
    "apellido" => "Barrera",
    "edad" => 21,
    "secciones" => [1, 2, 3],
    "direcion" => [
      "calle" => "Mayor Irusta",
      "numero" => 3777,
      "barrio" => "San Miguel",
    ]
  ];
  $json = json_encode($usuario);


  $jsonDecode = json_decode($json);
  var_dump($jsonDecode);


  $fileName = 'usuario.json';

  if (!file_exists($fileName)) {
    $f = fopen("$fileName", "w+");
  } else {
    $f = fopen("$fileName", "a+");
  }


  fwrite($f, "Linea 1" . "\n");
  fwrite($f, "Linea 2" . PHP_EOL);

  fclose($f);


  file_put_contents($fileName, "Linea3");
