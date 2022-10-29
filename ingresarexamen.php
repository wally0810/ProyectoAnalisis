<?php include("db.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>examenes</title>
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
    <form name="Datospaciente" action= "insertarexamen.php" method="post" >
    <h1><a href="especialistas.php">Solicitud de examen</a></h1>
        
        
        <p> Fecha De Solicitud</p>
        <input type="date" id="" name="fvis" value="" require>
        <p> Codigo Médico</p>
        <input type="text" name="cd" value=  "<?php echo utf8_decode($row['Id_usuario']);?>" require readonly onmousedown="return false;">
        <p> Nombre Médico Tratante:</p>
        <input type="text" name="nmt" value= "<?php echo utf8_decode($row['nombre']);?>" require readonly onmousedown="return false;">
        <p> Seleccionar exámen</p> 
        <select name="exa">
        <option disabled="">HEMATOLOGÍA</option>
        <option value="Hematología completa">Hematología completa</option>
        <option value="Hemoglobína y hematocrito">Hemoglobina y hematocrito</option>
        <option value="Velocidad De Sedímentación">Velocidad De Sedímentación</option>
        <option value="Recuento De Glóbulos Blancos y Fórmula">Recuento De Glóbulos Blancos y Fórmula</option>
        <option value="Recuento De Glóbulos Rojos">Recuento De Glóbulos Rojos</option>
        <option value="Recuento De Plaquetas">Recuento De Plaquetas</option>
        <option value="Recuento De Eosinófilos">Recuento De Eosinófilos</option>
        <option value="Recuento De Reticulositos">Recuento De Reticulositos</option>
        <option value="Recuento De Reticulositos">Recuento De Reticulositos</option>
        <option value="Tiempo De Sangría">Tiempo De Sangría</option>
        <option value="Tiempo De Protombina">Tiempo De Protombina</option>
        <option value="Tiempo De Parcial De Tromboplastina">Tiempo De Parcial De Tromboplastina</option>
        <option value="Fibrinógeno">Fibrinógeno</option>
        <option value="Gota Gruesa">Gota Gruesa</option>
        <option value="Células L.E.">Células L.E.</option>
        <option value="Frote Periférico">Frote Periférico</option>
        <option value="Coombs Directo">Coombs Directo</option>
        <option value="Coombs Indirecto">Coombs Indirecto</option>
        <option disabled="">COPROLOGÍA</option>
        <option value="Análisis De Heces Completo">Análisis De Heces Completo</option>
        <option value="Análisis Por Enema Salino">Análisis Por Enema Salino</option>
        <option value="Sangre Oculta (F0B) Cuantificado">Sangre Oculta (F0B) Cuantificado</option>
        <option value="Panel De Virus En Heces (Rotavirus, adenovirus, astrovirus, Norovirus )">Panel De Virus En Heces (Rotavirus, adenovirus, astrovirus, Norovirus )</option>
        <option value="Panel Helicobacter Pylori">Panel Helicobacter Pylori</option>
        <option value="Panel Parasitario">Panel Parasitario</option>
        <option disabled="">URIANÁLISIS</option>
        <option value="Químico y sedimiento">Químico y sedimiento</option>
        <option value="Prueba De Embarazo">Prueba De Embarazo</option>
        <option disabled="">NIVELES DE DROGAS TÉRAPEUTICAS</option>
        <option value="Carbamazepina">Carbamazepina</option>
        <option value="Fenitoína">Fenitoína</option>
        <option value="Fenobarbital">Fenobarbital</option>
        <option disabled="">QUÍMICA sANGUÍNEA GLUCOSA</option>
        <option value="Pre-Prandial">Pre-Prandial</option>
        <option value="2 Horas Post Prandial">2 Horas Post Prandial</option>
        <option value="Curva De Tolerancia a La Glucosa ">Curva De Tolerancia a La Glucosa </option>
        <option value="Nitrógeno De Urea">Nitrógeno De Urea</option>
        <option value="Creatinina">Creatinina</option>
        <option value="Ácido Úrico">Ácido Úrico</option>
        <option value="Proteínas Totales">Proteínas Totales</option>
        <option value="Albúmina">Albúmina</option>
        <option value="Relación A/G">Relación A/G</option>
        <option value="Bilirrubima">Bilirrubima</option>
        <option disabled="">TRANSAMINASA</option>
        <option value="Glutámico Oxalacética">Glutámico Oxalacética</option>
        <option value="Glutámico Pirúvica">Glutámico Pirúvica</option>
        <option value="Fosfatasa Ácida">Fosfatasa Ácida</option>
        <option value="Fosfatasa Alcalina">Fosfatasa Alcalina</option>
        <option value="Fosfatasa Ácida Prostática">Fosfatasa Ácida Prostática</option>
        <option value="Deshidrogenasa Láctica">Deshidrogenasa Láctica</option>
        <option value="Colesterol">Colesterol</option>
        <option value="Triglicéridos">Triglicéridos</option>
        <option value="H.D.L. Colesterol">H.D.L. Colesterol</option>
        <option value="L.D.L. Colesterol">L.D.L. Colesterol</option>
        <option value="Lípidos Totales">Lípidos Totales</option>
        <option value="Alfa Amilasa">Alfa Amilasa</option>
        <option value="Lipasa">Lipasa</option>
        <option value="Gamma Glutamil Transferasa">Gamma Glutamil Transferasa</option>
        <option value="Hemoglobina Glucosilada">Hemoglobina Glucosilada</option>
        <option value="C.K.">C.K.</option>
        <option value="C.K. Mb">C.K. Mb</option>
        <option disabled="">ELECTRÓLITOS</option>
        <option value="Sodio">Sodio</option>
        <option value="Potasio">Potasio</option>
        <option value="Calcio">Calcio</option>
        <option value="Litio">Litio</option>
        <option value="Fósforo">Fósforo</option>
        <option value="Magnesio">Magnesio</option>
        <option value="Cloruros">Cloruros</option>
        <option disabled="">VARIOS</option>
        <option value="Espermograma">Espermograma</option>
        <option disabled="">SEROLOGÏA</option>
        <option value="Prueba De Embarazo HCG">Prueba De Embarazo HCG</option>
        <option value="Widal">Widal</option>
        <option value="Cardiolipina (V.D.R.L)">Cardiolipina (V.D.R.L)</option>
        <option value="Grupo Sanguíneo y Factor Rh">Grupo Sanguíneo y Factor Rh</option>
        <option value="Proteína C. Reactiva">Proteína C. Reactiva</option>
        <option value="Antiestreptolisina">Antiestreptolisina</option>
        <option value="Factor Reumatoideo">Factor Reumatoideo</option>
        <option value="Denge IGg IGM">Denge IGg IGM</option>
        <option disabled="">INMUNOLOGÍA</option>
        <option value="FTA-ABS">FTA-ABS</option>
        <option value="HIV">HIV</option>
        <option value="Factor Antinuclear">Factor Antinuclear</option>
        <option value="Complemento C3 I C4">Complemento C3 I C4</option>
        <option value="Toxoplasma (Toxo) IgM ">Toxoplasma (Toxo) IgM</option>
        <option value="Toxoplasma (Toxo) IgG">Toxoplasma (Toxo) IgG</option>
        <option value="Torchs IgM">Torchs IgM</option>
        <option value="Hepatitis A, HAV igM ">Hepatitis A, HAV igM</option>
        <option value="Hepatitis B, HBs Ag">Hepatitis B, HBs Ag</option>
        <option value="Hepatitis C">Hepatitis C</option>
        <option disabled="">HORMONAS</option>
        <option value="Triyodotironia (T 3)">Triyodotironia (T 3) </option>
        <option value="Tiroxima (T 4) "> Tiroxima (T 4)</option>
        <option value="Estimulante De La Tiroides (TSH) ">Estimulante De La Tiroides (TSH) </option>
        <option value=" Prolactina  "> Prolactina </option>
        <option value="Folículo Estimulante (FSH) ">Folículo Estimulante (FSH) </option>
        <option value="Luteinizante (Lh) ">Luteinizante (Lh) </option>
        <option disabled="">MARCADORES TUMORALES</option>
        <option value="Antígeno Prostático Esp. (PSA).">Antígeno Prostático Esp. (PSA). </option>
        <option value="Helicobacter Pylori">Helicobacter Pylori </option>
        <option disabled="">HORMONAS</option>
        <option value="TSH, T3, T4, FT3">TSH, T3, T4, FT3 </option>
        <option value="TSH,T3,T4">TSH,T3,T4 </option>
        <option value="T3 LIBRE">T3 LIBRE </option>
        <option value="T4 LIBRE">T4 LIBRE </option>
        <option value="Prolactina PRL">Prolactina PRL </option>
        <option value="FSH Folículo Estimulante">FSH Folículo Estimulante </option>
        <option value="LH Hormona Luteinizante">LH Hormona Luteinizante </option>
        <option value="Insulina Preprandial">Insulina Preprandial </option>
        <option value="Insulina Postprandial">Insulina Postprandial </option>
        <option value="Progesterona">Progesterona </option>
        <option value="Estradiol">Estradiol </option>
        <option value="Testosterona">Testosterona </option>
        <option value="Beta HCG Cuantificada">Beta HCG Cuantificada </option>
        <option value="Prueba De Embarazo HCG Sérica">Prueba De Embarazo HCG Sérica </option>
        <option value="Prueba De Embarazo HCG Orina">Prueba De Embarazo HCG Sérica </option>
        <option value="Parathormona (PTH)">Parathormona (PTH) </option>
        <option disabled="">MARCADORES TUMORALES</option>
        <option value="PSA Total">PSA Total </option>
        <option value="PSA Libre"> PSA Libre</option>
        <option value="Relación PSA Total Y Libre"> Relación PSA Total Y Libre</option>
        <option value="Alfa Fetoproteína (AFP)">Alfa Fetoproteína (AFP) </option>
        <option value="CA-125 (Ovario)">CA-125 (Ovario) </option>
        <option value="CA-15-3 (Mama)">CA-15-3 (Mama) </option>
        <option value="CA-19-9 (Digestivo)">CA-19-9 (Digestivo) </option>
        <option value="Antígeno Carcinoembrionario (CEA)">Antígeno Carcinoembrionario (CEA) </option>
        <option disabled="">DROGAS TERAPÉUTICAS</option>
        <option value="Ácido Valproico">Ácido Valproico </option>
        <option value="Carbamazepina">Carbamazepina </option>
        <option value="Fenitoína">Fenitoína </option>
        <option value="Fenobarbital">Fenobarbital </option>
        <option value="Vancomicina">Vancomicina</option>
        <option value="Amikacina">Amikacina </option>
        <option disabled="">PANEL DE COVID</option>
        <option value="Dimero D">Dimero D </option>
        <option value="Interlucina">Interlucina </option>
        <option value="Procalcitonina">Procalcitonina </option>
        <option value="PPT-TTP-INR">PPT-TTP-INR </option>
        <option value="Ferritina">Ferritina </option>
        <option disabled="">CULTIVOS</option>
        <option value="Urocultivo">Urocultivo </option>
        <option value="Orocultivo">Orocultivo </option>
        <option value="Coprocultivo">Coprocultivo </option>
        <option value="Cultivo De Secreciones De Herida">Cultivo De Secreciones De Herida </option>
        <option value="Cultivo De Secreción De Vaginal">Cultivo De Secrecion De Vaginal </option>
        <option value="Cultivo De Secreción De Uretral">Cultivo De Secrecion De Uretral </option>
        <option value="Cultivo De Secreción De Esputo">Cultivo De Secreción De Esputo </option>
        <option value="Hemocultivo"> Hemocultivo</option>
        <option disabled="">LÍQUIDOS (QUÍMICO Y CITOLÓGICO)</option>
        <option value="Líquido Cefalorraquideo LCR">Líquido Cefalorraquideo LCR </option>
        <option value="Líquido Pleural">Líquido Pleural </option>
        <option value="Líquido Peritoneal">Líquido Peritoneal </option>
        <option value="Líquido Sinovial">Líquido Peritoneal </option>
        <option value="Espermograma">Espermograma </option>
        <option disabled="">INMUNOLOGÍA (ESPECIAL)</option>
        <option value="Anti Fosfolipidos IgM (Anticardiolipina)">Anti Fosfolipidos IgM (Anticardiolipina) </option>
        <option value="Anti Smith (SM)">Anti Smith (SM) </option>
        <option value="Anti RO (SSA)">Anti RO (SSA) </option>
        <option value="Anti Cuerpos Antipéptidos cíclicos citrulinados (Anti-CCP)">Anti Cuerpos Antipéptidos cíclicos citrulinados (Anti-CCP) </option>
        <option value="Anti Gliandinas IgA">Anti Gliandinas IgA </option>
        <option value="Anti Gliandinas IgG"> Anti Gliandinas IgG</option>
        <option value="Anti Mitocondriales (AMA-M2)">Anti Mitocondriales (AMA-M2) </option>
        <option value="C-ANCA (Pr3)">C-ANCA (Pr3) </option>
        <option value="P-ANCA (MP0)">P-ANCA (MP0) </option>
        <option value="AC Antitiroglobulinas (a- Tg)">AC Antitiroglobulinas (a- Tg) </option>
        <option value="Antiperoxina Tiroidea (A-TP0)">Antiperoxina Tiroidea (A-TP0) </option>
        <option value="Tiroglulina (GT)">Tiroglulina (GT) </option>
        <option value="Antiendomislales IgG (Transglutaminasa)">Antiendomislales IgG (Transglutaminasa) </option>
        <option value="Procalcitonina">Procalcitonina </option>
        <option value="Myoglobina">Myoglobina </option>
        <option value="Virus De Infuenza A y B"> Virus De Infuenza A y B</option>
        <option value="Virus Sincitial Respiratorio (VRS)">Virus Sincitial Respiratorio (VRS) </option>
        <option value="Niveles Séricos 25-(0H)-Vitamina D">Niveles Séricos 25-(0H)-Vitamina D </option>
        <option disabled="">INMUNOLOGÍA (ESPECIAL)</option>
        <option disabled="">BACTERIOLOGÍA</option>
        <option value="K0H">K0H </option>
        <option value="GRAM">GRAM </option>
        <option value="Ziehi neelsen (BK) Tinta China">Ziehi neelsen (BK) Tinta China </option>
        <option value="Azul Lactofenol">Azul De Lactofenol </option>



        </select>   
        




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