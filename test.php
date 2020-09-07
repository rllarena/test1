<!DOCTYPE html>
<html lang="es">
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
    <caption>Linea 7</caption>
<tr>
<th>Evento</th>
<th>Hora</th>
<th>Dif_Tiempo</th>


</tr>

<?php
$conn = mysqli_connect("50.192.92.18", "myuser", "myclave", "pruebas1");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT Evento, Hora, NextHora FROM ( SELECT Evento, Hora, ( SELECT MIN(Hora) FROM trama T2 WHERE T2.Hora > T1.Hora and Evento RLIKE '^BAR en MT') AS NextHora FROM trama T1 ) AS T WHERE Evento RLIKE '^BAR en MT' AND fecha=CURRENT_DATE order by Hora DESC";

$result = $conn->query($sql);
if (!$result) {
    trigger_error('Invalid query: ' . $conn->error);
}

// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["NextHora"]. "</td><td>" . $row["T"] . "</td><td>";
/*. $row["NextHora"]. "</td><td>". $row["TIMEDIFF(NextHora,Hora)"]. "</td></tr>";*/
}
echo "</table>";

$conn->close();
?>


</table>
</body>
</html>