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
    define('PI', 3.1416);  //declaración de una constante
    $radio=3.5;
    $area= PI* pow($radio,2);  /*La función pow() es para calcular la potencia*/

    echo "El área del círculo es $area <br>"; /*si uso " " en el echo me lee el contenido de las variables,
    con ' ' toma las variables como texto*/

    $areaRedondeada= round($area,2); /*Redondea a dos posiciones decimales, hacia arriba*/
    echo "El área del círculo redondeada es $areaRedondeada";
    ?>
    
</body>
</html>