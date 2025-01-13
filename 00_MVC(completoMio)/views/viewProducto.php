<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión Productos</title>
</head>
<body>
    <h3>Mostrar Listado de Productos</h3>
    <table>
        <tr>
            <th>Código</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Cantidad</th>
        </tr>
        <?php 
        foreach($this->resultados as $producto)
        {
        ?>
        <tr>
        <td><?php echo $producto['codProducto']?></td>
        <td><?php echo $producto['nombre'] ?></td>
        <td><?php echo $producto['precio']?></td>
        <td><?php echo $producto['cantidad'] ?></td>
        </tr>
        <?php 
        }?>
    </table>
    <br>
    <br>
    <a href="index.php">Volver</a>
</body>
</html>