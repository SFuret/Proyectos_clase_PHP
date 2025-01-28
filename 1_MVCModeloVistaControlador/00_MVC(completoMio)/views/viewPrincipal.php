<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
</head>
<body>
   
  <!--Mostrar todos los Productos-->
   <form action="index.php" method="GET">
    <input type="text" value="controlProductos" name="control" hidden>
    <input type="text" value="mostrarProductos" name="action" hidden>
    <button>Mostrar Productos</button>
   </form>
   
   <!--Eliminar Producto-->
   <form action="index.php" method="GET">
   <input type="text" value="controlProductos" name="control" hidden>
   <input type="text" value="eliminarProducto" name="action" hidden>
   <input type="number" name="id">
   <button>Eliminar</button>
   </form>
 
</body>
</html>