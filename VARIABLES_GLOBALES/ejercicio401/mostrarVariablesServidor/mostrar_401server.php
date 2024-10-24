<?php
// Mostrar los valores de $_SERVER. mostrará todos los valores asociados a la ejecución del script en tu servidor.
/*echo "<h1>Valores de \$_SERVER</h1>";
print_r($_SERVER); //contiene todo lo referente al servidor*/

echo "<br>";
print_r($_SERVER); //contiene todo lo referente al servidor*/

echo "<br><br>";
/*Variables del servidor*/
echo "nombre del script ejecutado, relativo al document root ".$_SERVER["PHP_SELF"]."<br>"; // /u4/401server.php
echo "Servidor web ".$_SERVER["SERVER_SOFTWARE"]."<br>"; // Apache/2.4.46 (Win64) OpenSSL/1.1.1g PHP/7.4.9
echo "Nombre del servidor domilia, alias DND".$_SERVER["SERVER_NAME"]."<br>"; // localhost
echo "Método por el que se envían los datos ".$_SERVER["REQUEST_METHOD"]."<br>"; // GET
echo "URI, sin el dominio ".$_SERVER["REQUEST_URI"]."<br>"; // /u4/401server.php?heroe=Batman
echo "todo lo que va después de ? en la URL ".$_SERVER["QUERY_STRING"]."<br>"; // heroe=Batman

/*
echo "ruta extra tras la petición ";
print_r($_SERVER['PATH_INFO']);//ruta extra tras la petición. Si la URL es http://www.php.com/php/pathInfo.php/algo/cosa?foo=bar, entonces $_SERVER['PATH_INFO'] será /algo/cosa.
echo "<br>"; 

echo "hostname que hizo la petición ".$_SERVER['PREMOTE_HOST']."<br>"; //hostname que hizo la petición
echo "IP del cliente ".$_SERVER['REMOTE_ADDR']."<br>";//IP del cliente
echo "tipo de autenticación ".$_SERVER['AUTH_TYPE']."<br>";// tipo de autenticación 
echo "Usuario autenticado ".$_SERVER['REMOTE_USER']."<br>"; //nombre del usuario autenticado*/

echo "agente (navegador) ";
print_r($_SERVER['HTTP_USER_AGENT']) ;
echo "<br>"; 


echo "página desde la que se hizo la petición ".$_SERVER['HTTP_REFERER']."<br>"; 

//Nota:Después de llenar y enviar el formulario formulario_completo.html, se mostrará la salida en 401server.php 
?>

