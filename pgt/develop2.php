<!DOCTYPE html>
<?php
  include 'referencias.php';//Tablas de tiempos sintesis.
  include 'funciones.php';//Definición de funciones.
  date_default_timezone_set('America/Mexico_City');
?>
<html lang="es">
<head>

    <script src="libs/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src='https://cdn.plot.ly/plotly-latest.min.js'></script>

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
  $conn = mysqli_connect("localhost", "myuser", "myclave", "pruebas1");
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $sql = "SELECT Evento, Hora FROM linea1 where Evento LIKE '%PAN en MT%' and Fecha='2019-08-27' order by hora desc";
  $result = mysqli_query($conn,$sql);
  $sql2 = "SELECT Hora FROM linea1 where Evento LIKE '%PAN en MT%' and Fecha='2019-08-27' order by Hora desc limit 1, 5000";
  //2000 numero superior al maximo de registros esperados en un día.
  $result2 = mysqli_query($conn,$sql2);

  $valoresHora=array();//hora
  $valoresInt=array();//min

  //$chart_data='';
  //$sum = 0;

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc() and $row2 = $result2->fetch_assoc()) {
      $t1= new DateTime($row["Hora"]);//Hora salida
      $t2= new DateTime($row2["Hora"]);//Hora anterior salida
      $intervalo=$t2->diff($t1);//Diferencia de Hora Salida - Hora anterior salida

        $seconds = $intervalo->s + $intervalo->i*60;
      //$sum+= $intervalo;

        $valoresHora[]=$row["Hora"];
        $valoresInt[]=$seconds/60;

        //$chart_data .= "{ Hora:'".$row["Hora"]."', Intervalo:". $seconds/60 ."}, ";
        
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

  $conn2 = mysqli_connect("localhost", "myuser", "myclave", "pruebas1");
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  $sql3="SELECT hora, min as minimo, max as maximo from grafl1 order by hora desc";
  $result3=mysqli_query($conn2,$sql3);
  $valoresX=array();//hora
  $valoresMin=array();//min
  $valoresMax=array();//max

  while ($ver=mysqli_fetch_row($result3)) {
      // code..{}.
      $valoresX[]=$ver[0];
      $valoresMin[]=$ver[1];
      $valoresMax[]=$ver[2];
  }

  $datosX=json_encode($valoresX);
  $datosMin=json_encode($valoresMin);
  $datosMax=json_encode($valoresMax);

  $datosHora=json_encode($valoresHora);
  $datosInt=json_encode($valoresInt);

  //$chart_data = substr($chart_data, 0, -2);
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
        <div id="graficaLineal"></div>

        </tbody>

    </table>
</div>
</div>
</div>
<!-- Table  -->
<!-- <script src="./js/test.js" charset="utf-8"></script> -->
</body>
</html>


<script type="text/javascript">
    function crearCadenaLineal(json){
        var parsed  = JSON.parse(json);
        var arr = [];
        for (var x in parsed) {
            arr.push(parsed[x]);
        }
        return arr;
    }

</script>



<script type="text/javascript">

    datosX=crearCadenaLineal('<?php echo $datosX ?>');
    datosMin=crearCadenaLineal('<?php echo $datosMin ?>');
    datosMax=crearCadenaLineal('<?php echo $datosMax ?>');

    datosHora=crearCadenaLineal('<?php echo $datosHora ?>');
    datosInt=crearCadenaLineal('<?php echo $datosInt ?>');


    var trace1 = {
        x: datosX,
        y: datosMin,
        name: 'Minimo',
        mode: 'lines',
        line: {
            color: 'blue',
            width: 2,
            dash: 'dash'
        }
    };

    var trace2 = {
        x: datosX,
        y: datosMax,
        name: 'Maximo',
        mode: 'lines',
        line: {
            color: 'red',
            width: 2,
            dash: 'dash'
        }
    };

    var trace3 = {
        x: datosHora,
        y: datosInt,
        name: 'Intervalo',
        xaxis: 'x2',
        yaxis: 'y2',
        type: 'scatter'
    };

    var layout = {
        title: '',
        xaxis2: {
            overlaying: 'x',
            side: 'top',
            showticklabels: false,
            title: ''

        },
        yaxis2: {
            title: 'Intervalos',
            overlaying: 'y',
            range: [0, 16],
            side: 'right'
        }
    };

    var data = [trace1, trace2,trace3];

    Plotly.newPlot('graficaLineal', data, layout);


</script>