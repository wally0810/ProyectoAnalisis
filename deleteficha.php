<?php
include("db.php");
$id = $_GET['id'];


$sql = "DELETE FROM fichamedica  where Id_ficha like $id";
$query= mysqli_query($conexion, $sql);

if(!$query){
echo "no se eliminó!";

}else{
   
    header("location: mostrarficha.php");

}




?>