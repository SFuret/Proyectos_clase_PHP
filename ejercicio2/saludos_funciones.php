<?php
function saludos($n)
{
    echo "Hola, $n!!!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saludos</title>
</head>
<body>
    
    <h3><?php saludos('Sandra')?></h3>
</body>
</html>