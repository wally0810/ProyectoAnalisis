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
                <span><a href="salir.php"> Cabezas De Algodón</a></span>
            </div>
            <div class="toggle">
                <i class='bx bx-menu'></i>
            </div>
        </div>
        
        
        <!-- MENU -->
        <div class="menu">

        
                <small><?php  echo utf8_decode($row['nombre']);?></small>
          

            <div class="enlace">
                <a href="Buscarpaciente.php"><i class='bx bx-duplicate' ></i>
                    <span>Ingresar Ficha</span>           
                 </a>
            </div>

            <div class="enlace">
                <a href="seleccionarpaciente.php"><i class='bx bx-dna'></i>
                <span>Solicitar Examenes</span> 
            </a>
            </div>

            <div class="enlace">
               <a href="mostrarexamenes.php"><i class='bx bxs-blanket'></i>
                <span>Exámenes Ingresados</span>
            </a>
            </div>   
            <div class="enlace">
               <a href="mostrarexameness.php"><i class='bx bxs-blanket'></i>
                <span>Exámenes Pendientes</span>
            </a>
            </div>       

            <div class="enlace">
                <a href="mostrarficha.php"><i class="bx bx-user" ></i>
                <span>Historial Médico</span>
            </a>
                    
            </div>

            <div class="enlace">
                <a href="paciente.html"><i class="bx bx-user" ></i>
                <span>Agregar Paciente</span></a>
                
                
            </div>

            <div class="enlace">
                <a href="mostrarpaciente.php"><i class="bx bx-user" ></i>
                <span>Lista Pacientes</span>
            </a>
           

          

           
            </div>
        </div>
    </div>
   
</body>
</html>