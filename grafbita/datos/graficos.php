<?php
header('Content-type: application/json');
//include 'conexion.php';

//$objeto = new Conexion();
//$conexion = $objeto->Conectar();

$result3 = array();

//$consulta = "SELECT horaseg, ((minutos)/60) as ref FROM graf";
$conn = mysqli_connect("localhost", "root", "", "pruebas1");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
  $sql = "SELECT Evento, Hora FROM linea".$linea." WHERE Evento LIKE '%".$nemo." en MT%' and fecha='2020-07-21' order by hora desc limit 10";
  $result = mysqli_query($conn,$sql);
  $sql2 = "SELECT Hora FROM linea".$linea." WHERE Evento LIKE '%".$nemo." en MT%' and fecha='2020-07-21' order by Hora desc limit 1, 5000";
  //2000 numero superior al maximo de registros esperados en un día.
  $result2 = mysqli_query($conn,$sql2);
//$resultado = $conexion->prepare($consulta);
//$resultado->execute();

while($row = $result->fetch_assoc() and $row2 = $result2->fetch_assoc()) {
      $t1= new DateTime($row["Hora"]);//Hora salida
      $t2= new DateTime($row2["Hora"]);//Hora anterior salida
      $intervalo=$t2->diff($t1);//Diferencia de Hora Salida - Hora anterior salida

//while ($fila = $resultado->fetch(PDO::FETCH_ASSOC)){
    array_push($result3, array($row["Hora"], compara($row["Hora"],$row2["Hora"],$intervalo->format('%H:%I:%S')) ));
}

print json_encode($result3, JSON_NUMERIC_CHECK);
$conexion=null;
?>
