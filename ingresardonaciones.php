<?php

include("db.php");
session_start();
if(!isset($_SESSION['user'])){
    header("location: ../Proyecto/index.php");
}
$iduser= $_SESSION['user'];

$sql= "SELECT Id_usuario ,usuario, nombre from usuario WHERE
        usuario = '$iduser'";

$resultado= $conexion->query($sql);
$row= $resultado->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso</title>
    <link rel="stylesheet" href="./css/insertar.css">
</head>
<body>
    <form name="" action="registraringreso.php" method="post" >
    <h1><a href="caja.php"> Registro De Ingresos</a></h1>
    <p> Fecha De Ingreso:</p>
             <input type="date" id="" name="fi" placeholder="" required><i class="validation"><span></span><span></span></i>
        
    <p> Tipo De Ingreso:</p>
             <input type="text" id="" name="ti" placeholder="" required><i class="validation"><span></span><span></span></i>
        
    <p> Detalle De Ingreso:</p>
             <input type="text" id="" name="di" placeholder="" required><i class="validation"><span></span><span></span></i>
        
    <p> Origen de Ingreso:</p>
             <input type="text" id="" name="oi" placeholder="" required><i class="validation"><span></span><span></span></i>
        
        
    <p>Valor De Ingreso: </p>
            <input type="number" id="" step= ".002" name="vi" placeholder="" required><i class="validation"><span></span><span></span></i>
        
        
           <p class="center-content">
           <input type="submit"  value="Registrar"></br>
        </p>
        
        
             <input type="hidden" id="nempleado" name="ie" value="<?php echo utf8_decode($row['Id_usuario']);?>" placeholder="" required><i class="validation"><span></span><span></span></i>
             <input type="hidden" id="nempleado" name="ne" value="<?php echo utf8_decode($row['nombre']);?>" placeholder="" required><i class="validation"><span></span><span></span></i>
       

    </form>

</body>
</html>