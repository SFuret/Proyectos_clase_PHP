<?php
include "../models/modelEstudiantes.php";

header('Content-Type: text/html; charset=UTF-8');
header('Content-Type: application/json;  charset=UTF-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, DELETE');
header('Access-Control-Allow-Headers: Content-Type, Authorization');

$method=$_SERVER['REQUEST_METHOD'];

switch($method)
{
case 'GET':
    $alumnos=modelEstudiante::mostrarTodosEstudiantes();
    if($alumnos)
    {
        http_response_code(202);
        echo json_encode(["success"=>true,"data"=>$alumnos]);
    }
    else{
        http_response_code(404);
        echo json_encode(["error"=>"No hay alumnos disponibles"]);
    }
    break;
/*case 'POST':
   
    break; 
case 'PUT':
    # code...
    break;  
 case 'PATCH':
    # code...
    break;  
 case 'DELETE':
    # code...
    break;  */
 default:{
    http_response_code(500);
    echo json_encode(["error"=>"El método indicado no existe"]);
    break;
 }          


}



?>
