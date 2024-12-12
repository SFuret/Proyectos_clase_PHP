<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Listar Productos </title>
</head>

<body>
  <h1>Venta de productos</h1>
  <br>
  <br>
  <h2>Listar Productos</h2>
  <table border="1">
    <tr>
      <th>Código</th>
      <th>Nombre</th>
      <th>Precio</th>
      <th>Cantidad</th>
    </tr>
    <?php
    foreach ($productos as $producto) { /*Trabajo directamente con la variable productos de la clase controladora porque he hecho allí el include de la vista */
    ?>
      <tr>
        <th><?php echo $producto[0]; ?></th>
        <td><?php echo $producto[1]; ?></td>
        <td><?php echo $producto[2]; ?></td>
        <td><?php echo $producto[3]; ?></td>
      </tr>
    <?php
    };



    ?>
  </table>

  <!--voy a listar los productos, pero esta vez los obtenidos en un array asociativo -->

  <h4>Listado obteniendo datos en un array asociativo</h4>
  <table border="1">
    <tr>
      <th>Código</th>
      <th>Nombre</th>
      <th>Precio</th>
      <th>Cantidad</th>
    </tr>
    <tr>
      <?php var_dump($productosAsociativo);?>
      <th><?php echo $productosAsociativo["codProducto"];?></th>
      <th><?php echo $productosAsociativo['nombre'];?></th>
      <th><?php echo $productosAsociativo['precio'];?></th>
      <th><?php echo  $productosAsociativo['cantidad'];?></th>

    </tr>
  </table>

</body>

</html>