<?php
include("db.php");
//recibimos los datos de la ficha medica
$fvis= $_POST['fvis'];
$cd= $_POST['cd'];
$nmt= $_POST['nmt'];
$exa=$_POST['exa'];
$id= $_POST['id'];
$nom= $_POST['nom'];

$sql="INSERT INTO solicitudexamen (Id_examen, fechasolicitud, Id_empleado, nombredoctor, examen, resultado, Id_paciente, nombrepaciente, estado)
VALUES (NULL, '$fvis', '$cd', '$nmt', '$exa', '', '$id', '$nom', 'PENDIENTE');";
if(mysqli_query($conexion,$sql) ){
   include("mostrarexamenes.php")
   ?>
   <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   <script src= "sweetalertSucces.js"></script>
<?php
   }else{
     include("mostrarexamenes.php")
     ?>
   <script src= "sweetalertError2.js"></script>
   <?php
}
mysqli_close($conexion);

?>