<?php
date_default_timezone_set('America/Mexico_City');
function tabArgLn($l,$nem){
  $conn = mysqli_connect("localhost", "root", "", "pruebas1");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
  $sql = "SELECT Evento, Hora FROM linea".$l." WHERE Evento LIKE '%".$nem." en MT%' and fecha=CURRENT_DATE order by hora desc limit 1";
  $result = mysqli_query($conn,$sql);
  $sql2 = "SELECT Hora FROM linea".$l." WHERE Evento LIKE '%".$nem." en MT%' and fecha=CURRENT_DATE order by Hora desc limit 1, 5000";
  //2000 numero superior al maximo de registros esperados en un día.
  $result2 = mysqli_query($conn,$sql2);
  if ($result->num_rows > 0) {
    // output data of each row
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
          echo "<th>".$nem."</th>";
          echo "<td>" . $row["Hora"]. "</td>";
          echo "<td>" . $row2["Hora"] . "</td>";
          echo "<td>" . $intervalo->format('%H:%I:%S') . "</td>";//Diferencia
          echo compara($row["Hora"],$row2["Hora"],$intervalo->format('%H:%I:%S'));
    }
    echo "</table>";
  } else { echo "0 results"; }
  mysqli_free_result($result);
  mysqli_free_result($result2);
  mysqli_close($conn);
}
?>
