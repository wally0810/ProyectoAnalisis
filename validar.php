<?php

include("db.php");


$PASSWORD =$conexion->real_escape_string($_POST['password']);
$USUARIO=$conexion->real_escape_string($_POST['usuario']);
$consulta="SELECT *FROM usuario WHERE usuario= '$USUARIO' and password= '$PASSWORD' ";
$resultado= mysqli_query($conexion, $consulta);


$filas=mysqli_fetch_array($resultado);


if($filas['Id_puesto']==1 or $filas['Id_puesto']==3 ){//Programador/SQA
    ?>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src= "sweetalertSucces.js"></script>
    <?php
    session_start();
    $_SESSION['user']=$USUARIO;
    header("location: home.php");
}else
     if($filas['Id_puesto']==2){//Medicos
        ?>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src= "sweetalertSucces.js"></script>
    <?php
    session_start();
    $_SESSION['user']=$USUARIO;
    header("location: especialistas.php");
}else
    if($filas['Id_puesto']==4){//administrador/secretaria
   ?>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src= "sweetalertSucces.js"></script>
    <?php
    session_start();
$_SESSION['user']=$USUARIO;
header("location: administracion.php");
}else
if($filas['Id_puesto']==5){//laboratorista
?>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src= "sweetalertSucces.js"></script>
<?php
session_start();
$_SESSION['user']=$USUARIO;
header("location: laboratorio.php");
}else
if($filas['Id_puesto']==6){//farmaceuta
?>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src= "sweetalertSucces.js"></script>
<?php
session_start();
$_SESSION['user']=$USUARIO;
header("location: laboratorio.php");
}else{
    
    include("index.html");
    ?>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src= "sweetalertError.js"></script>
     
    <?php

}

mysqli_free_result($resultado);
mysqli_close($conexion);
?>
