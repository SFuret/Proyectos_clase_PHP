<?php 
include "../models/modelProducto.php";

header("Access-Control-Allow-Origin:*");
header("Access-Control-Allow-Methods:GET,POST,PUT,PATCH,DELETE");
header("Access-Control-Allow-Headers:Content-Type");
header("Content-Type:application/json");
header("Content-Type:text/html");

$method=$_SERVER['REQUEST_METHOD'];

switch($method){
    case 'GET':{
        //mostrar uno
        if(isset($_GET['id'])){
            $productos=modelProducto::mostrarProducto($_GET['id']);           
            if($productos)
            {
                http_response_code(201);
                echo json_encode(["success"=>true,"data"=>$productos]);
            }
            else{
                http_response_code(404);
                echo json_encode(["error"=>"Producto no encontrado"]);
            }       
        }

        //devolver todos
        else{
            $productos= modelProducto::mostrarProductos();
            if($productos)
            {
                http_response_code(201);
                json_encode(["success"=>true,"data"=>$productos]);
            }
            else{
                http_response_code(404);
                json_encode(["error"=>"No hay productos disponibles"]);
            }
        }

        
        break;
    }
    case 'POST':{
   $datos=json_decode(file_get_contents("php://input"),true);
   if(isset($datos['nombre'])&&isset($datos['precio'])){
    $result=modelProducto::insertarProducto($datos['nombre'],$datos['precio']);
    if($result)
    {
        http_response_code(201);
        echo json_encode(["success"=>true,"message"=>"Producto insertado"]);
    }
    else{
        http_response_code(500);
        json_encode(["error"=>"Error al insertar el producto"]);
    }
   }
   else{
    http_response_code(404);
    json_encode(["error"=>"Datos incompletos"]);
   }
        break;
    }
    case 'PUT':{
        if(isset($_GET['id']))
        {
         $datos= json_decode(file_get_contents("php://input"));
         if(isset($datos['nombre'])&&isset($datos['precio']))
         {
            $resultado=modelProducto::actualizarProducto($_GET['id'],$datos['nombre'],$datos['precio']);
            if($resultado)
            {
                http_response_code(201);
                json_encode(["success"=>true, "message"=>"producto actualizado"]);
            }
            else{
                http_response_code(500);
                json_encode(["error"=>"no se pudo actualizar el producto"]);
            }
         }
         else{
            http_response_code(404);
            json_encode(["error"=>"datos incompletos"]);
         }
        }
        else{
            http_response_code(404);
            json_encode(["error"=>"No se ha proporcionado el id"]);
        }

        break;
    }
    case 'PATCH':{
        break;
    }
    case 'DELETE':{
        if(isset($_GET['id'])){
        $resultado=modelProductos::eliminarProducto($_GET['id']);
        if($resultado)
        {
            http_response_code(201);
            echo json_encode(["success"=>true,"message"=>"prpducto eliminado"]);
        }
        }
        else{
            http_response_code(404);
            json_encode(["error"=>"No ha proporcionado el id"]);
        }
        break;
    }
    default:{
        http_response_code(405);
        echo json_encode(["error"=>"Método no permitido"]);
     break;
    }

}





































?>