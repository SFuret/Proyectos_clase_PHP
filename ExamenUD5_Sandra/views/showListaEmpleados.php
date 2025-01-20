<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Lista de Empleados</title>
        <style>
            table,
            th,
            td {
                border: 1px solid black;
                border-collapse: collapse;
                padding: 5px;
            }

            .accion {
                display: block;
                margin-bottom: 10px;
            }
        </style>
    </head>

    <body>
        <h1>Lista de Empleados</h1>
        <?php 
        if(isset($empleados))
        {
        if(is_null($empleados))
        {
                 $empleados="No hay empleados almacenados";
        }
        else{
            ?>
            
            <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Salario</th>
                    <th>Fecha de Contratación</th>
                    <th>Puesto</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($empleados as $empleado)
                {?>
                <tr>
                    <td><?php echo $empleado["id"]; ?></td>
                    <td><?php echo $empleado["nombre"]; ?></td>
                    <td><?php echo $empleado["apellido"]; ?></td>
                    <td><?php echo $empleado["salario"]; ?></td>
                    <td><?php echo $empleado["fecha_contratacion"]; ?></td>
                    <td><?php echo $empleado["puesto"]; ?></td>
                    
                </tr>
                <?php 
            }
            ?>
            </tbody>
        </table>
        <?php
        }
    }
        ?>
  

        <a class="accion" href="../views/showInsertarEmpleado.php">Agregar nuevo empleado</a>
        <?php 
if(isset($insertado))
{
    if($insertado)
    {
        echo "Empleado insertado";
    }
    else{
        echo "No se ha podido insertar el empleado";
    }
    
}
   ?>    
        <a class="accion" href="">Actualizar salario empleados (salvo gerente)</a>
<br><br>
<br><br>
<table>
    <tr>
        <td> <form action="../controlls/controlEmpleados.php" method="POST">
    <legend> Ver datos de un empleado</legend>
    <input type="number" name="idE"><br><br>
    <button name="mostraruno">Mostrar Datos</button>
  </form></td>
        <td> <form action="../controlls/controlEmpleados.php" method="POST">
    <legend> Actualizar empleado</legend>
    <input type="number" name="idActualizar"><br><br>
    <button name="actualizar">Mostrar Datos</button>
  </form></td>
        <td> <form action="../controlls/controlEmpleados.php" method="POST">
    <legend> Eliminar empleado</legend>
    <input type="number" name="idEliminar"><br><br>
    <button name="eliminar">Eliminar</button>
  </form>
<label for="">

</label>
</td>
        <td></td>
    </tr>
</table>
 
 

<br><br>
<form action="../controlls/controlCerrarSesion.php" method="POST">
    <button name="cerrar">Cerrar Sesión</button>
</form>
    </body>
</html>