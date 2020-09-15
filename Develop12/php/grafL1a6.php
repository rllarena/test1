<!DOCTYPE html>
<html lang="es">
<head>
    <script src="libs/raphael-min.js"> </script>
    <script src="libs/morris.min.js"></script>
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

  $sql = "SELECT Evento, Hora FROM linea".$linea." WHERE Evento LIKE '%".$nemo." en MT%' and fecha='2019-08-27' order by hora desc  limit 440";
  $result = mysqli_query($conn,$sql);
  $sql2 = "SELECT Hora FROM linea".$linea." WHERE Evento LIKE '%".$nemo." en MT%' and fecha='2019-08-27' order by Hora desc limit 1, 439";
  $result2 = mysqli_query($conn,$sql2);
 // $sql3 = "SELECT hora, min as minimo, max as maximo FROM grafl1";
//$result3 = mysqli_query($conn,$sql3);



$chart_data='';
$chart_data2='';


  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc() and $row2 = $result2->fetch_assoc()) {
      $t1= new DateTime($row["Hora"]);//Hora salida
      $t2= new DateTime($row2["Hora"]);//Hora anterior salida
      $intervalo=$t2->diff($t1);//Diferencia de Hora Salida - Hora anterior salida
      $seconds = $intervalo->s + $intervalo->i*60;


      $chart_data .= "{ Hora:'".$row["Hora"]."', Intervalo:". $seconds/60 ."}, ";
       // $chart_data2 .= "{ Hora:'".$row["Hora"]."', min:". $row["Hora"] ."}, ";

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
  echo "<h2 align='center'>Intervalos Línea:".$linea." Terminal:".$nemo."</h2>";
  echo "<th <p style='color:#f50c0c;'>&#9135 Máximo</p></th>";
  echo "<th <p style='color:#f5ce0c;'>&#9135 Mínimo</p></th>";
  echo "<th <p style='color:#0c3ef5;'>&#9135 Promedio</p></th>";


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
        ymax: 15,
        parseTime: false,
        labels:['Intervalo'],
        xLabels: 'day',
        xLabelAngle: 45,
        lineWidth: 2,
        goals: ['0.96','1.92', '2.88'],
        goalStrokeWidth: 2,
        goalLineColors: ['#f6d31e', '#0a3df6', '#e70721'],
        pointSize: 2,
        hideHover: 'false',
        fillOpacity: 0.0,
        resize: true

    });
   /* new Morris.Line({
        // ID of the element in which to draw the chart.
        element: '<?php echo "chartL".$linea."-".$nemo; ?>',
        // Chart data records -- each entry in this array corresponds to a point on
        // the chart.
        data: [
            { Hora: '05:00:00', prom: 10, max: 11.5, min: 5 },
            { Hora: ' 05:30:00 ', prom: 7, max: 11.5, min: 3.5 },
            { Hora: ' 05:44:00 ', prom: 6, max: 11.5, min: 3 },
            { Hora: ' 05:50:00 ', prom: 2.5, max: 3.93, min: 1.3 },
            { Hora: ' 06:20:00 ', prom: 2.5, max: 3.93, min: 1.3 },
            { Hora: ' 06:22:25 ', prom: 1.92, max: 3.93, min: 0.89 },
            { Hora: ' 09:59:00', prom: 2.2, max: 4.3, min: 1.1 },
            { Hora: ' 15:04:30 ', prom: 1.92, max: 4, min: 0.89 },
            { Hora: ' 20:38:00 ', prom: 3, max: 4, min: 1.5 },
            { Hora: '22:20:00', prom: 5, max: 7.05, min: 2.5 },
            { Hora: '23:20:00', prom: 6.16, max: 7.05, min: 3.05 },
            { Hora: '23:52:00', prom: 6.16, max: 7.05, min: 3.05 }
        ],
        // The name of the data record attribute that contains x-values.
        xkey: 'Hora',
        parseTime: false,
        // A list of names of data record attributes that contain y-values.
        ykeys: ['min', 'max', 'prom'],
        ymax: 15,
        // Labels for the ykeys -- will be displayed when you hover over the
        // chart.
        hideHover: 'false',
        fillOpacity: 0.1,
        labels: ['Value']
    });*/

</script>
