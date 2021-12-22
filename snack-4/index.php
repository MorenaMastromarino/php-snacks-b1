<?php
  ## Snack 4
  // Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta


  function getArrayNumeri($min, $max, $totNumeri) {
    $arrayNumeri = [];

    if ($totNumeri > ($max - $min + 1)) {
      $totNumeri = ($max - $min + 1);
    }

    while(count($arrayNumeri) < $totNumeri) {
      $numeroRandom = rand($min, $max);
      if(!in_array($numeroRandom, $arrayNumeri)) {
        $arrayNumeri[] = $numeroRandom;
      };
    }


    return $arrayNumeri;
  }
  
  var_dump(getArrayNumeri(1, 100, 15));

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
</body>
</html>