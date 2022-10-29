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
    <h1><a href="especialistas.php"> Lista De Fichas Médicas</a></h1>
    <table class="table">
    <thead>
    <tr>
        <th>Id Ficha</th>
        <th>Fecha De Visita</th>
        <th>Id Médico</th>
        <th>Médico Tratante</th>
        <th>Especialidad</th>
        <th>Exámenes realizados</th>
        <th>Resultados De Exámenes</th>
        <th>Diagnostico</th>
        <th>Receta</th>
        <th>Observaciones</th>
        <th>Id Paciente</th>
        <th>Nombre Paciente</th>
        <th>Nombre Familiar</th>
        <th>Correo Familiar</th>
        <th>Acción</th>
    </tr>
    </thead>
    <tbody>
      <?php
        include_once("db.php");
        $sql="SELECT *FROM fichamedica";
        $result=mysqli_query($conexion, $sql);
        while($mostrar= mysqli_fetch_array($result)){
      ?>
        <tr>
            <td><?php echo $mostrar['Id_ficha'] ?></td>
            <td><?php echo $mostrar['fechavisita'] ?></td>
            <td><?php echo $mostrar['Id_empleado'] ?></td>
            <td><?php echo $mostrar['medicotratante'] ?></td>
            <td><?php echo $mostrar['especialidad'] ?></td>
            <td><?php echo $mostrar['examenesrealizados'] ?></td>
            <td><?php echo $mostrar['resultadoexamenes'] ?></td>
            <td><?php echo $mostrar['diagnostico'] ?></td>
            <td><?php echo $mostrar['receta'] ?></td>
            <td><?php echo $mostrar['observaciones'] ?></td>
            <td><?php echo $mostrar['Id_paciente'] ?></td>
            <td><?php echo $mostrar['nombrepaciente'] ?></td>
            <td><?php echo $mostrar['nombrefamiliar'] ?></td>
            <td><?php echo $mostrar['correofamiliar'] ?></td>
            <td>
            <a class='btn btn-primary btn btn-sm' href="editarficha.php?
            if=<?php echo $mostrar['Id_ficha'] ?>&
            fv=<?php echo $mostrar['fechavisita'] ?>&
            ie=<?php echo $mostrar['Id_empleado'] ?>&
            mt=<?php echo $mostrar['medicotratante'] ?>&
            esp=<?php echo $mostrar['especialidad'] ?>&
            er=<?php echo $mostrar['examenesrealizados'] ?>&
            re=<?php echo $mostrar['resultadoexamenes'] ?>&
            diag=<?php echo $mostrar['diagnostico'] ?>&
            rec=<?php echo $mostrar['receta'] ?>&
            obs=<?php echo $mostrar['observaciones'] ?>&
            id=<?php echo $mostrar['Id_paciente'] ?>&
            nom=<?php echo $mostrar['nombrepaciente'] ?>&
            nf=<?php echo $mostrar['nombrefamiliar'] ?>&    
            cf=<?php echo $mostrar['correofamiliar'] ?>
            
            ">Actualizar</a>
            <a class='btn btn-primary btn btn-sm' href="deleteficha.php? id=<?php echo $mostrar['Id_ficha'] ?>">Eliminar</a>
            </td>
        </tr>";
<?php
        }

     ?>
    </tbody>
    </table>
    
</body>
</html>