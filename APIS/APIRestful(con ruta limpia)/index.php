<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pruebas API RESTful</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>
    <h1>Pruebas API RESTful</h1>
    <button id="getProductos">Obtener Productos</button>
    <button id="crearProducto">Crear Producto</button>
    <div id="result"></div>

    <script>
        const apiUrl = "http://localhost/mi_proyecto/api/productos";

        // Obtener productos
        $("#getProductos").click(function () {
            $.get(apiUrl, function (response) {
                $("#result").html("<pre>" + JSON.stringify(response, null, 2) + "</pre>");
            });
        });

        // Crear un producto
        $("#crearProducto").click(function () {
            const nuevoProducto = { nombre: "Producto Nuevo", precio: 12.99 };
            $.ajax({
                url: apiUrl,
                method: "POST",
                contentType: "application/json",
                data: JSON.stringify(nuevoProducto),
                success: function (response) {
                    $("#result").html("<pre>" + JSON.stringify(response, null, 2) + "</pre>");
                }
            });
        });
    </script>
</body>
</html>


