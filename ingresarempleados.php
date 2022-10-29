<?php
include_once("db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso De Empleados</title>
    <link rel="stylesheet" href="./css/insertar.css">
</head>
<body>
    <form name="registrapaciente" action="registrarempleado.php" method="post" >
    <h1><a href="administracion.php"> Registro De Empleados</a></h1>
       
        <p> Nombre Empleado:</p>
             <input type="text" id="nempleado" name="nempleado" placeholder="Nombre Completo" required><i class="validation"><span></span><span></span></i>
        
        <p> Tel&eacutefono Empleado: </p>
            <input type="number" id="templeado" name="templeado" placeholder="Telefono" required><i class="validation"><span></span><span></span></i>
       
        <p> Direcci&oacuten Empleado:</p>
            <input type="text" id="dempleado" name="dempleado" placeholder="Direccion" required><i class="validation"><span></span><span></span></i>
        
        <p> Fecha De Nacimiento:</p>
             <input type="date" id="fempleado" name="fempleado" placeholder="Fecha De Nacimiento" required><i class="validation"><span></span><span></span></i>
        
        
        <p>Salario: </p>
            <input type="number" id="salarioe" step= ".002" name="salarioe" placeholder="Salario" required><i class="validation"><span></span><span></span></i>
        
         
        <p>Puesto:</p>
           <select name="puesto" >
            <?php
            $sql='SELECT *FROM puestos';
            $query=mysqli_query($conexion,$sql);
            while($resultado=mysqli_fetch_array($query)){
                $idpuesto=$resultado['Id_puesto'];
                $nombre=$resultado['nombre'];
                ?>
                <option value="<?php echo $idpuesto ?> "><?php echo $nombre?> </option>
                <?php
            }

        
           <p class="center-content">
           <input type="submit"  value="Registrar"></br>
           
        </p>
        <p class="center-content2">
            <input type="reset"  value="Limpiar">
        </p>

    </form>

</body>
</html>
