<?php
//Salidas de trenes en terminal El Pantitlán, Servicio de días laborables.
$L1PanLab=array(
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
  array('23:20:00','23:52:00','00:08:00','00:07:03'),
  array('23:52:00','23:58:10','00:06:10','00:07:03')
  );
//Salidas de trenes en terminal El Pantitlán, Servicio de días sabados.
$L1PanSab=array(
  array('05:50:00','06:30:00','00:02:30','00:04:42'),
  array('06:30:00','21:31:20','00:02:10','00:04:42'),
  array('21:31:20','22:58:00','00:03:20','00:04:42'),
  array('22:58:00','23:38:00','05:00:00','00:04:42'),
  array('23:38:00','23:42:10','04:10:00','00:04:42')
  );
//Salidas de trenes en terminal Pantitlán, Servicio de días domingos.
$L1PanDom=array(
  array('06:48:00','21:12:00','00:03:00','00:04:42'),
  array('21:12:00','21:16:00','00:04:00','00:04:42'),
  array('21:16:00','23:11:00','00:05:00','00:04:42'),
  array('23:11:00','23:18:00','00:07:00','00:04:42'),
  array('23:18:00','23:50:00','08:00:00','00:04:42'),
  array('23:50:00','23:58:10','08:10:00','00:04:42')
  );

//Salidas de trenes en terminal Observatorio, Servicio de días laborables.
$L1ObsLab=array(
  array('05:00:00','05:50:00','00:10:00','00:11:30'),
  array('05:50:00','05:57:00','00:07:00','00:11:30'),
  array('05:57:00','06:04:00','00:03:30','00:11:30'),
  array('06:04:00','06:25:00','00:03:00','00:03:56'),
  array('06:25:00','06:57:30','00:02:30','00:03:56'),
  array('06:57:30','06:59:50','00:02:20','00:03:56'),
  array('06:59:50','10:32:35','00:01:55','00:03:56'),
  array('10:32:35','10:34:40','00:02:05','00:04:20'),
  array('10:34:40','15:38:00','00:02:10','00:04:20'),
  array('15:38:00','21:05:45','00:01:55','00:04:00'),
  array('21:05:45','21:08:00','00:02:15','00:07:03'),
  array('21:08:00','22:47:00','00:03:00','00:07:03'),
  array('22:47:00','23:22:00','00:05:00','00:07:03'),
  array('23:22:00','23:54:00','08:00:00','00:07:03'),
  array('23:54:00','23:57:10','03:10:00','00:07:03')
  );
//Salidas de trenes en terminal Observatorio, Servicio de días sabados.
$L1ObsSab=array(
  array('05:57:00','06:05:00','00:04:00','00:04:42'),
  array('06:05:00','06:23:00','00:03:00','00:04:42'),
  array('06:23:00','07:08:00','00:02:30','00:04:42'),
  array('07:08:00','22:05:00','00:02:10','00:04:42'),
  array('22:05:00','22:07:40','00:02:40','00:04:42'),
  array('22:07:40','23:21:00','00:03:20','00:04:42'),
  array('23:21:00','23:25:00','04:00:00','00:04:42'),
  array('23:25:00','23:41:00','08:00:00','00:04:42'),
  array('23:41:00','23:49:20','08:20:00','00:04:42')
  );
//Salidas de trenes en terminal Observatorio, Servicio de días domingos.
$L1ObsDom=array(
  array('06:54:00','07:15:00','00:03:30','00:04:42'),
  array('07:15:00','21:51:00','00:03:00','00:04:42'),
  array('21:51:00','22:51:00','00:05:00','00:04:42'),
  array('22:51:00','22:57:00','00:06:00','00:04:42'),
  array('22:57:00','23:37:00','00:08:00','00:04:42'),
  array('23:37:00','23:57:00','10:00:00','00:04:42')
  );
//Salidas de trenes en terminal Tasqueña, Servicio de días laborables.
$L2TasLab=array(
  array('05:00:00','05:05:20','05:20:00','00:09:07'),
  array('05:05:20','05:34:20','07:15:00','00:09:07'),
  array('05:34:20','05:39:10','04:50:00','00:09:07'),
  array('05:39:10','05:46:25','07:15:00','00:09:07'),
  array('05:46:25','06:22:15','03:35:00','00:04:20'),
  array('06:22:15','06:25:05','02:50:00','00:04:20'),
  array('06:25:05','21:21:40','02:25:00','00:04:20'),
  array('21:21:40','21:57:30','03:35:00','00:09:22'),
  array('21:57:30','22:01:00','03:30:00','00:09:22'),
  array('22:01:00','23:59:59','07:00:00','00:09:22')//*** Rango adicional para compensar la discrepancia de cambio de día.
  //array('23:59:59','00:00:00','07:00:00')
  );
//Salidas de trenes en terminal Tasqueña, Servicio de días sabados.
$L2TasSab=array(
  array('05:50:00','06:26:15','07:15:00','00:09:07'),
  array('06:26:15','07:09:15','03:35:00','00:04:20'),
  array('07:09:15','07:12:10','02:55:00','00:04:20'),
  array('07:12:10','20:10:20','02:25:00','00:04:20'),
  array('20:10:20','20:12:45','02:20:00','00:04:20'),
  array('20:12:45','20:51:25','02:25:00','00:04:20'),
  array('20:51:25','20:56:25','05:00:00','00:04:20'),
  array('20:56:25','21:57:20','03:35:00','00:09:22'),
  array('21:57:20','22:01:00','03:40:00','00:09:22'),
  array('22:01:00','23:59:59','07:00:00','00:09:22')//*** Rango adicional para compensar la discrepancia de cambio de día.
  //array('23:59:59','00:00:00','07:00:00')
  );
//Salidas de trenes en terminal Tasqueña, Servicio de días domingos.
$L2TasDom=array(
  array('06:50:00','07:37:50','06:50:00','00:04:20'),
  array('07:37:50','20:26:35','03:25:00','00:04:20'),
  array('20:26:35','21:02:00','07:05:00','00:04:20'),
  array('21:02:00','21:16:00','07:00:00','00:04:20'),
  array('21:16:00','23:59:59','06:50:00')//*** Rango adicional para compensar la discrepancia de cambio de día.
  //array('23:59:59','00:00:00','06:50:00')
  );

//Salidas de trenes en terminal Cuatro Caminos, Servicio de días laborables.
$L2CcaLab=array(
  array('05:00:00','05:05:20','05:20:00','00:09:07'),
  array('05:05:20','05:34:20','07:15:00','00:09:07'),
  array('05:34:20','05:39:10','04:50:00','00:09:07'),
  array('05:39:10','05:46:25','07:15:00','00:09:07'),
  array('05:46:25','06:22:15','03:35:00','00:09:22'),
  array('06:22:15','06:25:05','02:50:00','00:04:20'),
  array('06:25:05','21:21:40','02:25:00','00:04:20'),
  array('21:21:40','21:57:30','03:35:00','00:09:22'),
  array('21:57:30','22:01:00','03:30:00','00:09:22'),
  array('22:01:00','23:59:59','07:00:00','00:09:22')//*** Rango adicional para compensar la discrepancia de cambio de día.
  //array('23:59:59','00:00:00','07:00:00')
  );
//Salidas de trenes en terminal Cuatro Caminos, Servicio de días sabados.
$L2CcaSab=array(
  array('05:50:00','06:26:15','07:15:00','00:09:22'),
  array('06:26:15','07:09:15','03:35:00','00:04:20'),
  array('07:09:15','07:12:10','02:55:00','00:04:20'),
  array('07:12:10','20:51:25','02:25:00','00:04:20'),
  array('20:51:25','20:56:25','05:00:00','00:04:20'),
  array('20:56:25','21:57:20','03:35:00','00:04:20'),
  array('21:57:20','22:01:00','03:40:00','00:09:22'),
  array('22:01:00','23:59:59','07:00:00','00:09:22')//*** Rango adicional para compensar la discrepancia de cambio de día.
  //array('22:01:00','00:00:00','07:00:00')
  );
//Salidas de trenes en terminal Cuatro Caminos, Servicio de días domingos.
$L2CcaDom=array(
  array('06:50:00','07:37:50','00:06:50','00:09:22'),
  array('07:37:50','20:26:35','00:03:25','00:04:20'),
  array('20:26:35','21:02:00','00:07:05','00:04:20'),
  array('21:02:00','21:16:00','00:07:00','00:04:20'),
  array('21:16:00','23:59:59','00:06:50','00:09:22')//*** Rango adicional para compensar la discrepancia de cambio de día.
  //array('21:16:00','00:00:00','00:06:50')
  );
//Salidas de trenes en terminal Indios Verdes, Servicio de días laborables.
$L3InvLab=array(
  array('05:00:00','05:40:00','00:10:00','00:05:37'),
  array('05:40:00','05:43:10','00:03:10','00:05:37'),
  array('05:43:10','09:36:30','00:02:05','00:05:22'),
  array('09:36:30','14:06:00','00:02:45','00:04:20'),
  array('14:06:00','20:33:30','00:02:05','00:04:20'),
  array('20:33:30','21:24:10','00:03:10','00:04:20'),
  array('21:24:10','21:28:00','00:03:50','00:04:20'),
  array('21:28:00','21:32:00','00:04:00','00:04:20'),
  array('21:32:00','22:42:00','00:05:00','00:05:20'),
  array('22:42:00','22:49:00','00:07:00','00:09:22'),
  array('22:49:00','23:37:00','00:08:00','00:09:22'),
  array('23:37:00','23:59:59','00:09:00','00:09:22'),//*** Rango adicional para compensar la discrfepancia de cambio de día.
  array('23:59:59','00:04:00','00:09:00','00:09:22')
  );
//Salidas de trenes en terminal Indios Verdes, Servicio de días sabados.
$L3InvSab=array(
  array('05:54:00','20:04:00','00:02:50','00:04:20'),
  array('20:04:00','21:49:00','00:05:00','00:05:20'),
  array('21:49:00','21:56:00','00:07:00','00:08:20'),
  array('21:56:00','23:40:00','00:08:00','00:09:22'),
  array('23:40:00','23:52:30','00:12:30','00:09:22')
  );
//Salidas de trenes en terminal Indios Verdes, Servicio de días domingos.
$L3InvDom=array(
  array('06:52:00','06:57:50','00:05:50','00:04:20'),
  array('06:57:50','20:07:30','00:03:50','00:04:20'),
  array('20:07:30','20:47:45','00:05:45','00:09:22'),
  array('20:47:45','20:55:00','00:07:15','00:09:22'),
  array('20:55:00','23:43:00','00:08:00','00:09:22'),
  array('23:43:00','23:54:00','00:11:00','00:09:22'),
  array('23:54:00','23:59:59','00:11:40','00:09:22'),//*** Rango adicional para compensar la discrfepancia de cambio de día.
  array('23:59:59','00:05:40','00:11:40','00:09:22')
  );

//Salidas de trenes en terminal Universidad, Servicio de días laborables.
$L3UniLab=array(
  array('05:00:00','05:40:00','00:10:00','00:05:37'),
  array('05:40:00','05:43:10','00:03:10','00:05:37'),
  array('05:43:10','09:32:20','00:02:05','00:04:20'),
  array('09:32:20','09:35:00','00:02:40','00:04:20'),
  array('09:35:00','14:01:45','00:02:45','00:04:20'),
  array('14:01:45','14:03:55','00:02:10','00:04:20'),
  array('14:03:55','20:48:05','00:02:05','00:04:20'),
  array('20:48:05','20:51:00','00:02:55','00:04:20'),
  array('20:51:00','21:19:30','00:03:10','00:04:20'),
  array('21:19:30','21:24:00','00:04:30','00:05:22'),
  array('21:24:00','22:29:00','00:05:00','00:05:22'),
  array('22:29:00','23:49:00','00:08:00','00:09:22'),
  array('23:49:00','23:55:00','00:06:00','00:09:22')
  );
//Salidas de trenes en terminal Universidad, Servicio de días sabados.
$L3UniSab=array(
  array('05:55:30','06:14:00','00:09:15','00:09:22'),
  array('06:14:00','20:12:40','00:02:50','00:04:20'),
  array('20:12:40','20:16:30','00:03:50','00:04:20'),
  array('20:16:30','22:26:30','00:05:00','00:05:20'),
  array('22:26:30','22:32:00','00:05:30','00:06:22'),
  array('22:32:00','23:44:00','00:08:00','00:09:22'),
  array('23:44:00','23:53:00','00:09:00','00:09:22')
  );
//Salidas de trenes en terminal Universidad, Servicio de días domingos.
$L3UniDom=array(
  array('06:54:00','19:59:50','00:03:50','00:04:20'),
  array('19:59:50','20:04:30','00:04:40','00:05:20'),
  array('20:04:30','21:07:45','00:05:45','00:07:20'),
  array('21:07:45','21:15:00','00:07:15','00:09:22'),
  array('21:15:00','23:47:00','00:08:00','00:09:22'),
  array('23:47:00','23:56:00','00:09:00','00:09:22')
  );
//Salidas de trenes en terminal Santa Anita, Servicio de días laborables.
$L4SaaLab=array(
  array('05:00:00','05:45:00','00:15:00','00:15:22'),
  array('05:45:00','06:13:30','00:09:30','00:09:42'),
  array('06:13:30','14:52:40','00:05:50','00:08:45'),
  array('14:52:40','14:57:50','00:05:10','00:08:45'),
  array('14:57:50','20:53:40','00:05:50','00:08:45'),
  array('20:53:40','21:00:00','00:06:20','00:08:45'),
  array('21:00:00','23:56:00','00:08:00','00:08:50'),
  array('23:56:00','23:59:59','00:12:00','00:09:22'),//*** Rango adicional para compensar la discrepancia de cambio de día.
  array('23:59:59','00:20:00','00:12:00','00:09:22')
  );
//Salidas de trenes en terminal Santa Anita, Servicio de días sabados.
$L4SaaSab=array(
  array('05:57:00','06:06:00','00:09:00','00:09:22'),
  array('06:06:00','06:13:30','00:07:30','00:08:45'),
  array('06:13:30','14:58:30','00:05:50','00:08:45'),
  array('14:58:30','15:03:40','00:05:10','00:08:45'),
  array('15:03:40','22:09:30','00:05:50','00:08:45'),
  array('22:09:30','22:16:00','00:06:30','00:08:45'),
  array('22:16:00','23:44:00','00:08:00','00:08:45'),
  array('23:44:00','23:59:59','00:12:00','00:12:22'),//*** Rango adicional para compensar la discrepancia de cambio de día.
  array('23:59:59','00:20:00','00:12:00','00:12:22')
  );
$L4SaaDom=array(
  array('06:55:00','07:03:00','00:08:00','00:08:45'),
  array('07:03:00','07:10:30','00:07:30','00:08:45'),
  array('07:10:30','15:49:40','00:05:50','00:08:45'),
  array('15:49:40','15:54:50','00:05:10','00:08:45'),
  array('15:54:50','22:14:00','00:05:50','00:08:45'),
  array('22:14:00','22:20:00','00:06:00','00:08:45'),
  array('22:20:00','23:59:59','00:08:00','00:08:45'),//*** Rango adicional para compensar la discrepancia de cambio de día.
  array('23:59:59','00:20:00','00:08:00','00:08:45')
  );

//Salidas de trenes en terminal Martin Carrera, Servicio de días laborables.
$L4MarLab=array(
  array('05:00:00','05:45:00','00:15:00','00:15:22'),
  array('05:45:00','05:53:00','00:08:00','00:08:45'),
  array('05:53:00','20:33:50','00:05:50','00:08:45'),
  array('20:33:50','20:40:00','00:06:10','00:08:45'),
  array('20:40:00','23:44:00','00:08:00','00:08:45'),
  array('23:44:00','23:59:59','00:12:00','00:12:22'),//*** Rango adicional para compensar la discrepancia de cambio de día.
  array('23:59:59','00:20:00','00:12:00','00:12:22')
  );

//Salidas de trenes en terminal Martin Carrera, Servicio de días sabados.
$L4MarSab=array(
  array('05:53:00','21:49:40','00:05:50','00:08:45'),
  array('21:49:40','21:56:00','00:06:20','00:08:45'),
  array('21:56:00','23:32:00','00:08:00','00:08:45'),
  array('23:32:00','23:59:59','00:12:00','00:12:22'),//*** Rango adicional para compensar la discrepancia de cambio de día.
  array('23:59:59','00:20:00','00:12:00','00:12:22')
  );

//Salidas de trenes en terminal Martin Carrera, Servicio de días domingos.
$L4MarDom=array(
  array('06:50:00','22:00:00','00:05:50','00:08:45'),
  array('22:00:00','23:59:59','00:08:00','00:08:45'),
  array('23:59:59','00:20:00','00:10:00','00:10:22')//*** Rango adicional para compensar la discrepancia de cambio de día.
  );
//Salidas de trenes en terminal Pantitlan, Servicio de días laborables.
$L5PanLab=array(
  array('05:00:00','05:55:00','00:11:00','00:11:22'),
  array('05:55:00','06:02:00','00:07:00','00:07:20'),
  array('06:02:00','08:58:20','00:03:50','00:05:45'),
  array('08:58:20','17:06:30','00:04:50','00:05:45'),
  array('17:06:30','17:11:10','00:04:40','00:05:45'),
  array('17:11:10','21:01:10','00:03:50','00:05:45'),
  array('21:01:10','21:49:10','00:05:20','00:05:45'),
  array('21:49:10','23:59:59','00:07:00','00:07:20'),//*** Rango adicional para compensar la discrepancia de cambio de día.
  array('23:59:59','00:16:10','00:07:00','00:07:22')
  );
//Salidas de trenes en terminal Pantitlan, Servicio de días sabados.
$L5PanSab=array(
  array('06:00:00','07:58:20','00:05:55','00:06:22'),
  array('07:58:20','22:09:00','00:04:50','00:05:45'),
  array('22:09:00','23:59:59','00:09:00','00:09:22'),//*** Rango adicional para compensar la discrepancia de cambio de día.
  array('23:59:59','00:06:00','00:09:00','00:09:22')
  );
//Salidas de trenes en terminal Pantitlan, Servicio de días domingos.
$L5PanDom=array(
  array('06:50:30','06:55:30','00:05:00','00:05:45'),
  array('06:55:30','22:03:00','00:05:30','00:05:45'),
  array('22:03:00','23:47:00','00:08:00','00:09:22'),
  array('23:47:00','23:59:59','00:08:30','00:09:22'),//*** Rango adicional para compensar la discrepancia de cambio de día.
  array('23:59:59','00:12:30','00:08:30','00:09:22')
  );

//Salidas de trenes en terminal Politecnico, Servicio de días laborables.
$L5PolLab=array(
  array('05:00:00','06:06:00','00:11:00','00:11:22'),
  array('06:06:00','06:10:05','00:04:05','00:05:45'),
  array('06:10:05','09:25:35','00:03:50','00:05:45'),
  array('09:25:35','09:30:05','00:04:30','00:05:45'),
  array('09:30:05','17:38:15','00:04:50','00:05:45'),
  array('17:38:15','21:01:25','00:03:50','00:05:45'),
  array('21:01:25','22:10:45','00:05:20','00:05:45'),
  array('22:10:45','23:59:59','00:07:00','00:09:22'),//*** Rango adicional para compensar la discrepancia de cambio de día.
  array('23:59:59','00:09:45','00:07:00','00:09:22'),
  array('00:09:45','00:17:00','00:07:15','00:09:22')
  );
//Salidas de trenes en terminal Politecnico, Servicio de días sabados.
$L5PolSab=array(
  array('06:00:00','06:09:15','00:09:15','00:09:22'),
  array('06:09:15','07:55:45','00:05:55','00:07:22'),
  array('07:55:45','08:01:05','00:05:20','00:05:45'),
  array('08:01:05','22:11:45','00:04:50','00:05:45'),
  array('22:11:45','22:18:00','00:06:15','00:07:22'),
  array('22:18:00','23:59:59','00:09:00','00:09:22'),//*** Rango adicional para compensar la discrepancia de cambio de día.
  array('23:59:59','00:06:00','00:09:00','00:09:22')
  );
//Salidas de trenes en terminal Politecnico, Servicio de días domingos.
$L5PolDom=array(
  array('06:50:30','21:52:30','00:05:30','00:07:22'),
  array('21:52:30','21:59:00','00:06:30','00:07:22'),
  array('21:59:00','23:59:59','00:08:00','00:09:22'),//*** Rango adicional para compensar la discrepancia de cambio de día.
  array('23:59:59','00:15:00','00:08:00','00:09:22')
  );
//Salidas de trenes en terminal El Rosario, Servicio de días laborables.
$L6RosLab=array(
  array('05:00:00','05:46:00','00:07:40','00:09:22'),
  array('05:46:00','05:53:00','00:07:00','00:07:30'),
  array('05:53:00','09:53:00','00:04:00','00:06:30'),
  array('09:53:00','17:33:00','00:05:00','00:06:30'),
  array('17:33:00','21:21:00','00:04:00','00:06:30'),
  array('21:21:00','21:26:30','00:05:30','00:06:30'),
  array('21:26:30','23:50:30','00:09:00','00:09:22'),
  array('23:50:30','23:59:59','00:09:30','00:09:45'),//*** Rango adicional para compensar la discrepancia de cambio de día.
  array('23:59:59','00:00:00','00:09:30','00:09:45')
  );
//Salidas de trenes en terminal El Rosario, Servicio de días sabados.
$L6RosSab=array(
  array('05:52:00','06:45:40','00:07:40','00:09:22'),
  array('06:45:40','06:53:00','00:07:20','00:08:22'),
  array('06:53:00','20:48:00','00:05:00','00:06:30'),
  array('20:48:00','23:48:00','00:09:00','00:09:22'),
  array('23:48:00','23:59:59','00:12:00','00:12:22'),//*** Rango adicional para compensar la discrepancia de cambio de día.
  array('23:59:59','00:00:00','00:12:00','00:12:22')
  );
//Salidas de trenes en terminal Rosario, Servicio de días domingos.
$L6RosDom=array(
  array('06:52:00','07:45:40','00:07:40','00:08:22'),
  array('07:45:40','07:53:00','00:07:20','00:07:45'),
  array('07:53:00','20:58:00','00:05:00','00:06:30'),
  array('20:58:00','23:49:00','00:09:00','00:09:22'),
  array('23:49:00','23:59:59','00:11:00','00:11:22'),//*** Rango adicional para compensar la discrepancia de cambio de día.
  array('23:59:59','00:00:00','00:11:00','00:11:22')
  );

//Salidas de trenes en terminal Martin Carrera, Servicio de días laborables.
$L6MarLab=array(
  array('05:00:00','05:53:40','00:07:40','00:09:22'),
  array('05:53:40','05:58:45','00:05:05','00:09:22'),
  array('05:58:45','10:14:45','00:04:00','00:09:22'),
  array('10:14:45','10:20:15','00:05:30','00:09:22'),
  array('10:20:15','17:50:15','00:05:00','00:09:22'),
  array('17:50:15','17:54:45','00:04:30','00:09:22'),
  array('17:54:45','21:22:45','00:04:00','00:09:22'),
  array('21:22:45','21:30:45','00:08:00','00:09:22'),
  array('21:30:45','23:59:59','00:09:00','00:09:22'),//*** Rango adicional para compensar la discrepancia de cambio de día.
  array('23:59:59','00:03:45','00:09:00','00:09:22')
  );
//Salidas de trenes en terminal Martin Carrera, Servicio de días sabados.
$L6MarSab=array(
  array('05:52:00','06:53:20','00:07:40','00:08:22'),
  array('06:53:20','07:00:15','00:06:55','00:07:30'),
  array('07:00:15','20:50:15','00:05:00','00:06:30'),
  array('20:50:15','23:59:15','00:09:00','00:09:22')
  );
//Salidas de trenes en terminal Martin Carrera, Servicio de días domingos.
$L6MarDom=array(
  array('06:52:00','07:53:20','00:07:40','00:09:22'),
  array('07:53:20','08:00:15','00:06:55','00:07:22'),
  array('08:00:15','20:55:15','00:05:00','00:07:22'),
  array('20:55:15','21:02:15','00:07:00','00:07:22'),
  array('21:02:15','23:59:59','00:09:00','00:09:22'),//*** Rango adicional para compensar la discrepancia de cambio de día.
  array('23:59:59','00:02:15','00:09:00','00:09:22')
  );
//Salidas de trenes en terminal El Rosario, Servicio de días laborables.
$L7RosLab=array(
    array('05:00:00','05:48:00','00:08:00','00:11:45'),
    array('05:48:00','05:55:00','00:01:10','00:11:45'),
    array('05:55:00','11:10:00','00:03:45','00:05:45'),
    array('11:10:00','16:58:30','00:04:15','00:06:22'),
    array('16:58:30','21:21:00','00:03:45','00:05:37'),
    array('21:21:00','21:25:00','00:04:00','00:06:22'),
    array('21:25:00','21:32:00','00:07:00','00:09:22'),
    array('21:32:00','23:32:00','00:07:30','00:09:22'),
    array('23:32:00','23:50:00','00:09:00','00:09:22'),
    array('23:50:00','23:59:59','00:12:00','00:09:22'),//*** Rango adicional para compensar la discrfepancia de cambio de día.
    array('23:50:00','00:02:00','00:12:00','00:09:22')
  );
//Salidas de trenes en terminal El Rosario, Servicio de días sabados.
$L7RosSab=array(
    array('05:51:00','06:02:10','00:11:10','00:09:22'),
    array('06:02:10','08:05:00','00:05:35','00:09:22'),
    array('08:05:00','19:45:00','00:05:00','00:09:22'),
    array('19:45:00','20:52:00','00:05:35','00:09:22'),
    array('20:52:00','21:24:00','00:08:00','00:09:22'),
    array('21:24:00','21:35:00','00:11:00','00:09:22'),
    array('21:35:00','23:59:59','00:11:00','00:09:22'),//*** Rango adicional para compensar la discrfepancia de cambio de día.
    array('21:35:00','00:05:00','00:10:00','00:09:22')
  );
//Salidas de trenes en terminal Rosario, Servicio de días domingos.
$L7RosDom=array(
  array('06:59:00','20:56:30','00:05:35','00:09:22'),
  array('20:56:30','21:04:00','00:07:30','00:09:22'),
  array('21:04:00','00:00:00','00:08:00','00:09:22'),
  array('21:04:01','23:59:59','00:08:00','00:09:22'),//*** Rango adicional para compensar la discrepancia de cambio de día.
  array('23:59:59','00:09:50','00:09:50','00:09:22')//*** Falta la comparación de este intervalo, aun no se indica que es del dia siguiente, requiere campo fecha dia siguiente.
  );

//Salidas de trenes en terminal Barranca, Servicio de días laborables.
$L7BarLab=array(
    array('05:00:00','05:40:00','00:08:00','00:11:45'),
    array('05:40:00','06:17:30','00:07:30','00:11:45'),
    array('06:17:30','11:43:45','00:03:45','00:05:45'),
    array('11:43:45','17:28:00','00:04:15','00:06:22'),
    array('17:28:00','17:32:00','00:04:00','00:06:22'),
    array('17:32:00','21:39:30','00:03:45','00:05:37'),
    array('21:39:30','23:54:30','00:07:30','00:09:22'),
    array('23:54:30','23:59:59','00:08:00','00:09:22'),//*** Rango adicional para compensar la discrfepancia de cambio de día.
    array('23:54:30','00:02:30','00:08:00','00:09:22')
  );
//Salidas de trenes en terminal Barranca, Servicio de días sabados.
$L7BarSab=array(
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
  array('23:55:00','23:59:59','00:09:45','00:09:22'),//*** Rango adicional para compensar la discrepancia de cambio de día.
  array('23:59:59','00:04:45','00:09:45','00:09:22')
  );
//Salidas de trenes en terminal Barranca, Servicio de días domingos.
$L7BarDom=array(
  array('07:00:00','07:24:00','00:06:00','00:09:22'),
  array('07:24:00','07:29:55','00:05:55','00:09:22'),
  array('07:29:55','20:48:20','00:05:35','00:09:22'),
  array('20:48:20','20:56:00','00:07:40','00:09:22'),
  array('20:56:00','23:59:59','00:08:00','00:09:22'),//*** Rango adicional para compensar la discrepancia de cambio de día.
  array('23:59:59','00:08:00','00:08:00','00:09:22'),
  array('00:08:00','00:14:00','00:06:00','00:09:22')//dia siguiente.
  );
?>
