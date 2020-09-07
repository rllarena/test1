<?php
date_default_timezone_set('America/Mexico_City');
function compara($hEvento,$hnex,$Dif){
  include 'referencias.php';
  $tEvento= new DateTime($hEvento);
  $tNextReal= new DateTime($hnex);
  $IntervaloReal=new DateTime($Dif);

  for ($i=0; $i<sizeof($IntervalosXdia); $i++){
    $hInf= $IntervalosXdia[$i][0];
    $hSup= $IntervalosXdia[$i][1];
    $IntTab= $IntervalosXdia[$i][2];

    $Linf= new DateTime($hInf);
    $Lsup= new DateTime($hSup);
    $IntervaloTabla= new DateTime($IntTab);

    if($tEvento >= $Linf and $tEvento < $Lsup){
      $DiffIntervals=$IntervaloTabla->diff($IntervaloReal);
      //echo "[". $hInf . ": " . "<strong>" . $hEvento . "</strong>:" . $hSup ."), Intervalo Real=".$Dif.", Intervalo Tabla=".$IntTab."Diferencia=".$DiffIntervals->format('%r%H:%I:%S')."<br>";
      $c2="<td>" . $IntTab . "</td><td>" . $DiffIntervals->format('%r%H:%I:%S') . "</td>";//Diferencia
      return $c2;
      break;
    } else {
      //nada
    }
  }
}
?>
