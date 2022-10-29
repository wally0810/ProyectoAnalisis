


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Empleado</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="./css/Mostrar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body style="margin: 50px;">
    
    <h1><a href="administracion.php"> Lista De Empleados</a></h1>
    <table class="table">
    <thead>
    <tr>
        <th>Id Empleado</th>
        <th>Nombre Empleado</th>
        <th>Telefono</th>
        <th>Dirección</th>
        <th>Fecha De Nacimiento</th>
        <th>Salario</th>
        <th>Id Puesto</th>
        <th>Acción</th>
    </tr>
    </thead>
    <tbody>
      <?php
        include_once("db.php");
        $sql="SELECT *FROM recursoshumanos";
        $result=mysqli_query($conexion, $sql);
        while($mostrar= mysqli_fetch_array($result)){
      ?>
        <tr>
            <td><?php echo $mostrar['Id_empleado'] ?></td>
            <td><?php echo $mostrar['nombre'] ?></td>
            <td><?php echo $mostrar['telefono'] ?></td>
            <td><?php echo $mostrar['direccion'] ?></td>
            <td><?php echo $mostrar['fechanacimiento'] ?></td>
            <td><?php echo $mostrar['salario'] ?></td>
            <td><?php echo $mostrar['Id_puesto'] ?></td>
            <td>
            <a class='btn btn-primary btn btn-sm' href='editarempleado.php?
            id=<?php echo $mostrar['Id_puesto'] ?>&
            nom=<?php echo $mostrar['nombre'] ?>&
            tel=<?php echo $mostrar['telefono'] ?>&
            dire=<?php echo $mostrar['direccion'] ?>&
            fecha=<?php echo $mostrar['fechanacimiento'] ?>&
            sal=<?php echo $mostrar['salario'] ?>&
            idp=<?php echo $mostrar['Id_puesto'] ?>
            
            '>Actualizar</a>
            <a class='btn btn-primary btn btn-sm' href="deleteempleado.php? id=<?php echo $mostrar['Id_empleado'] ?>">Eliminar</a>
            </td>
        </tr>";
<?php
        }

     ?>
    </tbody>
    </table>
    <a class='btn btn-primary btn btn-sm' href="reporteempleados.php? ">Imprimir</a>
</body>
</html>