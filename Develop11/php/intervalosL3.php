<?php
//Salidas de trenes en terminal Indios Verdes, Servicio de días laborables.
$L3InvLab=array(
  array('05:00:00','05:40:00','00:10:00'),
  array('05:40:00','05:43:10','00:03:10'),
  array('05:43:10','09:36:30','00:02:05'),
  array('09:36:30','14:06:00','00:02:45'),
  array('14:06:00','20:33:30','00:02:05'),
  array('20:33:30','21:24:10','00:03:10'),
  array('21:24:10','21:28:00','00:03:50'),
  array('21:28:00','21:32:00','00:04:00'),
  array('21:32:00','22:42:00','00:05:00'),
  array('22:42:00','22:49:00','00:07:00'),
  array('22:49:00','23:37:00','00:08:00'),
  array('23:37:00','23:59:59','00:09:00'),//*** Rango adicional para compensar la discrfepancia de cambio de día.
  array('23:59:59','00:04:00','00:09:00')
  );
//Salidas de trenes en terminal Indios Verdes, Servicio de días sabados.
$L3InvSab=array(
  array('05:54:00','20:04:00','00:02:50'),
  array('20:04:00','21:49:00','00:05:00'),
  array('21:49:00','21:56:00','00:07:00'),
  array('21:56:00','23:40:00','00:08:00'),
  array('23:40:00','23:52:30','00:12:30')
  );
//Salidas de trenes en terminal Indios Verdes, Servicio de días domingos.
$L3InvDom=array(
  array('06:52:00','06:57:50','00:05:50'),
  array('06:57:50','20:07:30','00:03:50'),
  array('20:07:30','20:47:45','00:05:45'),
  array('20:47:45','20:55:00','00:07:15'),
  array('20:55:00','23:43:00','00:08:00'),
  array('23:43:00','23:54:00','00:11:00'),
  array('23:54:00','23:59:59','00:11:40'),//*** Rango adicional para compensar la discrfepancia de cambio de día.
  array('23:59:59','00:05:40','00:11:40')
  );

//Salidas de trenes en terminal Universidad, Servicio de días laborables.
$L3UniLab=array(
  array('05:00:00','05:40:00','00:10:00'),
  array('05:40:00','05:43:10','00:03:10'),
  array('05:43:10','09:32:20','00:02:05'),
  array('09:32:20','09:35:00','00:02:40'),
  array('09:35:00','14:01:45','00:02:45'),
  array('14:01:45','14:03:55','00:02:10'),
  array('14:03:55','20:48:05','00:02:05'),
  array('20:48:05','20:51:00','00:02:55'),
  array('20:51:00','21:19:30','00:03:10'),
  array('21:19:30','21:24:00','00:04:30'),
  array('21:24:00','22:29:00','00:05:00'),
  array('22:29:00','23:49:00','00:08:00'),
  array('23:49:00','23:55:00','00:06:00')
  );
//Salidas de trenes en terminal Universidad, Servicio de días sabados.
$L3UniSab=array(
  array('05:55:30','06:14:00','00:09:15'),
  array('06:14:00','20:12:40','00:02:50'),
  array('20:12:40','20:16:30','00:03:50'),
  array('20:16:30','22:26:30','00:05:00'),
  array('22:26:30','22:32:00','00:05:30'),
  array('22:32:00','23:44:00','00:08:00'),
  array('23:44:00','23:53:00','00:09:00')
  );
//Salidas de trenes en terminal Universidad, Servicio de días domingos.
$L3UniDom=array(
  array('06:54:00','19:59:50','00:03:50'),
  array('19:59:50','20:04:30','00:04:40'),
  array('20:04:30','21:07:45','00:05:45'),
  array('21:07:45','21:15:00','00:07:15'),
  array('21:15:00','23:47:00','00:08:00'),
  array('23:47:00','23:56:00','00:09:00')
  );
?>
