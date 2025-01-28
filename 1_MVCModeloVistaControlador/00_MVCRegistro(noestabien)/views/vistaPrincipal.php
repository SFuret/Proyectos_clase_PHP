<?php 
session_start();

/*Compruebo que la sessión esté creada */
if(!isset($_SESSION['usuario']))
{
    header("Location: views/login.php");
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
    <h1>Mis notas</h1> 
    <p>Bienvenid@, <?php echo $_SESSION['usuario'];?></p> 

      


    <a href= "controlls/logout.php">Cerrar Sesión</a> 
    <h2>Añadir Nota</h2> 
    <form action="" method="POST"> 
        <textarea name="note" required></textarea> 
        <button type="submit">Agregar Nota</button> 
    </form> 
    <h2>Listado de notas</h2> 
    <ul> 
   
    <li>NOTA - FECHA_CREACIÓN</li> 
    </ul> 
</body> 
</html> 
 