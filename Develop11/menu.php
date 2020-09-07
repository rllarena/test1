<!DOCTYPE html>
<?php
  date_default_timezone_set('America/Mexico_City');
?>
<?php require_once('conn/connect.php') ?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Itinerarios</title>
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link rel="stylesheet" type="text/css" href="css/tab.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/AjaxL1Pan.js"></script>
    <script type="text/javascript" src="js/AjaxL1Obs.js"></script>
    <script type="text/javascript" src="js/AjaxL2Tas.js"></script>
    <script type="text/javascript" src="js/AjaxL2Cca.js"></script>
    <script type="text/javascript" src="js/AjaxL3Uni.js"></script>
    <script type="text/javascript" src="js/AjaxL3Inv.js"></script>
    <script type="text/javascript" src="js/AjaxL4Saa.js"></script>
    <script type="text/javascript" src="js/AjaxL4Mar.js"></script>
    <script type="text/javascript" src="js/AjaxL5Pol.js"></script>
    <script type="text/javascript" src="js/AjaxL5Pan.js"></script>
    <script type="text/javascript" src="js/AjaxL6Ros.js"></script>
    <script type="text/javascript" src="js/AjaxL6Mar.js"></script>
    <script type="text/javascript" src="js/AjaxL7Ros.js"></script>
    <script type="text/javascript" src="js/AjaxL7Bar.js"></script>
		<script type="text/javascript">
			history.forward();
		</script>
    <script>
    function openSel(evt, cityName) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += " active";
    }
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
	<div class="container-fluid col-sm-12">
		<div class="form-group"><br>
			<div class="row">
				<div class="col-sm-12">
          <div class="tab">
            <button class="tablinks" onclick="openSel(event, 'PanL1')" id="defaultOpenL1">Terminal Pantitl&aacuten</button>
            <button class="tablinks" onclick="openSel(event, 'ObsL1')">Terminal Observatorio</button>
            <button class="tablinks" onclick="openSel(event, 'GL1')">Gr&aacuteficas</button>
          </div>
          <div id="PanL1" class="tabcontent">
            <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
            <div id="RegL1_PAN"></div>
          </div>
          <div id="ObsL1" class="tabcontent">
            <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
            <div id="RegL1_OBS"></div>
          </div>
          <div id="GL1" class="tabcontent">
            <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
          </div>
          <script>
            document.getElementById("defaultOpenL1").click();
          </script>
				</div>
			</div>
		</div>
	</div>
</div>
<!--***********************************Fin Línea 1 **************************************************************-->
<!--***********************************Inicio Línea 2 *****************************************************-->
<div class="tab-pane fade" id="tab-act-L2" role="tabpanel" aria-labelledby="tabLinea2">
	<div class="container-fluid col-sm-12">
		<div class="form-group"><br>
			<div class="row">
				<div class="col-sm-12">
          <div class="tab">
            <button class="tablinks" onclick="openSel(event, 'TasL2')" id="defaultOpenL7">Terminal Tasquena</button>
            <button class="tablinks" onclick="openSel(event, 'CcaL2')">Terminal Cuatro Caminos</button>
            <button class="tablinks" onclick="openSel(event, 'GL2')">Gr&aacuteficas</button>
          </div>
          <div id="TasL2" class="tabcontent">
            <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
            <div id="RegL2_TAS"></div>
          </div>
          <div id="CcaL2" class="tabcontent">
            <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
            <div id="RegL2_CCA"></div>
          </div>
          <div id="GL2" class="tabcontent">
            <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
          </div>
          <script>
            document.getElementById("defaultOpenL2").click();
          </script>
				</div>
			</div>
		</div>
	</div>
</div>
<!--***********************************Fin Línea 2 **************************************************************-->
<!--***********************************Inicio Línea 3 *****************************************************-->
<div class="tab-pane fade" id="tab-act-L3" role="tabpanel" aria-labelledby="tabLinea3">
	<div class="container-fluid col-sm-12">
		<div class="form-group"><br>
			<div class="row">
				<div class="col-sm-12">
          <div class="tab">
            <button class="tablinks" onclick="openSel(event, 'UniL3')" id="defaultOpenL3">Terminal Universidad</button>
            <button class="tablinks" onclick="openSel(event, 'InvL3')">Terminal Indios Verdes</button>
            <button class="tablinks" onclick="openSel(event, 'GL3')">Gr&aacuteficas</button>
          </div>
          <div id="UniL3" class="tabcontent">
            <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
            <div id="RegL3_UNI"></div>
          </div>
          <div id="InvL3" class="tabcontent">
            <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
            <div id="RegL3_INV"></div>
          </div>
          <div id="GL3" class="tabcontent">
            <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
          </div>
          <script>
            document.getElementById("defaultOpenL3").click();
          </script>
				</div>
			</div>
		</div>
	</div>
</div>
<!--***********************************Fin Línea 3 **************************************************************-->.
<!--***********************************Inicio Línea 4 *****************************************************-->
<div class="tab-pane fade" id="tab-act-L4" role="tabpanel" aria-labelledby="tabLinea4">
	<div class="container-fluid col-sm-12">
		<div class="form-group"><br>
			<div class="row">
				<div class="col-sm-12">
          <div class="tab">
            <button class="tablinks" onclick="openSel(event, 'SaaL4')" id="defaultOpenL4">Terminal Santa Anita</button>
            <button class="tablinks" onclick="openSel(event, 'MarL4')">Terminal Martin Carrera</button>
            <button class="tablinks" onclick="openSel(event, 'GL4')">Gr&aacuteficas</button>
          </div>
          <div id="SaaL4" class="tabcontent">
            <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
            <div id="RegL4_SAA"></div>
          </div>
          <div id="MarL4" class="tabcontent">
            <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
            <div id="RegL4_MAR"></div>
          </div>
          <div id="GL4" class="tabcontent">
            <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
          </div>
          <script>
            document.getElementById("defaultOpenL4").click();
          </script>
				</div>
			</div>
		</div>
	</div>
</div>
<!--***********************************Fin Línea 4 **************************************************************-->
<!--***********************************Inicio Línea 5 *****************************************************-->
<div class="tab-pane fade" id="tab-act-L5" role="tabpanel" aria-labelledby="tabLinea5">
	<div class="container-fluid col-sm-12">
		<div class="form-group"><br>
			<div class="row">
				<div class="col-sm-12">
          <div class="tab">
            <button class="tablinks" onclick="openSel(event, 'PolL5')" id="defaultOpenL5">Terminal Polit&eacutecnico</button>
            <button class="tablinks" onclick="openSel(event, 'PanL5')">Terminal Pantitl&aacuten</button>
            <button class="tablinks" onclick="openSel(event, 'GL7')">Gr&aacuteficas</button>
          </div>
          <div id="PolL5" class="tabcontent">
            <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
            <div id="RegL5_POL"></div>
          </div>
          <div id="PanL5" class="tabcontent">
            <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
            <div id="RegL5_PAN"></div>
          </div>
          <div id="GL5" class="tabcontent">
            <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
          </div>
          <script>
            document.getElementById("defaultOpenL5").click();
          </script>
				</div>
			</div>
		</div>
	</div>
</div>
<!--***********************************Fin Línea 5 **************************************************************-->
<!--***********************************Inicio Línea 6 *****************************************************-->
<div class="tab-pane fade" id="tab-act-L6" role="tabpanel" aria-labelledby="tabLinea6">
	<div class="container-fluid col-sm-12">
		<div class="form-group"><br>
			<div class="row">
				<div class="col-sm-12">
          <div class="tab">
            <button class="tablinks" onclick="openSel(event, 'RosL6')" id="defaultOpenL6">Terminal El Rosario</button>
            <button class="tablinks" onclick="openSel(event, 'MarL6')">Terminal Martin Carrera</button>
            <button class="tablinks" onclick="openSel(event, 'GL6')">Gr&aacuteficas</button>
          </div>
          <div id="RosL6" class="tabcontent">
            <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
            <div id="RegL6_ROS"></div>
          </div>
          <div id="MarL6" class="tabcontent">
            <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
            <div id="RegL6_MAR"></div>
          </div>
          <div id="GL6" class="tabcontent">
            <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
          </div>
          <script>
            document.getElementById("defaultOpenL6").click();
          </script>
				</div>
			</div>
		</div>
	</div>
</div>
<!--***********************************Fin Línea 6 **************************************************************-->
<!--***********************************Inicio Línea 7 *****************************************************-->
<div class="tab-pane fade" id="tab-act-L7" role="tabpanel" aria-labelledby="tabLinea7">
	<div class="container-fluid col-sm-12">
		<div class="form-group"><br>
			<div class="row">
				<div class="col-sm-12">
          <div class="tab">
            <button class="tablinks" onclick="openSel(event, 'RosL7')" id="defaultOpenL7">Terminal El Rosario</button>
            <button class="tablinks" onclick="openSel(event, 'BarL7')">Terminal Barranca del Muerto</button>
            <button class="tablinks" onclick="openSel(event, 'GL7')">Gr&aacuteficas</button>
          </div>
          <div id="RosL7" class="tabcontent">
            <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
            <div id="RegL7_ROS"></div>
          </div>
          <div id="BarL7" class="tabcontent">
            <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
            <div id="RegL7_BAR"></div>
          </div>
          <div id="GL7" class="tabcontent">
            <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
          </div>
          <script>
            document.getElementById("defaultOpenL7").click();
          </script>
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
