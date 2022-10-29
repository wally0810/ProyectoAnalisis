<?php

include("db.php");

$fi= $_POST['fi'];
$ti= $_POST['ti'];
$di= $_POST['di'];
$oi= $_POST['oi'];
$vi= $_POST['vi'];
$ie= $_POST['ie'];
$ne= $_POST['ne'];



$sql="INSERT INTO ingresos (Id_ingreso, tipoingreso, detalleingreso, origeningreso, valoringreso, fechaingreso, Id_empleado, nombreempleado)
 VALUES (NULL, '$ti','$di','$oi', '$vi', '$fi', '$ie','$ne');";


 if(mysqli_query($conexion,$sql) ){
    include("ingresardonaciones.php")
    ?>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src= "sweetalertSucces.js"></script>
<?php
    }else{
      include("ingresardonaciones.php")
      ?>
    <script src= "sweetalertError2.js"></script>
    <?php
 }
 mysqli_close($conexion);
 ?>