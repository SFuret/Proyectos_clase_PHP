<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área Círculo</title>
</head>
<body>
    <h1>Área círculo</h1>
    <?php
    define('PI', 3.1416);
    $radio=3.5;
    $area= PI* pow($radio,2);  /*La función pow() es para calcular la potencia*/
    echo "El área del círculo es $area"; /*si uso " " en el echo me lee el contenido de las variables,
    con ' ' toma las variables como texto*/

    ?>
    
</body>
</html>