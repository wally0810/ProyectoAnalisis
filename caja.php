<?php
include("db.php");
session_start();
if(!isset($_SESSION['user'])){
    header("location: ../Proyecto/index.php");
}
$iduser= $_SESSION['user'];

$sql= "SELECT usuario, nombre from usuario WHERE
        usuario = '$iduser'";

$resultado= $conexion->query($sql);
$row= $resultado->fetch_assoc();




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- BOX ICONS -->
     <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
     <!-- CUSTOM CSS -->
     <link rel="stylesheet" href="./css/home.css">
     <!-- CUSTOM JS -->
     <script src="./js/app.js" defer></script>
</head>
<body>
    
    <div class="menu-dashboard">
        <!-- TOP MENU -->
        <div class="top-menu">
            <div class="logo">
                <img src="./img/asilo.svg" alt="">
                <span><a href="administracion.php"> Cabezas De Algodón</a></span>
                
                
                
            </div>
            <div class="toggle">
                <i class='bx bx-menu'></i>
            </div>
        </div>
        
        
        <!-- MENU -->
        <div class="menu">
        
                
                <small><?php  echo utf8_decode($row['nombre']);?></small>
                
            
            <div class="enlace">
                <a href="ingresardonaciones.php"><i class='bx bx-plus-medical'></i>
                <span>Registrar Ingresos</span>
            </a>
            </div>

            
            <div class="enlace">
            <a href="mostraringresos.php"><i class='bx bx-money' ></i>
            <span>ingresos</span>
            </a>
            </div>

            <div class="enlace">
            <a href="ingresargastos.php"><i class='bx bx-plus-medical'></i>
                <span>Registrar Gastos</span>
            </div>
            </a>

            <div class="enlace">
            <a href="mostrargastos.php">
            <i class='bx bx-money' ></i>  
            <span>Gastos</span></a>
            </div>
            </a>
            
          

           
            </div>
        </div>
       
    </div>
   
</body>
</html>
