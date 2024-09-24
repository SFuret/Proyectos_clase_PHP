<?php
function cuenta($a, $b, $c)
{
  $salto = 1;
  $negativo = false;
  if ($c !== $salto && !is_null($c)); {
    $salto = abs($c);    //con abs convierto a positivo el valor

  }

  if ($a < 0) {
    $negativo = true;
    $a = abs($a);
    $b = abs($b);
  }



  if (($a < $b)) {
    for ($i = abs($a); $i < abs($b); $i += $c) {
      if (!$negativo) {
        echo "$i - ";
      } else {
        echo "-$i, ";
      }
    }
    if (!$negativo) {
      echo "$b";
    } else {
      echo "-$b";
    }
  }
  else 
    {
      for ($i = abs($a); $i > abs($b); $i -= $c) {
        if (!$negativo) {
          echo "$i - ";
        } else {
          echo "-$i, ";
        }
      }
      if (!$negativo) {
        echo "$b";
      } else {
        echo "-$b";
      } 
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contador</title>
</head>

<body>
  <h2>Contador creciente de 10 a 20 con saltos de 5</h2>
  <div><?php cuenta(10, 20, 5); ?></div>

  <h2>Contador creciente de -10 a -20 con saltos de 5</h2>
  <div><?php cuenta(-10, -20, 5); ?></div>

  <h2>Contador creciente de 20 a 10 con saltos de 5</h2>
  <div><?php cuenta(20, 10, 5); ?></div>




</body>

</html>