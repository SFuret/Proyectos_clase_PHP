<?php 
/*Compruebo que la sessión esté creada */
if(!isset($_SESSION['usuario']))
{
    header("Location: login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas - Mis notas</title>

    <style>
        form {
            position: relative;
        }
        button {
            width: 120px;
            height: 50px;
            text-align: center;
            line-height: 50px;
            background-color: #556871;
            color: white;
            border: 0;
            cursor: pointer;
            position: absolute;
            bottom: 0;
        }
        textarea {
            margin-right: 10px;
            width: 400px;
            height: 150px;
        }
    </style>
</head> 
<body> 
    <h1>Mis sesión</h1> 
    <p>Bienvenid@, <?php echo $_SESSION['usuario'];?></p> 
    <br><br>
    <form action="../controlls/insertarUsuario.php" method="post">
        <input type="text" name="nombre" placeholder="Nombre"><br><br>
        <input type="text" name="user" placeholder="Usuario"><br><br>
        <input type="text" name="pass" placeholder="Contraseña"><br><br>
        <input type="text" name="rol" placeholder="Rol"><br><br>
        <br><br><br>
        <button>Insertar</button>
    </form>
    
<br><br>
    <form action="../controlls/">
        <button>Listar Usuarios</button>
    </form>

        
    <a href= "./logout.php">Cerrar Sesión</a> 
   
    
   
</body> 
</html> 
 