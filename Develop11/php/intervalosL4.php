<?php
//Salidas de trenes en terminal Santa Anita, Servicio de días laborables.
$L4SaaLab=array(
  array('05:00:00','05:45:00','00:15:00'),
  array('05:45:00','06:13:30','00:09:30'),
  array('06:13:30','14:52:40','00:05:50'),
  array('14:52:40','14:57:50','00:05:10'),
  array('14:57:50','20:53:40','00:05:50'),
  array('20:53:40','21:00:00','00:06:20'),
  array('21:00:00','23:56:00','00:08:00'),
  array('23:56:00','23:59:59','00:12:00'),//*** Rango adicional para compensar la discrepancia de cambio de día.
  array('23:59:59','00:20:00','00:12:00')
  );
//Salidas de trenes en terminal Santa Anita, Servicio de días sabados.
$L4SaaSab=array(
  array('05:57:00','06:06:00','00:09:00'),
  array('06:06:00','06:13:30','00:07:30'),
  array('06:13:30','14:58:30','00:05:50'),
  array('14:58:30','15:03:40','00:05:10'),
  array('15:03:40','22:09:30','00:05:50'),
  array('22:09:30','22:16:00','00:06:30'),
  array('22:16:00','23:44:00','00:08:00'),
  array('23:44:00','23:59:59','00:12:00'),//*** Rango adicional para compensar la discrepancia de cambio de día.
  array('23:59:59','00:20:00','00:12:00')
  );
$L4SaaDom=array(
  array('06:55:00','07:03:00','00:08:00'),
  array('07:03:00','07:10:30','00:07:30'),
  array('07:10:30','15:49:40','00:05:50'),
  array('15:49:40','15:54:50','00:05:10'),
  array('15:54:50','22:14:00','00:05:50'),
  array('22:14:00','22:20:00','00:06:00'),
  array('22:20:00','23:59:59','00:08:00'),//*** Rango adicional para compensar la discrepancia de cambio de día.
  array('23:59:59','00:20:00','00:08:00')
  );

//Salidas de trenes en terminal Martin Carrera, Servicio de días laborables.
$L4MarLab=array(
  array('05:00:00','05:45:00','00:15:00'),
  array('05:45:00','05:53:00','00:08:00'),
  array('05:53:00','20:33:50','00:05:50'),
  array('20:33:50','20:40:00','00:06:10'),
  array('20:40:00','23:44:00','00:08:00'),
  array('23:44:00','23:59:59','00:12:00'),//*** Rango adicional para compensar la discrepancia de cambio de día.
  array('23:59:59','00:20:00','00:12:00')
  );

//Salidas de trenes en terminal Martin Carrera, Servicio de días sabados.
$L4MarSab=array(
  array('05:53:00','21:49:40','00:05:50'),
  array('21:49:40','21:56:00','00:06:20'),
  array('21:56:00','23:32:00','00:08:00'),
  array('23:32:00','23:59:59','00:12:00'),//*** Rango adicional para compensar la discrepancia de cambio de día.
  array('23:59:59','00:20:00','00:12:00')
  );

//Salidas de trenes en terminal Martin Carrera, Servicio de días domingos.
$L4MarDom=array(
  array('06:50:00','22:00:00','00:05:50'),
  array('22:00:00','23:59:59','00:08:00'),
  array('23:59:59','00:20:00','00:10:00')//*** Rango adicional para compensar la discrepancia de cambio de día.
  );
?>
