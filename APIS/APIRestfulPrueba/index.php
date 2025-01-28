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
        const apiUrl = "http://localhost/Proyectos_clase_PHP/APIS/APIRestfulPrueba/controlls/api.php"; // URL de tu archivo PHP
        // Obtener productos
        $("#getProductos").click(function() {
            $.get(apiUrl, function(response) {
                    console.log(response); // Verifica la respuesta en la consola
                    if (response.success) {
                        $("#result").html("<pre>" + JSON.stringify(response, null, 2) + "</pre>");
                    } else {
                        $("#result").html("<pre>Error: " + JSON.stringify(response.error, null, 2) + "</pre>");
                    }
                })
                .fail(function(jqXHR, textStatus, errorThrown) {
                    console.log("Error: " + textStatus + " - " + errorThrown); // Verifica los errores de la solicitud
                    $("#result").html("<pre>Solicitud fallida: " + textStatus + "</pre>");
                });
        });

        // Crear un producto
        $("#crearProducto").click(function() {
            const nuevoProducto = {
                nombre: "Producto Nuevo",
                precio: 12.99
            };
            $.ajax({
                url: apiUrl,
                method: "POST",
                contentType: "application/json",
                data: JSON.stringify(nuevoProducto),
                success: function(response) {
                    $("#result").html("<pre>" + JSON.stringify(response, null, 2) + "</pre>");
                }
            });
        });
    </script>

</body>