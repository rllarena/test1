<?php
//Salidas de trenes en terminal Pantitlan, Servicio de días laborables.
$L5PanLab=array(
  array('05:00:00','05:55:00','00:11:00'),
  array('05:55:00','06:02:00','00:07:00'),
  array('06:02:00','08:58:20','00:03:50'),
  array('08:58:20','17:06:30','00:04:50'),
  array('17:06:30','17:11:10','00:04:40'),
  array('17:11:10','21:01:10','00:03:50'),
  array('21:01:10','21:49:10','00:05:20'),
  array('21:49:10','23:59:59','00:07:00'),//*** Rango adicional para compensar la discrepancia de cambio de día.
  array('23:59:59','00:16:10','00:07:00')
  );
//Salidas de trenes en terminal Pantitlan, Servicio de días sabados.
$L5PanSab=array(
  array('06:00:00','07:58:20','00:05:55'),
  array('07:58:20','22:09:00','00:04:50'),
  array('22:09:00','23:59:59','00:09:00'),//*** Rango adicional para compensar la discrepancia de cambio de día.
  array('23:59:59','00:06:00','00:09:00')
  );
//Salidas de trenes en terminal Pantitlan, Servicio de días domingos.
$L5PanDom=array(
  array('06:50:30','06:55:30','00:05:00'),
  array('06:55:30','22:03:00','00:05:30'),
  array('22:03:00','23:47:00','00:08:00'),
  array('23:47:00','23:59:59','00:08:30'),//*** Rango adicional para compensar la discrepancia de cambio de día.
  array('23:59:59','00:12:30','00:08:30')
  );

//Salidas de trenes en terminal Politecnico, Servicio de días laborables.
$L5PolLab=array(
  array('05:00:00','06:06:00','00:11:00'),
  array('06:06:00','06:10:05','00:04:05'),
  array('06:10:05','09:25:35','00:03:50'),
  array('09:25:35','09:30:05','00:04:30'),
  array('09:30:05','17:38:15','00:04:50'),
  array('17:38:15','21:01:25','00:03:50'),
  array('21:01:25','22:10:45','00:05:20'),
  array('22:10:45','23:59:59','00:07:00'),//*** Rango adicional para compensar la discrepancia de cambio de día.
  array('23:59:59','00:09:45','00:07:00'),
  array('00:09:45','00:17:00','00:07:15')
  );
//Salidas de trenes en terminal Politecnico, Servicio de días sabados.
$L5PolSab=array(
  array('06:00:00','06:09:15','00:09:15'),
  array('06:09:15','07:55:45','00:05:55'),
  array('07:55:45','08:01:05','00:05:20'),
  array('08:01:05','22:11:45','00:04:50'),
  array('22:11:45','22:18:00','00:06:15'),
  array('22:18:00','23:59:59','00:09:00'),//*** Rango adicional para compensar la discrepancia de cambio de día.
  array('23:59:59','00:06:00','00:09:00')
  );
//Salidas de trenes en terminal Politecnico, Servicio de días domingos.
$L5PolDom=array(
  array('06:50:30','21:52:30','00:05:30'),
  array('21:52:30','21:59:00','00:06:30'),
  array('21:59:00','23:59:59','00:08:00'),//*** Rango adicional para compensar la discrepancia de cambio de día.
  array('23:59:59','00:15:00','00:08:00')
  );
?>
