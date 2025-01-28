<?php 

spl_autoload_register(function($control){
include "controllers/$control.php";
});

$control= $_GET['control']??'controlInicio';
$action=$_GET['action']??'default';

try{
if(!class_exists($control))
{
throw new Exception("No existe la clase controladora llamada");
}
else{
    $controller=new $control();
}


}catch(Exception $error){
echo "Error: ".$error->getMessage();
};

//llamar al método ejecutar

$controller->Ejecutar($action);
?>