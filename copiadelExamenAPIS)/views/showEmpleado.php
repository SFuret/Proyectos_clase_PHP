<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Detalles del Empleado</title>
    </head>
    <body>
        <h1>Detalles del Empleado</h1>
        <p>ID: <?php echo $empleado["id"]; ?></p>
        <p>Nombre:<?php echo $empleado["nombre"]; ?> </p>
        <p>Apellido: <?php echo $empleado["apellido"]; ?></p>
        <p>Salario: <?php echo $empleado["salario"]; ?></p>
        <p>Fecha de Contratación: <?php echo $empleado["fecha_contratacion"]; ?></p>
        <p>Puesto: <?php echo $empleado["puesto"]; ?></p>
        <a href="controlEmpleados.php">Volver a la lista de empleados</a>
    </body>
</html>