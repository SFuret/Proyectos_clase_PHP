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


    <div id="mostrar"> </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        const URL = "http://localhost/Proyectos_clase_PHP/APIS/APIRestfulPrueba2/controlls/api.php";

        function mostrarTodos() {
            $.ajax({
                url: URL,
                type: 'GET',
                success: function(respuesta) {
                    let miTabla = `<table border="1">
                                    <tr>
                                    <td>Código</td>
                                    <td>Nombre</td>
                                    <td>Precio</td>
                                     </tr>`;
                    respuesta.data.forEach(producto => {
                        miTabla += `
                             <tr>
                                <td>${producto[0]}</td>
                                <td>${producto[1]}</td>
                                <td>${producto[2]}</td>
                              </tr>
                     `
                    });

                    miTabla += `</table> `;
                    document.getElementById('mostrar').innerHTML = miTabla;
                },
                error: function(detalle) {
                    document.getElementById('mostrar').innerText = detalle.error;
                }
            });
        }


        function mostrarUno() {
            let id = document.getElementById('idProducto').value;
            $.ajax({
                url: `${URL}?id=${id}`,
                type: 'GET',
                success: function(resp) {
                    document.getElementById('mostrar').innerHTML = `
                        <p>${resp.data.id}</p>
                        <p>${resp.data.nombre}</p> 
                        <p>${resp.data.precio}</p>`

                },
                error: function(detalle) {
                    document.getElementById('mostrar').innerText = resp.message;
                }
            })
        }
    </script>

</body>

</html>