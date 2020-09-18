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
    $IntMax= $IntervalosXdia[$i][3];


    $Linf= new DateTime($hInf);
    $Lsup= new DateTime($hSup);
    $IntervaloTabla= new DateTime($IntTab);
    $IntervaloMax= new DateTime($IntMax);


    if($tEvento >= $Linf and $tEvento < $Lsup){
      $DiffIntervals=$IntervaloTabla->diff($IntervaloReal);
      echo "[". $hInf . ": " . "<strong>" . $hEvento . "</strong>:" . $hSup ."), Intervalo Real=".$Dif.", Intervalo Tabla=".$IntTab.", Intervalo Maximo=".$IntMax."Diferencia=".$DiffIntervals->format('%r%H:%I:%S')."<br>";
      $c2="<td>" . $IntTab . "</td><td>" . $DiffIntervals->format('%r%H:%I:%S') . "</td><td>" . ($IntervaloReal > $IntervaloMax ? '<font size="5"><p style="color:#f6f1f1;">&#128308</p></font>' : '<font size="5"><p style="color:#0026ab;">&#128994</p></font>') ."</td>";//Diferencia
      return $c2;
      break;
    } else {
      //nada
    }
  }
}

?>


<script type="text/javascript">
  function crearCadenaLineal(json){
    var parsed  = JSON.parse(json);
    var arr = [];
    for (var x in parsed) {
      arr.push(parsed[x]);
    }
    return arr;
  }

</script>



<script type="text/javascript">

  datosX=crearCadenaLineal('<?php echo $datosX ?>');
  datosMin=crearCadenaLineal('<?php echo $datosMin ?>');
  datosMax=crearCadenaLineal('<?php echo $datosMax ?>');

  datosHora=crearCadenaLineal('<?php echo $datosHora ?>');
  datosInt=crearCadenaLineal('<?php echo $datosInt ?>');


  var trace1 = {
    x: datosX,
    y: datosMin,
    name: 'Minimo',
    mode: 'lines',
    line: {
      color: 'blue',
      width: 2,
      dash: 'dash'
    }
  };

  var trace2 = {
    x: datosX,
    y: datosMax,
    name: 'Maximo',
    mode: 'lines',
    line: {
      color: 'red',
      width: 2,
      dash: 'dash'
    }
  };

  var trace3 = {
    x: datosHora,
    y: datosInt,
    name: 'Intervalo',
    xaxis: 'x2',
    yaxis: 'y2',
    type: 'scatter'
  };

  var layout = {
    title: '',
    xaxis2: {
      overlaying: 'x',
      side: 'top',
      showticklabels: false,
      title: ''

    },
    yaxis2: {
      title: 'Intervalos',
      overlaying: 'y',
      range: [0, 16],
      side: 'right'
    }
  };

  var data = [trace1, trace2,trace3];

  Plotly.newPlot('graficaLineal', data, layout);


</script>