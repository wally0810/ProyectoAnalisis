<?php
include("db.php");
$nombrep= $_POST['npaciente'];
$direccionp= $_POST['dpaciente'];
$telefonop= $_POST['tpaciente'];
$fechanpaciente= $_POST['fpaciente'];
$fechaipaciente= $_POST['fipaciente'];
$nombref = $_POST['nfamiliar'];
$telefonof = $_POST['tfamiliar'];
$correof = $_POST['cfamiliar'];




$sql="INSERT INTO paciente (Id_paciente, nombre, direccion, telefono, fechanacimiento,fechaingreso, nombrefamiliar, telefonofamiliar, correofamiliar)
 VALUES (NULL, '$nombrep', '$direccionp','$telefonop', '$fechanpaciente',$fechaipaciente, '$nombref', '$telefonof', '$correof');";


    
 

    if(mysqli_query($conexion,$sql) ){
      include("paciente.html")
      ?>
      <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <script src= "sweetalertSucces.js"></script>
  <?php
      }else{
        include("paciente.html")
        ?>
      <script src= "sweetalertError2.js"></script>
      <?php
   }
 mysqli_close($conexion);
?>