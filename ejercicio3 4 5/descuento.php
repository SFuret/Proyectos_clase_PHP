<?php include "funciones.inc.php" ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descontar</title>
</head>
<body>
    <h3>Precio 250 con 10% descuento</h3>
    <p>Resultado: <?php echo calculaDescuento(250,10)?></p>

     <br>


    <h3>Precio 85 sin descuento</h3>
    <p>Resultado: <?php echo calculaDescuento(85)?></p> <!-- Llamo a la misma función pero le paso un solo parámetro y en el descuento 
toma el por defecto que es 0 -->
</body>
</html>