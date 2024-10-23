<?php
// Mostrar los valores de $_SERVER. mostrará todos los valores asociados a la ejecución del script en tu servidor.
/*echo "<h1>Valores de \$_SERVER</h1>";
print_r($_SERVER); //contiene todo lo referente al servidor*/

echo "<br>";
/*Muestra lo mismo pero separado*/
echo $_SERVER["PHP_SELF"]."<br>"; // /u4/401server.php
echo $_SERVER["SERVER_SOFTWARE"]."<br>"; // Apache/2.4.46 (Win64) OpenSSL/1.1.1g PHP/7.4.9
echo $_SERVER["SERVER_NAME"]."<br>"; // localhost
echo $_SERVER["REQUEST_METHOD"]."<br>"; // GET
echo $_SERVER["REQUEST_URI"]."<br>"; // /u4/401server.php?heroe=Batman
echo $_SERVER["QUERY_STRING"]."<br>"; // heroe=Batman

/*// Mostrar los parámetros recibidos por POST
if (!empty($_POST)) {
    echo "<h2>Datos recibidos por POST</h2>";
    print_r($_POST);
} else {
    echo "<p>No se recibieron parámetros por POST.</p>";
}

// Mostrar los archivos subidos
if (!empty($_FILES)) {
    echo "<h2>Archivos recibidos</h2>";
    print_r($_FILES);
} else {
    echo "<p>No se recibieron archivos.</p>";
}
*/
//Nota:Después de llenar y enviar el formulario formulario_completo.html, se mostrará la salida en 401server.php 
?>

