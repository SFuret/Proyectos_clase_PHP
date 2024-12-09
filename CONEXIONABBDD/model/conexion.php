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

function insertarEliminarModificar($conexion,$consulta)
{

    if($conexion->query($consulta))
    {
        return true;
    }
    else{
         
        echo "<p>Error:{$conexion->error}</p>";
        return false;
    }

    /*Nota: cada vez que voy a hacer una consulta debo abrir y cerrar la conexión*/
}

/*Obtener*/

function obtenerValores($conexion,$consulta)
{
$resultado= $conexion->query($consulta);
$valoresArray=$resultado->fetch_all();
return $valoresArray;
}

?>