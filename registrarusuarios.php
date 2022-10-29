<?php

include("db.php");

$fg= $_POST['fg'];
$tg= $_POST['tg'];
$dg= $_POST['dg'];
$rh= $_POST['rh'];
$pt = $_POST['pt'];
$tel = $_POST['tel'];



$sql="INSERT INTO usuario (Id_usuario, usuario ,  password , nombre, Id_empleado, Id_puesto, telefono)
 VALUES (NULL, '$fg','$tg','$dg', '$rh', '$pt', '$tel');";


 if(mysqli_query($conexion,$sql) ){
    include("ingresarusuarios.php")
    ?>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src= "sweetalertSucces.js"></script>
<?php
    }else{
      include("ingresarusuarios.php")
      ?>
    <script src= "sweetalertError2.js"></script>
    <?php
 }
 mysqli_close($conexion);

?>