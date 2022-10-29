<?php
include("db.php");
$if=$_POST['if'];
$fv=$_POST['fv'];
$ie=$_POST['ie'];
$nd=$_POST['nd'];
$exa=$_POST['exa'];
$res=$_POST['res'];
$id=$_POST['id'];
$nom= $_POST['nom'];
$est=$_POST['est'];
    $sql = "UPDATE solicitudexamen set  resultado='$res', estado='$est' where Id_examen like $if";
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
header("location: resultadosexamenes.php");

}



?>