
<?php
include("db.php");
    $if = $_POST['if'];
    $fv = $_POST['fv'];
    $ie = $_POST['ie'];
    $mt = $_POST['mt'];
    $esp = $_POST['esp'];
    $er = $_POST['er'];
    $re = $_POST['re'];
    $diag = $_POST['diag'];
    $rec = $_POST['rec'];
    $obs = $_POST['obs'];
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $nf = $_POST['nf'];
    $cf = $_POST['cf'];

    $sql = "UPDATE fichamedica set  examenesrealizados='$er', resultadoexamenes='$re', diagnostico='$diag', receta='$rec',
    observaciones='$obs' where Id_ficha like $if";
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
header("location: mostrarficha.php");

}



?>