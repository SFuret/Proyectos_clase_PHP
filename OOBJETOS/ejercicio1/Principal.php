
<?php 
include_once 'estudiante.php';

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
</head>
<body>

<?php 
$estudiante= new Estudiante('01245876L','Marina','ma@gmail.es','1212L');
$persona= new Persona('45210365J','David','david@yahoo.com');

$estudiante->__setNumExpediente('H8888');
$persona->__setNombre('Daniel');

echo "<h3>El estudiante es:</h3>";
$estudiante->mostrar();
?>

<br>
<br>

<?php

echo "<h3>La persona es:</h3>";
$persona->mostrar();
?>



</body>
</html>