<?php
include "../models/modelProductos.php";

header("Access-Control-Allow-Origin:*");
header("Access-Control-Allow-Methods:GET,PUT,PATCH,POST,DELETE");
header("Access-Control-Allow-Headers:Content-Type");
header("Content-Type:application/json");
header("Content-Type:text/html");

$metodo = $_SERVER['REQUEST_METHOD'];

switch ($metodo) {
    case 'GET':
       //mostrar 1
        if(isset($_GET['id']))
       {
       $productos= modelProductos::devolverUnProducto($_GET['id']);
       if($productos)
       {
        http_response_code(201);
        echo json_encode(["success"=>true,"data"=>$productos]);
       }
       else{
        http_response_code(500);
        echo json_encode(["error"=>"No hay productos disponibles"]);
       }
       }
       //mostrar todos
       else{
       
        

       }


        break;
    case 'POST':
       $datos= json_decode(file_get_contents("php://input"),true);
       if(isset($datos['nombre'])&&isset($datos['precio']))
       {
          
          $respuesta=modelProductos::insertarProducto($datos['nombre'],$datos['precio']);
          if($respuesta)
          {
            http_response_code(201);
            echo json_encode(["success"=>true,"message"=>"producto insertado"]);
          }
          else{
            http_response_code(404);
            json_encode(["error"=>"error al insertar el producto"]);
          }
       }
       else{
        http_response_code(500);
        json_encode(["error"=>"datos no completos"]);
       }


        break;
    case 'PUT':
        # code...
        break;
    case 'PATCH':
        # code...
        break;
    case 'DELETE':
        # code...
        break;
    default: {
            break;
        }
}
