<?php
include "../models/modelMatriculas.php";

header('Content-Type: text/html; charset=UTF-8');
header('Content-Type: application/json;  charset=UTF-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, DELETE');
header('Access-Control-Allow-Headers: Content-Type, Authorization');

$method=$_SERVER['REQUEST_METHOD'];

switch($method)
{
case 'GET':
    $matriculas= modelMatriculas::mostrarTodasMatriculas();
    if($matriculas)
    {
        http_response_code(202);
        include "../views/viewMatricula.php";
       // echo json_encode(["success"=>true,"data"=>$matriculas]);
    }
    else{
        http_response_code(404);
        echo json_encode(["error"=>"No hay matriculas disponibles"]);
    }
    break;
case 'POST':
    $datos= json_decode(file_get_contents("php://input"),true);
    if(isset($datos['nia'])&&isset($datos['codigo'])&&isset($datos['anyo']))
    {
     $respuesta= modelMatriculas::insertarMatricula($datos['nia'],$datos['codigo'],$datos['anyo']);
     if($respuesta)
     {
        http_response_code(201);
        echo json_encode(["success"=>true,"message"=>"Matrícula insertada correctamente"]);
     }
     else{
        http_response_code(404);
        echo json_encode(["error"=>"Error al insertar la matrícula"]);
     }

    }
    else{
        http_response_code(404);
        echo json_encode(["error"=>"Datos incompletos"]);
    } 
    break; 
 /*case 'PUT':
    # code...
    break;  
 case 'PATCH':
    # code...
    break;  */
 case 'DELETE':
    $datos= json_decode(file_get_contents("php://input"),true);
    if(isset($datos['nia'])&&isset($datos['codigo']))
    {
     $respuesta= modelMatriculas::eliminarMatricula($datos['nia'],$datos['codigo']);
     if($respuesta)
     {
        http_response_code(201);
        echo json_encode(["success"=>true,"message"=>"Matrícula eliminada correctamente"]);
     }
     else{
        http_response_code(404);
        echo json_encode(["error"=>"Error al eliminar la matrícula"]);
     }

    }
    else{
        http_response_code(404);
        echo json_encode(["error"=>"Datos incompletos"]);
    } 
    break;  
 default:{
    http_response_code(500);
    echo json_encode(["error"=>"El método indicado no existe"]);
    break;
 }          


}



?>
