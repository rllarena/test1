<!DOCTYPE html>
<html lang="es">
<head>
    <title>Itinerarios</title>
    <meta http-equiv="refresh" content="60">
    <!-- add icon link -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
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
            background-color: #f79b11;
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
<table>
  <tr>
      <th>TERMINAL</th>
      <th>Hora</th>
      <th>Programado</th>
      <th>Real</th>
      <th>Ref</th>
      <th>  %</th>
  </tr>
  <?php
  $conn = mysqli_connect("50.192.92.18", "myuser", "myclave", "pruebas1");
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT Evento, Hora FROM trama where fecha=CURRENT_DATE order by Hora desc limit 15";
  $result = mysqli_query($conn,$sql);

  $sql2 = "SELECT Hora FROM trama where fecha=CURRENT_DATE order by Hora desc limit 15, 2000";
  //2000 numero superior al maximo de registros esperados en un día.

  $result2 = mysqli_query($conn,$sql2);

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc() and $row2 = $result2->fetch_assoc()) {
      $t1= new DateTime($row["Hora"]);
      $t2= new DateTime($row2["Hora"]);
      $intervalo=$t2->diff($t1);
      //$porciento=($intervalo/$t1);
      /*echo "<tr><td>" . $row["Evento"]. "</td><td>" . $row["Hora"] . "</td><td>" . $row2["Hora"]. "</td><td>" . $intervalo->format('%H:%I:%S') . "</td></tr>";*/

        echo "<tr>";
        echo "<th>BAR</th>";
        echo "<td>" . $row["Hora"]. "</td>";
        echo "<td>00:03:15</td>";
        echo "<td>" . $row2["Hora"] . "</td>";
        echo "<td>" . $intervalo->format('%H:%I:%S') . "</td>";
        echo '
                    <td>
                    <div class="progress">
                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="300" style="width:50%">50%
                    </div>
                    </div>
                    </td>';
        echo"</tr>";



    }
    echo "</table>";
  } else { echo "0 results"; }

  // Free result set
  mysqli_free_result($result);
  mysqli_free_result($result2);

  mysqli_close($conn);
  ?>
</table>
</body>
</html>
