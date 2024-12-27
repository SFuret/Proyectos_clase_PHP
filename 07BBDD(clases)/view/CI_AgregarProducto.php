<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar un producto</title>
</head>
<body>
    <form name="agregarProducto" action="../controll/CC_listarProductos.php" method="POST">
    <legend>Producto nuevo</legend>
    <br>
    <label for="cod">Código de Producto</label>
    <input type="number"  id="cod" name="cod">
    <br><br>
     <label for="nombre">Nombre</label>
     <input type="text" id="nombre" name="nombre">
     <br><br>
     <label for="precio">Precio</label>
     <input type="number" id="precio" name="precio">
     <br><br>
     <label for="cantidad">Cantidad</label>
     <input type="number" id="cantidad" name="cantidad">
     <br><br>
     <button>Agregar</button>
    </form>
</body>
</html>