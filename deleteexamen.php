<?php
include("db.php");
$id = $_GET['id'];


$sql = "DELETE FROM solicitudexamen  where Id_examen like $id";
$query= mysqli_query($conexion, $sql);

if(!$query){
echo "no se eliminó!";

}else{
   
    header("location: mostrarexamenes.php");

}




?>