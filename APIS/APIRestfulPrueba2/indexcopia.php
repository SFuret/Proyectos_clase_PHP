<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión productos</title>
</head>

<body>
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

    <label for="idProducto">ID del Producto</label>
    <input type="number" id="idProducto">

    <label for="nombreProducto">Nombre del Producto</label>
    <input type="text" id="nombreProducto">

    <label for="precioProducto">Precio del Producto</label>
    <input type="number" step="0.01" id="precioProducto">

    <button onclick="mostrarTodos()">Mostrar Todos</button>
    <button onclick="mostrarUno()">Mostrar Uno</button>
    <button onclick="actualizar()">Actualizar</button>
    <button onclick="eliminar()">Eliminar</button>
    <button onclick="insertar()">Insertar</button>


    <div id="mostrar">

    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        const APIURL = "http://localhost/Proyectos_clase_PHP/APIS/APIRestfulPrueba2/controlls/api.php";

        function mostrarTodos() {
            $.ajax({
                url: APIURL,
                type: 'GET',
                success: function(respuesta) {
                    // Suponiendo que respuesta es un array de productos
                    let tablaHTML = '<table border="1"><thead><tr><th>ID</th><th>Nombre</th><th>Precio</th></tr></thead><tbody>';

                    // Recorremos los productos y los agregamos a la tabla
                    respuesta.forEach(function(producto) {
                        tablaHTML += `<tr>
                                <td>${producto.id}</td>
                                <td>${producto.nombre}</td>
                                <td>${producto.precio}</td>
                              </tr>`;
                    });

                    tablaHTML += '</tbody></table>';

                    // Insertamos la tabla en el elemento con id 'mostrar'
                    document.getElementById('mostrar').innerHTML = tablaHTML;
                },
                error: function(detalles) {
                    document.getElementById('mostrar').innerHTML = `Error: {detalles}`;
                }
            })
        }
    </script>

</body>

</html>