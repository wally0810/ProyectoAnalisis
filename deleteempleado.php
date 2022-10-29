<?php
include("db.php");
$id = $_GET['id'];


$sql = "DELETE FROM recursoshumanos  where Id_puesto like $id";
$query= mysqli_query($conexion, $sql);

if(!$query){
echo "no se eliminó!";
}else{
    header("location: mostrarempleado.php");
}




?>