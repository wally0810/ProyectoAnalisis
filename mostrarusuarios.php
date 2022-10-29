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
    
    <h1><a href=""> Lista De Usuarios</a></h1>
    <table class="table">
    <thead>
    <tr>
        <th>Id Usuario</th>
        <th>Usuario </th>
        <th>Nombre</th>
        <th>Telefono</th>
      
      
    </tr>
    </thead>
    <tbody>
      <?php
        include_once("db.php");
        $sql="SELECT Id_usuario , usuario, nombre, telefono  FROM usuario";
        $result=mysqli_query($conexion, $sql);
        while($mostrar= mysqli_fetch_array($result)){
      ?>
        <tr>
            <td><?php echo $mostrar['Id_usuario'] ?></td>
            <td><?php echo $mostrar['usuario'] ?></td>
            <td><?php echo $mostrar['nombre'] ?></td>
            <td><?php echo $mostrar['telefono'] ?></td>
            
            
            
        </tr>";
<?php
        }

     ?>
    </tbody>
    </table>
 
    
    
</body>
</html>