<?php 

/*Establecer una comexión a la BBDD*/
function establecerConexion(){    
$conexion= new mysqli("127.0.0.1","phpmyadmin","1234","Prueba");
if($conexion->connect_errno)
{
    echo "Error de conexión".$conexion->connect_errno;
    exit;/*no sigo si no se puede establecer la conexión*/
}
else{
    echo "conexión establecida";
}

return $conexion;
}


/*Cerrar la conexión a la BBDD*/

function cerrarConexion($conexion)
{
 $conexion->close();
}


/*Insertar */

function insertar($conexion, $consulta)
{

    if($conexion->query($consulta))
    {
        echo "<p>Registro relizado con éxito</p>";
    }
    else{
         
        echo "<p>Error al insertar:{$conexion->error}</p>";
    }

    $conexion->close();/*Cierro la conexión*/

    /*Nota: cada vez que voy a hacer una consulta debo abrir y cerrar la conexión*/
}


?>