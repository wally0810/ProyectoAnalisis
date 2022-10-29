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
    <link rel="stylesheet" href="./css/Mostrar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<style>
 


table{
	background-color: white;
	text-align: center;
	border-collapse: collapse;
	width: 100px;
  margin-left:-55px;
}

th, td{
  text-align:center;
  border-bottom: solid 2px #0F362D;
  width: 90px;
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
<body style="margin: 50px;">
    
    <h1><a href="administracion.php"> Lista De Ingresos</a></h1>
    <table class="table">
    <thead>
    <tr>
        <th>Id Ingreso</th>
        <th>Tipo de Ingreso</th>
        <th>Detalle Ingreso</th>
        <th>Origen Ingreso</th>
        <th>Valor Ingreso</th>
        <th>Fecha Ingreso</th>
        <th>Id Empleado</th>
        <th>Nombre Empleado</th>

    </tr>
    </thead>
    <tbody>
      <?php
        include_once("db.php");
        $sql="SELECT *FROM ingresos";
        $result=mysqli_query($conexion, $sql);
        while($mostrar= mysqli_fetch_array($result)){
      ?>
        <tr>
            <td><?php echo $mostrar['Id_ingreso'] ?></td>
            <td><?php echo $mostrar['tipoingreso'] ?></td>
            <td><?php echo $mostrar['detalleingreso'] ?></td>
            <td><?php echo $mostrar['origeningreso'] ?></td>
            <td><?php echo $mostrar['valoringreso'] ?></td>
            <td><?php echo $mostrar['fechaingreso'] ?></td>
            <td><?php echo $mostrar['Id_empleado'] ?></td>
            <td><?php echo $mostrar['nombreempleado'] ?></td>
           
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

$pdf->stream("ReporteIngresos.pdf", array("Attachment" => false));


?>