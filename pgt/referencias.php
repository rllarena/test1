<?php
date_default_timezone_set('America/Mexico_City');
//Salidas de trenes en terminal El Rosario, Servicio de días laborables, L7 ER HST DL V T
$dlrosario=array(
    array('05:00:00','05:30:00','00:10:00','00:11:30'),
    array('05:30:00','05:44:00','00:07:00','00:11:30'),
    array('05:44:00','05:50:00','00:06:00','00:11:30'),
    array('05:50:00','06:20:00','00:02:30','00:03:56'),
    array('06:20:00','06:22:25','00:02:25','00:03:56'),
    array('06:22:25','09:59:00','00:01:55','00:03:56'),
    array('09:59:00','15:04:30','00:02:10','00:04:20'),
    array('15:04:30','20:38:00','00:01:55','00:04:00'),
    array('20:38:00','22:20:00','00:03:00','00:04:00'),
    array('22:20:00','23:20:00','00:05:00','00:07:03'),
    array('23:20:00','23:52:00','08:00:00','00:07:03'),
    array('23:52:00','23:58:10','06:10:00','00:07:03')
);
//Salidas de trenes en terminal Barranca, Servicio de días laborables, L7 BM HST DL V T
$dlbarranca=array(
    array('05:00:00','05:30:00','00:10:00','00:11:30'),
    array('05:30:00','05:44:00','00:07:00','00:11:30'),
    array('05:44:00','05:50:00','00:06:00','00:11:30'),
    array('05:50:00','06:20:00','00:02:30','00:03:56'),
    array('06:20:00','06:22:25','00:02:25','00:03:56'),
    array('06:22:25','09:59:00','00:01:55','00:03:56'),
    array('09:59:00','15:04:30','00:02:10','00:04:20'),
    array('15:04:30','20:38:00','00:01:55','00:04:00'),
    array('20:38:00','22:20:00','00:03:00','00:04:00'),
    array('22:20:00','23:20:00','00:05:00','00:07:03'),
    array('23:20:00','23:52:00','08:00:00','00:07:03'),
    array('23:52:00','23:58:10','06:10:00','00:07:03')
);
//Salidas de trenes en terminal El Rosario, Servicio de días sabados, L7 ER HST DS V T
$dsrosario=array(
    array('05:51:00','06:02:10','00:11:10','00:09:22'),
    array('06:02:10','08:05:00','00:05:35','00:09:22'),
    array('08:05:00','19:45:00','00:05:00','00:09:22'),
    array('19:45:00','20:52:00','00:05:35','00:09:22'),
    array('20:52:00','21:24:00','00:08:00','00:09:22'),
    array('21:24:00','21:35:00','00:11:00','00:09:22'),
    array('21:35:00','23:59:59','00:11:00','00:09:22'),//*** Rango adicional para compensar la discrfepancia de cambio de día.
    array('21:35:00','00:05:00','00:10:00','00:09:22')
);
//Salidas de trenes en terminal Barranca, Servicio de días sabados, L7 BM HST DS V T
$dsbarranca=array(
    array('05:50:00','06:02:20','00:12:20','00:09:22'),
    array('06:02:20','06:21:20','00:06:20','00:09:22'),
    array('06:21:20','08:35:20','02:14:00','00:09:22'),
    array('08:35:20','08:40:00','00:04:40','00:09:22'),
    array('08:40:00','19:20:00','00:05:00','00:09:22'),
    array('19:20:00','21:00:30','00:05:35','00:09:22'),
    array('21:00:30','21:08:00','00:07:30','00:09:22'),
    array('21:08:00','21:40:00','00:08:00','00:09:22'),
    array('21:40:00','21:55:00','00:07:30','00:09:22'),
    array('21:55:00','23:55:00','00:10:00','00:09:22'),
    array('23:55:00','00:04:45','00:09:45','00:09:22')
);
//Salidas de trenes en terminal Rosario, Servicio de días domingos, L7 ER HST DDF V T
$ddrosario=array(
    array('06:59:00','20:56:30','00:05:35','00:09:22'),
    array('20:56:30','21:04:00','00:07:30','00:09:22'),
    array('21:04:00','00:00:00','00:08:00','00:09:22'),
    array('21:04:01','23:59:59','00:08:00','00:09:22'),//*** Rango adicional para compensar la discfepancia de cambio de día.
    array('00:00:00','00:09:50','00:09:50','00:09:22')//*** Falta la comparación de este intervalo, aun no se indica que es del dia siguiente, requiere campo fecha dia siguiente.
);
//Salidas de trenes en terminal Barranca, Servicio de días domingos, L7 BM HST DDF V T
$ddbarranca=array(
    array('07:00:00','07:24:00','00:06:00','00:09:22'),
    array('07:24:00','07:29:55','00:05:55','00:09:22'),
    array('07:29:55','20:48:20','00:05:35','00:09:22'),
    array('20:48:20','20:56:00','00:07:40','00:09:22'),
    array('20:56:00','00:08:00','00:08:00','00:09:22'),
    array('00:08:00','00:14:00','00:06:00','00:09:22'),
);
//N:dia de la semana 1 es lunes, 7 es domingo.
//j:dia del mes sin ceros al inicio; 1 al 31.
//n:mes actual de 1 al 12.
//$DiaHoy = date("N-d-n");
//echo $DiaHoy." : ";

/*Días no laborables: 01-enero, 03-febrero, 16-marzo, 01-mayo, 16-sept, 16-nov y 25-dic*/
$dmNoLab=array('1-1', '3-2', '16-3', '1-5', '16-9', '16-11', '25-12');
$Hoy_dia_mes=date("j-n");
$Hoy_nom_dia=date("N");//N:dia de la semana 1 es lunes, 7 es domingo.

if (in_array($Hoy_dia_mes, $dmNoLab) or $Hoy_nom_dia=='7') {
  //echo "Es dia NoLaborable o domingo: ".date("N-j-n");
  //Tomando Terminal Rosario como base.
  $IntervalosXdia=$ddrosario;
}elseif ($Hoy_nom_dia == '6') {
  //echo "Es sabado: ".date("N-j-n");
  //Tomando Terminal Rosario como base.
  $IntervalosXdia=$dsrosario;
} else {
  //echo "Es dia laboral:".date("N-j-n");
  //Tomando Terminal Rosario como base.
  $IntervalosXdia=$dlrosario;
}
?>
