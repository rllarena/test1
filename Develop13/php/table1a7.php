<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" type="text/css" href="php/estilos.css">
</head>

<body>

<?php
include 'compara.php';
date_default_timezone_set('America/Mexico_City');
//Recibe parametros del ajax para utilizar una sola funcion.
$linea = $_POST['linea'];
$nemo = $_POST['nemo'];
//echo "<p style='text-align:center;'>L&iacutenea:" . $linea . " nem&oacutenico:" . $nemo."</p>";

$conn = mysqli_connect("localhost", "myuser", "myclave", "pruebas1");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($linea!='7'){
  //echo "ES DIFERENTE DE LINEA 7.<br>";
  $sql = "SELECT Evento, Hora FROM linea".$linea." WHERE Evento LIKE '%".$nemo." en MT%' and fecha=CURRENT_DATE order by hora desc  limit 15";
  $sql2 = "SELECT Hora FROM linea".$linea." WHERE Evento LIKE '%".$nemo." en MT%' and fecha=CURRENT_DATE order by Hora desc limit 1, 16";
  $result = mysqli_query($conn,$sql);
  $result2 = mysqli_query($conn,$sql2);
} else {
  //echo "ES IGUAL A LINEA 7.<br>";
  $sql = "SELECT Evento, Hora FROM trama WHERE Evento LIKE '%".$nemo." en MT%' and fecha=CURRENT_DATE order by hora desc  limit 15";
  $sql2 = "SELECT Hora FROM trama WHERE Evento LIKE '%".$nemo." en MT%' and fecha=CURRENT_DATE order by Hora desc limit 1, 16";
  $result = mysqli_query($conn,$sql);
  $result2 = mysqli_query($conn,$sql2);
}

  if ($result->num_rows > 0) {
?>

<?php
  echo "Fecha: ".date('d-m-Y');
    echo "<table>";
      echo "<tr>";
        echo "<th>TERMINAL</th>";
        echo "<th>HoraSalida</th>";
        echo "<th>HoraSalidaAnterior</th>";
        echo "<th>IntervaloReal</th>";
        echo "<th>IntervaloTabla</th>";
        echo "<th>IntReal-IntTabla</th>";
      echo "</tr>";
    while($row = $result->fetch_assoc() and $row2 = $result2->fetch_assoc()) {
      $t1= new DateTime($row["Hora"]);//Hora salida
      $t2= new DateTime($row2["Hora"]);//Hora anterior salida
      $intervalo=$t2->diff($t1);//Diferencia de Hora Salida - Hora anterior salida

        echo "<tr>";
          echo "<th>".$nemo."</th>";
          echo "<td>" . $row["Hora"]. "</td>";
          echo "<td>" . $row2["Hora"] . "</td>";
          echo "<td>" . $intervalo->format('%H:%I:%S') . "</td>";//Diferencia
          echo compara($linea, $nemo, $row["Hora"],$row2["Hora"],$intervalo->format('%H:%I:%S'));
    }
    echo "</table>";
  } else { echo "0 results"; }
  mysqli_free_result($result);
  mysqli_free_result($result2);
  mysqli_close($conn);
?>
</body>
</html>
