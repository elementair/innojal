<?php
$host= 'tdesystems.com.mx';
$url_base = 'http://'.$host.'/facturacion/';
$url_servicios = $url_base;

//SECCION INICIO
$url_servicio_inicio = $url_servicios.'srv_inicio.php?accion=get';

$res_inicio = utf8_decode((file_get_contents($url_servicio_inicio)));

$res_inicio = str_replace('?', '', $res_inicio);

$res_inicio = json_decode($res_inicio);


$datos_inicio = $res_inicio->registros[0];
$ruta_fondo = $url_servicios.$datos_inicio->inicio_imagen_fondo;
$slogan = $datos_inicio->inicio_slogan;

//SECCION QUIENES SOMOS
$url_servicio_quienes_somos = $url_servicios.'srv_quienes_somos.php?accion=get'; 

$res_quienes_somos = utf8_decode((file_get_contents($url_servicio_quienes_somos)));
$res_quienes_somos = str_replace('?', '', $res_quienes_somos);
$res_quienes_somos = json_decode($res_quienes_somos);

//$res_quienes_somos = file_get_contents($url_servicio_quienes_somos);
//$res_quienes_somos = json_decode($res_quienes_somos);

$datos_quienes_somos = $res_quienes_somos->registros[0];
$titulo = $datos_quienes_somos->quienes_somos_titulo_quienes_somos;
$descripcion =$datos_quienes_somos->quienes_somos_descripcion_quienes_somos;

//SECCION CALIDAD
$url_servicio_calidad = $url_servicios.'srv_calidad.php?accion=get'; 

$res_calidad = utf8_decode((file_get_contents($url_servicio_calidad)));
$res_calidad = str_replace('?', '', $res_calidad);
$res_calidad = json_decode($res_calidad);
// $res_calidad = file_get_contents($url_servicio_calidad);
// $res_calidad = json_decode($res_calidad);

$datos_calidad = $res_calidad->registros[0];
$titulo_calidad = $datos_calidad->calidad_titulo;
$ruta_fondo_calidad = $url_servicios.$datos_calidad->calidad_imagen_fondo;
$descripcion_calidad =$datos_calidad->calidad_descripcion;

//SECCION PRODUCTOS
$url_servicio_productos = $url_servicios.'srv_productos.php?accion=get'; 
$res_productos = utf8_decode((file_get_contents($url_servicio_productos)));
$res_productos = str_replace('?', '', $res_productos);
$res_productos = json_decode($res_productos);
// $res_productos = file_get_contents($url_servicio_productos);
// $res_productos = json_decode($res_productos);

$datos_productos = $res_productos->registros[0];
$titulo_productos = $datos_productos->productos_titulo;
$ruta_fondo_productos = $url_servicios.$datos_productos->productos_imagen_fondo;
$descripcion_productos = $datos_productos->productos_descripcion;


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

//SECCION PRODUCTOS CARRUSEL

function mostrar_galeria($url_servicios,$id_carrousel){
    
$url_servicio_productos_carrusel = $url_servicios.'srv_productos_carrusel.php?accion=get'; 
// $res_productos_carrusel = file_get_contents($url_servicio_productos_carrusel);
// $res_productos_carrusel = json_decode($res_productos_carrusel);
$res_productos_carrusel = utf8_decode((file_get_contents($url_servicio_productos_carrusel)));
$res_productos_carrusel = str_replace('?', '', $res_productos_carrusel);
$res_productos_carrusel = json_decode($res_productos_carrusel);

$datos_productos_carrusel = $res_productos_carrusel->registros[0];
$ruta_imagen_productos = $url_servicios.$datos_productos_carrusel->productos_carrusel_imagen_producto;
    echo'<div id="'.$id_carrousel.'" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">';
	
	$i=0;
 

    foreach($datos_productos_carrusel as $datos_productos_carrusel_img){
    	if($i == 0){
    		echo '<div class="carousel-item active">
                <img class="d-block img-fluid" src="'.$ruta_imagen_productos.'">
            </div>';
    	}

        echo '<div class="carousel-item">
                <img class="d-block img-fluid" src="'.$ruta_imagen_productos.'">
            </div>';

        $i++;
    }

            
    echo '	<!--Controles del Carrousel-->
        	<a class="carousel-control-prev" href="#'.$id_carrousel.'" role="button" data-slide="prev">
            	<i class="fa fa-chevron-left fa-lg"></i>
           		<span class="sr-only">Anterior</span>
        	</a>
        	<a class="carousel-control-next" href="#'.$id_carrousel.'" role="button" data-slide="next">
            	<i class="fa fa-chevron-right fa-lg"></i>
            	<span class="sr-only">Siguiente</span>
        	</a>
    	</div>';
}


?>

<!DOCTYPE html>
<html lang="es" id="htmlIndex">
<head>
    <meta charset="utf-8" name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0"/>
    <title>INNOJAL</title>

    <!--Favicon-->
    <link rel="icon" type="image/png" href="img/logo_inojal.png" />
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/funciones.js"></script>
    <script type="text/javascript" src="js/bootstrap-filestyle.js"></script>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/stylesSM.css">
    <link rel="stylesheet" href="css/stylesMD.css">
    <link rel="stylesheet" href="css/stylesLG.css">
    <link rel="stylesheet" href="css/stylesXL.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="css/layout.css" media="print">

</head>
<body id="bodyIndex">
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
    <!--Elementos Fijos-->
    <article id="fixedLogoNav">
        <a href="#"><img src="img/logo_inojal.png" draggable="false"></a>
    </article>
    <article id="fixedBtn-menuIndex" class="btn-menu btnOpenMenu">
        <span class="btn_open_menu_responsive">MENÚ
        <img class="naviconIndex iconHover" src="svg/navicon.svg"></span>
         <span class="btn-menuText">
            <div id="inicio" class="seccion_menu"> INICIO </div>
            <div id="quienes_somos" class="seccion_menu"> QUIENES SOMOS</div>
            <div id="calidad" class="seccion_menu"> CALIDAD </div>
            <div id="productos" class="seccion_menu"> PRODUCTOS    </div>
            <div id="contacto" class="seccion_menu"> CONTACTO     </div>
         </span> 
    </article>
    <!--Primera Sección-->
    <section id="Index1" style="background-image: url(<?php echo $ruta_fondo; ?>);">
         <!--Video de Fondo-->
        <!-- <video autoplay muted loop id="myVideo">
            <source src="<?php ?>" type="video/mp4">
        </video> -->

        <div id="degradadoIndex"></div>
        
        <nav id="NavIndex1">
            <article id="logoNav">
                <a href="#"><img src="img/logo_inojal.png"></a>
            </article>

            <article id="btn-menuIndex" class="btn-menu btnOpenMenu">
                <span class="btn-menuText">MENÚ</span>
                <img class="naviconIndex iconHover" src="svg/navicon.svg">
            </article>
        </nav>

        <h1> <?php  echo $slogan; ?></h1>
        <!--Elementos posicionados-->
        <ul class="indicadorDerecha">
            <li class="indicadorDerecha1"></li>
            <li class="indicadorDerecha2"></li>
            <li class="indicadorDerecha3"></li>
            <li class="indicadorDerecha4"></li>
            <li class="indicadorDerecha5"></li>
        </ul>
        <div id="flechaAbajo1" class="flechaAbajo">
            <img src="svg/flecha_blanca.svg" alt="ir Hacia Abajo">
        </div>
    </section>
    <!--Segunda Sección (Quienes Somos)-->
    <section id="Index2">
        <!--Elementos estáticos-->
        <nav id="NavIndex2">
            <span class="btn-menuText">MENÚ</span>
            <!-- <img class="naviconIndex btnOpenMenu iconHoverVerde" src="svg/navicon_verde.svg"> -->
        </nav>
        <article>
            <div class="container-fluid">
                <div class="row">
                    <section id="Index2A">
                        <img src="img/quienes_somos.png" alt="Quienes Somos" draggable="false">
                        <img src="img/sombra_quienes_somos.png" alt="sombra_quienes_somos" draggable="false">
                    </section>

                    <section id="Index2B">
                        <h3><?php echo $titulo;?></h3>
                        <p><?php echo $descripcion;?></p>
                        <button type="button" id="btn_leer_mas" class="btn btn-primary">leer mas...</button>
                    </section>

                </div>
            </div>
        </article>
        <!--Elementos Posicionados-->
        <ul class="indicadorDerechaVerde">
            <li class="indicadorDerecha1"></li>
            <li class="indicadorDerecha2"></li>
            <li class="indicadorDerecha3"></li>
            <li class="indicadorDerecha4"></li>
            <li class="indicadorDerecha5"></li>
        </ul>

        <div id="flechaAbajo2" class="flechaAbajo">
            <img src="svg/flecha_gris.svg" alt="ir Hacia Abajo">
        </div>
    </section>
    <!--Tercera Sección (Asesoria)-->
    <section id="asesoria_en_campo" style="background-image: url(<?php echo $ruta_fondo_calidad; ?>);">
        <ul class="indicadorDerecha">
            <li class="indicadorDerecha1"></li>
            <li class="indicadorDerecha2"></li>
            <li class="indicadorDerecha3"></li>
            <li class="indicadorDerecha4"></li>
            <li class="indicadorDerecha5"></li>
        </ul>
         <h2> <?php echo $titulo_calidad; ?></h2>
         <p> <?php echo $descripcion_calidad ?>  </p>
        <!-- Todos los procesos dentro de INOJAL se sigen bajo las mas estrictas normas de calidad, esta filosofía de exlencia integra los mejores procesos, ingredientes e insumos que garantizan la máxima calidad en el producto final. -->
        <img id="flecha_abajo_asesoria" class="flecha_abajo" src="svg/flecha_blanca.svg" alt="ir Hacia Abajo">
    </section>
    <section id="alianzas_comerciales" style="background-image: url(<?php echo $ruta_fondo_productos; ?>);">

        <div class="rectangulo_blanco"></div>
        <div class="triangulo_blanco"></div>

        <div class="container-fluid">
            <div class="row">
                <article class="col-sm-8 offset-md-3 col-lg-7 offset-lg-1">
                    <h3> <?php echo $titulo_productos; ?> </h3>
                    <p> <?php echo $descripcion_productos; ?></p>
                </article>

                <article id="carrousel_alianzas" class="col-sm-4 col-md-6 col-lg-4">
                    
                    <?php mostrar_galeria($url_servicios,'slideshow_alianzas');?>
                </article>
            </div>
        </div>

        <ul class="indicadorDerecha">
            <li class="indicadorDerecha1"></li>
            <li class="indicadorDerecha2"></li>
            <li class="indicadorDerecha3"></li>
            <li class="indicadorDerecha4"></li>
            <li class="indicadorDerecha5"></li>
        </ul>
        <img id="flecha_abajo_alianzas" class="flecha_abajo" src="svg/flecha_blanca.svg" alt="ir Hacia Abajo">
    </section>
    <!--Nueva sección Nuestros clientes-->
    <section id="nuestros_clientes">
        <div class="rectangulo_blanco"></div>
        <div class="triangulo_blanco"></div>

        <h3> <?php echo $titulo_contacto; ?></h3>
        <button type="button" id="btn_escribenos" class="btn btn-primary ">Escríbenos</button>
        <article id="carrousel_clientes">
            <?php echo $descripcion_contacto; ?>
        </article>

        <ul class="indicadorDerechaVerde">
            <li class="indicadorDerecha1"></li>
            <li class="indicadorDerecha2"></li>
            <li class="indicadorDerecha3"></li>
            <li class="indicadorDerecha4"></li>
            <li class="indicadorDerecha5"></li>
        </ul>

         <img id="flecha_abajo_clientes" class="flecha_abajo" src="svg/flecha_blanca.svg" alt="ir Hacia Arriba">
    </section>
    <!--Footer-->
    <footer id="footerIndex" class="mainFooter" style="background-image: url(<?php echo $ruta_fondo_contacto; ?>);">
        <section class="footerA">
            <nav id="NavFooter">
                <span class="btn-menuText">MENÚ</span>
                <!-- <img class="naviconIndex btnOpenMenu iconHover" src="svg/navicon.svg"> -->
            </nav>

            <img id="logoFooter" src="img/logo_light.png" alt="innojal">
            <div id="footerA1">
                <?php echo $descripcion_footer_contacto; ?>
            </div>
        </section>
        <section class="footerB">
            <div class="container-fluid">
                <div class="row">
                    <article class="footerB1">
                        <a href="#"><img src="svg/icono_facebook_blanco.svg" alt="Facebook"></a>
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
   
    
 
</body>
</html>
