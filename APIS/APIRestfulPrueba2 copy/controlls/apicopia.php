<?php
include "../models/modelProductos.php";
header("Access-Control-Allow-Origin:*");
header("Access-Control-Allow-Method: GET,POST,PUT,PATCH,DELETE");
header("Access-Control-Allow-Headers:Control-Type");
header("Control-Type/application/json");

$method=$_SERVER['REQUEST_METHOD'];

if(basename($_SERVER['REQUEST_URI']!=="apicopia.php"))
{
  http_response_code(404);
  echo json_encode(["error"=>"El recurso no existe"]);
  exit();
}

switch($method){
  case 'GET':{
    //devuelve 1 producto
    if(isset($_GET['id']))
    {
      $producto=modelProductos::devolverUnProducto($_GET['id']);
      if($producto){
      echo json_encode(["success"=>true, "data"=>$producto]);
      }
      else{
        http_response_code(404);
        echo json_encode(["error"=>"Producto no encontrado"]);
      }
    }
    //devuelve todos los productos
    else
    {
      $productos=modelProductos::devolverProductos();
      if($productos)
      {
      echo json_encode(["success"=>true,"data"=>$productos]);
      }
      else{
        http_response_code(404);
        echo json_encode(["error"=>"No hay productos"]);
      }
    }  
    break;
  }
  case 'POST':{
$datos= json_decode(file_get_contents("php://input"),true);
if(isset($datos['nombre'])&&isset($datos['precio']))
{
  $respuesta=modelProductos::insertarProducto($datos['nombre'],$datos['precio']);
  if($respuesta){
    http_response_code(200);
    echo json_encode(["success"=>true,"message"=>"Producto insertado"]);
  }
  else{
    http_response_code(404);
    echo json_encode(["error"=>"No se ha podido insertar el producto"]);
  }
}
else{
  http_response_code(404);
  json_encode(["error"=>"datos incompletos"]);
}
    break;}


  case 'PUT':
    if(isset($_GET['id']))
    {
      $datos=json_decode(file_get_contents("php://input"),true);
      if(isset($datos['nombre'])&&isset($datos['precio']))
      {
        $respuesta=modelProductos::UpdateProducto($_GET['id'],$datos['nombre'],$datos['precio']);
        if($respuesta){
          http_response_code(201);
          json_encode(["success"=>true,"message"=>"Producto actualizado"]);
        }
        else
        {
          http_response_code(404);
          json_encode(["error"=>"No se puedo actualizar el producto"]);
        }
      }
      else{
        http_response_code(404);
        json_encode(["error"=>"datos incompletos"]);
      }
    }
    else{
      http_response_code(404);
      echo json_encode(["error"=>"Producto no encontrado"]);
    }
    break; 
    
   case 'PATCH':
  //codigo
    break; 

    case 'DELETE':
     if(isset($_GET['id']))
     {
      $respuesta=modelProductos::eliminarProducto($_GET['id']);
      if($respuesta)
      {
        http_response_code(201);
        echo json_encode(["success"=>true, "message"=>"Producto eliminado"]);

      }
      else{
        http_response_code(404);
        json_encode(["error"=>"Error al eliminar el producto"]  );
      }
     }
     else{
      http_response_code(404);
      json_encode(["error"=>"No se ha proporcionado la id"]);
     }
      break;
}

?>
