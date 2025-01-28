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
    <?php 
    foreach($productosAsociativo as $productoA)
    {
    ?>
    <tr>
      <th><?php echo $productoA["codProducto"];?></th>
      <td><?php echo $productoA['nombre'];?></td>
      <td><?php echo $productoA['precio'];?></td>
      <td><?php echo  $productoA['cantidad'];?></td>
    </tr>
   <?php 
   };
   ?>
  </table>
<br><br>
<form action="../controll/CC_listarProductos.php" method="POST">
  <button name="eliminar" type="submit" >Eliminar Producto</button>  
  <button name="modificar" type="submit" >Modificar Producto</button>
  <button name="agregar" type="submit" >Agregar Producto</button>
  </form> 
</body>

</html>