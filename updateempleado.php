<?php
include("db.php");
$id = $_POST['id'];
$nom = $_POST['nom'];
$tel = $_POST['tel'];
$dire = $_POST['dire'];
$fecha = $_POST['fecha'];
$sal = $_POST['sal'];
$idp = $_POST['idp'];

$sql = "UPDATE recursoshumanos set  nombre='$nom', telefono='$tel', direccion='$dire', fechanacimiento='$fecha',
        salario='$sal', Id_puesto='$idp' where Id_empleado like $id";
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
    header("location: mostrarempleado.php");
    
}




?>