<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-4">
    <h2 class="text-center">Gestión de Productos</h2>

    <form id="productForm">
        <div class="mb-3">
            <label for="productId" class="form-label">ID</label>
            <input type="number" id="productId" class="form-control">
        </div>
        <div class="mb-3">
            <label for="productName" class="form-label">Nombre</label>
            <input type="text" id="productName" class="form-control">
        </div>
        <div class="mb-3">
            <label for="productPrice" class="form-label">Precio</label>
            <input type="number" step="0.01" id="productPrice" class="form-control">
        </div>
        <button type="button" class="btn btn-primary" onclick="createProduct()">Crear</button>
        <button type="button" class="btn btn-warning" onclick="updateProduct()">Actualizar</button>
        <button type="button" class="btn btn-danger" onclick="deleteProduct()">Eliminar</button>
        <button type="button" class="btn btn-info" onclick="getProductById()">Mostrar Uno</button>
        <button type="button" class="btn btn-success" onclick="getAllProducts()">Mostrar Todos</button>
    </form>

    <hr>
    <h4>Resultados</h4>
    <pre id="result" class="border p-3"></pre>

    <script>
        const API_URL = 'http://localhost/Proyectos_clase_PHP/APIS/APIRestfulPrueba/controlls/apicopia.php';

        function getAllProducts() {
            $.ajax({
                url: API_URL,
                type: 'GET',
                success: function(response) {
                    $('#result').text(JSON.stringify(response, null, 2));
                }
            });
        }

        function getProductById() {
            const id = $('#productId').val();
            if (!id) return alert('Ingrese un ID');

            $.ajax({
                url: `${API_URL}?id=${id}`,
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    $('#result').text(JSON.stringify(response, null, 2));
                    if (response.success) {
                        $('#productName').val(response.data.nombre);
                        $('#productPrice').val(response.data.precio);
                    } else {
                        alert('Producto no encontrado');
                    }
                },
                error: function(xhr) {
                    alert("Error al obtener producto: " + xhr.responseText);
                }
            });
        }

        function createProduct() {
            const nombre = $('#productName').val();
            const precio = $('#productPrice').val();
            if (!nombre || !precio) return alert('Ingrese nombre y precio');
            $.ajax({
                url: API_URL,
                type: 'POST',
                contentType: 'application/json',
                data: JSON.stringify({
                    nombre,
                    precio
                }),
                success: function(response) {
                    $('#result').text(JSON.stringify(response, null, 2));
                }
            });
        }

        function updateProduct() {
            const id = $('#productId').val();
            const nombre = $('#productName').val();
            const precio = $('#productPrice').val();
            if (!id || !nombre || !precio) return alert('Ingrese ID, nombre y precio');

            $.ajax({
                url: API_URL + "?id=" + id,
                type: 'POST', // Usamos POST para evitar problemas con PUT
                contentType: 'application/x-www-form-urlencoded',
                data: {
                    _method: 'PUT',
                    nombre: nombre,
                    precio: precio
                }, // Simulamos PUT
                success: function(response) {
                    $('#result').text(JSON.stringify(response, null, 2));
                },
                error: function(xhr) {
                    alert("Error en la actualización: " + xhr.responseText);
                }
            });
        }

        function deleteProduct() {
            const id = $('#productId').val();
            console.log(id);
            if (!id) return alert('Ingrese un ID');

            $.ajax({
                url: API_URL + "?id=" + id,
                type: 'POST', // Usamos POST para evitar problemas con DELETE
                contentType: 'application/x-www-form-urlencoded',
                data: {
                    _method: 'DELETE'
                }, // Simulamos DELETE
                success: function(response) {
                    $('#result').text(JSON.stringify(response, null, 2));
                },
                error: function(xhr) {
                    alert("Error al eliminar: " + xhr.responseText);
                }
            });
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>

</html>