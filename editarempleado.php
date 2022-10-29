<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Empleado</title>
    <link rel="stylesheet" href="./css/insertar.css">
</head>
<body>
    <?php
    $id = $_GET['id'];
    $nom = $_GET['nom'];
    $tel = $_GET['tel'];
    $dire = $_GET['dire'];
    $fecha = $_GET['fecha'];
    $sal = $_GET['sal'];
    $idp = $_GET['idp'];

    ?>
    <form name="EditarEmpleado" action="updateempleado.php" method="post" >
        <h1><a href="mostrarempleado.php"> Modificar Empleado</a></h1>

        <p> Id Del Empleado:</p>
        <input type="text" id="id" name="id" placeholder="id"  value="<?=$id?>" readonly onmousedown="return false;">
                    
        <p> Nombre Del Empleado</p>
             <input type="text" id="nempleado" name="nom" placeholder="Nombre Empleado" value="<?=$nom?>">
        
        
        <p> Telefono:</p>
            <input type="number" id="templeado" name="tel" placeholder="Telefono" value="<?=$tel?>">

        <p> Dirección</p>
             <input type="text" id="dempleado" name="dire" placeholder="Dirección" value="<?=$dire?>">

        <p> Fecha De Nacimiento</p>
             <input type="date" id="fempleado" name="fecha" placeholder="Fecha De Nacimiento" value="<?=$fecha?>">

        <p> Salario:</p>
             <input type="number" id="sempleado" step= ".002" name="sal" placeholder="Salario" value="<?=$sal?>">

        <p> Id Puesto</p>
             <input type="text" id="ipuesto" name="idp" placeholder="Id Puesto" value="<?=$idp?>" readonly onmousedown="return false;">
        
        <p class="center-content">
           <input type="submit"  value="Actualizar">
           
        </p>
        <p class="center-content2">
        
        </form>
</body>
</html>