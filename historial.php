<?
session_start();
$_SESSION['token']=$_GET["token"];

header("Cache-control: no-cache");
header('Pragma: no-cache');
header("X-Frame-Options: deny");
header("X-Content-Type-Options: nosniff");
include "aai_lib/aai_config.php";
include "aai_lib/aai_conexion.php";
//require "aai_lib/aai_chklogin.php";
//require "aai_lib/aai_datos.php";



//echo $_SESSION['usuario'];
// Security note: Because of security concerns jquery 1.11.1 was upgraded to jquery lastest version (jquery 3.5.1).


//if(!$_SESSION['usuario']){
	
//	header("Location: index.php");
//}







        ?>
<html lang="es">
<head>


<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-TTPKM8P2W3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-TTPKM8P2W3');
</script>



	<meta charset="UTF-8">
		<title>Coomeva / Programa asistencia integral / Seleccionadas3 / responsive22 – IGS</title>
<meta name="robots" content="max-image-preview:large">
<link rel="dns-prefetch" href="//www.googletagmanager.com">
<link rel="dns-prefetch" href="//s.w.org">
<link rel="alternate" type="application/rss+xml" title="IGS » Feed" href="https://www.igroupsolution.com/feed/">
<link rel="alternate" type="application/rss+xml" title="IGS » Feed de los comentarios" href="https://www.igroupsolution.com/comments/feed/">
<link rel="stylesheet" id="wp-block-library-css" href="https://www.igroupsolution.com/wp-includes/css/dist/block-library/style.min.css?ver=5.8.4" type="text/css" media="all">
<!--<link rel="stylesheet" id="wc-block-style-css" href="https://www.igroupsolution.com/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/style.css?ver=2.3.0" type="text/css" media="all">-->
<link rel="stylesheet" id="wpdm-font-awesome-css" href="https://www.igroupsolution.com/wp-content/plugins/download-manager/assets/fontawesome/css/all.css?ver=5.8.4" type="text/css" media="all">
<link rel="stylesheet" id="wpdm-front-bootstrap-css" href="https://www.igroupsolution.com/wp-content/plugins/download-manager/assets/bootstrap/css/bootstrap.min.css?ver=5.8.4" type="text/css" media="all">
<link rel="stylesheet" id="wpdm-front-css" href="https://www.igroupsolution.com/wp-content/plugins/download-manager/assets/css/front.css?ver=5.8.4" type="text/css" media="all">
<link rel="stylesheet" id="woocommerce-layout-css" href="https://www.igroupsolution.com/wp-content/plugins/woocommerce/assets/css/woocommerce-layout.css?ver=3.7.3" type="text/css" media="all">
<link rel="stylesheet" id="woocommerce-smallscreen-css" href="https://www.igroupsolution.com/wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen.css?ver=3.7.3" type="text/css" media="only screen and (max-width: 768px)">
<link rel="stylesheet" id="woocommerce-general-css" href="https://www.igroupsolution.com/wp-content/plugins/woocommerce/assets/css/woocommerce.css?ver=3.7.3" type="text/css" media="all">
<style id="woocommerce-inline-inline-css" type="text/css">
.woocommerce form .form-row .required { visibility: visible; }
</style>
<!--<link rel="stylesheet" id="hfe-style-css" href="https://www.igroupsolution.com/wp-content/plugins/header-footer-elementor/assets/css/header-footer-elementor.css?ver=1.6.7" type="text/css" media="all">-->
<link rel="stylesheet" id="elementor-icons-css" href="https://www.igroupsolution.com/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=5.14.0" type="text/css" media="all">
<link rel="stylesheet" id="elementor-frontend-legacy-css" href="https://www.igroupsolution.com/wp-content/plugins/elementor/assets/css/frontend-legacy.min.css?ver=3.5.4" type="text/css" media="all">
<link rel="stylesheet" id="elementor-frontend-css" href="https://www.igroupsolution.com/wp-content/plugins/elementor/assets/css/frontend.min.css?ver=3.5.4" type="text/css" media="all">
<link rel="stylesheet" id="elementor-post-6306-css" href="https://www.igroupsolution.com/wp-content/uploads/elementor/css/post-6306.css?ver=1655307066" type="text/css" media="all">
<link rel="stylesheet" id="elementor-pro-css" href="https://www.igroupsolution.com/wp-content/plugins/elementor-pro/assets/css/frontend.min.css?ver=3.5.2" type="text/css" media="all">
<link rel="stylesheet" id="font-awesome-5-all-css" href="https://www.igroupsolution.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/all.min.css?ver=3.5.4" type="text/css" media="all">
<link rel="stylesheet" id="font-awesome-4-shim-css" href="https://www.igroupsolution.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/v4-shims.min.css?ver=3.5.4" type="text/css" media="all">
<link rel="stylesheet" id="elementor-global-css" href="https://www.igroupsolution.com/wp-content/uploads/elementor/css/global.css?ver=1655307069" type="text/css" media="all">
<link rel="stylesheet" id="elementor-post-10988-css" href="css/10988.css" type="text/css" media="all">
<link rel="stylesheet" id="elementor-post-10989-css" href="https://www.igroupsolution.com/wp-content/uploads/elementor/css/post-10988.css?ver=1739464318" type="text/css" media="all">
 <!--<link rel="stylesheet" id="fluentform-elementor-widget-css" href="https://www.igroupsolution.com/wp-content/plugins/fluentform/public/css/fluent-forms-elementor-widget.css?ver=4.3.1" type="text/css" media="all">-->
 <!--<link rel="stylesheet" id="hfe-widgets-style-css" href="https://www.igroupsolution.com/wp-content/plugins/header-footer-elementor/inc/widgets-css/frontend.css?ver=1.6.7" type="text/css" media="all">-->
<link rel="stylesheet" id="hello-elementor-css" href="https://www.igroupsolution.com/wp-content/themes/hello-elementor/style.min.css?ver=2.4.2" type="text/css" media="all">
<link rel="stylesheet" id="hello-elementor-theme-style-css" href="https://www.igroupsolution.com/wp-content/themes/hello-elementor/theme.min.css?ver=2.4.2" type="text/css" media="all">
<link rel="stylesheet" id="elementor-post-7807-css" href="https://www.igroupsolution.com/wp-content/uploads/elementor/css/post-7807.css?ver=1655307070" type="text/css" media="all">
<link rel="stylesheet" id="google-fonts-1-css" href="https://fonts.googleapis.com/css?family=Roboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRaleway%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=auto&amp;ver=5.8.4" type="text/css" media="all">
<script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script type="text/javascript" async="" src="https://www.googletagmanager.com/gtag/js?id=G-01NYJKEKHK&amp;l=dataLayer&amp;cx=c"></script><script type="text/javascript" id="jquery-core-js-extra">
/* <![CDATA[ */
var SDT_DATA = {"ajaxurl":"https:\/\/www.igroupsolution.com\/wp-admin\/admin-ajax.php","siteUrl":"https:\/\/www.igroupsolution.com\/","pluginsUrl":"https:\/\/www.igroupsolution.com\/wp-content\/plugins","isAdmin":""};
/* ]]> */
</script>
<script type="text/javascript" src="https://www.igroupsolution.com/wp-includes/js/jquery/jquery.min.js?ver=3.6.0" id="jquery-core-js"></script>
<script type="text/javascript" src="https://www.igroupsolution.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2" id="jquery-migrate-js"></script>
<script type="text/javascript" src="https://www.igroupsolution.com/wp-content/plugins/download-manager/assets/bootstrap/js/popper.min.js?ver=5.8.4" id="wpdm-poper-js"></script>
<script type="text/javascript" src="https://www.igroupsolution.com/wp-content/plugins/download-manager/assets/bootstrap/js/bootstrap.min.js?ver=5.8.4" id="wpdm-front-bootstrap-js"></script>
<script type="text/javascript" id="wpdm-frontjs-js-extra">
/* <![CDATA[ */
var wpdm_url = {"home":"https:\/\/www.igroupsolution.com\/","site":"https:\/\/www.igroupsolution.com\/","ajax":"https:\/\/www.igroupsolution.com\/wp-admin\/admin-ajax.php"};
var wpdm_js = {"spinner":"<i class=\"fas fa-sun fa-spin\"><\/i>"};
/* ]]> */
</script>
<script type="text/javascript" src="https://www.igroupsolution.com/wp-content/plugins/download-manager/assets/js/front.js?ver=3.2.34" id="wpdm-frontjs-js"></script>
 <!--<script type="text/javascript" src="https://www.igroupsolution.com/wp-content/plugins/kushki-woocommerce-master/public/js/jquery.showandtell.js?ver=2.0.0" id="jquery.showandtell.js-js"></script>-->
<script type="text/javascript" src="https://www.igroupsolution.com/wp-content/plugins/elementor/assets/lib/font-awesome/js/v4-shims.min.js?ver=3.5.4" id="font-awesome-4-shim-js"></script>

<!-- Fragmento de código de Google Analytics añadido por Site Kit -->
<script type="text/javascript" src="https://www.googletagmanager.com/gtag/js?id=UA-179959176-1" id="google_gtagjs-js" async=""></script>
<script type="text/javascript" id="google_gtagjs-js-after">
window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}
gtag('set', 'linker', {"domains":["www.igroupsolution.com"]} );
gtag("js", new Date());
gtag("set", "developer_id.dZTNiMT", true);
gtag("config", "UA-179959176-1", {"anonymize_ip":true});
</script>

<!-- Final del fragmento de código de Google Analytics añadido por Site Kit -->
<link rel="https://api.w.org/" href="https://www.igroupsolution.com/wp-json/"><link rel="alternate" type="application/json" href="https://www.igroupsolution.com/wp-json/wp/v2/pages/10988"><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://www.igroupsolution.com/xmlrpc.php?rsd">
<meta name="generator" content="WordPress 5.8.4">
<meta name="generator" content="WooCommerce 3.7.3">
<link rel="canonical" href="https://www.igroupsolution.com/coomeva-programa-asistencia-integral-seleccionadas3-responsive22/">
<link rel="shortlink" href="https://www.igroupsolution.com/?p=10988">
<link rel="alternate" type="application/json+oembed" href="https://www.igroupsolution.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.igroupsolution.com%2Fcoomeva-programa-asistencia-integral-seleccionadas3-responsive22%2F">
<link rel="alternate" type="text/xml+oembed" href="https://www.igroupsolution.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.igroupsolution.com%2Fcoomeva-programa-asistencia-integral-seleccionadas3-responsive22%2F&amp;format=xml">
<meta name="generator" content="Site Kit by Google 1.49.0"><meta name="referrer" content="always">	<noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
	 <!--<meta name="google-site-verification" content="9ULMLTcv69MWIXigtNW_Ipdd99WOqJC477FADv6-Mpg"><link rel="icon" href="https://www.igroupsolution.com/wp-content/uploads/2019/06/cropped-FaviIGS-32x32.png" sizes="32x32">->
<!--<link rel="icon" href="https://www.igroupsolution.com/wp-content/uploads/2019/06/cropped-FaviIGS-192x192.png" sizes="192x192">-->
<link rel="apple-touch-icon" href="https://www.igroupsolution.com/wp-content/uploads/2019/06/cropped-FaviIGS-180x180.png">
<meta name="msapplication-TileImage" content="https://www.igroupsolution.com/wp-content/uploads/2019/06/cropped-FaviIGS-270x270.png">
<meta name="generator" content="WordPress Download Manager 3.2.34">
                <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
        <style>
            .w3eden .fetfont,
            .w3eden .btn,
            .w3eden .btn.wpdm-front h3.title,
            .w3eden .wpdm-social-lock-box .IN-widget a span:last-child,
            .w3eden #xfilelist .panel-heading,
            .w3eden .wpdm-frontend-tabs a,
            .w3eden .alert:before,
            .w3eden .panel .panel-heading,
            .w3eden .discount-msg,
            .w3eden .panel.dashboard-panel h3,
            .w3eden #wpdm-dashboard-sidebar .list-group-item,
            .w3eden #package-description .wp-switch-editor,
            .w3eden .w3eden.author-dashbboard .nav.nav-tabs li a,
            .w3eden .wpdm_cart thead th,
            .w3eden #csp .list-group-item,
            .w3eden .modal-title {
                font-family: Rubik, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
                text-transform: uppercase;
                font-weight: 700;
            }
            .w3eden #csp .list-group-item {
                text-transform: unset;
            }


        </style>
            <style>
        /* WPDM Link Template Styles */        </style>
                <style>

            :root {
                --color-primary: #4a8eff;
                --color-primary-rgb: 74, 142, 255;
                --color-primary-hover: #4a8eff;
                --color-primary-active: #4a8eff;
                --color-secondary: #4a8eff;
                --color-secondary-rgb: 74, 142, 255;
                --color-secondary-hover: #4a8eff;
                --color-secondary-active: #4a8eff;
                --color-success: #18ce0f;
                --color-success-rgb: 24, 206, 15;
                --color-success-hover: #4a8eff;
                --color-success-active: #4a8eff;
                --color-info: #2CA8FF;
                --color-info-rgb: 44, 168, 255;
                --color-info-hover: #2CA8FF;
                --color-info-active: #2CA8FF;
                --color-warning: #f29e0f;
                --color-warning-rgb: 242, 158, 15;
                --color-warning-hover: orange;
                --color-warning-active: orange;
                --color-danger: #ff5062;
                --color-danger-rgb: 255, 80, 98;
                --color-danger-hover: #ff5062;
                --color-danger-active: #ff5062;
                --color-green: #30b570;
                --color-blue: #0073ff;
                --color-purple: #8557D3;
                --color-red: #ff5062;
                --color-muted: rgba(69, 89, 122, 0.6);
                --wpdm-font: &quot;Rubik&quot;, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            }

            .wpdm-download-link.btn.btn-primary {
                border-radius: 4px;
            }

.alert{
			background-color: #fefefe;
			margin: auto;
			padding: 20px;
			border: 1px solid lightgray;
			border-top: 10px solid #58abb7;
			width: 30%;

			}


			.modalContainer {
			display: none; 
			position: fixed; 
			z-index: 1;
			padding-top: 100px;
			left: 0;
			top: 0;
			width: 100%;
			height: 100%; 
			overflow: auto; 
			background-color: rgb(0,0,0);
			background-color: rgba(0,0,0,0.4);
		}
		@media screen and (max-width: 540px) {
		.modal-content{
			width: 100% !important;
			margin-top: 20% !important;
			border-radius: 12px 12px 12px 12px;
			overflow: auto;
			
		}
		.modalContainer .modal-contentinf{
			width: 100% !important;
			border-radius: 12px 12px 12px 12px;
			overflow: auto;
		}
		.modalContainer .modal-content{
			width: 100% !important;
			overflow: auto;

		}
		
		
		
		.modalContainer .elementor-row {
   			flex-wrap: inherit !important;
			}
		}

		.modalContainer .cerrar{
			font-family: "Raleway", Sans-serif;
  			font-size: 17px;
    			font-weight: 500;
    			fill: var( --e-global-color-4ece358 );
   			color: var( --e-global-color-4ece358 );
  			background-color: #1da1f208;
			border-color: white;
		}

		.modalcontainer .texto1{
		text-align: left;
    		color: var( --e-global-color-a93a9b4 );
    		font-family: "Raleway", Sans-serif;
    		font-size: 17px;
    		font-weight: bold;
			
		}
		
		.modalContainer .modal-contentinf{
			text-align:justify !important;
			background-color: #fefefe !important;
			margin: auto;
			text-align:center;
			padding: 20px;
			border: 1px solid lightgray;
			//border-top: 10px solid #58abb7;
			width: 30%;
			text-align: center;
    			color: var( --e-global-color-4ece358 );
   			font-family: "Raleway", Sans-serif;
    			font-size: 17px;
    			font-weight: 400;
			border-radius: 12px 12px 12px 12px;

			width: 60%;
    			height: auto;
   			max-width: 100vw;
    			max-height: 100vh;
   			padding: 70;
   			overflow: auto;

		}
		.modalContainer .modal-content {
			background-color: #fefefe;
			margin: auto;
			text-align:center;
			padding: 20px;
			border: 1px solid lightgray;
			//border-top: 10px solid #58abb7;
			width: 60%;
			text-align: center;
    			color: var( --e-global-color-4ece358 );
   			font-family: "Raleway", Sans-serif;
    			font-size: 17px;
    			font-weight: 400;
			border-radius: 12px 12px 12px 12px;

			width: 25%;
    			height: auto;
   			max-width: 100vw;
    			max-height: 100vh;
   			padding: 70;
   			overflow: auto;

		}

		.modalContainer .close {
			color: #aaaaaa;
			float: right;
			font-size: 28px;
			font-weight: bold;
		}

		.modalContainer .close:hover,
		.modalContainer .close:focus {
			color: #000;
			text-decoration: none;
			cursor: pointer;
		}
		body {cursor: default}

        </style>
        	<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover"></head>
<body id="bdpg" class="page-template page-template-elementor_canvas page page-id-10988 theme-hello-elementor woocommerce-js ehf-template-hello-elementor ehf-stylesheet-hello-elementor elementor-default elementor-template-canvas elementor-kit-6306 elementor-page elementor-page-10988 e--ua-blink e--ua-chrome e--ua-webkit" data-elementor-device-mode="desktop">
			<div data-elementor-type="wp-page" data-elementor-id="10988" class="elementor elementor-10988" data-elementor-settings="[]">
						<div class="elementor-inner">
							<div class="elementor-section-wrap">
							<section class="elementor-section elementor-top-section elementor-element elementor-element-4d2db78 elementor-section-height-min-height elementor-section-items-stretch elementor-section-boxed elementor-section-height-default" data-id="4d2db78" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
							<div class="elementor-background-overlay"></div>
							<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-cabdc65" data-id="cabdc65" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-d1f92cf elementor-widget elementor-widget-image" data-id="d1f92cf" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
								<div class="elementor-image">
													<a href="https://www.igroupsolution.com/coomeva-programa-asistencia-integral-arma-tu-plan-responsive/">
							<img width="294" height="208" src="imagenes-verde/Coomeva-logo-verde.png" class="attachment-large size-large" alt="" loading="lazy">								</a>
														</div>
						</div>
				</div>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5c636b6" data-id="5c636b6" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-b0dc477 elementor-align-right elementor-absolute elementor-widget elementor-widget-button" data-id="b0dc477" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="button.default">
				<div class="elementor-widget-container">
					<div class="elementor-button-wrapper">
			<a href="index.php" class="elementor-button-link elementor-button elementor-size-sm" role="button">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">Cerrar sesión</span>
		</span>
					</a>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-4c6321c elementor-widget__width-initial elementor-widget-tablet__width-initial elementor-widget-mobile__width-initial elementor-widget elementor-widget-image" data-id="4c6321c" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
								<div class="elementor-image">
												<img src="https://www.igroupsolution.com/wp-content/uploads/2022/02/portadas-paginas-2-5.png" title="portadas-páginas-2" alt="portadas-páginas-2">														</div>
						</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>






<div id="myModalinfo" class="modalContainer">
 <div class="modal-contentinf">
  <!--<a  onclick="ocultarinfo();"><span onclick="ocultarinfo();" class="close">X</span> </a>-->
	<h11 style="text-align:left !important;" class="texto1" id="modalmoldinfo">Esta seguro que desea tomar esta asistencia</h11><br></br>
	<h11 id="modalmoldtexto">Esta seguro que desea tomar esta asistencia</h11><br></br>
	<h11 id="modalmoldtexto2">Esta seguro que desea tomar esta asistencia</h11><br></br>
	<h11 id="modalmoldtexto3">Esta seguro que desea tomar esta asistencia</h11><br></br>

	<h11 id="modalextra1" style="display:none">Las asistencias de limpieza de cocina y un baño, limpieza de vidrios del hogar, instalación de pantallas de tv, cuadros o artículos decorativos y limpieza dental básica, se prestarán en bolsa por un máximo de un (1) evento al año hasta el límite de cobertura establecido por la asistencia para el evento.</h11><br></br>
<h11 id="modalextra2" style="display:none">El evento disponible ya fue agotado.</h11><br></br>


	<input type="button"  style="border:#65f365;background: #65f365;color: white;font-family: 'Raleway', Sans-serif;font-size: 17px;font-weight: 500;background-color: #87B32F;border-radius: 6px 6px 6px 6px;" id="btnmodal" onclick="ocultarinfo();" value="Cerrar"/>
 </div> 



</div>

<div id="myModal" class="modalContainer">
 <div class="modal-content">
 <!--<a  onclick="ocultarinfo();"><span onclick="ocultarinfo();" class="close">X</span>  </a>-->
	<h11 class="subraya" id="modalmold">Esta seguro que desea tomar esta asistencia</h11><br></br>
	</br>
	
	<h11 class="subraya" id="modalinfopts">Esta seguro que desea tomar esta asistencia</h11><br></br>
	</br>
	<div class="elementor-row">
	<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-0da911a">
	<div class="elementor-column-wrap elementor-element-populated">
	<input type="button"  class="cerrar" id="btnmodal" onclick="ocultarinfo();" value="Cancelar"/>
	
	
	</div>
	</div>
<div class="elementor-row"></div>
	<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-0da911a">
	<div class="elementor-column-wrap elementor-element-populated">
	<input type="button" style="border:#65f365;background: #65f365;color: white;font-family: 'Raleway', Sans-serif;font-size: 17px;font-weight: 500;background-color: #87B32F;border-radius: 6px 6px 6px 6px;" id="btnmodalaceptar"  	value="Solicitar"/>
	</div>
	</div>	
	
</div>



 </div> 

</div>


<div id="myModalfinal" class="modalContainer">
 <div class="modal-content"> 
	<h15>Recibiras la llamada de un asesor en un maximo de 10 minutos</h9><br></br>
	<h15>Gracias por confiar en nuestros servicios.</h9><br></br>
	<input type="button" style="border:#65f365;background: #65f365;color: white;font-family: 'Raleway', Sans-serif;font-size: 17px;font-weight: 500;background-color: #87B32F;border-radius: 6px 6px 6px 6px;" onclick="window.location.href='pide-tu-servicio.php';"  value="Cerrar"/>
 </div> 


<script type="text/javascript">

function ocultarinfo(){

	document.getElementById("myModalinfo").style.display="none";
	document.getElementById("myModal").style.display="none";
	document.getElementById("bdpg").style.overflow="auto";
	document.getElementById("myModalfinal").style.display="none";


}


</script>
</div>




				<section class="elementor-section elementor-top-section elementor-element elementor-element-8e88730 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="8e88730" data-element_type="section" id="arriba">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row" style="justify-content: center;">
					<div style="display: none;" class="elementor-column elementor-col-16 elementor-top-column elementor-element elementor-element-d7bdf82" data-id="d7bdf82" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-2538263 elementor-align-justify elementor-widget elementor-widget-button" data-id="2538263" data-element_type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
					<div class="elementor-button-wrapper">
			<a href="multi_home.php" class="elementor-button-link elementor-button elementor-size-md" role="button">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">Inicio</span>
		</span>
					</a>
		</div>
				</div>
				</div>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-16 elementor-top-column elementor-element elementor-element-41489f4" data-id="41489f4" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-cf4a649 elementor-align-justify elementor-widget elementor-widget-button" data-id="cf4a649" data-element_type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
					<div class="elementor-button-wrapper">
			<a href="como-solicitar.php" class="elementor-button-link elementor-button elementor-size-md" role="button">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">Cómo solicitar</span>
		</span>
					</a>
		</div>
				</div>
				</div>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-16 elementor-top-column elementor-element elementor-element-8b0f4fa" data-id="8b0f4fa" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-d1479fb elementor-align-justify elementor-widget elementor-widget-button" data-id="d1479fb" data-element_type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
					<div class="elementor-button-wrapper">
			<a href="pide-tu-servicio.php" class="elementor-button-link elementor-button elementor-size-md" role="button">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">Pide tu asistencia</span>
		</span>
					</a>
		</div>
				</div>
				</div>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-16 elementor-top-column elementor-element elementor-element-e919e56" data-id="e919e56" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-af4213c elementor-align-justify elementor-widget elementor-widget-button" data-id="af4213c" data-element_type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
					<div class="elementor-button-wrapper">
			<a href="historial.php" class="elementor-button-link elementor-button elementor-size-md" role="button">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">Historial</span>
		</span>
					</a>
		</div>
				</div>
				</div>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-16 elementor-top-column elementor-element elementor-element-54000c6" data-id="54000c6" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-6858e2c elementor-align-justify elementor-widget elementor-widget-button" data-id="6858e2c" data-element_type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
					<div class="elementor-button-wrapper">
			<a href="detalles.php" class="elementor-button-link elementor-button elementor-size-md" role="button">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">Condiciones</span>
		</span>
					</a>
		</div>
				</div>
				</div>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-16 elementor-top-column elementor-element elementor-element-e337bab" data-id="e337bab" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-35c6139 elementor-align-justify elementor-widget elementor-widget-button" data-id="35c6139" data-element_type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
					<div class="elementor-button-wrapper">
			<a href="tienes-dudas.php" class="elementor-button-link elementor-button elementor-size-md" role="button">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">¿Tienes dudas?</span>
		</span>
					</a>
		</div>
				</div>
				</div>
						</div>
					</div>
		</div>
        <div class="elementor-column elementor-col-16 elementor-top-column elementor-element elementor-element-e337bab" data-id="e337bab" data-element_type="column">
            <div class="elementor-column-wrap elementor-element-populated">
                            <div class="elementor-widget-wrap">
                        <div class="elementor-element elementor-element-35c6139 elementor-align-justify elementor-widget elementor-widget-button" data-id="35c6139" data-element_type="widget" data-widget_type="button.default">
                <div class="elementor-widget-container">
                    <div class="elementor-button-wrapper">
            <a href="sigue-tu-asistencia.php" class="elementor-button-link elementor-button elementor-size-md" role="button">
                        <span class="elementor-button-content-wrapper">
                        <span class="elementor-button-text">Sigue tu asistencia</span>
        </span>
                    </a>
        </div>
                </div>
                </div>
                        </div>
                    </div>
        </div>
								</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-b4ba923 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="b4ba923" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-da1c0b1" data-id="da1c0b1" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-4823cef elementor-widget elementor-widget-text-editor" data-id="4823cef" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
								<div class="elementor-text-editor elementor-clearfix">
				<p class="MsoNormal">A continuación encontrarás el detalle de <span style="color: #333333;">las asistencias que has solicitado y los eventos que tienes disponibles</span></p>					</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-a29dd43 elementor-widget elementor-widget-image" data-id="a29dd43" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
								<div class="elementor-image">
												<!--<img width="701" height="760" src="https://www.igroupsolution.com/wp-content/uploads/2022/06/tabla-historial.png" class="attachment-large size-large" alt="" loading="lazy" srcset="https://www.igroupsolution.com/wp-content/uploads/2022/06/tabla-historial.png 701w, https://www.igroupsolution.com/wp-content/uploads/2022/06/tabla-historial-277x300.png 277w, https://www.igroupsolution.com/wp-content/uploads/2022/06/tabla-historial-600x650.png 600w" sizes="(max-width: 701px) 100vw, 701px">														</div>-->



<!----------------------------------------------------------------------------------------------------------------------------------ddd-->

<style>

.tabla{
    border-top: none;
    border-left: none;
    border-right: none;
    border-bottom: none;
}

.subraya{
    text-align: center;
}


</style>



<!------------------------------------------------------------------------------------------------------------------------------sdfdsfsdfs-->

						
						
						<table class="supsystic-table border stripe lightboxImg no-border dataTable no-footer" style="width: 100%;">
						
						
						
						<tbody>
						<tr class="odd"><td data-cell-id="A1" data-x="0" data-y="1" data-db-index="1" class="underline htCenter htMiddle fsize-16 tabla subraya" data-cell-type="text" data-original-value="Asistencias" data-order="Asistencias" style="min-width: 37.8873%; font-size: 16px; line-height: 22px;"><u>Asistencias</u></td>

<td data-cell-id="B1" data-x="1" data-y="1" data-db-index="1" class="underline htCenter htMiddle fsize-16 tabla subraya" data-cell-type="text" data-original-value="Eventos anuales" data-order="Eventos anuales" style="min-width: 20.5634%; font-size: 16px; line-height: 22px;"><u>Eventos anuales</u></td>

<td data-cell-id="C1" data-x="2" data-y="1" data-db-index="1" class="underline htCenter htMiddle fsize-16 tabla subraya" data-cell-type="text" data-original-value="Solicitados" data-order="Solicitados" style="min-width: 14.2254%; font-size: 16px; line-height: 22px;"><u>Solicitados</u></td>

<td data-cell-id="D1" data-x="3" data-y="1" data-db-index="1" class="underline htCenter htMiddle fsize-16 tabla subraya" data-cell-type="text" data-original-value="Disponibles" data-order="Disponibles" style="min-width: 15.2113%; font-size: 16px; line-height: 22px;"><u>Disponibles</u></td>

<td data-cell-id="E1" data-x="4" data-y="1" data-db-index="1" class="underline htCenter htMiddle fsize-16 tabla subraya" data-cell-type="text" data-original-value="Ver más" data-order="Ver más" style="min-width: 12.1127%; font-size: 16px; line-height: 22px;"><u>Ver más</u></td></tr>
						
						
						<?php
						
						
						
$sql = "SELECT servicio,user_points.puntos,user_points.eventos,eventossolic,user_points.eventos-eventossolic AS pendientes,catalogocoomevars.info AS info FROM user_points INNER JOIN catalogocoomevars ON servicio=nombreasistencia WHERE servicio !='0' AND usuario='".$_SESSION['usuario']."'";
$result = $conn ->query($sql);






while($row=$result->fetch_array(MYSQLI_NUM)){


						
						?>
						
						
						
						<tr class="even">

<td data-cell-id="A2" data-x="0" data-y="2" data-db-index="2"  class="htMiddle fsize-16 htLeft tabla " data-cell-type="text" data-original-value="Lectura de exámenes médicos" data-order="Lectura de exámenes médicos" style="font-size: 16px; line-height: 22px;"><?php echo utf8_encode($row[0]); ?></td>

<td data-cell-id="B2" data-x="1" data-y="2" data-db-index="2" class="htCenter htMiddle fsize-16 tabla subraya" data-cell-type="text" data-original-value="2 eventos" data-order="2 eventos" style="font-size: 16px; line-height: 22px;"><?php  echo utf8_encode($row[2]); if($row[2]>0 && $row[2]<2){echo ' Evento';}else{echo ' Eventos';} ?></td>

<td data-cell-id="C2" data-x="2" data-y="2" data-db-index="2" class="htCenter htMiddle fsize-16 tabla subraya" data-cell-type="text" data-cell-format-type="number" data-original-value="1" data-order="1" style="font-size: 16px; line-height: 22px;"><?php echo utf8_encode($row[3]); ?></td>

<td data-cell-id="D2" data-x="3" data-y="2" data-db-index="2" class="htCenter htMiddle fsize-16 tabla subraya" data-cell-type="text" data-cell-format-type="number" data-original-value="1" data-order="1" style="font-size: 16px; line-height: 22px;" ><?php echo utf8_encode($row[4]); ?></td>

<td data-cell-id="E2" data-x="4" data-y="2" data-db-index="2" class="htCenter htMiddle tabla subraya" data-cell-type="text" data-original-value="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/05/tablas-iconos-2-37.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;27&quot; height=&quot;114&quot;>" data-order="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/05/tablas-iconos-2-37.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;27&quot; height=&quot;114&quot;>"><img loading="lazy" src="http://www.igroupsolution.com/wp-content/uploads/2022/05/tablas-iconos-2-37.png" style="cursor:pointer" class="stbSkipLazy alignnone size-full" width="27" onclick="modalclickinfo('<?php $reemplazo=str_replace("(","",utf8_encode($row[5])); $reemplazo2=str_replace(")","",$reemplazo); $reemplazo3=str_replace("\r\n","-sl-",$reemplazo2); echo $reemplazo3; ?>');" height="114"></td>


							
						</tr>
						
						
						<?php
						
						
						}
						
						
						?>
						</tbody>
						</table>
						
						<!--<table class="supsystic-table border stripe lightboxImg no-border dataTable no-footer" style="width: 100%;">
						<tbody>
						<tr class="odd"><td data-cell-id="A1" data-x="0" data-y="1" data-db-index="1" class="underline htCenter htMiddle fsize-16 tabla subraya" data-cell-type="text" data-original-value="Asistencias" data-order="Asistencias" style="min-width: 37.8873%; font-size: 16px; line-height: 22px;"><u>Asistencias</u></td>

<td data-cell-id="B1" data-x="1" data-y="1" data-db-index="1" class="underline htCenter htMiddle fsize-16 tabla subraya" data-cell-type="text" data-original-value="Eventos anuales" data-order="Eventos anuales" style="min-width: 20.5634%; font-size: 16px; line-height: 22px;"><u>Eventos anuales</u></td>

<td data-cell-id="C1" data-x="2" data-y="1" data-db-index="1" class="underline htCenter htMiddle fsize-16 tabla subraya" data-cell-type="text" data-original-value="Solicitados" data-order="Solicitados" style="min-width: 14.2254%; font-size: 16px; line-height: 22px;"><u>Solicitados</u></td>

<td data-cell-id="D1" data-x="3" data-y="1" data-db-index="1" class="underline htCenter htMiddle fsize-16 tabla subraya" data-cell-type="text" data-original-value="Disponibles" data-order="Disponibles" style="min-width: 15.2113%; font-size: 16px; line-height: 22px;"><u>Disponibles</u></td>

<td data-cell-id="E1" data-x="4" data-y="1" data-db-index="1" class="underline htCenter htMiddle fsize-16 tabla subraya" data-cell-type="text" data-original-value="Ver más" data-order="Ver más" style="min-width: 12.1127%; font-size: 16px; line-height: 22px;"><u>Ver más</u></td></tr>-->
						
						
						<!--historial-->
						<!--<?php
						//function imprimirAsistencias($afiliado) {
						 //echo "paso 0";
						  list($datos, $datosEventos) = datos_consultarAsistencias($afiliado);
						 // echo "paso 1";
						  $html = "";
						  if (count($datos) > 0) {
							foreach ($datos as $indice => $arrayDatos) {
							  foreach ($arrayDatos as $id => $datosAsistencia) {
						//echo "paso 2";
							$codigoAsistencia = $datosAsistencia["codigoAsistencia"];
						//echo "paso 3";
								$textoArray = explode("\n", $datosAsistencia["info"]);
						//echo "paso 4";
							$textoEncabezado = "";
							$textoInfo = "";
								foreach ($textoArray as $ind => $valor) {
								if ($ind == 0) {
									$textoEncabezado = $valor;
									//echo $textoEncabezado;
									}
								else {
									$textoInfo .= $valor;
									//echo $textoInfo;
								}
								}

								$eventosSolicitados = 0;
								if (isset($datosEventos[$codigoAsistencia]["solicitados"])) {
									$eventosSolicitados = $datosEventos[$codigoAsistencia]["solicitados"];
									//echo $eventosSolicitados;
								}
						//echo "paso 5";
								$eventosDisponibles = 0;
								if (isset($datosEventos[$codigoAsistencia]["disponibles"])) {
									$eventosDisponibles = $datosEventos[$codigoAsistencia]["disponibles"];
									//echo $eventosDisponibles;
								}
								//echo $datosAsistencia["cierre"];
								if($datosAsistencia["cierre"]=="SI"){$marcaasis="";} else {$marcaasis="A partir de Feb/22-";}; 
								
								
								
							?>-->
							<!--<tr class="even">

<td data-cell-id="A2" data-x="0" data-y="2" data-db-index="2" class="htMiddle fsize-16 htLeft tabla " data-cell-type="text" data-original-value="Lectura de exámenes médicos" data-order="Lectura de exámenes médicos" style="font-size: 16px; line-height: 22px;"><?php echo utf8_encode($marcaasis.$datosAsistencia["nombreasistencia"]); ?></td>

<td data-cell-id="B2" data-x="1" data-y="2" data-db-index="2" class="htCenter htMiddle fsize-16 tabla subraya" data-cell-type="text" data-original-value="2 eventos" data-order="2 eventos" style="font-size: 16px; line-height: 22px;"><?php echo utf8_encode($datosEventos[$codigoAsistencia]["contratados"]); if($datosEventos[$codigoAsistencia]["contratados"]<2 && $datosEventos[$codigoAsistencia]["contratados"]>0 ){echo ' Evento';}else{echo ' Eventos';} ?></td>

<td data-cell-id="C2" data-x="2" data-y="2" data-db-index="2" class="htCenter htMiddle fsize-16 tabla subraya" data-cell-type="text" data-cell-format-type="number" data-original-value="1" data-order="1" style="font-size: 16px; line-height: 22px;"><?php echo utf8_encode($eventosSolicitados); ?></td>

<td data-cell-id="D2" data-x="3" data-y="2" data-db-index="2" class="htCenter htMiddle fsize-16 tabla subraya" data-cell-type="text" data-cell-format-type="number" data-original-value="1" data-order="1" style="font-size: 16px; line-height: 22px;"><?php echo utf8_encode($eventosDisponibles); ?></td>




<td data-cell-id="E2" data-x="4" data-y="2" data-db-index="2" class="htCenter htMiddle tabla subraya" data-cell-type="text" data-original-value="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/05/tablas-iconos-2-37.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;27&quot; height=&quot;114&quot;>" data-order="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/05/tablas-iconos-2-37.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;27&quot; height=&quot;114&quot;>"><img loading="lazy" src="http://www.igroupsolution.com/wp-content/uploads/2022/05/tablas-iconos-2-37.png" onclick="modalclickinfo('<?php echo $textoInfo; ?>');" class="stbSkipLazy alignnone size-full" width="27" height="114"></td>




							
						</tr>-->
							
							
							
							
							
							
							

						
							<!--<?php	
						}
						}
						}



							
						?>	-->					
						
						<!--</tbody>
						</table>-->
						</div>
				</div>
				<div class="elementor-element elementor-element-3bf9737 elementor-align-center elementor-widget elementor-widget-button" data-id="3bf9737" data-element_type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
					<div class="elementor-button-wrapper">
			
		</div>
				</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-954d1ee elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="954d1ee" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3282bc4" data-id="3282bc4" data-element_type="column">
			<div class="elementor-column-wrap">
							<div class="elementor-widget-wrap">
								</div>
					</div>
		</div>
								</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-58662c9 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="58662c9" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-0f61727" data-id="0f61727" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-6d73714 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="6d73714" data-element_type="widget" data-widget_type="divider.default">
				<div class="elementor-widget-container">
					<div class="elementor-divider">
			<span class="elementor-divider-separator">
						</span>
		</div>
				</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-20aa4ed elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="20aa4ed" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-94cedf1" data-id="94cedf1" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-b1758e0 elementor-widget elementor-widget-text-editor" data-id="b1758e0" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
								<div class="elementor-text-editor elementor-clearfix">
				<p class="MsoNormal"><span lang="es-419" style="color: #666666;">El servicio de Asistencia Integral es prestado a través del convenio vigente con la empresa IGS – Integral Group Solution.</span></p>					</div>
						</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-f1c869e elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="f1c869e" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8b5bd1c" data-id="8b5bd1c" data-element_type="column">
			<div class="elementor-column-wrap">
							<div class="elementor-widget-wrap">
								</div>
					</div>
		</div>
								</div>
					</div>
		</section>






  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery-3.4.1.min.js"></script>

  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap-4.4.1.js"></script>

  <script>
    //$("body").on("click", "[data-function='mostrar-en-modal']", function(){
      //mostrarEnModal(this,$puntos,$servicio);

    //});




			function GuardarPuntos($puntos,$servicio,$eventos){
				
				var usuario=document.getElementById("lblusuario").value;
				var puntos=$puntos;
				var servicio=$servicio;
				var eventos=$eventos;



				

	
				//Actualiza contraseña
				jQuery.ajax({ 
					url: "guardarpuntos.php",
					method: "POST",
					type: "POST",
					data: 	{
						usuario: usuario,
						puntos: puntos,
						servicio: servicio,
						eventos: eventos
					},
					dataType: 'html'
				});

				


				modalfinal();

			}




	function modalfinal(){
			var modal = document.getElementById("myModalfinal");
			var btn = document.getElementById("btnModal");
			var span = document.getElementsByClassName("close")[0];
			var body = document.getElementsByTagName("body")[0];

			modal.style.display = "block";
			body.style.position = "static";
			body.style.height = "100%";
			body.style.overflow = "hidden";

}


function modalclickinfo($servicio){
			var modal = document.getElementById("myModalinfo");
			var btn = document.getElementById("btnModal");
			var span = document.getElementsByClassName("close")[0];
			var body = document.getElementsByTagName("body")[0];

			

			var textoArray = $servicio.split("-sl--sl-");

			

		

			//btn.onclick = function() {
				modal.style.display = "block";


				document.getElementById("modalmoldinfo").textContent=textoArray[0];
				document.getElementById("modalmoldtexto").textContent=textoArray[1];	
				document.getElementById("modalmoldtexto2").textContent=textoArray[2];
				document.getElementById("modalmoldtexto3").textContent=textoArray[3];
				
				if(textoArray[0]=="Limpieza profunda de cocina y un baño" || textoArray[0]=="Limpieza de vidrios del hogar" || textoArray[0]=="Instalación de pantallas televisión, cuadros o artículos decorativos"
|| textoArray[0]=="Limpieza de vidrios del hogar"){

				document.getElementById("modalextra1").style.display="block";
				document.getElementById("modalextra2").style.display="block";
}

				//document.getElementById("btnmodalaceptar").onclick=function() { GuardarPuntos($puntos,$servicio);};
				body.style.position = "static";
				body.style.height = "100%";
				body.style.overflow = "hidden";
			//}

			
			
		}


   function modalclick($puntos,$servicio,$eventos){
			var modal = document.getElementById("myModal");
			var btn = document.getElementById("btnModal");
			var span = document.getElementsByClassName("close")[0];
			var body = document.getElementsByTagName("body")[0];
			

			if($eventos==0){

			alert ("No puede usar este servicio porque tiene 0 eventos.");

			//window.location.href="pide-tu-servicio.php";
			}
			else{
				var puntosvalor=Number(document.getElementById("puntosvalor").textContent);
				
				if($puntos >  puntosvalor){

					alert("No puede solicitar el servicio si no tiene los puntos suficientes, usted tiene " + puntosvalor + " puntos.");
					//window.location.href="pide-tu-servicio.php"
				}
				else{

			//btn.onclick = function() {
				modal.style.display = "block";


				document.getElementById("modalmold").textContent="¿Estas seguro de solicitar el servicio de "+ $servicio + "?  ";
				document.getElementById("modalinfopts").textContent="Se descontarán "+ $puntos+" puntos de su bolsa.";
				document.getElementById("btnmodalaceptar").onclick=function() { GuardarPuntos($puntos,$servicio,$eventos);};
				body.style.position = "static";
				body.style.height = "100%";
				body.style.overflow = "hidden";
			//}
				}
			}

			
			
		}
  </script>





						</div>
						</div>
					</div>
		            <script>
                jQuery(function($){

                    
                });
            </script>
            <div id="fb-root"></div>
            		
			<script type="text/javascript">
		var c = document.body.className;
		c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
		document.body.className = c;
	</script>
			<script type="text/javascript">
			var wc_product_block_data = JSON.parse( decodeURIComponent( '%7B%22min_columns%22%3A1%2C%22max_columns%22%3A6%2C%22default_columns%22%3A3%2C%22min_rows%22%3A1%2C%22max_rows%22%3A6%2C%22default_rows%22%3A1%2C%22thumbnail_size%22%3A300%2C%22placeholderImgSrc%22%3A%22https%3A%5C%2F%5C%2Fwww.igroupsolution.com%5C%2Fwp-content%5C%2Fuploads%5C%2Fwoocommerce-placeholder-300x300.png%22%2C%22min_height%22%3A500%2C%22default_height%22%3A500%2C%22isLargeCatalog%22%3Afalse%2C%22limitTags%22%3Afalse%2C%22hasTags%22%3Afalse%2C%22productCategories%22%3A%5B%7B%22term_id%22%3A21%2C%22name%22%3A%22Accesorios%22%2C%22slug%22%3A%22accessories%22%2C%22term_group%22%3A0%2C%22term_taxonomy_id%22%3A21%2C%22taxonomy%22%3A%22product_cat%22%2C%22description%22%3A%22Una%20descripci%5Cu00f3n%20corta%20de%20la%20categor%5Cu00eda%22%2C%22parent%22%3A0%2C%22count%22%3A0%2C%22filter%22%3A%22raw%22%2C%22link%22%3A%22https%3A%5C%2F%5C%2Fwww.igroupsolution.com%5C%2Fcategoria-producto%5C%2Faccessories%5C%2F%22%7D%2C%7B%22term_id%22%3A23%2C%22name%22%3A%22Camisetas%22%2C%22slug%22%3A%22tshirts%22%2C%22term_group%22%3A0%2C%22term_taxonomy_id%22%3A23%2C%22taxonomy%22%3A%22product_cat%22%2C%22description%22%3A%22Una%20descripci%5Cu00f3n%20corta%20de%20la%20categor%5Cu00eda%22%2C%22parent%22%3A0%2C%22count%22%3A0%2C%22filter%22%3A%22raw%22%2C%22link%22%3A%22https%3A%5C%2F%5C%2Fwww.igroupsolution.com%5C%2Fcategoria-producto%5C%2Ftshirts%5C%2F%22%7D%2C%7B%22term_id%22%3A20%2C%22name%22%3A%22Sin%20categorizar%22%2C%22slug%22%3A%22sin-categorizar%22%2C%22term_group%22%3A0%2C%22term_taxonomy_id%22%3A20%2C%22taxonomy%22%3A%22product_cat%22%2C%22description%22%3A%22%22%2C%22parent%22%3A0%2C%22count%22%3A0%2C%22filter%22%3A%22raw%22%2C%22link%22%3A%22https%3A%5C%2F%5C%2Fwww.igroupsolution.com%5C%2Fcategoria-producto%5C%2Fsin-categorizar%5C%2F%22%7D%2C%7B%22term_id%22%3A22%2C%22name%22%3A%22Sudaderas%22%2C%22slug%22%3A%22hoodies%22%2C%22term_group%22%3A0%2C%22term_taxonomy_id%22%3A22%2C%22taxonomy%22%3A%22product_cat%22%2C%22description%22%3A%22Una%20descripci%5Cu00f3n%20corta%20de%20la%20categor%5Cu00eda%22%2C%22parent%22%3A0%2C%22count%22%3A0%2C%22filter%22%3A%22raw%22%2C%22link%22%3A%22https%3A%5C%2F%5C%2Fwww.igroupsolution.com%5C%2Fcategoria-producto%5C%2Fhoodies%5C%2F%22%7D%2C%7B%22term_id%22%3A28%2C%22name%22%3A%22Asistencia%20Adulto%20Mayor%22%2C%22slug%22%3A%22asistencia-adulto-mayor%22%2C%22term_group%22%3A0%2C%22term_taxonomy_id%22%3A28%2C%22taxonomy%22%3A%22product_cat%22%2C%22description%22%3A%22%22%2C%22parent%22%3A0%2C%22count%22%3A0%2C%22filter%22%3A%22raw%22%2C%22link%22%3A%22https%3A%5C%2F%5C%2Fwww.igroupsolution.com%5C%2Fcategoria-producto%5C%2Fasistencia-adulto-mayor%5C%2F%22%7D%5D%2C%22homeUrl%22%3A%22https%3A%5C%2F%5C%2Fwww.igroupsolution.com%5C%2F%22%7D' ) );
		</script>
		<link rel="stylesheet" id="e-animations-css" href="https://www.igroupsolution.com/wp-content/plugins/elementor/assets/lib/animations/animations.min.css?ver=3.5.4" type="text/css" media="all">
<script type="text/javascript" src="https://www.igroupsolution.com/wp-content/plugins/data-tables-generator-by-supsystic/app/assets/js/dtgsnonce.js?ver=0.01" id="dtgs_nonce_frontend-js"></script>
<script type="text/javascript" id="dtgs_nonce_frontend-js-after">
var DTGS_NONCE_FRONTEND = "a10674cce0"
</script>
<script type="text/javascript" src="https://www.igroupsolution.com/wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.13.7" id="regenerator-runtime-js"></script>
<script type="text/javascript" src="https://www.igroupsolution.com/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0" id="wp-polyfill-js"></script>
<script type="text/javascript" src="https://www.igroupsolution.com/wp-includes/js/dist/hooks.min.js?ver=a7edae857aab69d69fa10d5aef23a5de" id="wp-hooks-js"></script>
<script type="text/javascript" src="https://www.igroupsolution.com/wp-includes/js/dist/i18n.min.js?ver=5f1269854226b4dd90450db411a12b79" id="wp-i18n-js"></script>
<script type="text/javascript" id="wp-i18n-js-after">
wp.i18n.setLocaleData( { 'text direction\u0004ltr': [ 'ltr' ] } );
</script>
<script type="text/javascript" src="https://www.igroupsolution.com/wp-includes/js/jquery/jquery.form.min.js?ver=4.3.0" id="jquery-form-js"></script>
<script type="text/javascript" src="https://www.igroupsolution.com/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.70" id="jquery-blockui-js"></script>
<script type="text/javascript" id="wc-add-to-cart-js-extra">
/* <![CDATA[ */
var wc_add_to_cart_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_view_cart":"Ver carrito","cart_url":"https:\/\/www.igroupsolution.com\/carrito\/","is_cart":"","cart_redirect_after_add":"no"};
/* ]]> */
</script>
<script type="text/javascript" src="https://www.igroupsolution.com/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=3.7.3" id="wc-add-to-cart-js"></script>
<script type="text/javascript" src="https://www.igroupsolution.com/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4" id="js-cookie-js"></script>
<script type="text/javascript" id="woocommerce-js-extra">
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%"};
/* ]]> */
</script>
<script type="text/javascript" src="https://www.igroupsolution.com/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=3.7.3" id="woocommerce-js"></script>
<script type="text/javascript" id="wc-cart-fragments-js-extra">
/* <![CDATA[ */
var wc_cart_fragments_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_ecf4ccc39196af905463c14c3b32cb4f","fragment_name":"wc_fragments_ecf4ccc39196af905463c14c3b32cb4f","request_timeout":"5000"};
/* ]]> */
</script>
<script type="text/javascript" src="https://www.igroupsolution.com/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=3.7.3" id="wc-cart-fragments-js"></script>
<script type="text/javascript" id="mailchimp-woocommerce-js-extra">
/* <![CDATA[ */
var mailchimp_public_data = {"site_url":"https:\/\/www.igroupsolution.com","ajax_url":"https:\/\/www.igroupsolution.com\/wp-admin\/admin-ajax.php","queue_url":"https:\/\/www.igroupsolution.com\/wp-json\/mailchimp-for-woocommerce\/v1\/queue\/work","queue_should_fire":""};
/* ]]> */
</script>
<script type="text/javascript" src="https://www.igroupsolution.com/wp-content/plugins/mailchimp-for-woocommerce/public/js/mailchimp-woocommerce-public.min.js?ver=2.2.4" id="mailchimp-woocommerce-js"></script>
<script type="text/javascript" src="https://www.igroupsolution.com/wp-content/plugins/elementor-pro/assets/js/webpack-pro.runtime.min.js?ver=3.5.2" id="elementor-pro-webpack-runtime-js"></script>
<script type="text/javascript" src="https://www.igroupsolution.com/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.5.4" id="elementor-webpack-runtime-js"></script>
<script type="text/javascript" src="https://www.igroupsolution.com/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.5.4" id="elementor-frontend-modules-js"></script>
<script type="text/javascript" id="elementor-pro-frontend-js-before">
var ElementorProFrontendConfig = {"ajaxurl":"https:\/\/www.igroupsolution.com\/wp-admin\/admin-ajax.php","nonce":"1b877bd42a","urls":{"assets":"https:\/\/www.igroupsolution.com\/wp-content\/plugins\/elementor-pro\/assets\/","rest":"https:\/\/www.igroupsolution.com\/wp-json\/"},"i18n":{"toc_no_headings_found":"No headings were found on this page."},"shareButtonsNetworks":{"facebook":{"title":"Facebook","has_counter":true},"twitter":{"title":"Twitter"},"linkedin":{"title":"LinkedIn","has_counter":true},"pinterest":{"title":"Pinterest","has_counter":true},"reddit":{"title":"Reddit","has_counter":true},"vk":{"title":"VK","has_counter":true},"odnoklassniki":{"title":"OK","has_counter":true},"tumblr":{"title":"Tumblr"},"digg":{"title":"Digg"},"skype":{"title":"Skype"},"stumbleupon":{"title":"StumbleUpon","has_counter":true},"mix":{"title":"Mix"},"telegram":{"title":"Telegram"},"pocket":{"title":"Pocket","has_counter":true},"xing":{"title":"XING","has_counter":true},"whatsapp":{"title":"WhatsApp"},"email":{"title":"Email"},"print":{"title":"Print"}},
"menu_cart":{"cart_page_url":"https:\/\/www.igroupsolution.com\/carrito\/","checkout_page_url":"https:\/\/www.igroupsolution.com\/finalizar-compra\/"},"facebook_sdk":{"lang":"es_ES","app_id":""},"lottie":{"defaultAnimationUrl":"https:\/\/www.igroupsolution.com\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json"}};
</script>
<script type="text/javascript" src="https://www.igroupsolution.com/wp-content/plugins/elementor-pro/assets/js/frontend.min.js?ver=3.5.2" id="elementor-pro-frontend-js"></script>
<script type="text/javascript" src="https://www.igroupsolution.com/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2" id="elementor-waypoints-js"></script>
<script type="text/javascript" src="https://www.igroupsolution.com/wp-includes/js/jquery/ui/core.min.js?ver=1.12.1" id="jquery-ui-core-js"></script>
<script type="text/javascript" src="https://www.igroupsolution.com/wp-content/plugins/elementor/assets/lib/swiper/swiper.min.js?ver=5.3.6" id="swiper-js"></script>
<script type="text/javascript" src="https://www.igroupsolution.com/wp-content/plugins/elementor/assets/lib/share-link/share-link.min.js?ver=3.5.4" id="share-link-js"></script>
<script type="text/javascript" src="https://www.igroupsolution.com/wp-content/plugins/elementor/assets/lib/dialog/dialog.min.js?ver=4.9.0" id="elementor-dialog-js"></script>
<script type="text/javascript" id="elementor-frontend-js-before">
var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Compartir en Facebook","shareOnTwitter":"Compartir en Twitter","pinIt":"Pinear","download":"Descargar","downloadImage":"Descargar imagen","fullscreen":"Pantalla completa","zoom":"Zoom","share":"Compartir","playVideo":"Reproducir v\u00eddeo","previous":"Anterior","next":"Siguiente","close":"Cerrar"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"M\u00f3vil","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"M\u00f3vil grande","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tableta","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tableta grande","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"Port\u00e1til","value":1366,"default_value":1366,"direction":"max","is_enabled":false},"widescreen":{"label":"Pantalla grande","value":2400,"default_value":2400,"direction":"min","is_enabled":false}}},
"version":"3.5.4","is_static":false,"experimentalFeatures":{"e_import_export":true,"e_hidden_wordpress_widgets":true,"theme_builder_v2":true,"landing-pages":true,"elements-color-picker":true,"favorite-widgets":true,"admin-top-bar":true,"form-submissions":true},"urls":{"assets":"https:\/\/www.igroupsolution.com\/wp-content\/plugins\/elementor\/assets\/"},"settings":{"page":[],"editorPreferences":[]},"kit":{"active_breakpoints":["viewport_mobile","viewport_tablet"],"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description"},"post":{"id":10988,"title":"Coomeva%20%2F%20Programa%20asistencia%20integral%20%2F%20Seleccionadas3%20%2F%20responsive22%20%E2%80%93%20IGS","excerpt":"","featuredImage":false}};
</script>
<script type="text/javascript" src="https://www.igroupsolution.com/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.5.4" id="elementor-frontend-js"></script><span id="elementor-device-mode" class="elementor-screen-only"></span>
<script type="text/javascript" src="https://www.igroupsolution.com/wp-content/plugins/elementor-pro/assets/js/preloaded-elements-handlers.min.js?ver=3.5.2" id="pro-preloaded-elements-handlers-js"></script><svg style="display: none;" class="e-font-icon-svg-symbols"></svg>
<script type="text/javascript" src="https://www.igroupsolution.com/wp-content/plugins/elementor/assets/js/preloaded-modules.min.js?ver=3.5.4" id="preloaded-modules-js"></script><svg style="display: none;" class="e-font-icon-svg-symbols"></svg>
<script type="text/javascript" src="https://www.igroupsolution.com/wp-content/plugins/elementor-pro/assets/lib/sticky/jquery.sticky.min.js?ver=3.5.2" id="e-sticky-js"></script>
	

</body></html>


