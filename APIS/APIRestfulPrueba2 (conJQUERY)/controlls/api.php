<?php 
include "../models/modelProductos.php";

// Configurar cabeceras
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type");
header("Content-Type: application/json");

$method = $_SERVER['REQUEST_METHOD']; // Método HTTP

// Validar que la solicitud se realice al archivo correcto
/*if (basename($_SERVER['REQUEST_URI']) !== "api.php") {
    http_response_code(404);
    echo json_encode(["error" => "Recurso no encontrado"]);
    exit();
}*/

// Operar según el método HTTP
switch ($method) {
    case 'GET':
        if (isset($_GET['id'])) { //si viene con id es que es un mostrar un producto
            // Obtener un producto específico (GET /api/productos?id={id})
            $id = intval($_GET['id']); //convierto a entero el valor obtenido
            echo $id;
            $producto = modelProductos::devolverUnProducto($id); //$producto contendrá un array asociativo
            if ($producto) {
                echo json_encode(["success" => true, "data" => $producto]);
            } else {
                http_response_code(404);
                echo json_encode(["error" => "Producto no encontrado"]);
            }
        } else {//si viene sin id es mostrar todos
            // Obtener todos los productos (GET /api/productos)
            $productos = modelProductos::devolverProductos();
            if ($productos) {
                echo json_encode(["success" => true, "data" => $productos]); //convierto a json y lo devuelvo
            } else {
                http_response_code(404);
                echo json_encode(["error" => "No hay productos disponibles"]);
            }
        }
        break;

    case 'POST':
        // Crear un producto (POST /api/productos)
        $input = json_decode(file_get_contents("php://input"), true); //decodifica el json recibido del cliente y lo convierte en un array asociativo
        if (isset($input['nombre']) && isset($input['precio'])) {
            $resultado = modelProductos::insertarProducto($input['nombre'], $input['precio']);
            if ($resultado) {
                http_response_code(201);
                echo json_encode(["success" => true, "message" => "Producto creado"]);
            } else {
                http_response_code(500);
                echo json_encode(["error" => "No se pudo crear el producto"]);
            }
        } else {
            http_response_code(400);
            echo json_encode(["error" => "Datos incompletos"]);
        }
        break;

    case 'PUT':
        // Actualizar un producto (PUT /api/productos?id={id})
        if (isset($_GET['id'])) {
            $id = intval($_GET['id']);
            $input = json_decode(file_get_contents("php://input"), true);
            if (isset($input['nombre']) && isset($input['precio'])) {
                $resultado = modelProductos::UpdateProducto($id, $input['nombre'], $input['precio']);
                if ($resultado) {
                    echo json_encode(["success" => true, "message" => "Producto actualizado"]);
                } else {
                    http_response_code(500);
                    echo json_encode(["error" => "No se pudo actualizar el producto"]);
                }
            } else {
                http_response_code(400);
                echo json_encode(["error" => "Datos incompletos"]);
            }
        } else {
            http_response_code(400);
            echo json_encode(["error" => "ID no proporcionado"]);
        }
        break;

        case 'DELETE':{}
            // Eliminar un producto (DELETE /api/productos?id={id})
            if (isset($_GET['id'])) {
                $id = intval($_GET['id']);
                $resultado = modelProductos::eliminarProducto($id);
                if ($resultado) {
                    echo json_encode(["success" => true, "message" => "Producto eliminado"]);
                } else {
                    http_response_code(500);
                    echo json_encode(["error" => "No se pudo eliminar el producto"]);
                }
            } else {
                http_response_code(400);
                echo json_encode(["error" => "ID no proporcionado"]);
            }
            break;
    
        default:
            http_response_code(405);
            echo json_encode(["error" => "Método no permitido"]);
            break;
    }

       /* case 'PATCH':
            // Actualizar parcialmente un producto (PATCH /api/productos?id={id})
            if (isset($_GET['id'])) {
                $id = intval($_GET['id']); // Convertir el ID a entero
                $input = json_decode(file_get_contents("php://input"), true); // Leer y decodificar el cuerpo JSON
                
                // Validar si $input contiene al menos un campo válido para actualizar
                if (isset($input['nombre']) || isset($input['precio'])) {
                    $nombre = isset($input['nombre']) ? $input['nombre'] : null; // Si está presente, asignar el nombre
                    $precio = isset($input['precio']) ? $input['precio'] : null; // Si está presente, asignar el precio
                    
                    // Llamar al método de actualización parcial
                    $resultado = modelProductos::updateProductoParcial($id, $nombre, $precio);
                    if ($resultado) {
                        echo json_encode(["success" => true, "message" => "Producto actualizado parcialmente"]);
                    } else {
                        http_response_code(500);
                        echo json_encode(["error" => "No se pudo actualizar el producto"]);
                    }
                } else {
                    http_response_code(400);
                    echo json_encode(["error" => "Datos incompletos"]);
                }
            } else {
                http_response_code(400);
                echo json_encode(["error" => "ID no proporcionado"]);
            }
            break;
*/
    
?>
