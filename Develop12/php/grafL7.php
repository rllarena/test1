<!DOCTYPE html>
<html lang="es">
<head>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    <link rel="stylesheet" type="text/css" href="php/estilos.css">
</head>


<?php
include 'compara.php';
date_default_timezone_set('America/Mexico_City');
//Recibe parametros del ajax para utilizar una sola funcion.
$linea = $_POST['linea'];
$nemo = $_POST['nemo'];
echo "<p style='text-align:center;'>L&iacutenea:" . $linea . " nem&oacutenico:" . $nemo."</p>";
echo "<body>";
  echo "<div class='container'>";
  echo "<div class='row'>";
  echo "<div class='col'>";

  $conn = mysqli_connect("localhost", "myuser", "myclave", "pruebas1");
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT Evento, Hora FROM trama WHERE Evento LIKE '%".$nemo." en MT%' and fecha=CURRENT_DATE order by hora desc  limit 15";
  $result = mysqli_query($conn,$sql);
  $sql2 = "SELECT Hora FROM trama WHERE Evento LIKE '%".$nemo." en MT%' and fecha=CURRENT_DATE order by Hora desc limit 1, 16";
  $result2 = mysqli_query($conn,$sql2);
  $chart_data='';

  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc() and $row2 = $result2->fetch_assoc()) {
      $t1= new DateTime($row["Hora"]);//Hora salida
      $t2= new DateTime($row2["Hora"]);//Hora anterior salida
      $intervalo=$t2->diff($t1);//Diferencia de Hora Salida - Hora anterior salida
      $seconds = $intervalo->s + $intervalo->i*60;
      $chart_data .= "{ Hora:'".$row["Hora"]."', Intervalo:". $seconds/60 ."}, ";
    }
  } else { echo "0 results"; }
  $chart_data = substr($chart_data, 0, -2);
  //echo $chart_data;
  mysqli_free_result($result);
  mysqli_free_result($result2);
  mysqli_close($conn);
  echo "<div class='col'>";
  echo "<table style='width:60% float: left;'>";
  echo "<tbody>";
  echo "<h2 align='center'>Grafico de Control de Intervalos</h2>";
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
        ykeys: ['Intervalo'],
        parseTime: false,
        labels:['Intervalo'],
        xLabels: 'day',
        xLabelAngle: 45,
        goals: [2.89, 0.98],
        goalStrokeWidth: 5,
        pointSize: 2,
        hideHover: 'auto',
        resize: true

    });
</script>
