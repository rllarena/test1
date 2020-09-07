<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
<title>Itinerarios</title>
    <meta http-equiv=”refresh” content="5" />
    <!-- add icon link -->
    <link rel = "icon" href ="logo.png" type = "image/x-icon">
    <script src = "bootstrap-4.1.3/site/docs/4.1/assets/js/vendor/jquery.min.js"></script>

    <script>
    $(document).ready(function() {

    var bars = $('.progress-bar');
    var progress = $(bars[i]).attr('aria-valuenow');
    if (progress >= "96") {
    $bars.addClass("bar-success");
    } else if (progress >= "90" && progress < "96") {
    $bars.addClass("bar-warning");
    } else {
    $bars.addClass("bar-error");
    }
    });
    </script>



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
    background-color: #f5f2f3;
    margin-bottom: 10px;
}

.progress-bar {
    border-radius: 10px;
    font-size: 20px;
    height: 24px;
    display: block;
}
.bar-warning {
    background-color: yellow;
}

.bar-success {
    background-color: green;
}

.bar-error {
    background-color: red;
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
<table style="width:50%; float: right;">
    <!-- Table head -->
    <thead class="blue-grey lighten-4">
    <tr>
        <th>TERMINAL</th>
        <th>test</th>
        <th>Programado</th>
        <th>Real</th>
        <th>  %</th>
    </tr>
    </thead>
    <!-- Table head -->

    <!-- Table body -->
    <tbody>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "test");
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT hora_Real, hora_Programado, ((SEC_TO_TIME(195)*100)/hora_Real) as r1 FROM itinerario7test limit 10";
    $result = $conn->query($sql);


    if (!$result) {
        trigger_error('Invalid query: ' . $conn->error);
    }

    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo ' 
                    <th>BAR</th>';
        //echo "<td>" . array_sum($row["hora_Real"]).  "</td>";

        echo "<td>" . $row["hora_Programado"]. "</td>";
        echo "<td>" . $row["hora_Real"] . "</td>";
        /*echo "<td>" . $row["r1"]. "%</td>";*/
        echo '
                    <td>
                    <div class="progress">
                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="300" style="width:'.$row["r1"].'%">'.$row["r1"].'%
                    </div>
                    </div>
                    </td>';
        echo"</tr>";
    }
    echo "</table>";


                $conn->close();
                ?>

                </tbody>
                <!-- Table body -->
            </table>
            <!-- Table  -->

            <!-- Table  -->
            <table style="width:50%; float: right;">
                <!-- Table head -->
                <thead class="blue-grey lighten-4">
                <tr>
                    <th>TERMINAL</th>
                    <th>Programado</th>
                    <th>Real</th>
                    <th>  %</th>
                </tr>
                </thead>
                <!-- Table head -->

                <!-- Table body -->
                <tbody>
                <?php
                $conn = mysqli_connect("localhost", "root", "", "test");
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                $sql = "SELECT hora_Real, hora_Programado, r1 FROM itinerario7test";
                $result = $conn->query($sql);


                if (!$result) {
                    trigger_error('Invalid query: ' . $conn->error);
                }

                // output data of each row
                while($row = $result->fetch_assoc()) {
                    $num = $row["r1"];
                    echo "<tr>";
                    echo ' 
                    <th>ROS</th>';
                    echo "<td>" . $row["hora_Programado"]. "</td>";
                    echo "<td>" . $row["hora_Real"] . "</td>";
                    /*echo "<td>" . $row["r1"]. "%</td>";*/
                   echo '
                    <td>
                    <div class="progress">
                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="300" style="width:'.$row["r1"].'%">'.$row["r1"].'%
                    </div>
                    </div>
                    </td>';
                    echo"</tr>";
                }
                echo "</table>";


                $conn->close();
                ?>

                </tbody>
                <!-- Table body -->
            </table>
            <!-- Table  -->

<?php
$date = new DateTime();

echo date( 'N' );

?>
</body>
</html>

