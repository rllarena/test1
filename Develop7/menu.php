<!DOCTYPE html>
<?php
  include 'php/referencias.php';//Tablas de tiempos sintesis.
  include 'php/funciones.php';//Definición de funciones.
	include 'php/tabln.php';//Definición de funciones.
  date_default_timezone_set('America/Mexico_City');
?>
<?php require_once('conn/connect.php') ?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset= ISO-8859-1"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Itinerarios</title>
		<link rel="stylesheet" type="text/css" href="css/estilos.css">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/ajaxB.js"></script>
		<script type="text/javascript" src="js/ajax_form_EnterKey.js"></script>
		<script type="text/javascript">
			history.forward();
		</script>
	</head>
	<body>
    <div id="cabecera_izquierda">
          <img src="img/titulo.png" width="100%" id="header">
    </div>
		<div class="container col-sm-12" style="width:100%">
			<?php
				if ($_GET["TipoCuentaUser"]=='admin'){?>
			<?php	}?>

			<a style="color:blue;" class="nav-item nav-link" id="TabData" data-toggle="tab" href="#nav-inicial" role="tab" aria-controls="" aria-selected="false">
			Usuario: <strong><?php echo $_GET["Usuario"];?></strong> &Aacuterea: <strong><?php echo utf8_decode($_GET["Area"]);?></strong> Cuenta: <strong><?php echo $_GET["TipoCuentaUser"];?></strong></a>
			<!--<a style="color:#FF5A43" href="login.php"><span class="glyphicon glyphicon-log-in"></span><strong>Salir</strong></a>-->
		</div>
		<nav>
		  <div class="nav navbar-light nav-tabs" id="nav-tab" role="tablist">
		    <a class="nav-item nav-link active" id="nav-inicial-tab" data-toggle="tab" href="#nav-inicial" role="tab" aria-controls="nav-inicial" aria-selected="true">Inicio</a>
				<a class="nav-item nav-link" id="tabLinea1" data-toggle="tab" href="#tab-act-L1" role="tab" aria-controls="tab-act-L1" aria-selected="false">L&iacutenea 1</a>
				<a class="nav-item nav-link" id="tabLinea2" data-toggle="tab" href="#tab-act-L2" role="tab" aria-controls="tab-act-L2" aria-selected="false">L&iacutenea 2</a>
				<a class="nav-item nav-link" id="tabLinea3" data-toggle="tab" href="#tab-act-L3" role="tab" aria-controls="tab-act-L3" aria-selected="false">L&iacutenea 3</a>
				<a class="nav-item nav-link" id="tabLinea4" data-toggle="tab" href="#tab-act-L4" role="tab" aria-controls="tab-act-L4" aria-selected="false">L&iacutenea 4</a>
				<a class="nav-item nav-link" id="tabLinea5" data-toggle="tab" href="#tab-act-L5" role="tab" aria-controls="tab-act-L5" aria-selected="false">L&iacutenea 5</a>
				<a class="nav-item nav-link" id="tabLinea6" data-toggle="tab" href="#tab-act-L6" role="tab" aria-controls="tab-act-L6" aria-selected="false">L&iacutenea 6</a>
				<a class="nav-item nav-link" id="tabLinea7" data-toggle="tab" href="#tab-act-L7" role="tab" aria-controls="tab-act-L7" aria-selected="false">L&iacutenea 7</a>
		  </div>
		</nav>
		<div class="tab-content" id="nav-tabContent">
		  <div class="tab-pane fade show active" id="nav-inicial" role="tabpanel" aria-labelledby="nav-inicial-tab">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  				<ol class="carousel-indicators">
    				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  				</ol>
  			<div class="carousel-inner">
    			<div class="carousel-item active">
      			<img src="img/i1.jpg" class="d-block w-100" alt="...">
    			</div>
    		<div class="carousel-item">
      			<img src="img/i2.jpg" class="d-block w-100" alt="...">
    		</div>
    		<div class="carousel-item">
      			<img src="img/i3.jpg" class="d-block w-100" alt="...">
    		</div>
				<div class="carousel-item">
      			<img src="img/i4.jpg" class="d-block w-100" alt="...">
    		</div>
  		</div>
  		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    		<span class="sr-only">Anterior</span>
  		</a>
  		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    		<span class="carousel-control-next-icon" aria-hidden="true"></span>
    		<span class="sr-only">Siguiente</span>
  		</a>
			</div>
		</div>
<!--***********************************Inicio Línea 1 *****************************************************-->
<div class="tab-pane fade" id="tab-act-L1" role="tabpanel" aria-labelledby="tabLinea1">
	<div id="cont1" class="container-fluid col-sm-12">
		<div class="form-group"><br>
			<div class="row">
				<div class="col-sm-12">
					<p>Fecha: <span id="datetime"></span></p>
					<script>
					    var dt = new Date();
					    document.getElementById("datetime").innerHTML = dt.toLocaleDateString();
					</script>
					  <?php
              tabArgLn("1", "PAN");
              tabArgLn("1", "OBS");
            ?>
				</div>
			</div>
		</div>
	</div>
</div>
<!--***********************************Fin Línea 1 **************************************************************-->
<!--***********************************Inicio Línea 2 *****************************************************-->
<div class="tab-pane fade" id="tab-act-L2" role="tabpanel" aria-labelledby="tabLinea2">
	<div id="cont1" class="container-fluid col-sm-12">
		<div class="form-group"><br>
			<div class="row">
				<div class="col-sm-12">
					<p>Fecha: <span id="datetime"></span></p>
					<script>
					    var dt = new Date();
					    document.getElementById("datetime").innerHTML = dt.toLocaleDateString();
					</script>
					  <?php
              tabArgLn("2", "TAS");
              tabArgLn("2", "CCA");
            ?>
				</div>
			</div>
		</div>
	</div>
</div>
<!--***********************************Fin Línea 2 **************************************************************-->
<!--***********************************Inicio Línea 3 *****************************************************-->
<div class="tab-pane fade" id="tab-act-L3" role="tabpanel" aria-labelledby="tabLinea3">
	<div id="cont1" class="container-fluid col-sm-12">
		<div class="form-group"><br>
			<div class="row">
				<div class="col-sm-12">
					<p>Fecha: <span id="datetime"></span></p>
					<script>
					    var dt = new Date();
					    document.getElementById("datetime").innerHTML = dt.toLocaleDateString();
					</script>
					  <?php
              tabArgLn("3", "INV");
              tabArgLn("3", "UNI");
            ?>
				</div>
			</div>
		</div>
	</div>
</div>
<!--***********************************Fin Línea 3 **************************************************************-->.
<!--***********************************Inicio Línea 4 *****************************************************-->
<div class="tab-pane fade" id="tab-act-L4" role="tabpanel" aria-labelledby="tabLinea4">
	<div id="cont1" class="container-fluid col-sm-12">
		<div class="form-group"><br>
			<div class="row">
				<div class="col-sm-12">
					<p>Fecha: <span id="datetime"></span></p>
					<script>
					    var dt = new Date();
					    document.getElementById("datetime").innerHTML = dt.toLocaleDateString();
					</script>
					  <?php
              tabArgLn("4", "SAA");
              tabArgLn("4", "MAR");
            ?>
				</div>
			</div>
		</div>
	</div>
</div>
<!--***********************************Fin Línea 4 **************************************************************-->
<!--***********************************Inicio Línea 5 *****************************************************-->
<div class="tab-pane fade" id="tab-act-L5" role="tabpanel" aria-labelledby="tabLinea5">
	<div id="cont1" class="container-fluid col-sm-12">
		<div class="form-group"><br>
			<div class="row">
				<div class="col-sm-12">
					<p>Fecha: <span id="datetime"></span></p>
					<script>
					    var dt = new Date();
					    document.getElementById("datetime").innerHTML = dt.toLocaleDateString();
					</script>
					  <?php
              tabArgLn("5", "POL");
              tabArgLn("5", "PAN");
            ?>
				</div>
			</div>
		</div>
	</div>
</div>
<!--***********************************Fin Línea 5 **************************************************************-->
<!--***********************************Inicio Línea 6 *****************************************************-->
<div class="tab-pane fade" id="tab-act-L6" role="tabpanel" aria-labelledby="tabLinea6">
	<div id="cont1" class="container-fluid col-sm-12">
		<div class="form-group"><br>
			<div class="row">
				<div class="col-sm-12">
					<p>Fecha: <span id="datetime"></span></p>
					<script>
					    var dt = new Date();
					    document.getElementById("datetime").innerHTML = dt.toLocaleDateString();
					</script>
					  <?php
              tabArgLn("6", "ROS");
              tabArgLn("6", "MAR");
            ?>
				</div>
			</div>
		</div>
	</div>
</div>
<!--***********************************Fin Línea 6 **************************************************************-->
<!--***********************************Inicio Línea 7 *****************************************************-->
<div class="tab-pane fade" id="tab-act-L7" role="tabpanel" aria-labelledby="tabLinea7">
	<div id="cont1" class="container-fluid col-sm-12">
		<div class="form-group"><br>
			<div class="row">
				<div class="col-sm-12">
					<p>Fecha: <span id="datetime"></span></p>
					<script>
					    var dt = new Date();
					    document.getElementById("datetime").innerHTML = dt.toLocaleDateString();
					</script>
					  <?php
              tabArgLn("7", "BAR");
              tabArgLn("7", "ROS");
            ?>
				</div>
			</div>
		</div>
	</div>
</div>
<!--***********************************Fin Línea 7 **************************************************************-->
		</div><!--Fin nav-tabContent-->
		<footer>Calzada Ignacio Zaragoza 614, Col. Cuatro &Aacuterboles, Alcald&iacutea Venustiano Carranza, C.P. 15730<br>Ciudad de M&eacutexico, Tel 5556274092<br>metro.cdmx.gob.mx</footer>
	</body>
</html>
