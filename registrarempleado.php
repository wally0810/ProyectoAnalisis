<?php

include("db.php");

$nombreE= $_POST['nempleado'];
$telefonoE= $_POST['templeado'];
$direccionE= $_POST['dempleado'];
$fechanE= $_POST['fempleado'];
$salarioE = $_POST['salarioe'];
$puestoE = $_POST['puesto'];



$sql="INSERT INTO recursoshumanos (Id_empleado, nombre, telefono, direccion, fechanacimiento, salario,Id_puesto)
 VALUES (NULL, '$nombreE','$telefonoE','$direccionE', '$fechanE', '$salarioE', '$puestoE');";


 if(mysqli_query($conexion,$sql) ){
    include("ingresarempleados.php")
    ?>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src= "sweetalertSucces.js"></script>
<?php
    }else{
      include("ingresarempleados.php")
      ?>
    <script src= "sweetalertError2.js"></script>
    <?php
 }
 mysqli_close($conexion);

?>