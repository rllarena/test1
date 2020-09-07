<?php
function getDiaHoy(){
  date_default_timezone_set('America/Mexico_City');
  /*Días no laborables: 01-enero, 03-febrero, 16-marzo, 01-mayo, 16-sept, 16-nov y 25-dic*/
  $dmNoLab=array('1-1', '3-2', '16-3', '1-5', '16-9', '16-11', '25-12');
  $Hoy_dia_mes=date("j-n");
  $Hoy_nom_dia=date("N");//N:dia de la semana 1 es lunes, 7 es domingo.
  //N:dia de la semana 1 es lunes, 7 es domingo.
  //j:dia del mes sin ceros al inicio; 1 al 31.
  //n:mes actual de 1 al 12.
  //$DiaHoy = date("N-d-n");
  //echo $DiaHoy." : ";
  $nDiaHoy='';
  if (in_array($Hoy_dia_mes, $dmNoLab) or $Hoy_nom_dia=='7') {
    //domingo.
    $nDiaHoy="domingo";
  }elseif ($Hoy_nom_dia == '6') {
    //sabado.
    $nDiaHoy="sabado";
  } else {
    //laboral.
    $nDiaHoy="laboral";
  }
  //return $nDiaHoy;
  //echo "<h1>nDiaHoy en getDia:".$nDiaHoy."</h1>";
}
 ?>
