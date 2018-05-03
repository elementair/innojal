<?php 
session_start();
$host= $_SERVER["HTTP_HOST"];
$url_base = 'http://'.$host.'/facturacion/';
$url_servicios = $url_base;
// $url_servicios = "http://localhost/facturacion/";

//SECCION CONTACTO
$url_servicio_contacto = $url_servicios.'srv_contacto.php?accion=get'; 
$res_contacto = utf8_decode((file_get_contents($url_servicio_contacto)));
$res_contacto = str_replace('?', '', $res_contacto);
$res_contacto = json_decode($res_contacto);
// $res_contacto = file_get_contents($url_servicio_contacto);
// $res_contacto = json_decode($res_contacto);

$datos_contacto = $res_contacto->registros[0];
$titulo_contacto = $datos_contacto->contacto_titulo;
$ruta_fondo_contacto = $url_servicios.$datos_contacto->contacto_imagen_fondo;
$descripcion_contacto = $datos_contacto->contacto_descripcion;
$descripcion_footer_contacto = $datos_contacto->contacto_descripcion_footer;


 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Contacto-Innojal</title>
	<!--Metadatos-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">

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

	<section id="Contacto1" style="background-image: url(<?php echo $ruta_fondo_contacto; ?>);">
		<article id="fixedBtn-menuIndex" class="btn-menu btnOpenMenu">
        <span class="btn_open_menu_responsive">MENÚ
        <img class="naviconIndex iconHover" src="svg/navicon.svg"></span>
         <span class="btn-menuText">
            <div id="inicio_ex" class="seccion_menu"> INICIO       </div>
            <div id="quienes_somos_ex" class="seccion_menu"> QUIENES SOMOS</div>
            <div id="calidad_ex" class="seccion_menu"> CALIDAD      </div>
            <div id="productos_ex" class="seccion_menu"> PRODUCTOS    </div>
            <div id="contacto_ex" class="seccion_menu"> CONTACTO     </div>
         </span> 
    </article>
		<!--Formulario-->
		<div class="container-fluid">
			<div class="row">
				<article id="Contacto1a" class="col-sm-6 col-md-12 col-lg-6">
					<h1>Envíanos tu mensaje</h1>
					<form id="formContacto">
						<input id="nombreContacto" type="text" required="required" name="Nombre" placeholder="Nombre">
						<input id="emailContacto" type="email" required="required" name="Email" placeholder="Email">
						<input id="asuntoContacto" type="text" required="required" name="Asunto" placeholder="Asunto">

						<textarea id="mensajeContacto" required="required" placeholder="Escribe tu mensaje"></textarea>
					</form>

					<article id="Contacto1b">
						<img src="img/boton_contacto.svg" alt="boton Verde">
					</article>
				</article>			

				<!--Mapa de google maps-->
				<article id="mapa_google_contacto" class="col-sm-6 col-md-12 col-lg-6">
                   <iframe id="mapa_contacto" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3732.278725939929!2d-103.3749764949261!3d20.6989032932411!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428ae30a0965381%3A0x33b5244666841339!2sPiso+5%2C+Av.+de+las+Am%C3%A9ricas+1545%2C+Circunvalaci%C3%B3n+Americas%2C+44610+Guadalajara%2C+Jal.!5e0!3m2!1ses-419!2smx!4v1521703375764" frameborder="0" style="border:0" allowfullscreen></iframe>
				</article>
			</div>
		</div>
	</section>

	<footer id="footerContacto">
		 <section class="footerA">
            <nav id="NavFooter">
                <span class="btn-menuText">MENÚ</span>
                <!-- <img class="naviconIndex btnOpenMenu iconHover" src="svg/navicon.svg"> -->
            </nav>

            <img id="logoFooter" src="img/logo_light.png" alt="BC Agro">
            <div id="footerA1">
                <?php echo $descripcion_footer_contacto; ?>
            </div>
        </section>
        <section class="footerB">
            <div class="container-fluid">
                <div class="row">
                    <article class="footerB1">
                        <a href="https://www.facebook.com/BC-AGRO-129763897137908/"><img src="svg/icono_facebook_blanco.svg" alt="Facebook"></a>
                        <a href="contacto.php"><img src="svg/icono_correo_blanco.svg" alt="Correo"></a>
                    </article>

                    <article class="footerB2">
                        <p>innojal</p>
                        <p>Todos los derechos reservados</p>
                        <p><a>Aviso de privacidad</a></p>
                    </article>
                </div>
            </div>
        </section>
	</footer>
	<!--Scripts-->
	<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="./js/funciones.js"></script>
	<script type="text/javascript" src="./js/contacto.js"></script>
</body>
</html>