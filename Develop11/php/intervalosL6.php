<?php
//Salidas de trenes en terminal El Rosario, Servicio de días laborables.
$L6RosLab=array(
  array('05:00:00','05:46:00','00:07:40'),
  array('05:46:00','05:53:00','00:07:00'),
  array('05:53:00','09:53:00','00:04:00'),
  array('09:53:00','17:33:00','00:05:00'),
  array('17:33:00','21:21:00','00:04:00'),
  array('21:21:00','21:26:30','00:05:30'),
  array('21:26:30','23:50:30','00:09:00'),
  array('23:50:30','23:59:59','00:09:30'),//*** Rango adicional para compensar la discrepancia de cambio de día.
  array('23:59:59','00:00:00','00:09:30')
  );
//Salidas de trenes en terminal El Rosario, Servicio de días sabados.
$L6RosSab=array(
  array('05:52:00','06:45:40','00:07:40'),
  array('06:45:40','06:53:00','00:07:20'),
  array('06:53:00','20:48:00','00:05:00'),
  array('20:48:00','23:48:00','00:09:00'),
  array('23:48:00','23:59:59','00:12:00'),//*** Rango adicional para compensar la discrepancia de cambio de día.
  array('23:59:59','00:00:00','00:12:00')
  );
//Salidas de trenes en terminal Rosario, Servicio de días domingos.
$L6RosDom=array(
  array('06:52:00','07:45:40','00:07:40'),
  array('07:45:40','07:53:00','00:07:20'),
  array('07:53:00','20:58:00','00:05:00'),
  array('20:58:00','23:49:00','00:09:00'),
  array('23:49:00','23:59:59','00:11:00'),//*** Rango adicional para compensar la discrepancia de cambio de día.
  array('23:59:59','00:00:00','00:11:00')
  );

//Salidas de trenes en terminal Martin Carrera, Servicio de días laborables.
$L6MarLab=array(
  array('05:00:00','05:53:40','00:07:40'),
  array('05:53:40','05:58:45','00:05:05'),
  array('05:58:45','10:14:45','00:04:00'),
  array('10:14:45','10:20:15','00:05:30'),
  array('10:20:15','17:50:15','00:05:00'),
  array('17:50:15','17:54:45','00:04:30'),
  array('17:54:45','21:22:45','00:04:00'),
  array('21:22:45','21:30:45','00:08:00'),
  array('21:30:45','23:59:59','00:09:00'),//*** Rango adicional para compensar la discrepancia de cambio de día.
  array('23:59:59','00:03:45','00:09:00')
  );
//Salidas de trenes en terminal Martin Carrera, Servicio de días sabados.
$L6MarSab=array(
  array('05:52:00','06:53:20','00:07:40'),
  array('06:53:20','07:00:15','00:06:55'),
  array('07:00:15','20:50:15','00:05:00'),
  array('20:50:15','23:59:15','00:09:00')
  );
//Salidas de trenes en terminal Martin Carrera, Servicio de días domingos.
$L6MarDom=array(
  array('06:52:00','07:53:20','00:07:40'),
  array('07:53:20','08:00:15','00:06:55'),
  array('08:00:15','20:55:15','00:05:00'),
  array('20:55:15','21:02:15','00:07:00'),
  array('21:02:15','23:59:59','00:09:00'),//*** Rango adicional para compensar la discrepancia de cambio de día.
  array('23:59:59','00:02:15','00:09:00')
  );
?>
