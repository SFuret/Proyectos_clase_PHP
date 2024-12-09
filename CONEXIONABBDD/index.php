<?php
/*include_once ('./model/conexion.php');

//creo la conexión

$conexionNueva= establecerConexion();


/*Inserto un elemento en la BBDD*/
/*$insertar1="insert into Producto values(5,'sujetador',15,50)";
insertar($conexionNueva,$insertar1);

/**/

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
</head>

<body>
    <h1>Venta de productos</h1>
    <br>
    <br>
    <h2>Listar Productos</h2>
    <table>
        <?php
        foreach ($productos as $producto) { /*Trabajo directamente con la variable productos de la clase controladora porque he hecho allí el include de la vista */
        ?> 
           <tr>
             <th><?php $producto['nombre'];?></th>
             <td><?php $producto['codProducto'];?></td>
             <td><?php $producto['precio']; ?></td>
             <td><?php $producto['cantidad'];?></td>
           </tr>
        <?php
        };
        ?>
    </table>

</body>

</html>