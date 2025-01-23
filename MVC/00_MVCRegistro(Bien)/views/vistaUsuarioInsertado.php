<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>
        <?php if ($resultInserta) {
            echo "Usuario insertado";
        } else {
            echo "Error al insertar usuario";
        } ?>
    </h2>
    <p><a href="../views/vistaPrincipal.php">Volver</a></p>
</body>

</html>