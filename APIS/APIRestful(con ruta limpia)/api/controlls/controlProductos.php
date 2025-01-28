<?php 
include "../models/modelProductos.php";

// Configurar cabeceras
header("Content-Type: application/json");

$method = $_SERVER['REQUEST_METHOD']; // Método HTTP
$uri = explode("/", trim(parse_url($_SERVER['REQUEST_URI']/*, PHP_URL_PATH*/), "/")); // Ruta limpia

// Validar rutas
if (count($uri) < 2 || $uri[0] !== "api" || $uri[1] !== "productos") {
    http_response_code(404);
    echo json_encode(["error" => "Recurso no encontrado"]);
    exit();
}

// Operar según el método HTTP
switch ($method) {
    case 'GET':
        if (isset($uri[2])) {
            // Obtener un producto específico (GET /api/productos/{id})
            $id = intval($uri[2]);
            $producto = modelProductos::devolverUnProducto($id);
            if ($producto) {
                echo json_encode(["success" => true, "data" => $producto]);
            } else {
                http_response_code(404);
                echo json_encode(["error" => "Producto no encontrado"]);
            }
        } else {
            // Obtener todos los productos (GET /api/productos)
            $productos = modelProductos::devolverProductos();
            echo json_encode(["success" => true, "data" => $productos]);
        }
        break;

    case 'POST':
        // Crear un producto (POST /api/productos)
        $input = json_decode(file_get_contents("php://input"), true);
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
        // Actualizar un producto (PUT /api/productos/{id})
        if (isset($uri[2])) {
            $id = intval($uri[2]);
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

    case 'DELETE':
        // Eliminar un producto (DELETE /api/productos/{id})
        if (isset($uri[2])) {
            $id = intval($uri[2]);
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
?>



?>