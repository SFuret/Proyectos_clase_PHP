<?php
include "../models/modelProductos.php";

//cabeceras
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Method: GET,POST,PUT,PATCH,DELETE");
header("Access-Control-Allow-Headers: Control-Type");
header("Control-Type: application/json");

$method = $_SERVER['REQUEST_METHOD'];

if (basename($_SERVER['REQUEST_URI'] !== 'apicopia.php')) {
    http_response_code(404);
    json_encode(["error" => "Recurso no encontrado"]);
    exit();
}

switch ($method) {

    case 'GET': {
            //mostrar 1
            if (isset($_GET['id'])) {
                $producto = modelProductos::devolverUnProducto($id);
                if ($producto) {
                    echo json_encode(["success" => true, "data" => $producto]);
                } else {
                    http_response_code(404);
                    echo json_encode(["error" => "Producto no encontrado"]);
                }
            }
            //mostrar todos
            else {
                $producto= modelProductos::devolverProductos();
                if($producto)
                {
                    echo json_encode(["success"=>true, "data"=>$producto]);
                }
                else{
                    http_response_code(404);
                    echo json_encode(["error" => "No hay productos disponibles"]);
                }
            }
        }
    case 'POST': {

        $input= json_decode(file_get_contents("php://input"),true);
        if(isset($_POST['nombre'])&& isset($_POST['precio']))
        {
           $resultado=modelProductos::insertarProducto($_POST['nombre'],$_POST['precio']);
           if($resultado)
           {
            http_response_code(201);
            echo json_encode(["success"=>true, "message"=>"Producto creado"]);
           }           
           else{
            {
                http_response_code(500);
                echo json_encode(["error"=> "No se pudo crear el producto"]);
            }           
           }   

        }
        else{
            http_response_code(400);
            echo json_encode(["error" =>"Datos incompletos"]);
        }

        }
    case 'PUT': {
        }
    case 'PATCH': {
        }
    case 'DELETE': {
        }
    }
