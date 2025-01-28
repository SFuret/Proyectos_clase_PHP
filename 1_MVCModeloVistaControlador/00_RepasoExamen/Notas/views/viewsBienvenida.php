<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida</title>
</head>
<body>
    <h4>Bienvenida <?php echo $user;?></h4>

    <br><br>

    <a href="../controlls/gestionProductos.php?mostrar=1">Mostrar Productos</a>

    <br><br>
   
    <br><br>
    <?php 
    if(isset($noResultados))
    {
      echo " <h3>Listado de productos</h3>";
       echo $noResultados;
    }

    if(isset($resultados))
    {
     ?>
    <table>
        <tr>
        <th>Código</th>
        <th>Nombre</th>
        <th>Precio</th>
        </tr>
        

    
    <?php
    foreach($resultados as $resultado)
    {
        ?>
        <tr>
            <td><?php echo $resultado['id'];?></td>
            <td><?php echo $resultado['nombre'];?></td>
            <td><?php echo $resultado['precio'];?></td>
        </tr>
        <?php

    }


    }
    
    
    ?>
        </table>
<br><br>
<form action="../controlls/gestionProductos.php" method="POST">
    <input type="number" name="id">
    <button name="eliminar">Eliminar</button>
</form>
<br><br>
<h4><?php 
if(isset($eliminado))
{
    if($eliminado)
    {
        echo "<p>Producto Elimnado</p>";
    }
    else{
        echo "<p>No se puedo eliminar el producto</p>";
    }
}
?></h4>
        <br><br>
        <h4>insertar producto</h4>
        <form action="../controlls/gestionProductos.php" method="post">
        <input type="text" name="nombre" placeholder="Nombre"><br><br>
        <input type="text" name="precio" placeholder="Precio"><br><br>
        <br><br><br>
        <button name="insertar">Insertar</button>
    </form>

</body>
</html>