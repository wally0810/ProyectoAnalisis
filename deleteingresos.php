<?php
include("db.php");
$id = $_GET['id'];


$sql = "DELETE FROM ingresos  where Id_ingreso like $id";
$query= mysqli_query($conexion, $sql);

if(!$query){
echo "no se eliminó!";

}else{
   
    header("location: mostraringresos.php");

}




?>