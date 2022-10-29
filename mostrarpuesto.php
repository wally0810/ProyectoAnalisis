



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Puesto</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="./css/Mostrar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body style="margin: 50px;">
    
    <h1><a href="administracion.php"> Lista De Puestos</a></h1>
    <table class="table">
    <thead>
    <tr>
        <th>Id Puesto</th>
        <th>Nombre Puesto</th>
        <th>Descripción Puesto</th>
        <th>Acción</th>
    </tr>
    </thead>
    <tbody>
      <?php
        include_once("db.php");
        $sql="SELECT *FROM puestos";
        $result=mysqli_query($conexion, $sql);
        while($mostrar= mysqli_fetch_array($result)){
      ?>
        <tr>
            <td><?php echo $mostrar['Id_puesto'] ?></td>
            <td><?php echo $mostrar['nombre'] ?></td>
            <td><?php echo $mostrar['descripcion'] ?></td>
            <td>
            <a class='btn btn-primary btn btn-sm' href='editarpuesto.php?
            id=<?php echo $mostrar['Id_puesto'] ?>&
            nom=<?php echo $mostrar['nombre'] ?>&
            descrip=<?php echo $mostrar['descripcion'] ?>
            
            '>Actualizar</a>
            <a class='btn btn-primary btn btn-sm' href="deletepuesto.php? id=<?php echo $mostrar['Id_puesto'] ?>">Eliminar</a>
            </td>
        </tr>";
<?php
        }

     ?>
    </tbody>
    </table>
    <a class='btn btn-primary btn btn-sm' href="reportepuestos.php? ">Imprimir</a>
</body>
</html>