<!DOCTYPE html>
<html lang="es">
<head>
    <script src="./libs/raphael-min.js"> </script>
    <script src="./libs/morris.min.js"></script>
    <link rel="stylesheet" type="text/css" href="php/estilos.css">
</head>

<?php
include 'compara_Intervalos.php';
date_default_timezone_set('America/Mexico_City');
//Recibe parametros del ajax para utilizar una sola funcion.
$linea = $_POST['linea'];
$nemo = $_POST['nemo'];
echo "<p style='text-align:center;'>L&iacutenea:" . $linea . " nem&oacutenico:" . $nemo."</p>";
echo "<body>";
  echo "<div class='container'>";
  echo "<div class='row'>";
  echo "<div class='col'>";

  $conn = mysqli_connect("50.192.92.17", "myuser", "myclave", "pruebas1");
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  if ($linea!='7'){
    //echo "ES DIFERENTE DE LINEA 7.<br>";
    $sql = "SELECT Evento, Hora FROM linea".$linea." WHERE Evento LIKE '%".$nemo." en MT%' and fecha=current_date order by hora desc  limit 150";
    $sql2 = "SELECT Hora FROM linea".$linea." WHERE Evento LIKE '%".$nemo." en MT%' and fecha=current_date order by Hora desc limit 1, 160";
    $result = mysqli_query($conn,$sql);
    $result2 = mysqli_query($conn,$sql2);
  } else {
    //echo "ES IGUAL A LINEA 7.<br>";
      $conn = mysqli_connect("50.192.92.18", "myuser", "myclave", "pruebas1");

      $sql = "SELECT Evento, Hora FROM trama WHERE Evento LIKE '%".$nemo." en MT%' and fecha=current_date order by hora desc  limit 150";
    $sql2 = "SELECT Hora FROM trama WHERE Evento LIKE '%".$nemo." en MT%' and fecha=current_date order by Hora desc limit 1, 160";
    $result = mysqli_query($conn,$sql);
    $result2 = mysqli_query($conn,$sql2);
  }

  $chart_data='';
  $chart_dataInf='';
  $chart_dataSup='';

  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc() and $row2 = $result2->fetch_assoc()) {
      $t1= new DateTime($row["Hora"]);//Hora salida
      $t2= new DateTime($row2["Hora"]);//Hora anterior salida
      $intervalo=$t2->diff($t1);//Diferencia de Hora Salida - Hora anterior salida

      //La función compara_Intervalos regresa un string con valores decimales de: IntervaloDelEvento : IntervaloTabla*0.5 : IntervaloTabla*1.5
      $getCadena = compara_Intervalos($linea, $nemo, $row["Hora"],$row2["Hora"],$intervalo->format('%H:%I:%S'));

      $itemCadena=explode(":",$getCadena);//Separa string a arreglo:: IntervaloDelEvento : IntervaloTabla*0.5 : IntervaloTabla*1.5
      //Para verificación descomentar la siguiente linea.
      //echo "IntervaloReal:".$itemCadena[0].", Intervalo inferior: ".$itemCadena[1].", Intervalo superior: ".$itemCadena[2]."<br>";//eho de los 15 registros::  IntervaloDelEvento : IntervaloTabla*0.5 : IntervaloTabla*1.5

      //**************************************************************
      //Char_data se compone de: xValores, yValor1, ...yValorn.
      $chart_data .= "{ Hora:'".$row["Hora"]."', Intervalo:". $itemCadena[0] . ", IntervaloInf:". $itemCadena[1] . ", IntervaloSup:". $itemCadena[2] . "},";
      //**************************************************************
    }
  } else { echo "0 results"; }

  $chart_data = substr($chart_data, 0, -2);

  mysqli_free_result($result);
  mysqli_free_result($result2);
  mysqli_close($conn);
  echo "<div class='col'>";
  echo "<table style='width:60% float: left;'>";
  echo "<tbody>";
  echo "<h2 align='center'>Intervalos Línea:".$linea." Terminal:".$nemo."</h2>";
  echo "<br /><br />";
  //echo "<div id='chart'></div>";
  echo "<div id='chartL".$linea."-".$nemo."'></div>";

  echo "</tbody>";
  echo "</table>";
  echo "</div>";
  echo "</div>";
?>
</body>
</html>
<script>
    Morris.Line({
        element : '<?php echo "chartL".$linea."-".$nemo; ?>',
        data:[<?php echo $chart_data; ?>],
        xkey:'Hora',
        ykeys: ['Intervalo','IntervaloInf','IntervaloSup'],
        parseTime: false,
        labels:['Intervalo real','Lim. inferior','Lim. superior'],
        xLabels: 'day',
        xLabelAngle: 45,
        //goals: [2.89, 0.98],
        //goalStrokeWidth: 5,
        pointSize: 2,
        //hideHover: 'auto',
        resize: true

    });
</script>
