
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
$if=$_GET['if'];
$fv=$_GET['fv'];
$ie=$_GET['ie'];
$nd=$_GET['nd'];
$exa=$_GET['exa'];
$res=$_GET['res'];
$id=$_GET['id'];
$nom= $_GET['nom'];
$est=$_GET['est'];

?>
  
    
    <form name="fichapaciente" action= "Updateexamen.php" method="post" >
    <h1><a href="laboratorio.php">Ingreso de Resultados </a></h1>
        
        
        <p> Id Examen</p>
        <input type="text" name="if" value="<?=$if?>" readonly onmousedown="return false;" require>
        <p> Fecha De solicitud</p>
        <input type="date" id="" name="fv" value="<?=$fv?>" readonly onmousedown="return false;">
        <p> Codigo Médico</p>
        <input type="text" name="ie" value="<?=$ie?>" readonly onmousedown="return false;" require>
        <p> Nombre Médico Tratante:</p>
        <input type="text" name="mt" value="<?=$nd?>" readonly onmousedown="return false;" require>
        <p> Examen:</p>
        <input type="text" name="esp" value="<?=$exa?>" readonly onmousedown="return false;" require>
        <p> Resultado</p>
        <textarea name="res" id="" cols="120" rows="10" require  ></textarea>
        <p> estado:</p>
        <select name="est" id="">
            <option value="PENDIENTE">PENDIENTE</option>
            <option value="INGRESADO">INGRESADO</option>
        </select>

        <p> Id De paciente:</p>
        <input  type="text" name="re" id="" cols="120" rows="10" value="<?=$id?>" readonly onmousedown="return false;"></textarea>
        <p>  Nombre Paciente:</p>
        <input  type="text" name="diag" id="" cols="120" rows="10" value="<?=$nom?>" readonly onmousedown="return false;"></textarea>
        
        <p class="center-content">
           <input type="submit"  value="Registrar">
           
        </p>
        </form>
        
       
</body>
</html>