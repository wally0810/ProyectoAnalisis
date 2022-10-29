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
    
    <h1> Lista De Paciente</h1>
    <table class="table">
    <thead>
    <tr>
        <th>Id Paciente</th>
        <th>Nombre Paciente</th>
        <th>Dirección Paciente</th>
        <th>Telefono Paciente</th>
        <th>Fecha De Nacimiento</th>
        <th>Nombre Familiar</th>
        <th>Telefono Familiar</th>
        <th>Correo Familiar</th>
        <th>Acción</th>
    </tr>
    </thead>
    <tbody>
      <?php
        include_once("db.php");
        $sql="SELECT *FROM paciente";
        $result=mysqli_query($conexion, $sql);
        while($mostrar= mysqli_fetch_array($result)){
      ?>
        <tr>
            <td><?php echo $mostrar['Id_paciente'] ?></td>
            <td><?php echo $mostrar['nombre'] ?></td>
            <td><?php echo $mostrar['direccion'] ?></td>
            <td><?php echo $mostrar['telefono'] ?></td>
            <td><?php echo $mostrar['fechanacimiento'] ?></td>
            <td><?php echo $mostrar['nombrefamiliar'] ?></td>
            <td><?php echo $mostrar['telefonofamiliar'] ?></td>
            <td><?php echo $mostrar['correofamiliar'] ?></td>
            <td>
            <a class='btn btn-primary btn btn-sm' href="editarpaciente.php?
            id=<?php echo $mostrar['Id_paciente'] ?>&
            nom=<?php echo $mostrar['nombre'] ?>&
            tel=<?php echo $mostrar['telefono'] ?>&
            dire=<?php echo $mostrar['direccion'] ?>&
            fecha=<?php echo $mostrar['fechanacimiento'] ?>&
            nf=<?php echo $mostrar['nombrefamiliar'] ?>&
            tf=<?php echo $mostrar['telefonofamiliar'] ?>&
            cf=<?php echo $mostrar['correofamiliar'] ?>
            
            ">Actualizar</a><br><br>
            <a class='btn btn-primary btn btn-sm' href="deletepaciente.php? id=<?php echo $mostrar['Id_paciente'] ?>">Eliminar</a><br>
            
            
            </td>
            
        </tr>";
<?php
        }

     ?>
    </tbody>
    </table>
    
    <a class='btn btn-primary btn btn-sm' href="reportepacientes.php? ">Imprimir</a>
    
    
</body>
</html>