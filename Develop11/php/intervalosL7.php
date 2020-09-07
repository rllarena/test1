<?php
//Salidas de trenes en terminal El Rosario, Servicio de días laborables.
$L7RosLab=array(
  array('05:00:00','05:48:00','00:08:00'),
  array('05:48:00','05:55:00','00:01:10'),
  array('05:55:00','11:10:00','00:03:45'),
  array('11:10:00','16:58:30','00:04:15'),
  array('16:58:30','21:21:00','00:03:45'),
  array('21:21:00','21:25:00','00:04:00'),
  array('21:25:00','21:32:00','00:07:00'),
  array('21:32:00','23:32:00','00:07:30'),
  array('23:32:00','23:50:00','00:09:00'),
  array('23:50:00','23:59:59','00:12:00'),//*** Rango adicional para compensar la discrepancia de cambio de día.
  array('23:59:59','00:02:00','00:12:00')
  );
//Salidas de trenes en terminal El Rosario, Servicio de días sabados.
$L7RosSab=array(
  array('05:51:00','06:02:10','00:11:10'),
  array('06:02:10','08:05:00','00:05:35'),
  array('08:05:00','19:45:00','00:05:00'),
  array('19:45:00','20:52:00','00:05:35'),
  array('20:52:00','21:24:00','00:08:00'),
  array('21:24:00','21:35:00','00:11:00'),
  array('21:35:00','23:59:59','00:11:00'),//*** Rango adicional para compensar la discrepancia de cambio de día.
  array('23:59:59','00:05:00','00:10:00')
  );
//Salidas de trenes en terminal Rosario, Servicio de días domingos.
$L7RosDom=array(
  array('06:59:00','20:56:30','00:05:35'),
  array('20:56:30','21:04:00','00:07:30'),
  array('21:04:00','00:00:00','00:08:00'),
  array('21:04:01','23:59:59','00:08:00'),//*** Rango adicional para compensar la discrepancia de cambio de día.
  array('23:59:59','00:09:50','00:09:50')//*** Falta la comparación de este intervalo, aun no se indica que es del dia siguiente, requiere campo fecha dia siguiente.
  );

//Salidas de trenes en terminal Barranca, Servicio de días laborables.
$L7BarLab=array(
  array('05:00:00','05:40:00','00:08:00'),
  array('05:40:00','06:17:30','00:07:30'),
  array('06:17:30','11:43:45','00:03:45'),
  array('11:43:45','17:28:00','00:04:15'),
  array('17:28:00','17:32:00','00:04:00'),
  array('17:32:00','21:39:30','00:03:45'),
  array('21:39:30','23:54:30','00:07:30'),
  array('23:54:30','23:59:59','00:08:00'),//*** Rango adicional para compensar la discrepancia de cambio de día.
  array('23:59:59','00:02:30','00:08:00')
  );
//Salidas de trenes en terminal Barranca, Servicio de días sabados.
$L7BarSab=array(
  array('05:50:00','06:02:20','00:12:20'),
  array('06:02:20','06:21:20','00:06:20'),
  array('06:21:20','08:35:20','02:14:00'),
  array('08:35:20','08:40:00','00:04:40'),
  array('08:40:00','19:20:00','00:05:00'),
  array('19:20:00','21:00:30','00:05:35'),
  array('21:00:30','21:08:00','00:07:30'),
  array('21:08:00','21:40:00','00:08:00'),
  array('21:40:00','21:55:00','00:07:30'),
  array('21:55:00','23:55:00','00:10:00'),
  array('23:55:00','23:59:59','00:09:45'),//*** Rango adicional para compensar la discrepancia de cambio de día.
  array('23:59:59','00:04:45','00:09:45')
  );
//Salidas de trenes en terminal Barranca, Servicio de días domingos.
$L7BarDom=array(
  array('07:00:00','07:24:00','00:06:00'),
  array('07:24:00','07:29:55','00:05:55'),
  array('07:29:55','20:48:20','00:05:35'),
  array('20:48:20','20:56:00','00:07:40'),
  array('20:56:00','23:59:59','00:08:00'),//*** Rango adicional para compensar la discrepancia de cambio de día.
  array('23:59:59','00:08:00','00:08:00'),
  array('00:08:00','00:14:00','00:06:00')//dia siguiente.
  );
?>
