<?php
include("db.php");
//recibimos los datos de la ficha medica
$fvis= $_POST['fvis'];
$cd= $_POST['cd'];
$nmt= $_POST['nmt'];
$puestos= $_POST['puestos'];
$er= $_POST['er'];
$re= $_POST['re'];
$diag= $_POST['diag'];
$rec= $_POST['rec'];
$obs= $_POST['obs'];
$id= $_POST['id'];
$nom= $_POST['nom'];
$nf= $_POST['nf'];
$cf= $_POST['cf'];

//echo "$fvis....$cd.......$nmt.....$puestos.........$er..........$re.....$diag.....$rec......$obs........$id.........$nom.......$nf.........$cf";

//consulta para ingresar datos de la ficha a base de datos



$sql="INSERT INTO fichamedica (Id_ficha, fechavisita, Id_empleado, medicotratante, especialidad, examenesrealizados,resultadoexamenes,diagnostico,receta,observaciones,Id_paciente,nombrepaciente,nombrefamiliar,correofamiliar)
VALUES (NULL, '$fvis','$cd','$nmt', '$puestos', '$er', '$re','$diag','$rec','$obs','$id','$nom', '$nf', '$cf');";


if(mysqli_query($conexion,$sql) ){
   include("mostrarficha.php")
   ?>
   <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   <script src= "sweetalertSucces.js"></script>
<?php
   }else{
     include("mostrarficha.php")
     ?>
   <script src= "sweetalertError2.js"></script>
   <?php
}
mysqli_close($conexion);


?>
