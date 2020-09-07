<?php
function compara($linea, $nemo, $hEvento,$hnex,$Dif){
  date_default_timezone_set('America/Mexico_City');
  include 'referencias.php';
  /*Días no laborables: 01-enero, 03-febrero, 16-marzo, 01-mayo, 16-sept, 16-nov y 25-dic*/
  $dmNoLab=array('1-1', '3-2', '16-3', '1-5', '16-9', '16-11', '25-12');
  $Hoy_dia_mes=date("j-n");
  $Hoy_nom_dia=date("N");//N:dia de la semana 1 es lunes, 7 es domingo.
  //N:dia de la semana 1 es lunes, 7 es domingo.
  //j:dia del mes sin ceros al inicio; 1 al 31.
  //n:mes actual de 1 al 12.
  //$DiaHoy = date("N-d-n");
  //echo $DiaHoy." : ";
  //$nDiaHoy='';
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

  //echo "Into compara.php:: linea:".$linea."nemo:".$nemo."hevento:".$hEvento."hnex:".$hnex."dif:".$Dif."ndiahoy:".$nDiaHoy;
  //var_dump($L7RosSab);
  if($linea=="1" and $nemo=="PAN" and $nDiaHoy=="laboral"){
    $idArrayObject = new ArrayObject($L1PanLab);
    $id = $idArrayObject->getArrayCopy();
  }
  if($linea=="1" and $nemo=="PAN" and $nDiaHoy=="sabado"){
    $idArrayObject = new ArrayObject($L1PanSab);
    $id = $idArrayObject->getArrayCopy();
  }
  if($linea=="1" and $nemo=="PAN" and $nDiaHoy=="domingo"){
    $idArrayObject = new ArrayObject($L1PanDom);
    $id = $idArrayObject->getArrayCopy();
  }
  if($linea=="1" and $nemo=="OBS" and $nDiaHoy=="laboral"){
    $idArrayObject = new ArrayObject($L1ObsLab);
    $id = $idArrayObject->getArrayCopy();
  }
  if($linea=="1" and $nemo=="OBS" and $nDiaHoy=="sabado"){
    $idArrayObject = new ArrayObject($L1ObsSab);
    $id = $idArrayObject->getArrayCopy();
  }
  if($linea=="1" and $nemo=="OBS" and $nDiaHoy=="domingo"){
    $idArrayObject = new ArrayObject($L1ObsDom);
    $id = $idArrayObject->getArrayCopy();
  }

  if($linea=="2" and $nemo=="TAS" and $nDiaHoy=="laboral"){
    $idArrayObject = new ArrayObject($L2TasLab);
    $id = $idArrayObject->getArrayCopy();
  }
  if($linea=="2" and $nemo=="TAS" and $nDiaHoy=="sabado"){
    $idArrayObject = new ArrayObject($L2TasSab);
    $id = $idArrayObject->getArrayCopy();
  }
  if($linea=="2" and $nemo=="TAS" and $nDiaHoy=="domingo"){
    $idArrayObject = new ArrayObject($L2TasDom);
    $id = $idArrayObject->getArrayCopy();
  }
  if($linea=="2" and $nemo=="CCA" and $nDiaHoy=="laboral"){
    $idArrayObject = new ArrayObject($L2CcaLab);
    $id = $idArrayObject->getArrayCopy();
  }
  if($linea=="2" and $nemo=="CCA" and $nDiaHoy=="sabado"){
    $idArrayObject = new ArrayObject($L2CcaSab);
    $id = $idArrayObject->getArrayCopy();
  }
  if($linea=="2" and $nemo=="CCA" and $nDiaHoy=="domingo"){
    $idArrayObject = new ArrayObject($L2CcaDom);
    $id = $idArrayObject->getArrayCopy();
  }

  if($linea=="3" and $nemo=="INV" and $nDiaHoy=="laboral"){
    $idArrayObject = new ArrayObject($L3InvLab);
    $id = $idArrayObject->getArrayCopy();
  }
  if($linea=="3" and $nemo=="INV" and $nDiaHoy=="sabado"){
    $idArrayObject = new ArrayObject($L3InvSab);
    $id = $idArrayObject->getArrayCopy();
  }
  if($linea=="3" and $nemo=="INV" and $nDiaHoy=="domingo"){
    $idArrayObject = new ArrayObject($L3InvDom);
    $id = $idArrayObject->getArrayCopy();
  }
  if($linea=="3" and $nemo=="UNI" and $nDiaHoy=="laboral"){
    $idArrayObject = new ArrayObject($L3UniLab);
    $id = $idArrayObject->getArrayCopy();
  }
  if($linea=="3" and $nemo=="UNI" and $nDiaHoy=="sabado"){
    $idArrayObject = new ArrayObject($L3UniSab);
    $id = $idArrayObject->getArrayCopy();
  }
  if($linea=="3" and $nemo=="UNI" and $nDiaHoy=="domingo"){
    $idArrayObject = new ArrayObject($L3UniDom);
    $id = $idArrayObject->getArrayCopy();
  }


  if($linea=="4" and $nemo=="SAA" and $nDiaHoy=="laboral"){
    $idArrayObject = new ArrayObject($L4SaaLab);
    $id = $idArrayObject->getArrayCopy();
  }
  if($linea=="4" and $nemo=="SAA" and $nDiaHoy=="sabado"){
    $idArrayObject = new ArrayObject($L4SaaSab);
    $id = $idArrayObject->getArrayCopy();
  }
  if($linea=="4" and $nemo=="SAA" and $nDiaHoy=="domingo"){
    $idArrayObject = new ArrayObject($L4SaaDom);
    $id = $idArrayObject->getArrayCopy();
  }
  if($linea=="4" and $nemo=="MAR" and $nDiaHoy=="laboral"){
    $idArrayObject = new ArrayObject($L4MarLab);
    $id = $idArrayObject->getArrayCopy();
  }
  if($linea=="4" and $nemo=="MAR" and $nDiaHoy=="sabado"){
    $idArrayObject = new ArrayObject($L4MarSab);
    $id = $idArrayObject->getArrayCopy();
  }
  if($linea=="4" and $nemo=="MAR" and $nDiaHoy=="domingo"){
    $idArrayObject = new ArrayObject($L4MarDom);
    $id = $idArrayObject->getArrayCopy();
  }


  if($linea=="5" and $nemo=="PAN" and $nDiaHoy=="laboral"){
    $idArrayObject = new ArrayObject($L5PanLab);
    $id = $idArrayObject->getArrayCopy();
  }
  if($linea=="5" and $nemo=="PAN" and $nDiaHoy=="sabado"){
    $idArrayObject = new ArrayObject($L5PanSab);
    $id = $idArrayObject->getArrayCopy();
  }
  if($linea=="5" and $nemo=="PAN" and $nDiaHoy=="domingo"){
    $idArrayObject = new ArrayObject($L5PanDom);
    $id = $idArrayObject->getArrayCopy();
  }
  if($linea=="5" and $nemo=="POL" and $nDiaHoy=="laboral"){
    $idArrayObject = new ArrayObject($L5PolLab);
    $id = $idArrayObject->getArrayCopy();
  }
  if($linea=="5" and $nemo=="POL" and $nDiaHoy=="sabado"){
    $idArrayObject = new ArrayObject($L5PolSab);
    $id = $idArrayObject->getArrayCopy();
  }
  if($linea=="5" and $nemo=="POL" and $nDiaHoy=="domingo"){
    $idArrayObject = new ArrayObject($L5PolDom);
    $id = $idArrayObject->getArrayCopy();
  }


  if($linea=="6" and $nemo=="MAR" and $nDiaHoy=="laboral"){
    $idArrayObject = new ArrayObject($L6MarLab);
    $id = $idArrayObject->getArrayCopy();
  }
  if($linea=="6" and $nemo=="MAR" and $nDiaHoy=="sabado"){
    $idArrayObject = new ArrayObject($L6MarSab);
    $id = $idArrayObject->getArrayCopy();
  }
  if($linea=="6" and $nemo=="MAR" and $nDiaHoy=="domingo"){
    $idArrayObject = new ArrayObject($L6MarDom);
    $id = $idArrayObject->getArrayCopy();
  }
  if($linea=="6" and $nemo=="ROS" and $nDiaHoy=="laboral"){
    $idArrayObject = new ArrayObject($L6RosLab);
    $id = $idArrayObject->getArrayCopy();
  }
  if($linea=="6" and $nemo=="ROS" and $nDiaHoy=="sabado"){
    $idArrayObject = new ArrayObject($L6RosSab);
    $id = $idArrayObject->getArrayCopy();
  }
  if($linea=="6" and $nemo=="ROS" and $nDiaHoy=="domingo"){
    $idArrayObject = new ArrayObject($L6RosDom);
    $id = $idArrayObject->getArrayCopy();
  }


  if($linea=="7" and $nemo=="ROS" and $nDiaHoy=="laboral"){
    $idArrayObject = new ArrayObject($L7RosLab);
    $id = $idArrayObject->getArrayCopy();
  }
  if($linea=="7" and $nemo=="ROS" and $nDiaHoy=="sabado"){
    $idArrayObject = new ArrayObject($L7RosSab);
    $id = $idArrayObject->getArrayCopy();
  }
  if($linea=="7" and $nemo=="ROS" and $nDiaHoy=="domingo"){
    $idArrayObject = new ArrayObject($L7RosDom);
    $id = $idArrayObject->getArrayCopy();
  }
  if($linea=="7" and $nemo=="BAR" and $nDiaHoy=="laboral"){
    $idArrayObject = new ArrayObject($L7BarLab);
    $id = $idArrayObject->getArrayCopy();
  }
  if($linea=="7" and $nemo=="BAR" and $nDiaHoy=="sabado"){
    $idArrayObject = new ArrayObject($L7BarSab);
    $id = $idArrayObject->getArrayCopy();
  }
  if($linea=="7" and $nemo=="BAR" and $nDiaHoy=="domingo"){
    $idArrayObject = new ArrayObject($L7BarDom);
    $id = $idArrayObject->getArrayCopy();
  }
  //print_r($id);
  $tEvento= new DateTime($hEvento);
  $tNextReal= new DateTime($hnex);
  $IntervaloReal=new DateTime($Dif);

  for ($i=0; $i<sizeof($id); $i++){
    $hInf= $id[$i][0];
    $hSup= $id[$i][1];
    $IntTab= $id[$i][2];
    $IntMax= $id[$i][3];


    $Linf= new DateTime($hInf);
    $Lsup= new DateTime($hSup);
    $IntervaloTabla= new DateTime($IntTab);
    $IntervaloMax= new DateTime($IntMax);

    if($tEvento >= $Linf and $tEvento < $Lsup){
      $DiffIntervals=$IntervaloTabla->diff($IntervaloReal);
      //echo "[". $hInf . ": " . "<strong>" . $hEvento . "</strong>:" . $hSup ."), Intervalo Real=".$Dif.", Intervalo Tabla=".$IntTab."Diferencia=".$DiffIntervals->format('%r%H:%I:%S')."<br>";
      $c2="<td>" . $IntTab . "</td><td>" . $DiffIntervals->format('%r%H:%I:%S') . "</td><td>" . ($IntervaloReal > $IntervaloMax ? '<font size="6"><p style="color:#f6f1f1;">&#128308</p></font>' : '<font size="6"><p style="color:#0026ab;">&#128994</p></font>') ."</td>";//Diferencia
      return $c2;
      break;
    } else {
      //nada
    }
  }
}
?>
