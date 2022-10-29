<?php include("db.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fichapaciente</title>
    <!-- CSS only -->
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">-->
    <link rel="stylesheet" href="./css/ficha.css">
</head>
<body>
      <!-- recibimos datos del paciente -->
    <?php
     
    $id = $_GET['id'];
    $nom = $_GET['nom'];
    $tel = $_GET['tel'];
    $dire = $_GET['dire'];
    $fecha = $_GET['fecha'];
    $nf = $_GET['nf'];
    $tf = $_GET['tf'];
    $cf = $_GET['cf'];

    include("db.php");
session_start();
if(!isset($_SESSION['user'])){
    header("location: ../Proyecto/index.php");
}
$iduser= $_SESSION['user'];

$sql= "SELECT Id_usuario ,usuario, nombre from usuario WHERE
        usuario = '$iduser'";

$resultado= $conexion->query($sql);
$row= $resultado->fetch_assoc();
    
    ?>
  
     <!-- ingresamos datos de la ficha medica -->
    <form name="Datospaciente" action= "insertarficha.php" method="post" >
    <h1><a href="especialistas.php">Ficha Médica </a></h1>
        
        <a href="Buscarpaciente.php"><h3>Buscar Paciente</h3></a>
        <p> Fecha De visita</p>
        <input type="date" id="" name="fvis" value="" require>
        <p> Codigo Médico</p>
        <input type="text" name="cd" value=  "<?php echo utf8_decode($row['Id_usuario']);?>" require readonly onmousedown="return false;">
        <p> Nombre Médico Tratante:</p>
        <input type="text" name="nmt" value= "<?php echo utf8_decode($row['nombre']);?>" require readonly onmousedown="return false;">
        <p> Especialidad Médico Tratante:</p>
        <input type="text" name="puestos">
        <p> Examenes realizados:</p>    
        <textarea name="er" id="" cols="120" rows="10" ></textarea>
        <p> Resultado De Examenes:</p>
        <textarea name="re" id="" cols="120" rows="10" ></textarea>
        <p>  Diagnostico:</p>
        <textarea name="diag" id="" cols="120" rows="10"></textarea>
        <p> Receta:</p>
        <textarea name="rec" id="" cols="120" rows="10"></textarea>
        <p> Observaciones:</p>
        <textarea name="obs" id="" cols="120" rows="10"></textarea>



           <!-- mostramos los datos recibidos datos del paciente seleccionado-->
        <h1>Datos Paciente</h1>
        <p>Id</p>
        <input type="text" id="npaciente" name="id" placeholder="Nombre paciente" value="<?=$id?>" readonly onmousedown="return false;">
        <p> Nombre Del Paciente</p>
        <input type="text" id="npaciente" name="nom" placeholder="Nombre paciente" value="<?=$nom?>" readonly onmousedown="return false;">
        <p> Dirección Paciente:</p>
             <input type="text" id="dpaciente" name="dire" placeholder="Dirección" value="<?=$dire?>" readonly onmousedown="return false;">
        <p> Telefono Paciente:</p>
            <input type="number" id="tpaciente" name="tel" placeholder="Telefono" value="<?=$tel?>" readonly onmousedown="return false;">     

        <p> Fecha De Nacimiento</p>
             <input type="date" id="fpaciente" name="fecha" placeholder="Fecha De Nacimiento" value="<?=$fecha?>" readonly onmousedown="return false;">

        <p> Nombre Familiar:</p>
             <input type="text" id="nf" name="nf" placeholder="Nombre Familiar" value="<?=$nf?>" readonly onmousedown="return false;">

        <p> Telefono Familiar:</p>
             <input type="number" id="tfamiliar" name="tf" placeholder="Telefono" value="<?=$tf?>" readonly onmousedown="return false;" >
        
        <p> Correo Familiar</p>
             <input type="text" id="ipuesto" name="cf" placeholder="correo" value="<?=$cf?>" readonly onmousedown="return false;">
      <!-- el formulario mandara los datos de la para insertarlos -->
        <p class="center-content">
           <input type="submit"  value="Registrar">
           
        </p>
        </form>
</body>
</html>