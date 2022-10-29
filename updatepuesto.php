<?php
include("db.php");
$id = $_POST['id'];
$nom = $_POST['nom'];
$descrip = $_POST['descrip'];

$sql = "UPDATE puestos set  nombre='$nom', descripcion='$descrip' where Id_puesto like $id";
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
    header("location: mostrarpuesto.php");
    
}




?>