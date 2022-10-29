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
    <title>gasto</title>
    <link rel="stylesheet" href="./css/insertar.css">
</head>
<body>
    <form name="" action="registrargastos.php" method="post" >
    <h1><a href="caja.php"> Registro De Gastos</a></h1>
    <p> Fecha De Gasto:</p>
             <input type="date" id="" name="fg" placeholder="" required><i class="validation"><span></span><span></span></i>
        
    <p> Tipo De Gasto:</p>
             <input type="text" id="" name="tg" placeholder="" required><i class="validation"><span></span><span></span></i>
        
    <p> Detalle De Gasto:</p>
             <input type="text" id="" name="dg" placeholder="" required><i class="validation"><span></span><span></span></i>
        
    <p> Destino de Gasto:</p>
             <input type="text" id="" name="dg" placeholder="" required><i class="validation"><span></span><span></span></i>
        
        
    <p>Valor De Gasto: </p>
            <input type="number" id="" step= ".002" name="vg" placeholder="" required><i class="validation"><span></span><span></span></i>
        
        
           <p class="center-content">
           <input type="submit"  value="Registrar"></br>
        </p>
        
        
             <input type="hidden" id="nempleado" name="ie" value="<?php echo utf8_decode($row['Id_usuario']);?>" placeholder="" required><i class="validation"><span></span><span></span></i>
             <input type="hidden" id="nempleado" name="ne" value="<?php echo utf8_decode($row['nombre']);?>" placeholder="" required><i class="validation"><span></span><span></span></i>
       

    </form>

</body>
</html>