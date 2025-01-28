<?php 
session_start();
include "../models/modelEmpleados.php";

/*Lista todos los empleados*/
function mostrarEmpleados()
{
    $empleados = modelEmpleados::mostrarTodos(); 
    include "../views/showListaEmpleados.php";
}


/*Muestra un empleado*/

function muestraUnEmpleado($id)
{
    $empleado = modelEmpleados::mostrarUnEmpleado($id); 
    include "../views/showEmpleado.php";
}

/*Eliminar un empleado*/

function eliminaEmpleado($id)
{
    $eliminado=modelEmpleados::eliminarEmpleado($_POST['idEliminar']); 
 
    if($eliminado==1)
    {
        echo "Empleado eliminado";
    }
    else{
        echo "No se ha podido eliminar el empleado";
    }
    

   // include "../views/showListaEmpleados.php";
}


/*Insertar un empleado*/

function insertarEmpleado()
{
    $insertado=modelEmpleados::insertarEmpleado($_POST['nombre'],$_POST['apellido'],$_POST['salario'],$_POST['fecha_contratacion'],$_POST['puesto']); 
    if($insertado==1)
    {
        echo "Empleado insertado";
    }
    else{
        echo "No se ha podido insertar el empleado";
    }
    
  //  include "../views/showListaEmpleados.php";
}






if(isset($_SESSION['usuario']))
{

mostrarEmpleados(); /*Lista todos los empleados*/

/*Mostrar un empleado */
if(isset($_POST['mostraruno']))
{
    if(isset($_POST['idE']))
    {
        muestraUnEmpleado($_POST['idE']);        
    }
  
}

/*Eliminar empleado */
if(isset($_POST['eliminar']))
{
    if(isset($_POST['idEliminar']))
    {
        eliminaEmpleado($_POST['idEliminar']);
    }
  
}


/*Insertar empleado */
if(isset($_POST['insertar']))
{
   
       insertarEmpleado();
    
  
}



}
else{
    include "../index.php";
}

?>