<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Paciente</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="./css/Mostrar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body style="margin: 50px;">
    
    <h1><a href="administracion.php"> Lista De Ingresos</a></h1>
    <table class="table">
    <thead>
    <tr>
        <th>Id Ingreso</th>
        <th>Tipo de Ingreso</th>
        <th>Detalle Ingreso</th>
        <th>Origen Ingreso</th>
        <th>Valor Ingreso</th>
        <th>Fecha Ingreso</th>
        <th>Id Empleado</th>
        <th>Nombre Empleado</th>
        <th>Acción</th>
    </tr>
    </thead>
    <tbody>
      <?php
        include_once("db.php");
        $sql="SELECT *FROM ingresos";
        $result=mysqli_query($conexion, $sql);
        while($mostrar= mysqli_fetch_array($result)){
      ?>
        <tr>
            <td><?php echo $mostrar['Id_ingreso'] ?></td>
            <td><?php echo $mostrar['tipoingreso'] ?></td>
            <td><?php echo $mostrar['detalleingreso'] ?></td>
            <td><?php echo $mostrar['origeningreso'] ?></td>
            <td><?php echo $mostrar['valoringreso'] ?></td>
            <td><?php echo $mostrar['fechaingreso'] ?></td>
            <td><?php echo $mostrar['Id_empleado'] ?></td>
            <td><?php echo $mostrar['nombreempleado'] ?></td>
            
            <td>

            <a class='btn btn-primary btn btn-sm' href="editaringreso.php?
            id=<?php echo $mostrar['Id_ingreso'] ?>&
            nom=<?php echo $mostrar['tipoingreso'] ?>&
            tel=<?php echo $mostrar['detalleingreso'] ?>&
            dire=<?php echo $mostrar['origeningreso'] ?>&
            fecha=<?php echo $mostrar['valoringreso'] ?>&
            nf=<?php echo $mostrar['fechaingreso'] ?>&
            tf=<?php echo $mostrar['Id_empleado'] ?>&
            cf=<?php echo $mostrar['nombreempleado'] ?>
            
            ">Actualizar</a><br><br>
            <a class='btn btn-primary btn btn-sm' href="deleteingresos.php? id=<?php echo $mostrar['Id_ingreso'] ?>">Eliminar</a><br>
            
            
            </td>
            
        </tr>";
<?php
        }

     ?>
    </tbody>
    </table>
    
    <a class='btn btn-primary btn btn-sm' href="reporteingresos.php? ">Imprimir</a>
    
    
</body>
</html>