<?php
ob_start();

?>
 
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Paciente</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="./Mostrar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<style>
 


table{
	background-color: white;
	text-align: center;
	border-collapse: collapse;
	width: 250px;
  margin-left: -10px;
}

th, td{
  text-align:center;
  border-bottom: solid 2px #0F362D;
  width: 73px;
}

thead{
	background-color: #246355;
	border-bottom: solid 2px #0F362D;
	color: white;
}


tr:hover td{
	background-color: #369681;
	color: white;
}

h1{
    margin-top: 5px;
    text-align: center;
    color: #246355;
    text-decoration: none;
}

a{
  text-decoration: none;
  color: #246355;
}
</style>
<body >
    
    <h1><a href="administracion.php">Lista De Paciente</a></h1>
    <table class="table" >
    <thead>
    <tr>
        <th>Id Paciente</th>
        <th>Nombre Paciente</th>
        <th>Dirección Paciente</th>
        <th>Telefono Paciente</th>
        <th>Fecha De Nacimiento</th>
        <th>Nombre Familiar</th>
        <th>Telefono Familiar</th>
        <th>Correo Familiar</th>
        
    </tr>
    </thead>
    <tbody>
      <?php
        include_once("db.php");
        $sql="SELECT *FROM paciente";
        $result=mysqli_query($conexion, $sql);
        while($mostrar= mysqli_fetch_array($result)){
      ?>
        <tr>
            <td><?php echo $mostrar['Id_paciente'] ?></td>
            <td><?php echo $mostrar['nombre'] ?></td>
            <td><?php echo $mostrar['direccion'] ?></td>
            <td><?php echo $mostrar['telefono'] ?></td>
            <td><?php echo $mostrar['fechanacimiento'] ?></td>
            <td><?php echo $mostrar['nombrefamiliar'] ?></td>
            <td><?php echo $mostrar['telefonofamiliar'] ?></td>
            <td><?php echo $mostrar['correofamiliar'] ?></td>
            
            
        </tr>";
<?php
        }

     ?>
    </tbody>
    </table>
    
</body>
</html>

<?php
$imp= ob_get_clean();


require_once './dompdf/autoload.inc.php';
use Dompdf\Dompdf;
$pdf = new Dompdf();

$pdf->setPaper('letter');

$pdf->LoadHtml($imp);

$pdf->render();

$pdf->stream("LISTAPACIENTES.pdf", array("Attachment" => false));


?>