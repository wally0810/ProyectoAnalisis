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
     <!-- mostramos las fichas registradas y guardadas en la base de datos y en el historial medico-->
    <h1><a href="laboratorio.php">Ingresar Resultados</a></h1>
    <table class="table">
    <thead>
    <tr>
        <th>Id examen</th>
        <th>Fecha De Solicitud</th>
        <th>Id Médico</th>
        <th>Médico Tratante</th>
        <th>Examen</th>
        <th>Resultados</th>
        <th>Id Paciente</th>
        <th>Nombre Paciente</th>
        <th>Estado</th>
        <th>Acción</th>
    </tr>
    </thead>
    <tbody>
      <?php
        include_once("db.php");
        $sql="SELECT *FROM solicitudexamen ORDER BY estado desc";
        $result=mysqli_query($conexion, $sql);
        while($mostrar= mysqli_fetch_array($result)){
      ?>
        <tr>
            <td><?php echo $mostrar['Id_examen'] ?></td>
            <td><?php echo $mostrar['fechasolicitud'] ?></td>
            <td><?php echo $mostrar['Id_empleado'] ?></td>
            <td><?php echo $mostrar['nombredoctor'] ?></td>
            <td><?php echo $mostrar['examen'] ?></td>
            <td><?php echo $mostrar['resultado'] ?></td>
            <td><?php echo $mostrar['Id_paciente'] ?></td>
            <td><?php echo $mostrar['nombrepaciente'] ?></td>
            <td><?php echo $mostrar['estado'] ?></td>
            
            <td>
            <a class='btn btn-primary btn btn-sm' href="editarexamen.php?
            if=<?php echo $mostrar['Id_examen'] ?>&
            fv=<?php echo $mostrar['fechasolicitud'] ?>&
            ie=<?php echo $mostrar['Id_empleado'] ?>&
            nd=<?php echo $mostrar['nombredoctor'] ?>&
            exa=<?php echo $mostrar['examen'] ?>&
            res=<?php echo $mostrar['resultado'] ?>&
            id=<?php echo $mostrar['Id_paciente'] ?>&
            nom=<?php echo $mostrar['nombrepaciente'] ?>&  
            est=<?php echo $mostrar['estado']?>
            
            ">Actualizar</a>
            <a class='btn btn-primary btn btn-sm' href="deleteexamen.php? id=<?php echo $mostrar['Id_examen'] ?>">Eliminar</a>
            </td>
        </tr>";
<?php
        }

     ?>
    </tbody>
    </table>
    
</body>
</html>