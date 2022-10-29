<?php
include("db.php");
$id = $_GET['id'];


$sql = "DELETE FROM gastos  where Id_gasto like $id";
$query= mysqli_query($conexion, $sql);

if(!$query){
echo "no se eliminó!";

}else{
   
    header("location: mostrargastos.php");

}




?>