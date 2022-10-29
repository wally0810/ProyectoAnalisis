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
    $nf = $_GET['nf'];
    $tf = $_GET['tf'];
    $cf = $_GET['cf'];

    ?>
    <form name="" action="updategastos.php" method="post" >
        <h1><a href="mostrargastos.php"> Editar gasto</a></h1>

        <p> Id gasto</p>
        <input type="text" id="id" name="id" placeholder="id"  value="<?=$id?>" readonly onmousedown="return false;">
                    
        <p> Tipo Ingeso</p>
             <input type="text" id="npaciente" name="nom" placeholder="Nombre paciente" value="<?=$nom?>">
        
        <p> Detalle gasto</p>
             <input type="text" id="dpaciente" name="dire" placeholder="Dirección" value="<?=$dire?>">
        
        <p> Origen gasto</p>
            <input type="text" id="tpaciente" name="tel" placeholder="Telefono" value="<?=$tel?>">     

        <p> Valor gasto</p>
             <input type="text" id="fpaciente" name="fecha" placeholder="Fecha De Nacimiento" value="<?=$fecha?>">

        <p> Fecha gasto</p>
             <input type="date" id="nf" name="nf" placeholder="Nombre Familiar" value="<?=$nf?>">

        <p> Id Empleado</p>
             <input type="number" id="tfamiliar" name="tf" placeholder="Telefono" value="<?=$tf?>" readonly onmousedown="return false;">
        
        <p> Nombre Empleado</p>
             <input type="text" id="ipuesto" name="cf" placeholder="correo" value="<?=$cf?>" readonly onmousedown="return false;">
        <p class="center-content">
           <input type="submit"  value="Actualizar">
           
        </p>
        <p class="center-content2">
        
        </form>
</body>
</html>