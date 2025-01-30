<?php
include "../models/modelAsignaturas.php";

header('Content-Type: text/html; charset=UTF-8');
header('Content-Type: application/json;  charset=UTF-8');
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods:GET,POST,DELETE');
header('Access-Control-Allow-Headers:Content-Type,Authorization');

$method=$_SERVER['REQUEST_METHOD'];

switch($method)
{
case 'GET':
    $asignaturas=modelAsignatura::mostrarTodasAsignaturas();
    if($asignaturas)
    {
        http_response_code(202);
        echo json_encode(["success"=>true,"data"=>$asignaturas]);
    }
    else{
        http_response_code(404);
        echo json_encode(["error"=>"No hay asignaturas disponibles"]);
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
