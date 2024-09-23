

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas</title>
</head>
<body>
    <h1>Mostrar mayor nota</h1>
<?php 
$nota1=rand(0,10);  /*Número aleatorio de 0 a 10*/
$nota2=6;
$nota3=8.1;

if(($nota1>$nota2)&&($nota1>$nota3))
{
    echo "<p>La nota mayor es: $nota1 </p>";
}
elseif(($nota2>$nota1)&&($nota2>$nota3))
{
    echo "<p>La nota mayor es: $nota2</p>";

}
else{
    echo "<p>La nota mayor es: $nota3 </p>";
}

?>
</body>
</html>

