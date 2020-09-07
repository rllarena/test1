<!DOCTYPE html>
<?php
  include 'referencias.php';//Tablas de tiempos sintesis.
  include 'funciones.php';//Definición de funciones.
  date_default_timezone_set('America/Mexico_City');
?>
<html lang="es">
<head>

    <script src="libs/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="./libs/morris.css">
    <script src="./libs/raphael-min.js"></script>
    <script src="./libs/morris.min.js"></script>
    <link rel="stylesheet" href="./css/bootstrap.min.css">

    <title>Itinerarios</title>
    <meta http-equiv="refresh" content="50" />
    <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
<p>Fecha: <span id="datetime"></span></p>
<script>
    var dt = new Date();
    document.getElementById("datetime").innerHTML = dt.toLocaleDateString();
</script>

<div class="container">
    <div class="row">
    <div class="col">
<table style="width:30% float: right;">
    <tr>
        <th rowspan='2'>Terminal</th>
        <th rowspan='2'>Hora</th>
        <th colspan='2' style='text-align:center'>Intervalo</th>
        <th rowspan='2'>Diferencia</th>
        <th rowspan='2'>Semaforo</th>
        </tr>
        <tr>
        <th>Real</th>
        <th>Vigente</th>
        </tr>

  <?php
  $conn = mysqli_connect("50.192.92.17", "myuser", "myclave", "pruebas1");
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $sql = "SELECT Evento, Hora FROM linea1 where Evento LIKE '%PAN en MT%' and Fecha=CURRENT_DATE order by hora desc limit 15";
  $result = mysqli_query($conn,$sql);
  $sql2 = "SELECT Hora FROM linea1 where Evento LIKE '%PAN en MT%' and Fecha=CURRENT_DATE order by Hora desc limit 1, 5000";
  //2000 numero superior al maximo de registros esperados en un día.
  $result2 = mysqli_query($conn,$sql2);

  $chart_data='';
  //$sum = 0;

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc() and $row2 = $result2->fetch_assoc()) {
      $t1= new DateTime($row["Hora"]);//Hora salida
      $t2= new DateTime($row2["Hora"]);//Hora anterior salida
      $intervalo=$t2->diff($t1);//Diferencia de Hora Salida - Hora anterior salida

        $seconds = $intervalo->s + $intervalo->i*60;
      //$sum+= $intervalo;
        $chart_data .= "{ Hora:'".$row["Hora"]."', Intervalo:". $seconds/60 ."}, ";
        
        echo "<tr>";
        echo "<th>PAN</th>";
        echo "<td>" . $row["Hora"]. "</td>";
        //echo "<td>" . $row2["Hora"] . "</td>";
        echo "<td>" . $intervalo->format('%H:%I:%S') . "</td>";//Diferencia
        echo compara($row["Hora"],$row2["Hora"],$intervalo->format('%H:%I:%S'));
        //echo "<td>" . $sum->format('%H:%I:%S') . "</td>";
    }
    //echo "</table>";
  } else { echo "0 results"; }

  $chart_data = substr($chart_data, 0, -2);
  mysqli_free_result($result);
  mysqli_free_result($result2);
  mysqli_close($conn);
  ?>

    </tbody>
</table>
</div>
<div class="col">
    <table style="width:60% float: left;">
        <tbody>

        <h2 align="center">Grafico de Control de Intervalos</h2>
        <h3 align="center">Linea_1</h3>
        <br /><br />
        <div id="chart"></div>

        </tbody>

    </table>
</div>
</div>
</div>
<!-- Table  -->
<!-- <script src="./js/test.js" charset="utf-8"></script> -->
</body>
</html>


<script>
    Morris.Line({
        element : 'chart',
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