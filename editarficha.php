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
    <?php
    $if = $_GET['if'];
    $fv = $_GET['fv'];
    $ie = $_GET['ie'];
    $mt = $_GET['mt'];
    $esp = $_GET['esp'];
    $er = $_GET['er'];
    $re = $_GET['re'];
    $diag = $_GET['diag'];
    $rec = $_GET['rec'];
    $obs = $_GET['obs'];
    $id = $_GET['id'];
    $nom = $_GET['nom'];
    $nf = $_GET['nf'];
    $cf = $_GET['cf'];

    ?>
  
    
    <form name="fichapaciente" action= "updateficha.php" method="post" >
    <h1><a href="especialistas.php">Ficha Médica </a></h1>
        
        
        <p> Id Ficha</p>
        <input type="text" name="if" value="<?=$if?>" readonly onmousedown="return false;" require>
        <p> Fecha De visita</p>
        <input type="date" id="" name="fv" value="<?=$fv?>" readonly onmousedown="return false;">
        <p> Codigo Médico</p>
        <input type="text" name="ie" value="<?=$ie?>" readonly onmousedown="return false;" require>
        <p> Nombre Médico Tratante:</p>
        <input type="text" name="mt" value="<?=$mt?>" readonly onmousedown="return false;" require>
        <p> Especialidad Médico Tratante:</p>
        <input type="text" name="esp" value="<?=$esp?>" readonly onmousedown="return false;">
        <p> Examenes realizados:</p>
        <input type="text" name="er" id="" cols="120" rows="10" value="<?=$er?>"></textarea>
        <p> Resultado De Examenes:</p>
        <input  type="text" name="re" id="" cols="120" rows="10" value="<?=$re?>"></textarea>
        <p>  Diagnostico:</p>
        <input  type="text" name="diag" id="" cols="120" rows="10" value="<?=$diag?>"></textarea>
        <p> Receta:</p>
        <input  type="text" name="rec" id="" cols="120" rows="10" value="<?=$rec?>"></textarea>
        <p> Observaciones:</p>
        <input  type="text" name="obs" id="" cols="120" rows="10" value="<?=$obs?>"></textarea>




        <h1>Datos Paciente</h1>
        <p>Id Paciente</p>
        <input type="text" id="npaciente" name="id" placeholder="Nombre paciente" value="<?=$id?>" readonly onmousedown="return false;">
        <p> Nombre Del Paciente</p>
        <input type="text" id="npaciente" name="nom" placeholder="Nombre paciente" value="<?=$nom?>" readonly onmousedown="return false;">
        
        <p> Nombre Familiar:</p>
             <input type="text" id="nf" name="nf" placeholder="Nombre Familiar" value="<?=$nf?>" readonly onmousedown="return false;">

        <p> Correo Familiar</p>
             <input type="text" id="ipuesto" name="cf" placeholder="correo" value="<?=$cf?>" readonly onmousedown="return false;">

        <p class="center-content">
           <input type="submit"  value="Registrar">
           
        </p>
        </form>
        
       
</body>
</html>