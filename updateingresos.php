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

$sql = "UPDATE ingresos set  tipoingreso='$nom', detalleingreso='$dire', origeningreso='$tel', valoringreso='$fecha',
        fechaingreso='$nf', Id_empleado='$tf', nombreempleado='$cf' where Id_ingreso like $id";
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
    header("location: mostraringresos.php");
    
}




?>