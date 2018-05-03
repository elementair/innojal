<?php 
session_start();
$host= $_SERVER["HTTP_HOST"];
$url_base = 'http://'.$host.'/facturacion/';
$url_servicios = $url_base;

//SECCION NOSOTROS
$url_servicio_nosotros = $url_servicios.'srv_nosotros.php?accion=get'; 
// $res_nosotros = file_get_contents($url_servicio_nosotros);
// $res_nosotros = json_decode($res_nosotros);
$res_nosotros = utf8_decode((file_get_contents($url_servicio_nosotros)));
$res_nosotros = str_replace('?', '', $res_nosotros);
$res_nosotros = json_decode($res_nosotros);

$datos_nosotros = $res_nosotros->registros[0];
$mision = $datos_nosotros->nosotros_mision;
$vision = $datos_nosotros->nosotros_vision;
$alcance = $datos_nosotros->nosotros_alcance;
$valores =$datos_nosotros->nosotros_valores;
$ruta_fondo_nosotros = $url_servicios.$datos_nosotros->nosotros_imagen_fondo;

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Nosotros - INNOJA</title>
	<!--Metadatos-->
	<meta charset="utf-8" name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0" />
	<!--Favicon-->
	<link rel="icon" type="image/png" href="svg/favicon.svg" />
	<!--Estilos-->
	<link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/stylesSM.css">
    <link rel="stylesheet" href="css/stylesMD.css">
    <link rel="stylesheet" href="css/stylesLG.css">
    <link rel="stylesheet" href="css/stylesXL.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
	<!--Menú desplegable-->
   	<nav id="menu">
    	<nav>
            <img src="svg/x_cerrar.svg" id="btnCloseMenu" alt="cerrar Menú">
        </nav>

        <div class="container-fluid">
            <div class="row">
                <section id="menuA">
                    <p>(33) 3810 7757</p>
                    <p>INNOJAL© 2017</p>
                </section>

                <section id="menuB">
                    <ul>
                        <li><a id="inicio_menu" >INICIO</a></li>
                        <li><a id="quienes_somos_menu">QUIENES SOMOS</a></li>
                        <li><a id="calidad_menu" >CALIDAD</a></li>
                        <li><a id="productos_menu">PRODUCTOS</a></li>
                        <li><a id="contacto_menu">CONTACTO</a></li>
                    </ul>

                    <hr>
                    <a href="#"><img src="svg/icono_facebook_blanco.svg" id="facebookLogo" alt="facebook"></a>
                    <a href="contacto.php"><img src="svg/icono_correo_blanco.svg" id="mailLogo" alt="correo"></a>
                </section>
            </div>
        </div>
    </nav>

	<div class="container-fluid">
		<div class="row">
			<header id="nosotros1"></header>

			<section id="nosotros2">
                <div class="contenedor_menu_fixed_nosotros">
				<article id="fixedBtn-menuIndex" class="btn-menu btnOpenMenu">
                <span class="btn_open_menu_responsive">MENÚ
                <img class="naviconIndex iconHover" src="svg/navicon.svg"></span>
                 <span class="btn-menuText">
                    <div id="inicio_ex" class="seccion_menu"> INICIO </div>
                    <div id="quienes_somos_ex2" class="seccion_menu"> QUIENES SOMOS </div>
                    <div id="calidad_ex" class="seccion_menu"> CALIDAD </div>
                    <div id="productos_ex" class="seccion_menu"> PRODUCTOS </div>
                    <div id="contacto_ex2" class="seccion_menu"> CONTACTO </div>
                 </span> 
                 </div>
            </article>
			<article id="nosotros2b">
				<h3>Misión</h3>

				<p> <?php echo $mision; ?> </p>

				<h3>Visión</h3>

				<p> <?php echo $vision; ?> </p>

				<h3>Alcance</h3>

				<p> <?php echo $alcance; ?> 
                </p>

                <h3>Valores</h3>

                <p> <?php echo $valores; ?> </p>


			</article>
			</section>
		</div>
	</div>

	<!--Scripts-->
	<script src="js/jquery.min.js"></script>
    <script src="./js/funciones.js"></script>
</body>
</html>