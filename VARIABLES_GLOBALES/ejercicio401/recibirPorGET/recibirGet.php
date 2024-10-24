<?php 

// Recibiendo los datos del formulario

/*Forma 1 de recibir*/
if(isset($_GET['nombre']))
{
    $nombre=$_GET['nombre'];  //nombre es el name del elemento html
}
else
{
    '';
}

/*Forma 1 de hacer lo mismo*/
$password = isset($_GET['password']) ? $_GET['password'] : '';
$genero = isset($_GET['genero']) ? $_GET['genero'] : '';

/*Forma 1 para recibir un elemento múltiple, como checkbox, en el name del elemento tengo que haber especificado 
que es un array name="intereses[]"*/

if(isset($_GET['intereses']))
{
    $intereses=$_GET['intereses']; //la variable va a contener un array
}
else
{
    $intereses=[];
}

foreach($intereses as $inter) //recorrer el array
{
echo "$inter";
}


/*Forma 2 para recibir un elemento múltiple, como checkbox, en el name del elemento tengo que haber especificado 
que es un array name="intereses[]"*/
$intereses = isset($_GET['intereses']) ? $_GET['intereses'] : [];




$pais = isset($_GET['pais']) ? $_GET['pais'] : '';
$comentarios = isset($_GET['comentarios']) ? $_GET['comentarios'] : '';
$fecha = isset($_GET['fecha']) ? $_GET['fecha'] : '';
$edad = isset($_GET['edad']) ? $_GET['edad'] : '';


// Mostrando los datos recibidos
echo "<h1>Datos recibidos:</h1>";
echo "Nombre: " . htmlspecialchars($nombre) . "<br>";
echo "Contraseña: " . htmlspecialchars($password) . "<br>";
echo "Género: " . htmlspecialchars($genero) . "<br>";
echo "Intereses: " . implode(", ", $intereses) . "<br>";
echo "País: " . htmlspecialchars($pais) . "<br>";
echo "Comentarios: " . htmlspecialchars($comentarios) . "<br>";
echo "Fecha de nacimiento: " . htmlspecialchars($fecha) . "<br>";
echo "Edad: " . htmlspecialchars($edad) . "<br>";

/*Nota: htmlspecialchars() es una función en PHP que convierte caracteres especiales en sus equivalentes de entidades HTML. 
Esto es útil para prevenir ataques de Cross-Site Scripting (XSS), que ocurren cuando un atacante intenta inyectar código 
malicioso (como JavaScript) en una página web mediante la entrada de datos del usuario.

Sin usar htmlspecialchars(), el navegador interpretaría el contenido como un script y lo ejecutaría, lo que podría comprometer la seguridad de la página.
 Pero si usamos htmlspecialchars(), PHP convierte los caracteres especiales en entidades HTML seguras

 Resumen:
 Objetivo: Proteger contra ataques XSS y evitar que caracteres especiales se interpreten como código HTML o JavaScript.
Uso: Se recomienda utilizar htmlspecialchars() cada vez que se muestre contenido enviado por el usuario en una página web 
para garantizar la seguridad.*/
?>