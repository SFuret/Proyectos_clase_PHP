<?php 
/*Clase de abstracción de datos, la creo con funciones estáticas para que se comporte como una clase estática */


class ConectarBBDD
{

/*Establecer una comexión a la BBDD*/
public static function establecerConexion(){    
$conexion= new mysqli("127.0.0.1","phpmyadmin","1234","Prueba");
if($conexion->connect_errno)
{
    echo "Error de conexión".$conexion->connect_errno;
    exit;/*no sigo si no se puede establecer la conexión*/
}
return $conexion;
}


/*Cerrar la conexión a la BBDD*/

public static function cerrarConexion($conexion)
{
 $conexion->close();
}


/*Insertar */

public static function insertarEliminarModificar($conexion,$consulta)
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

/*Obtener y devolver un array numérico*/

public static function obtenerValores($conexion,$consulta)
{
$resultado= $conexion->query($consulta);
$valoresArray=[]; //le indico que va a ser un array donde voy a recoger el resultado
$valoresArray=$resultado->fetch_all();
return $valoresArray;
}

/*Obtener y devolver un array numérico*/

public static function obtenerValoresAsociativo($conexion,$consulta)
{
$resultado= $conexion->query($consulta);
$valoresArray=[]; //le indico que va a ser un array donde voy a recoger el resultado
$valoresArray=$resultado->fetch_all(MYSQLI_ASSOC);
return $valoresArray;
}



};

?>