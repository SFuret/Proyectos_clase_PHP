<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Empleado</title>
</head>
<body>
    <h1>Insertar empleado</h1>
    <form action="../controlls/controlEmpleados.php" method="POST"> 
     <input type="text" name="nombre" placeholder="nombre"> <br>
     <input type="text" name="apellido" placeholder="apellido"><br>
     <input type="number" name="salario" placeholder="salario"><br>
     <input type="text" name="fecha_contratacion" placeholder="fecha de Contrato"><br>
     <input type="text" name="puesto" placeholder="puesto"><br>
     <button name="insertar">Insertar</button>
    </form>
</body>
</html>