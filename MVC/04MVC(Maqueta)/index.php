<?php 
spl_autoload_register(function ($className){
    include "./controllers/$className.php";
});

$control= $_GET['control']??'CC_General';
$action= $_GET['action']??'default';

try{
    if(!class_exists($control))
    {
      throw new Exception("Controlador no encontrado");
    }
    else{
        $controladora= new $control();
    }

}catch(Exception $error)
{
    echo "Error: ".$error->getMessage();
}

$controladora->Ejecutar($action);

?>