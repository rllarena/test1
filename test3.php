<!DOCTYPE html>
<html lang="es">
<head>

    <script src="libs/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="./libs/morris.css">
    <script src="./libs/raphael-min.js"></script>
    <script src="./libs/morris.min.js"></script>
    <link rel="stylesheet" href="./css/bootstrap.min.css">

<title>Itinerarios</title>
    <meta http-equiv="refresh" content="50" />
    <!-- add icon link -->
    <link rel = "icon" href ="logo.png" type = "image/x-icon">


    <style>
table {
border-collapse: collapse;
width: 100%;
color: #090000;
font-family: monospace;
font-size: 25px;
text-align: center;
}
th {
background-color: #929090;
color: white;
}
#datetime{
    font-family: monospace;
    font-size: 25px;
    text-align: center;
}
p{
    font-family: monospace;
    font-size: 20px;
    text-align: left;
}
.progress {
    width: 200px;
    height: 24px;
    border-radius: 10px;
    background-color: #fdfafa;
    margin-bottom: 10px;
}

.progress-bar {
    border-radius: 10px;
    font-size: 20px;
    height: 24px;
    display: block;
}

tr:nth-child(even) {background-color: #f2f2f2}
</style>


</head>
<body>
<h1>Linea <img src="linea_7.png" alt="" style="width:2%"/></h1>
<p>Fecha: <span id="datetime"></span></p>

<script>
    var dt = new Date();
    document.getElementById("datetime").innerHTML = dt.toLocaleDateString();
</script>

            <!-- Table  -->
<div class="container">
    <div class="row">
        <div class="col">
<table style="width:50%; float: left;">
    <!-- Table head -->
    <thead class="blue-grey lighten-4">
    <tr>
        <th>TERMINAL</th>
        <th>Hora</th>
        <th>Programado</th>
        <th>Real</th>
        <th>  %</th>
    </tr>
    </thead>
    <!-- Table head -->

    <!-- Table body -->
    <tbody>
    <?php
    $conn = mysqli_connect("50.192.92.18", "myuser", "myclave", "pruebas1");
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT Evento, Hora FROM trama where Evento LIKE '%BAR en MT%' and fecha=current_date order by hora desc";
    $result = mysqli_query($conn,$sql);
    $sql2 = "SELECT Hora FROM trama where Evento LIKE '%BAR en MT%' and fecha=current_date order by Hora desc limit 1, 5000";
    //2000 numero superior al maximo de registros esperados en un día.
    $result2 = mysqli_query($conn,$sql2);

    $chart_data='';

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc() and $row2 = $result2->fetch_assoc()) {
            $t1= new DateTime($row["Hora"]);
            $t2= new DateTime($row2["Hora"]);
            $intervalo=$t2->diff($t1);

            $seconds = $intervalo->s + $intervalo->i*60;
            //echo $seconds;
            $porciento=round((255/$seconds)*100,2);
            //echo $porciento;

            $chart_data .= "{ Hora:'".$row["Hora"]."', Intervalo:". $seconds/60 ."}, ";
            /*echo "<tr><td>" . $row["Evento"]. "</td><td>" . $row["Hora"] . "</td><td>" . $row2["Hora"]. "</td><td>" . $intervalo->format('%H:%I:%S') . "</td></tr>";*/

            echo "<tr>";
            echo "<th>BAR</th>";
            echo "<td>" . $row["Hora"]. "</td>";
            echo "<td>00:04:15</td>";
            echo "<td>" . $intervalo->format('%H:%I:%S') . "</td>";
            echo '
                    <td>
                    <div class="progress">
                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="300" style="width:'.$porciento.'%">'.$porciento.'%
                    </div>
                    </div>
                    </td>';
            echo"</tr>";


        }
        echo "</table>";

    } else { echo "0 results"; }

    $chart_data = substr($chart_data, 0, -2);

    // Free result set
    mysqli_free_result($result);
    mysqli_free_result($result2);



    mysqli_close($conn);
    ?>

    </tbody>
</table>
        </div>
<div class="col">
<table style="width:50%; float: right;">
    <tbody>

        <h2 align="center">Grafico de Control de Intervalos</h2>
        <h3 align="center">Linea_7</h3>
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
        goals: [5.45, 2.25],
        goalStrokeWidth: 5,
        pointSize: 4,
        hideHover: 'auto',
        resize: true

    });
</script>