<?php
include("db.php");
$fi= $_POST['fg'];
$ti= $_POST['tg'];
$di= $_POST['dg'];
$oi= $_POST['dg'];
$vi= $_POST['vg'];
$ie= $_POST['ie'];
$ne= $_POST['ne'];




$sql="INSERT INTO gastos (Id_gasto, tipogasto, detallegasto, destinogasto, valorgasto, fechagasto, Id_empleado, nombreempleado)
 VALUES (NULL, '$ti','$di','$oi', '$vi', '$fi', '$ie','$ne');";


 if(mysqli_query($conexion,$sql) ){
    include("ingresargastos.php")
    ?>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src= "sweetalertSucces.js"></script>
<?php
    }else{
      include("ingresargastos.php")
      ?>
    <script src= "sweetalertError2.js"></script>
    <?php
 }
 mysqli_close($conexion);
?>