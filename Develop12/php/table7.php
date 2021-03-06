<?php
include 'compara.php';
date_default_timezone_set('America/Mexico_City');
//Recibe parametros del ajax para utilizar una sola funcion.
//$linea = $_POST['linea'];
$nemo = $_POST['nemo'];
//echo "argumentos funci&oacuten tabla: L&iacutenea:" . $linea . " nemonico:" . $nemo;
echo "Fecha: ".date('d-m-Y');

$conn7 = mysqli_connect("50.192.92.18", "myuser", "myclave", "pruebas1");
// Check connection
if ($conn7->connect_error) {
  die("Connection failed: " . $conn7->connect_error);
}
  $sql = "SELECT Evento, Hora FROM trama WHERE Evento LIKE '%".$nemo." en MT%' and fecha=CURRENT_DATE order by hora desc limit 15";
  $result = mysqli_query($conn7,$sql);
  $sql2 = "SELECT Hora FROM trama WHERE Evento LIKE '%".$nemo." en MT%' and fecha=CURRENT_DATE order by Hora desc limit 1, 16";
  //2000 numero superior al maximo de registros esperados en un día.
  $result2 = mysqli_query($conn7,$sql2);
  if ($result->num_rows > 0) {
    // output data of each row
    echo "<table width='50%' cellspacing='1px' style='border-spacing: 5px'>";
    echo "<tr>";
    echo "<th rowspan='2'>Terminal</th>";
    echo "<th rowspan='2'>Hora</th>";
    echo "<th colspan='2' style='text-align:center'>Intervalo</th>";
    echo "<th rowspan='2'>Diferencia</th>";
    echo "<th rowspan='2'>Semáforo</th>";
    echo "</tr>";
    echo "<tr>";
    echo "<th>Real</th>";
    echo "<th>Vigente</th>";
    echo "</tr>";
    while($row = $result->fetch_assoc() and $row2 = $result2->fetch_assoc()) {
      $t1= new DateTime($row["Hora"]);//Hora salida
      $t2= new DateTime($row2["Hora"]);//Hora anterior salida
      $intervalo=$t2->diff($t1);//Diferencia de Hora Salida - Hora anterior salida
        echo "<tr>";
          echo "<th>".$nemo."</th>";
          echo "<td>" . $row["Hora"]. "</td>";
          //echo "<td>" . $row2["Hora"] . "</td>";
          echo "<td>" . $intervalo->format('%H:%I:%S') . "</td>";//Diferencia
          echo compara("7", $nemo, $row["Hora"],$row2["Hora"],$intervalo->format('%H:%I:%S'));
    }
    echo "</table>";
  } else { echo "0 results"; }
  mysqli_free_result($result);
  mysqli_free_result($result2);
  mysqli_close($conn7);
?>
