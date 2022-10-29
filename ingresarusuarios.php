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
<?php
include_once("db.php");
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
    <form name="" action="registrarusuarios.php" method="post" >
    <h1><a href="usuarios.php"> Registro De Usuarios</a></h1>
    <p>Ingrese Su Usuario</p>
             <input type="text" id="" name="fg" placeholder="" required><i class="validation"><span></span><span></span></i>
        
    <p>Ingrese su contraseña</p>
             <input type="password" id="" name="tg" placeholder="" required><i class="validation"><span></span><span></span></i>
        
    <p>Nombre Completo</p>
             <input type="text" id="" name="dg" placeholder="" required><i class="validation"><span></span><span></span></i>
        
    <p>Empleado</p>
    <select name="rh" >
            <?php
            $sql='SELECT *FROM recursoshumanos';
            $query=mysqli_query($conexion,$sql);
            while($resultado=mysqli_fetch_array($query)){
                $idempleado=$resultado['Id_empleado'];
                $nombreempleado=$resultado['nombre'];
                ?>
                <option value="<?php echo $idempleado ?> "><?php echo $nombreempleado?> </option>
                <?php
            }
            

            ?>
            
           </select></br>
        
    <p>Puesto</p>
    <select name="pt" >
            <?php
            $sql='SELECT *FROM puestos';
            $query=mysqli_query($conexion,$sql);
            while($resultado=mysqli_fetch_array($query)){
                $idpuesto=$resultado['Id_puesto'];
                $nombre=$resultado['nombre'];
                ?>
                <option value="<?php echo $idpuesto ?> "><?php echo $nombre?> </option>
                <?php
            }
            

            ?>
            
           </select></br>
        
    <p>Telefono Personal</p>
            <input type="number" id=""  name="tel" placeholder="" required><i class="validation"><span></span><span></span></i>
        
           <p class="center-content">
           <input type="submit"  value="Registrar"></br>
        </p>
        
        
             <input type="hidden" id="nempleado" name="ie" value="<?php echo utf8_decode($row['Id_usuario']);?>" placeholder="" required><i class="validation"><span></span><span></span></i>
             <input type="hidden" id="nempleado" name="ne" value="<?php echo utf8_decode($row['nombre']);?>" placeholder="" required><i class="validation"><span></span><span></span></i>
       

    </form>

</body>
</html>