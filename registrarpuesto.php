<?php
include("db.php");
$nombrep= $_POST['npuesto'];
$descripcionp= $_POST['dpuesto'];



$sql="INSERT INTO puestos (Id_puesto, nombre, descripcion)
 VALUES (NULL, '$nombrep', '$descripcionp');";


 if(mysqli_query($conexion,$sql) ){
    include("ingresarpuestos.html")
    ?>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src= "sweetalertSucces.js"></script>
<?php
    }else{
      include("ingresarpuestos.html")
      ?>
    <script src= "sweetalertError2.js"></script>
    <?php
 }
 mysqli_close($conexion);
?>