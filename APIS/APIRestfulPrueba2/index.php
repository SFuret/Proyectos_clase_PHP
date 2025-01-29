<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Productos</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        label, input, button { display: block; margin-bottom: 10px; }
        input { padding: 5px; width: 200px; }
        button { padding: 7px; cursor: pointer; }
        #resultado { white-space: pre-wrap; border: 1px solid #ccc; padding: 10px; margin-top: 10px; width: 300px; height: 200px; overflow: auto; }
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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        const API_URL = "http://localhost/Proyectos_clase_PHP/APIS/APIRestfulPrueba2/controlls/api.php";

        function obtenerTodosLosProductos() {
            $.ajax({
                url: API_URL,
                type: 'GET',
                success: function(respuesta) {
                    $('#resultado').text(JSON.stringify(respuesta, null, 2));
                },
                error: function(xhr) {
                    $('#resultado').text(`Error: ${xhr.responseText}`);
                }
            });
        }

        function obtenerProductoPorId() {
            const id = $('#idProducto').val();
            if (!id) return alert('Por favor, ingrese un ID.');
            $.ajax({
                url: `${API_URL}?id=${id}`,
                type: 'GET',
                success: function(respuesta) {
                    $('#resultado').text(JSON.stringify(respuesta, null, 2));
                },
                error: function(xhr) {
                    $('#resultado').text(`Error: ${xhr.responseText}`);
                }
            });
        }

        function crearProducto() {
            const nombre = $('#nombreProducto').val();
            const precio = $('#precioProducto').val();
            if (!nombre || !precio) return alert('Por favor, ingrese nombre y precio.');
            $.ajax({
                url: API_URL,
                type: 'POST',
                contentType: 'application/json',
                data: JSON.stringify({ nombre, precio }),
                success: function(respuesta) {
                    $('#resultado').text(JSON.stringify(respuesta, null, 2));
                },
                error: function(xhr) {
                    $('#resultado').text(`Error: ${xhr.responseText}`);
                }
            });
        }

        function actualizarProducto() {
            const id = $('#idProducto').val();
            const nombre = $('#nombreProducto').val();
            const precio = $('#precioProducto').val();
            if (!id || !nombre || !precio) return alert('Por favor, ingrese ID, nombre y precio.');
            $.ajax({
                url: `${API_URL}?id=${id}`,
                type: 'PUT',
                contentType: 'application/json',
                data: JSON.stringify({ nombre, precio }),
                success: function(respuesta) {
                    $('#resultado').text(JSON.stringify(respuesta, null, 2));
                },
                error: function(xhr) {
                    $('#resultado').text(`Error: ${xhr.responseText}`);
                }
            });
        }

        function eliminarProducto() {
            const id = $('#idProducto').val();
            if (!id) return alert('Por favor, ingrese un ID.');
            $.ajax({
                url: `${API_URL}?id=${id}`,
                type: 'DELETE',
                success: function(respuesta) {
                    $('#resultado').text(JSON.stringify(respuesta, null, 2));
                },
                error: function(xhr) {
                    $('#resultado').text(`Error: ${xhr.responseText}`);
                }
            });
        }
    </script>

</body>
</html>
