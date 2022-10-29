<?php
include("db.php");
$id = $_POST['id'];
$nom = $_POST['nom'];
$tel = $_POST['tel'];
$dire = $_POST['dire'];
$fecha = $_POST['fecha'];
$nf = $_POST['nf'];
$tf = $_POST['tf'];
$cf = $_POST['cf'];

$sql = "UPDATE paciente set  nombre='$nom', telefono='$tel', direccion='$dire', fechanacimiento='$fecha',
        nombrefamiliar='$nf', telefonofamiliar='$tf', correofamiliar='$cf' where Id_paciente like $id";
$query= mysqli_query($conexion, $sql);

if(!$query){
echo "no se actualizó!";
?>
    <script src= "sweetalertError2.js"></script>
    <?php
}else{
    ?>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src= "sweetalertSucces.js"></script>
<?php
    header("location: mostrarpaciente.php");
    
}




?>