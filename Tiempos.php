<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table>
  <tr>
    <th>Fecha</th>
    <th>hora</th>
    <th>Evento</th>
  </tr>
  <?php
  $conn = mysqli_connect("50.192.92.17", "myuser", "myclave", "pruebas1");
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT fecha FROM linea6";
  $result = mysqli_query($conn,$sql);

  //$sql2 = "SELECT Hora FROM trama where fecha=CURRENT_DATE order by Hora desc limit 30, 5000";
  //2000 numero superior al maximo de registros esperados en un día.

 // $result2 = mysqli_query($conn,$sql2);

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc() ) {
      //$t1= new DateTime($row["Hora"]);
      //$t2= new DateTime($row2["Hora"]);
      //$intervalo=$t2->diff($t1);
      echo "<tr><td>" . $row["fecha"]. "</td><td>" . $row["hora"] . "</td><td>" . $row["evento"]. "</td></tr>";
    }
    echo "</table>";
  } else { echo "0 results"; }

  // Free result set
  mysqli_free_result($result);
  //mysqli_free_result($result2);

  mysqli_close($conn);
  ?>
</table>
</body>
</html>
