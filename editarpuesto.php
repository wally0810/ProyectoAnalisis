<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Puestos</title>
    <link rel="stylesheet" href="./css/insertar.css">
</head>
<body>
    <?php
    $id = $_GET['id'];
    $nom = $_GET['nom'];
    $descrip = $_GET['descrip'];

    ?>
    <form name="Editarpuesto" action="updatepuesto.php" method="post" >
        <h1><a href="mostrarpuesto.php"> Modificar Puestos</a></h1>

        <p> Id Del Puesto:</p>
        <input type="text" id="id" name="id" placeholder="Nombre Puesto"  value="<?=$id?>" readonly onmousedown="return false;">
                    
        <p> Nombre Del Puesto</p>
             <input type="text" id="npuesto" name="nom" placeholder="Nombre Puesto" value="<?=$nom?>">
        
        
        <p> Descripción:</p>
            <input type="text" id="dpuesto" name="descrip" placeholder="Descripción" value="<?=$descrip?>">
        
        
        <p class="center-content">
           <input type="submit"  value="Actualizar">
           
        </form>
</body>
</html>