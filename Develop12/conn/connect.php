<?php
	$host="localhost";
	$user="myuser";
	$pass="myclave";
	$db="pruebas1";

	$connect=new mysqli($host, $user, $pass, $db) or die("error" . msqli_errno($connect));
	if($connect->connect_error){
		die("Conexión fallida: ".$connect->connect_error);
	}
 ?>
