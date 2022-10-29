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
    
    <h1><a href="caja.php"> Lista De Gastos</a></h1>
    <table class="table">
    <thead>
    <tr>
        <th>Id Ingreso</th>
        <th>Tipo de Gasto</th>
        <th>Detalle Gasto</th>
        <th>Origen Gasto</th>
        <th>Valor Gasto</th>
        <th>Fecha Gasto</th>
        <th>Id Empleado</th>
        <th>Nombre Empleado</th>
        <th>Acción</th>
    </tr>
    </thead>
    <tbody>
      <?php
        include_once("db.php");
        $sql="SELECT *FROM gastos";
        $result=mysqli_query($conexion, $sql);
        while($mostrar= mysqli_fetch_array($result)){
      ?>
        <tr>
            <td><?php echo $mostrar['Id_gasto'] ?></td>
            <td><?php echo $mostrar['tipogasto'] ?></td>
            <td><?php echo $mostrar['detallegasto'] ?></td>
            <td><?php echo $mostrar['destinogasto'] ?></td>
            <td><?php echo $mostrar['valorgasto'] ?></td>
            <td><?php echo $mostrar['fechagasto'] ?></td>
            <td><?php echo $mostrar['Id_empleado'] ?></td>
            <td><?php echo $mostrar['nombreempleado'] ?></td>
            
            <td>

            <a class='btn btn-primary btn btn-sm' href="editargasto.php?
            id=<?php echo $mostrar['Id_gasto'] ?>&
            nom=<?php echo $mostrar['tipogasto'] ?>&
            tel=<?php echo $mostrar['detallegasto'] ?>&
            dire=<?php echo $mostrar['destinogasto'] ?>&
            fecha=<?php echo $mostrar['valorgasto'] ?>&
            nf=<?php echo $mostrar['fechagasto'] ?>&
            tf=<?php echo $mostrar['Id_empleado'] ?>&
            cf=<?php echo $mostrar['nombreempleado'] ?>
            
            ">Actualizar</a><br><br>
            <a class='btn btn-primary btn btn-sm' href="deletegastos.php? id=<?php echo $mostrar['Id_gasto'] ?>">Eliminar</a><br>
            
            
            </td>
            
        </tr>";
<?php
        }

     ?>
    </tbody>
    </table>
    
    <a class='btn btn-primary btn btn-sm' href="reportegastos.php? ">Imprimir</a>
    
    
</body>
</html>