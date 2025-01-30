<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Productos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        label,
        input,
        button {
            display: block;
            margin-bottom: 10px;
        }

        input {
            padding: 5px;
            width: 200px;
        }

        button {
            padding: 7px;
            cursor: pointer;
        }

        #resultado {
            white-space: pre-wrap;
            border: 1px solid #ccc;
            padding: 10px;
            margin-top: 10px;
            width: 300px;
            height: 200px;
            overflow: auto;
        }
    </style>
</head>

<body>

    <h2>Gestión de Productos</h2>
    <label for="idProducto">ID del Producto</label>
    <input type="number" id="idProducto">

    <label for="nombreProducto">Nombre del Producto</label>
    <input type="text" id="nombreProducto">

    <label for="precioProducto">Precio del Producto</label>
    <input type="number" step="0.01" id="precioProducto">

    <button onclick="crearProducto()">Crear Producto</button>
    <button onclick="actualizarProducto()">Actualizar Producto</button>
    <button onclick="eliminarProducto()">Eliminar Producto</button>
    <button onclick="obtenerProductoPorId()">Mostrar Producto</button>
    <button onclick="obtenerTodosLosProductos()">Mostrar Todos</button>

    <h3>Resultado</h3>
    <pre id="resultado"></pre>
    <div id="mostrar"></div>
    

   </script>

</body>

</html>