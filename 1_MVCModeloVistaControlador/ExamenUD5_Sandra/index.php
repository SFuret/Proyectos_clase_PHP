<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="controlls/controlLogin.php" method="POSt">
    <label for="usuario">Usuario</label>    
    <input type="text" name="usuario" id="usuario"><br><br>
    <label for="pass">Contraseña</label>
    <input type="text" name="pass" id="pass"><br><br>
    <button name="login">Entrar</button>
    </form>
    <br><br>
    <?php if(isset($errorLogin))
    {
        echo "<p>$errorLogin</p>";
    };?>
</body>
</html>