<?php  
include_once ('Vehiculo.php');
include_once ('Coche.php');
include_once ('Moto.php');

$coche1 = new Coche("Toyota", "Corola", 15000,2200);
$moto1= new Moto("Harley-Davidson", "Sporters",15000,True);
$moto2= new Moto("Ducati", "Diavel",18000,False);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Vehículos</title>
</head>
<body>
    <?php 
    $coche1->mostrarDetalles();
    $moto1->mostrarDetalles();
    $moto2->mostrarDetalles();
    ?>

</body>
</html>