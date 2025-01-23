<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Productos</title>
</head>
<body>
<table border=1>
    <tr>
        <th>Codigo</th>
        <th>Nombre</th>
        <th>Precio</th>
    </tr>
    
    <?php 
   // var_dump($productos);
    foreach($productos as $producto)
    {?>
    <tr>
        <td><?php echo $producto["id"]; ?></td>
        <td><?php echo $producto["nombre"]; ?></td>
        <td><?php echo $producto["precio"]; ?></td>
    </tr>
    <?php
       }?>
</table>    

</body>
</html>