<?
session_start();
$_SESSION['token']=$_GET["token"];

header("Cache-control: no-cache");
header('Pragma: no-cache');
header("X-Frame-Options: deny");
header("Content-Type: text/html; charset=UTF-8");
header("X-Content-Type-Options: nosniff");
include "aai_lib/aai_config.php";
include "aai_lib/aai_conexion.php";
//require "aai_lib/aai_chklogin.php";

//echo $_SESSION['usuario'];
// Security note: Because of security concerns jquery 1.11.1 was upgraded to jquery lastest version (jquery 3.5.1).



$sql = "SELECT CASE WHEN SUM(puntos) IS NULL THEN 5000 ELSE 5000 - SUM(PUNTOS) END AS puntos FROM user_points WHERE usuario='1019121722';";
$result = $conn ->query($sql);

$row=$result->fetch_array(MYSQLI_NUM);




if($row[0]<=90){

?>

<html lang="es"><head>



<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-TTPKM8P2W3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-TTPKM8P2W3');
</script>


	<meta charset="UTF-8">
		<title>Coomeva / Programa asistencia integral / Pide tus servicios 2 / móvil – IGS</title>
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
<link rel="stylesheet" id="elementor-post-6306-css" href="https://www.igroupsolution.com/wp-content/uploads/elementor/css/post-6306.css?ver=1657558111" type="text/css" media="all">
<link rel="stylesheet" id="elementor-pro-css" href="https://www.igroupsolution.com/wp-content/plugins/elementor-pro/assets/css/frontend.min.css?ver=3.5.2" type="text/css" media="all">
<link rel="stylesheet" id="font-awesome-5-all-css" href="https://www.igroupsolution.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/all.min.css?ver=3.5.4" type="text/css" media="all">
<link rel="stylesheet" id="font-awesome-4-shim-css" href="https://www.igroupsolution.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/v4-shims.min.css?ver=3.5.4" type="text/css" media="all">
<link rel="stylesheet" id="elementor-global-css" href="https://www.igroupsolution.com/wp-content/uploads/elementor/css/global.css?ver=1657558134" type="text/css" media="all">
<link rel="stylesheet" id="elementor-post-11643-css" href="css/11643.css" type="text/css" media="all">
<link rel="stylesheet" id="fluentform-elementor-widget-css" href="https://www.igroupsolution.com/wp-content/plugins/fluentform/public/css/fluent-forms-elementor-widget.css?ver=4.3.1" type="text/css" media="all">
<!--<link rel="stylesheet" id="hfe-widgets-style-css" href="https://www.igroupsolution.com/wp-content/plugins/header-footer-elementor/inc/widgets-css/frontend.css?ver=1.6.7" type="text/css" media="all">-->
<link rel="stylesheet" id="hello-elementor-css" href="https://www.igroupsolution.com/wp-content/themes/hello-elementor/style.min.css?ver=2.4.2" type="text/css" media="all">
<link rel="stylesheet" id="hello-elementor-theme-style-css" href="https://www.igroupsolution.com/wp-content/themes/hello-elementor/theme.min.css?ver=2.4.2" type="text/css" media="all">
<link rel="stylesheet" id="elementor-post-7807-css" href="https://www.igroupsolution.com/wp-content/uploads/elementor/css/post-7807.css?ver=1657558126" type="text/css" media="all">
<link rel="stylesheet" id="google-fonts-1-css" href="https://fonts.googleapis.com/css?family=Roboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRaleway%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=auto&amp;ver=5.8.4" type="text/css" media="all">
<link rel="stylesheet" id="elementor-icons-shared-0-css" href="https://www.igroupsolution.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css?ver=5.15.3" type="text/css" media="all">
<link rel="stylesheet" id="elementor-icons-fa-solid-css" href="https://www.igroupsolution.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min.css?ver=5.15.3" type="text/css" media="all">
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
<link rel="https://api.w.org/" href="https://www.igroupsolution.com/wp-json/"><link rel="alternate" type="application/json" href="https://www.igroupsolution.com/wp-json/wp/v2/pages/11643"><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://www.igroupsolution.com/xmlrpc.php?rsd">
<meta name="generator" content="WordPress 5.8.4">
<meta name="generator" content="WooCommerce 3.7.3">
<link rel="canonical" href="https://www.igroupsolution.com/coomeva-programa-asistencia-integral-pide-tus-servicios-2-movil/">
<link rel="shortlink" href="https://www.igroupsolution.com/?p=11643">
<link rel="alternate" type="application/json+oembed" href="https://www.igroupsolution.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.igroupsolution.com%2Fcoomeva-programa-asistencia-integral-pide-tus-servicios-2-movil%2F">
<link rel="alternate" type="text/xml+oembed" href="https://www.igroupsolution.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.igroupsolution.com%2Fcoomeva-programa-asistencia-integral-pide-tus-servicios-2-movil%2F&amp;format=xml">
<meta name="generator" content="Site Kit by Google 1.49.0"><meta name="referrer" content="always">	<noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
	 <!--<meta name="google-site-verification" content="9ULMLTcv69MWIXigtNW_Ipdd99WOqJC477FADv6-Mpg"><link rel="icon" href="https://www.igroupsolution.com/wp-content/uploads/2019/06/cropped-FaviIGS-32x32.png" sizes="32x32">-->
<!--<link rel="icon" href="https://www.igroupsolution.com/wp-content/uploads/2019/06/cropped-FaviIGS-192x192.png" sizes="192x192">-->
<link rel="apple-touch-icon" href="https://www.igroupsolution.com/wp-content/uploads/2019/06/cropped-FaviIGS-180x180.png">
<meta name="msapplication-TileImage" content="https://www.igroupsolution.com/wp-content/uploads/2019/06/cropped-FaviIGS-270x270.png">
<meta name="generator" content="WordPress Download Manager 3.2.34">
                <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
                <link href="css/pedir-servicio.css" rel="stylesheet">
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

			width: 32%;
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
			width: 30%;
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



		

        	<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover"></head>
            <link href="css/pedir-servicio.css" rel="stylesheet" type="text/css" media="all">
<body id="bdpg" style="position: relative; overflow: auto !important; width: 100%; " class="page-template page-template-elementor_canvas page page-id-11643 theme-hello-elementor woocommerce-js ehf-template-hello-elementor ehf-stylesheet-hello-elementor elementor-default elementor-template-canvas elementor-kit-6306 elementor-page elementor-page-11643 e--ua-blink e--ua-chrome e--ua-webkit" data-elementor-device-mode="mobile">
			<div data-elementor-type="wp-page" data-elementor-id="11643" class="elementor elementor-11643" data-elementor-settings="[]">
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
												<img src="https://www.igroupsolution.com/wp-content/uploads/2022/02/Solicitar-3-1.png" title="Solicitar-3" alt="Solicitar-3">														</div>
						</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-8e88730 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="8e88730" data-element_type="section" id="titulo">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row" style="justify-content: center;">
					<div style="display: none" class="elementor-column elementor-col-16 elementor-top-column elementor-element elementor-element-d7bdf82" data-id="d7bdf82" data-element_type="column">
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
				<div class="elementor-column elementor-col-16 elementor-top-column elementor-element elementor-element-8b0f4fa" data-id="8b0f4fa" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-d1479fb elementor-align-justify elementor-widget elementor-widget-button" data-id="d1479fb" data-element_type="widget" data-widget_type="button.default">
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
				<div class="elementor-column elementor-col-16 elementor-top-column elementor-element elementor-element-d1eae89" data-id="d1eae89" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-f1b2db3 elementor-align-justify elementor-widget elementor-widget-button" data-id="f1b2db3" data-element_type="widget" data-widget_type="button.default">
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
					<div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-abeb32e elementor-hidden-tablet elementor-hidden-mobile" data-id="abeb32e" data-element_type="column">
			<div class="elementor-column-wrap">
							<div class="elementor-widget-wrap">
								</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-938fdfd" data-id="938fdfd" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<section class="elementor-section elementor-inner-section elementor-element elementor-element-314607c elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-sticky" data-id="314607c" data-element_type="section" data-settings="{&quot;sticky&quot;:&quot;top&quot;,&quot;sticky_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;sticky_offset&quot;:0,&quot;sticky_effects_offset&quot;:0}">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-4a3bb2f" data-id="4a3bb2f" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-fc2ea96 elementor-widget elementor-widget-text-editor" data-id="fc2ea96" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
								<div class="elementor-text-editor elementor-clearfix">
				<p>Puntos disponibles:</p>					</div>
						</div>
				</div>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-1f622d5" data-id="1f622d5" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-bd31ccb elementor-widget elementor-widget-text-editor" data-id="bd31ccb" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
								<div class="elementor-text-editor elementor-clearfix">
				<?php echo '<p>'.$row[0].' </p>'   ?>					</div>
						</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
                    <br><br>
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
		</section>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-971c428" data-id="971c428" data-element_type="column">
			<div class="elementor-column-wrap">
							<div class="elementor-widget-wrap">
								</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-da1c0b1" data-id="da1c0b1" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-4823cef elementor-widget elementor-widget-text-editor" data-id="4823cef" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
								<div class="elementor-text-editor elementor-clearfix">
				<p class="MsoNormal">Tu Programa de Asistencia Integral <span style="color: #333333;">comienza con <?php echo '<p>'.$row[0].' </p>'   ?> puntos, ¡disfrútalos!</span></p>					</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-ef15c9d elementor-widget elementor-widget-text-editor" data-id="ef15c9d" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
								<div class="elementor-text-editor elementor-clearfix">
				<p><span style="font-weight: 400;">Solicita las que necesites teniendo en cuenta que cada una tiene una cantidad de puntos asignados en el año y los servicios se agotaran cuando llegues a 5.000 puntos.
</br>
</br>
<p style="font-weight: 400; text-align: center;"><strong>Recuerda que puedes utilizar un servicio por mes.</strong></p>
</br>
</br>
Antes de solicitar tus asistencias, te recomendamos revisar su descripción y condiciones.</span></p>					</div>
						</div>
				</div>




</body>

</html>


<?php
}
else{

//if(!$_SESSION['usuario']){
	
//	header("Location: index.php");
//}

$parametro = $_GET["parametro"];


if($parametro=="celular"){

echo "<input type='text' style='visibility:hidden;height: 0px;' id='lblusuario' value='".$_SESSION['usuario']."' />";


$sqlcelularcorreo = "SELECT CASE WHEN telefono = 'Modelo2' THEN telefono2 ELSE telefono END AS telefono,email,nombre1,primerapellido,segundoapellido,user_points.id FROM usuariocoomeva  left join user_points on user_points.usuario=usuariocoomeva.usuario  WHERE usuariocoomeva.usuario='".$_SESSION['usuario']."' ORDER BY usuariocoomeva.id  DESC limit 1 ";
$resultcelularcorreo = $conn ->query($sqlcelularcorreo);




$rowcelularcorreo=$resultcelularcorreo->fetch_array(MYSQLI_NUM);
if($rowcelularcorreo[0]!=""){
echo "<input type='text' style='visibility:hidden;height: 0px;' id='lblcelular' value='".$rowcelularcorreo[0]."' />";
echo "<input type='text' style='visibility:hidden;height: 0px;' id='lblcorreo' value='".$rowcelularcorreo[1]."' />";
echo "<input type='text' style='visibility:hidden;height: 0px;' id='lblnombre' value='".$rowcelularcorreo[2]."' />";
echo "<input type='text' style='visibility:hidden;height: 0px;' id='lblprimerapellido' value='".$rowcelularcorreo[3]." consecutivo: ".$rowcelularcorreo[5]."' />";

}

?>

<html lang="es"><head>
	<meta charset="UTF-8">
		<title>Coomeva / Programa asistencia integral / Pide tus servicios 2 / móvil – IGS</title>
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
<link rel="stylesheet" id="elementor-post-6306-css" href="https://www.igroupsolution.com/wp-content/uploads/elementor/css/post-6306.css?ver=1657558111" type="text/css" media="all">
<link rel="stylesheet" id="elementor-pro-css" href="https://www.igroupsolution.com/wp-content/plugins/elementor-pro/assets/css/frontend.min.css?ver=3.5.2" type="text/css" media="all">
<link rel="stylesheet" id="font-awesome-5-all-css" href="https://www.igroupsolution.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/all.min.css?ver=3.5.4" type="text/css" media="all">
<link rel="stylesheet" id="font-awesome-4-shim-css" href="https://www.igroupsolution.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/v4-shims.min.css?ver=3.5.4" type="text/css" media="all">
<link rel="stylesheet" id="elementor-global-css" href="https://www.igroupsolution.com/wp-content/uploads/elementor/css/global.css?ver=1657558134" type="text/css" media="all">
<link rel="stylesheet" id="elementor-post-11643-css" href="css/11643.css" type="text/css" media="all">
<link rel="stylesheet" id="fluentform-elementor-widget-css" href="https://www.igroupsolution.com/wp-content/plugins/fluentform/public/css/fluent-forms-elementor-widget.css?ver=4.3.1" type="text/css" media="all">
<!--<link rel="stylesheet" id="hfe-widgets-style-css" href="https://www.igroupsolution.com/wp-content/plugins/header-footer-elementor/inc/widgets-css/frontend.css?ver=1.6.7" type="text/css" media="all">-->
<link rel="stylesheet" id="hello-elementor-css" href="https://www.igroupsolution.com/wp-content/themes/hello-elementor/style.min.css?ver=2.4.2" type="text/css" media="all">
<link rel="stylesheet" id="hello-elementor-theme-style-css" href="https://www.igroupsolution.com/wp-content/themes/hello-elementor/theme.min.css?ver=2.4.2" type="text/css" media="all">
<link rel="stylesheet" id="elementor-post-7807-css" href="https://www.igroupsolution.com/wp-content/uploads/elementor/css/post-7807.css?ver=1657558126" type="text/css" media="all">
<link rel="stylesheet" id="google-fonts-1-css" href="https://fonts.googleapis.com/css?family=Roboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRaleway%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=auto&amp;ver=5.8.4" type="text/css" media="all">
<link rel="stylesheet" id="elementor-icons-shared-0-css" href="https://www.igroupsolution.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css?ver=5.15.3" type="text/css" media="all">
<link rel="stylesheet" id="elementor-icons-fa-solid-css" href="https://www.igroupsolution.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min.css?ver=5.15.3" type="text/css" media="all">
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
<link rel="https://api.w.org/" href="https://www.igroupsolution.com/wp-json/"><link rel="alternate" type="application/json" href="https://www.igroupsolution.com/wp-json/wp/v2/pages/11643"><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://www.igroupsolution.com/xmlrpc.php?rsd">
<meta name="generator" content="WordPress 5.8.4">
<meta name="generator" content="WooCommerce 3.7.3">
<link rel="canonical" href="https://www.igroupsolution.com/coomeva-programa-asistencia-integral-pide-tus-servicios-2-movil/">
<link rel="shortlink" href="https://www.igroupsolution.com/?p=11643">
<link rel="alternate" type="application/json+oembed" href="https://www.igroupsolution.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.igroupsolution.com%2Fcoomeva-programa-asistencia-integral-pide-tus-servicios-2-movil%2F">
<link rel="alternate" type="text/xml+oembed" href="https://www.igroupsolution.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.igroupsolution.com%2Fcoomeva-programa-asistencia-integral-pide-tus-servicios-2-movil%2F&amp;format=xml">
<meta name="generator" content="Site Kit by Google 1.49.0"><meta name="referrer" content="always">	<noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
	<!--<meta name="google-site-verification" content="9ULMLTcv69MWIXigtNW_Ipdd99WOqJC477FADv6-Mpg"><link rel="icon" href="https://www.igroupsolution.com/wp-content/uploads/2019/06/cropped-FaviIGS-32x32.png" sizes="32x32">-->
<!-- <link rel="icon" href="https://www.igroupsolution.com/wp-content/uploads/2019/06/cropped-FaviIGS-192x192.png" sizes="192x192">-->
<link rel="apple-touch-icon" href="https://www.igroupsolution.com/wp-content/uploads/2019/06/cropped-FaviIGS-180x180.png">
<meta name="msapplication-TileImage" content="https://www.igroupsolution.com/wp-content/uploads/2019/06/cropped-FaviIGS-270x270.png">
<meta name="generator" content="WordPress Download Manager 3.2.34">
                <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
                <link href="css/pedir-servicio.css" rel="stylesheet">
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

			width: 32%;
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
			width: 30%;
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



		

        	<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover"></head>
<body id="bdpg" style="position: relative; overflow: auto !important; width: 100%; " class="page-template page-template-elementor_canvas page page-id-11643 theme-hello-elementor woocommerce-js ehf-template-hello-elementor ehf-stylesheet-hello-elementor elementor-default elementor-template-canvas elementor-kit-6306 elementor-page elementor-page-11643 e--ua-blink e--ua-chrome e--ua-webkit" data-elementor-device-mode="mobile">





			<div data-elementor-type="wp-page" data-elementor-id="11643" class="elementor elementor-11643" data-elementor-settings="[]">
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
							<img width="294" height="208" src="imagenes-verde/Coomeva-logo-verde.PNG" class="attachment-large size-large" alt="" loading="lazy">								</a>
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
												<img src="https://www.igroupsolution.com/wp-content/uploads/2022/02/Solicitar-3-1.png" title="Solicitar-3" alt="Solicitar-3">														</div>
						</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-8e88730 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="8e88730" data-element_type="section" id="titulo">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-row" style="justify-content: center;">
                    <div style="display: none" class="elementor-column elementor-col-16 elementor-top-column elementor-element elementor-element-d7bdf82" data-id="d7bdf82" data-element_type="column">
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
				<div class="elementor-column elementor-col-16 elementor-top-column elementor-element elementor-element-8b0f4fa" data-id="8b0f4fa" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-d1479fb elementor-align-justify elementor-widget elementor-widget-button" data-id="d1479fb" data-element_type="widget" data-widget_type="button.default">
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
				<div class="elementor-column elementor-col-16 elementor-top-column elementor-element elementor-element-d1eae89" data-id="d1eae89" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-f1b2db3 elementor-align-justify elementor-widget elementor-widget-button" data-id="f1b2db3" data-element_type="widget" data-widget_type="button.default">
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
					<div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-abeb32e elementor-hidden-tablet elementor-hidden-mobile" data-id="abeb32e" data-element_type="column">
			<div class="elementor-column-wrap">
							<div class="elementor-widget-wrap">
								</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-938fdfd" data-id="938fdfd" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<section class="elementor-section elementor-inner-section elementor-element elementor-element-314607c elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-sticky" data-id="314607c" data-element_type="section" data-settings="{&quot;sticky&quot;:&quot;top&quot;,&quot;sticky_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;sticky_offset&quot;:0,&quot;sticky_effects_offset&quot;:0}">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-4a3bb2f" data-id="4a3bb2f" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-fc2ea96 elementor-widget elementor-widget-text-editor" data-id="fc2ea96" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
								<div class="elementor-text-editor elementor-clearfix">
				<p>Puntos disponibles:</p>					</div>
						</div>
				</div>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-1f622d5" data-id="1f622d5" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-bd31ccb elementor-widget elementor-widget-text-editor" data-id="bd31ccb" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
								<div class="elementor-text-editor elementor-clearfix">
				<?php echo '<p id="puntosvalor">'.$row[0].'</p>' ?> 					</div>
						</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
                    <br><br>
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
		</section>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-971c428" data-id="971c428" data-element_type="column">
			<div class="elementor-column-wrap">
							<div class="elementor-widget-wrap">
								</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-da1c0b1" data-id="da1c0b1" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<section class="elementor-section elementor-inner-section elementor-element elementor-element-36368e1 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="36368e1" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-ff6f284" data-id="ff6f284" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-8771cba elementor-widget elementor-widget-text-editor" data-id="8771cba" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
								<div class="elementor-text-editor elementor-clearfix">
				<p><span style="color: #bc5109; font-family: Raleway, sans-serif; font-size: 30px; font-weight: bold; text-align: center;">A continuación encontrarás las asistencias&nbsp;</span><span style="font-family: Raleway, sans-serif; font-size: 30px; font-weight: bold; text-align: center; color: #333333;"><span style="color: #bc5109;">que</span>&nbsp;tienes disponibles en cada categoría</span></p>					</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-f9387ee elementor-widget elementor-widget-text-editor" data-id="f9387ee" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
								<div class="elementor-text-editor elementor-clearfix">
				<p style="color: #545454; font-family: Raleway, sans-serif; font-size: 21px; text-align: justify;">Solicita las que necesites teniendo en cuenta que cada una tiene una cantidad de puntos asignados y los servicios se agotarán cuando llegues a 5.000 puntos.
</p><p style="color: #545454; font-family: Raleway, sans-serif; font-size: 21px; text-align: justify;">Antes de solicitar tus asistencias, te recomendamos revisar su descripción y condiciones.</p>					</div>
						</div>
				</div>
						</div>
					</div>
		</div>
								</div>



<div id="myModalinfo" class="modalContainer">
 <div class="modal-contentinf">
  <!--<a  onclick="ocultarinfo();"><span onclick="ocultarinfo();" class="close">X</span> </a>-->
	<h11 style="text-align:left !important;" class="texto1" id="modalmoldinfo">Esta seguro que desea tomar esta asistencia</h11><br></br>
	<h11 id="modalmoldtexto">Esta seguro que desea tomar esta asistencia</h11><br></br>
	<h11 id="modalmoldtexto2">Esta seguro que desea tomar esta asistencia</h11><br></br>
	<h11 id="modalmoldtexto3">Esta seguro que desea tomar esta asistencia</h11><br></br>


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
	<h15>Recibirás la llamada de uno de nuestros asesores, para continuar con la programación de tu asistencia.</h9><br></br>
	<h15>Gracias por confiar en nuestros servicios.</h9><br></br>
	<input type="button" style="border:#65f365;background: #65f365;color: white;font-family: 'Raleway', Sans-serif;font-size: 17px;font-weight: 500;background-color: #87B32F;border-radius: 6px 6px 6px 6px;" onclick="window.location.href='pide-tu-servicio.php';"  value="Cerrar"/>
 </div> 


<script type="text/javascript">

function ocultarinfo(){

	document.getElementById("myModalinfo").style.display="none";
	document.getElementById("myModal").style.display="none";
	document.getElementById("myModalfinal").style.display="none";
	document.getElementById("bdpg").style.overflow="auto";

}


</script>
</div>
		</section>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-6cff6e7 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="6cff6e7" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-ce92e58" data-id="ce92e58" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-db03db1 elementor-widget elementor-widget-accordion" data-id="db03db1" data-element_type="widget" data-widget_type="accordion.default">
				<div class="elementor-widget-container">
					<div class="elementor-accordion" role="tablist">
							<div class="elementor-accordion-item">
					<h2 id="elementor-tab-title-2291" class="elementor-tab-title elementor-active" data-tab="1" role="tab" aria-controls="elementor-tab-content-2291" aria-expanded="true" tabindex="0" aria-selected="true">
													<span class="elementor-accordion-icon elementor-accordion-icon-right" aria-hidden="true">
															<span class="elementor-accordion-icon-closed"><img src="imagenes-verde/Coomeva-Flecha-abajo.png" class="fas fa-chevron-down"></img></span>
								<span class="elementor-accordion-icon-opened"><img src="imagenes-verde/Coomeva-Flecha-arriba.png" class="fas fa-chevron-down"></img></span>
														</span>
												<a class="elementor-accordion-title" href="">Asistencias Hogar</a>
					</h2>
					<div id="elementor-tab-content-2291" class="elementor-tab-content elementor-clearfix elementor-active" data-tab="1" role="tabpanel" aria-labelledby="elementor-tab-title-2291" style="display: block;"><p></p><div class="supsystic-table-loader spinner" style="background-color: rgb(0, 0, 0); display: none;"></div><div id="supsystic-table-11_68275" class="supsystic-tables-wrap " style="width: 100%; visibility: visible;" data-table-width-fixed="100%" data-table-width-mobile="100%"><div id="supsystic-table-11_wrapper" class="dataTables_wrapper no-footer">









<div id="supsystic-table-11_processing" class="dataTables_processing" style="display: none;">Processing...</div><div class="dataTables_scroll"><div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px; width: 100%;"><div class="dataTables_scrollHeadInner" style="box-sizing: content-box; width: 488px; padding-right: 0px;"><table class="supsystic-table paragraphMode border lightboxImg no-border dataTable no-footer" data-id="11" data-view-id="11_68275" data-title="Pide tu asistencia (móvil)" data-currency-format="$1,000.00" data-percent-format="10.00%" data-date-format="DD.MM.YYYY" data-time-format="HH:mm" data-features="[&quot;after_table_loaded_script&quot;]" data-search-value="" data-lightbox-img="" data-head-rows-count="1" data-pagination-length="50,100,All" data-auto-index="off" data-searching-settings="{&quot;columnSearchPosition&quot;:&quot;bottom&quot;,&quot;minChars&quot;:&quot;0&quot;}" data-lang="default" data-override="{&quot;emptyTable&quot;:&quot;&quot;,&quot;info&quot;:&quot;&quot;,&quot;infoEmpty&quot;:&quot;&quot;,&quot;infoFiltered&quot;:&quot;&quot;,&quot;lengthMenu&quot;:&quot;&quot;,&quot;search&quot;:&quot;&quot;,&quot;zeroRecords&quot;:&quot;&quot;,&quot;exportLabel&quot;:&quot;&quot;,&quot;file&quot;:&quot;default&quot;}" data-merged="[{&quot;row&quot;:1,&quot;col&quot;:0,&quot;rowspan&quot;:2,&quot;colspan&quot;:1,&quot;removed&quot;:false},{&quot;row&quot;:1,&quot;col&quot;:1,&quot;rowspan&quot;:2,&quot;colspan&quot;:1,&quot;removed&quot;:false},{&quot;row&quot;:1,&quot;col&quot;:2,&quot;rowspan&quot;:2,&quot;colspan&quot;:1,&quot;removed&quot;:false}]" data-responsive-mode="2" data-from-history="0" role="grid" style="margin-left: 0px; width: 488px;"><thead><tr role="row"><th class="sorting_disabled" style="width: 302.812px; padding: 0px !important;" rowspan="1" colspan="1" data-original-value="" data-order=""></th><th class="sorting_disabled" style="width: 83.4844px; padding: 0px !important;" rowspan="1" colspan="1" data-original-value="" data-order=""></th><th class="sorting_disabled" style="width: 101.703px; padding: 0px !important;" rowspan="1" colspan="1" data-original-value="" data-order=""></th></tr></thead></table></div></div>




<div class="dataTables_scrollBody" style="position: relative; overflow: auto; width: 100%; "><table id="supsystic-table-11" class="supsystic-table paragraphMode border lightboxImg no-border dataTable no-footer" data-id="11" data-view-id="11_68275" data-title="Pide tu asistencia (móvil)" data-currency-format="$1,000.00" data-percent-format="10.00%" data-date-format="DD.MM.YYYY" data-time-format="HH:mm" data-features="[&quot;after_table_loaded_script&quot;]" data-search-value="" data-lightbox-img="" data-head-rows-count="1" data-pagination-length="50,100,All" data-auto-index="off" data-searching-settings="{&quot;columnSearchPosition&quot;:&quot;bottom&quot;,&quot;minChars&quot;:&quot;0&quot;}" data-lang="default" data-override="{&quot;emptyTable&quot;:&quot;&quot;,&quot;info&quot;:&quot;&quot;,&quot;infoEmpty&quot;:&quot;&quot;,&quot;infoFiltered&quot;:&quot;&quot;,&quot;lengthMenu&quot;:&quot;&quot;,&quot;search&quot;:&quot;&quot;,&quot;zeroRecords&quot;:&quot;&quot;,&quot;exportLabel&quot;:&quot;&quot;,&quot;file&quot;:&quot;default&quot;}" data-merged="[{&quot;row&quot;:1,&quot;col&quot;:0,&quot;rowspan&quot;:2,&quot;colspan&quot;:1,&quot;removed&quot;:false},{&quot;row&quot;:1,&quot;col&quot;:1,&quot;rowspan&quot;:2,&quot;colspan&quot;:1,&quot;removed&quot;:false},{&quot;row&quot;:1,&quot;col&quot;:2,&quot;rowspan&quot;:2,&quot;colspan&quot;:1,&quot;removed&quot;:false}]" data-responsive-mode="2" data-from-history="0" role="grid"><thead><tr role="row" style="height: 0px;"><th class="" style="padding-top: 0px; padding-right: 0px !important; padding-bottom: 0px; padding-left: 0px !important; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 302.812px;" rowspan="1" colspan="1" data-original-value="<div class=&quot;dataTables_sizing&quot; style=&quot;height: 0px; overflow: hidden;&quot;></div>" data-order="<div class=&quot;dataTables_sizing&quot; style=&quot;height: 0px; overflow: hidden;&quot;></div>"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"></div></th><th class="" style="padding-top: 0px; padding-right: 0px !important; padding-bottom: 0px; padding-left: 0px !important; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 83.4844px;" rowspan="1" colspan="1" data-original-value="<div class=&quot;dataTables_sizing&quot; style=&quot;height: 0px; overflow: hidden;&quot;></div>" data-order="<div class=&quot;dataTables_sizing&quot; style=&quot;height: 0px; overflow: hidden;&quot;></div>"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"></div></th><th class="" style="padding-top: 0px; padding-right: 0px !important; padding-bottom: 0px; padding-left: 0px !important; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 101.703px;" rowspan="1" colspan="1" data-original-value="<div class=&quot;dataTables_sizing&quot; style=&quot;height: 0px; overflow: hidden;&quot;></div>" data-order="<div class=&quot;dataTables_sizing&quot; style=&quot;height: 0px; overflow: hidden;&quot;></div>"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">

</div></th></tr></thead><tbody>





<?php

//Asis adulto mayor


$sql = "SELECT codasistencia,nombreasistencia,CASE WHEN user_points.eventossolic IS NULL   THEN catalogocoomevars.eventos WHEN user_points.eventossolic='sin limite' THEN catalogocoomevars.eventos ELSE catalogocoomevars.eventos  END AS eventos ,catalogocoomevars.puntos,info,tipo FROM catalogocoomevars LEFT JOIN user_points ON user_points.servicio=catalogocoomevars.nombreasistencia WHERE tipo=1 GROUP BY catalogocoomevars.codasistencia,catalogocoomevars.nombreasistencia,user_points.eventossolic,catalogocoomevars.eventos,catalogocoomevars.puntos,catalogocoomevars.info";
$result = $conn ->query($sql);



$anio="";
$anio2="";

while($row=$result->fetch_array(MYSQLI_NUM)){


if($row[1]=="Limpieza de vidrios del hogar." || mb_convert_encoding($row[1],'UTF-8')=="Limpieza profunda de cocina y baño (únicamente un baño)." ){

$anio=" por año";

}

?>


<tr class="odd"><td style=" width: 2%;" data-cell-id="A1" data-x="0" data-y="1" data-db-index="1" class="underline htMiddle htCenter color-333333 fsize-17" 
data-cell-type="text" data-original-value="Asistencias" data-order="Asistencias" style="min-width: 75%; width: 328.297px; color: rgb(51, 51, 51); font-size: 17px; line-height: 23px;"></td>


</tr>
<tr  class="even">



<td data-cell-id="A2" data-x="0" data-y="2" data-db-index="2" class="htMiddle color-333333 bg-f5f5f5 fsize-17" data-cell-type="text" data-original-value="Servicio de Plomería por emergencia<br><br> Eventos anuales: 1 evento<br> Puntos: 700" data-order="Servicio de Plomería por emergencia<br><br> Eventos anuales: 1 evento<br> Puntos: 700" data-colspan="1" data-rowspan="2" rowspan="2" style="color: rgb(51, 51, 51); background-color: rgb(245, 245, 245); font-size: 17px; line-height: 23px;"><?php echo mb_convert_encoding($row[1],'UTF-8'); ?><br><br>

<?php



$sqleventos="SELECT codasistencia,nombreasistencia,CASE WHEN user_points.eventossolic IS NULL   THEN catalogocoomevars.eventos WHEN user_points.eventossolic='sin limite' THEN catalogocoomevars.eventos ELSE catalogocoomevars.eventos - SUM(user_points.eventossolic) END AS eventos ,catalogocoomevars.puntos,info,tipo FROM catalogocoomevars LEFT JOIN user_points ON user_points.servicio=catalogocoomevars.nombreasistencia WHERE tipo=1 AND user_points.usuario='".$_SESSION['usuario']."' and nombreasistencia='".$row[1]."' GROUP BY catalogocoomevars.codasistencia,catalogocoomevars.nombreasistencia,user_points.eventossolic,catalogocoomevars.eventos,catalogocoomevars.puntos,catalogocoomevars.info,user_points.usuario";

$resulteventos = $conn ->query($sqleventos);


if($rowev=$resulteventos->fetch_array(MYSQLI_NUM)){
if($row[1]=$rowev[1]){

?>
  
 Eventos anuales: <?php echo utf8_encode($rowev[2]); if($rowev[2]<2 && $rowev[2]>0 ){echo ' Evento'.$anio;}else{echo ' Eventos'.$anio;} ?><br>


<?php

}else{
?>

 Eventos anuales: <?php echo utf8_encode($row[2]); if($row[2]<2 && $row[2]>0 ){echo ' Evento'.$anio;}else{echo ' Eventos'.$anio;} ?><br>

<?php

}
}else{

?>

Eventos anuales: <?php echo utf8_encode($row[2]); if($row[2]<2 && $row[2]>0 ){echo ' Evento'.$anio;}else{echo ' Eventos'.$anio;} ?><br>

<?php
$anio="";
}
?>





 Puntos: <?php echo utf8_encode($row[3]); ?></td>




<td data-cell-id="B2" data-x="1" data-y="2" data-db-index="2" class="color-87b32f bg-f5f5f5 htCenter htMiddle" data-cell-type="text" data-original-value="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/05/tablas-iconos-2-37.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;28&quot; height=&quot;114&quot;>" data-order="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/05/tablas-iconos-2-37.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;28&quot; height=&quot;114&quot;>" data-colspan="1" data-rowspan="2" rowspan="2" style="color: rgb(135, 179, 47); background-color: rgb(245, 245, 245);"><img loading="lazy" src="http://www.igroupsolution.com/wp-content/uploads/2022/05/tablas-iconos-2-37.png" onclick="modalclickinfo('<?php $reemplazo=str_replace("(","",mb_convert_encoding($row[4],'UTF-8')); $reemplazo2=str_replace(")","",$reemplazo); $reemplazo3=str_replace("\r\n","-sl-",$reemplazo2); echo $reemplazo3; ?>');" class="stbSkipLazy alignnone size-full" width="28" height="114"></td>






<?php


$sqleventosbn="SELECT codasistencia,nombreasistencia,CASE WHEN user_points.eventossolic IS NULL   THEN catalogocoomevars.eventos WHEN user_points.eventossolic='sin limite' THEN catalogocoomevars.eventos ELSE catalogocoomevars.eventos - SUM(user_points.eventossolic) END AS eventos ,catalogocoomevars.puntos,info,tipo FROM catalogocoomevars LEFT JOIN user_points ON user_points.servicio=catalogocoomevars.nombreasistencia WHERE tipo=1 AND user_points.usuario='".$_SESSION['usuario']."' and nombreasistencia='".$row[1]."' GROUP BY catalogocoomevars.codasistencia,catalogocoomevars.nombreasistencia,user_points.eventossolic,catalogocoomevars.eventos,catalogocoomevars.puntos,catalogocoomevars.info,user_points.usuario";

$resulteventosbn = $conn ->query($sqleventosbn);


if($rowevn=$resulteventosbn->fetch_array(MYSQLI_NUM)){
if($row[1]=$rowevn[1]){

?>



<td data-cell-id="C2" data-x="2" data-y="2" data-db-index="2" class="bg-f5f5f5 htCenter htMiddle" data-cell-type="text" data-original-value="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;27&quot; height=&quot;84&quot;>" data-order="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;27&quot; height=&quot;84&quot;>" data-colspan="1" data-rowspan="2" rowspan="2" style="background-color: rgb(245, 245, 245);"><img loading="lazy" src="http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png" onclick="modalclick('<?php echo utf8_encode($row[3]); ?>','<?php echo mb_convert_encoding($row[1],'UTF-8'); ?>','<?php echo utf8_encode($rowevn[2]); ?>');" class="stbSkipLazy alignnone size-full" width="27" height="84"></td>



<?php

}
else
{
?>


<td data-cell-id="C2" data-x="2" data-y="2" data-db-index="2" class="bg-f5f5f5 htCenter htMiddle" data-cell-type="text" data-original-value="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;27&quot; height=&quot;84&quot;>" data-order="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;27&quot; height=&quot;84&quot;>" data-colspan="1" data-rowspan="2" rowspan="2" style="background-color: rgb(245, 245, 245);"><img loading="lazy" src="http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png" onclick="abrirModal('<?php echo utf8_encode($row[3]); ?>','<?php echo mb_convert_encoding($row[1],'UTF-8'); ?>','<?php echo utf8_encode($row[2]); ?>');" class="stbSkipLazy alignnone size-full" width="27" height="84"></td>

<?php

}
}
else
{
?>

<td data-cell-id="C2" data-x="2" data-y="2" data-db-index="2" class="bg-f5f5f5 htCenter htMiddle" data-cell-type="text" data-original-value="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;27&quot; height=&quot;84&quot;>" data-order="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;27&quot; height=&quot;84&quot;>" data-colspan="1" data-rowspan="2" rowspan="2" style="background-color: rgb(245, 245, 245);"><img loading="lazy" src="http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png" onclick="abrirModal('<?php echo utf8_encode($row[3]); ?>','<?php echo mb_convert_encoding($row[1],'UTF-8'); ?>','<?php echo utf8_encode($row[2]); ?>');" class="stbSkipLazy alignnone size-full" width="27" height="84"></td>


<?php

}

?>




</tr>



<?php


}

?>

</tbody></table></div></div></div><!-- /#supsystic-table-11.supsystic-table --></div><!-- /.supsystic-tables-wrap --><!-- Tables Generator by Supsystic --><!-- Version: 1.10.14 --><!-- http://supsystic.com/ --><p></p></div>
</div>
								</div>





				</div>
				</div>



				<div class="elementor-element elementor-element-017f8ef elementor-widget elementor-widget-accordion" data-id="017f8ef" data-element_type="widget" data-widget_type="accordion.default">
				<div class="elementor-widget-container">
					<div class="elementor-accordion" role="tablist">
							<div class="elementor-accordion-item">
					<h2 id="elementor-tab-title-1571" class="elementor-tab-title elementor-active" data-tab="1" role="tab" aria-controls="elementor-tab-content-1571" aria-expanded="true" tabindex="0" aria-selected="true">
													<span class="elementor-accordion-icon elementor-accordion-icon-right" aria-hidden="true">
															<span class="elementor-accordion-icon-closed"><img src="imagenes-verde/Coomeva-Flecha-abajo.png" class="fas fa-chevron-down"></img></span>
								<span class="elementor-accordion-icon-opened"><img src="imagenes-verde/Coomeva-Flecha-arriba.png" class="fas fa-chevron-down"></img></span>
														</span>
												<a class="elementor-accordion-title" href="">Asistencia Médica</a>
					</h2>
					<div id="elementor-tab-content-1571" class="elementor-tab-content elementor-clearfix elementor-active" data-tab="1" role="tabpanel" aria-labelledby="elementor-tab-title-1571" style="display: block;"><p></p><div class="supsystic-table-loader spinner" style="background-color: rgb(0, 0, 0); display: none;"></div><div id="supsystic-table-11_68275" class="supsystic-tables-wrap " style="width: 100%; visibility: visible;" data-table-width-fixed="100%" data-table-width-mobile="100%"><div id="supsystic-table-11_wrapper" class="dataTables_wrapper no-footer"><div id="supsystic-table-11_processing" class="dataTables_processing" style="display: none;">Processing...</div><div class="dataTables_scroll"><div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px; width: 100%;"><div class="dataTables_scrollHeadInner" style="box-sizing: content-box; width: 488px; padding-right: 17px;"><table class="supsystic-table paragraphMode border lightboxImg no-border dataTable no-footer" data-id="11" data-view-id="11_68275" data-title="Pide tu asistencia (móvil)" data-currency-format="$1,000.00" data-percent-format="10.00%" data-date-format="DD.MM.YYYY" data-time-format="HH:mm" data-features="[&quot;after_table_loaded_script&quot;]" data-search-value="" data-lightbox-img="" data-head-rows-count="1" data-pagination-length="50,100,All" data-auto-index="off" data-searching-settings="{&quot;columnSearchPosition&quot;:&quot;bottom&quot;,&quot;minChars&quot;:&quot;0&quot;}" data-lang="default" data-override="{&quot;emptyTable&quot;:&quot;&quot;,&quot;info&quot;:&quot;&quot;,&quot;infoEmpty&quot;:&quot;&quot;,&quot;infoFiltered&quot;:&quot;&quot;,&quot;lengthMenu&quot;:&quot;&quot;,&quot;search&quot;:&quot;&quot;,&quot;zeroRecords&quot;:&quot;&quot;,&quot;exportLabel&quot;:&quot;&quot;,&quot;file&quot;:&quot;default&quot;}" data-merged="[{&quot;row&quot;:1,&quot;col&quot;:0,&quot;rowspan&quot;:2,&quot;colspan&quot;:1,&quot;removed&quot;:false},{&quot;row&quot;:1,&quot;col&quot;:1,&quot;rowspan&quot;:2,&quot;colspan&quot;:1,&quot;removed&quot;:false},{&quot;row&quot;:1,&quot;col&quot;:2,&quot;rowspan&quot;:2,&quot;colspan&quot;:1,&quot;removed&quot;:false}]" data-responsive-mode="2" data-from-history="0" role="grid" style="margin-left: 0px; width: 488px;"><thead><tr role="row"><th class="sorting_disabled" style="width: 306.062px; padding: 0px !important;" rowspan="1" colspan="1" data-original-value="" data-order=""></th><th class="sorting_disabled" style="width: 83.375px; padding: 0px !important;" rowspan="1" colspan="1" data-original-value="" data-order=""></th><th class="sorting_disabled" style="width: 98.5625px; padding: 0px !important;" rowspan="1" colspan="1" data-original-value="" data-order=""></th></tr></thead></table></div></div><div class="dataTables_scrollBody" style="position: relative; overflow: auto; width: 100%; "><table id="supsystic-table-11" class="supsystic-table paragraphMode border lightboxImg no-border dataTable no-footer" data-id="11" data-view-id="11_68275" data-title="Pide tu asistencia (móvil)" data-currency-format="$1,000.00" data-percent-format="10.00%" data-date-format="DD.MM.YYYY" data-time-format="HH:mm" data-features="[&quot;after_table_loaded_script&quot;]" data-search-value="" data-lightbox-img="" data-head-rows-count="1" data-pagination-length="50,100,All" data-auto-index="off" data-searching-settings="{&quot;columnSearchPosition&quot;:&quot;bottom&quot;,&quot;minChars&quot;:&quot;0&quot;}" data-lang="default" data-override="{&quot;emptyTable&quot;:&quot;&quot;,&quot;info&quot;:&quot;&quot;,&quot;infoEmpty&quot;:&quot;&quot;,&quot;infoFiltered&quot;:&quot;&quot;,&quot;lengthMenu&quot;:&quot;&quot;,&quot;search&quot;:&quot;&quot;,&quot;zeroRecords&quot;:&quot;&quot;,&quot;exportLabel&quot;:&quot;&quot;,&quot;file&quot;:&quot;default&quot;}" data-merged="[{&quot;row&quot;:1,&quot;col&quot;:0,&quot;rowspan&quot;:2,&quot;colspan&quot;:1,&quot;removed&quot;:false},{&quot;row&quot;:1,&quot;col&quot;:1,&quot;rowspan&quot;:2,&quot;colspan&quot;:1,&quot;removed&quot;:false},{&quot;row&quot;:1,&quot;col&quot;:2,&quot;rowspan&quot;:2,&quot;colspan&quot;:1,&quot;removed&quot;:false}]" data-responsive-mode="2" data-from-history="0" role="grid"><thead><tr role="row" style="height: 0px;"><th class="" style="padding-top: 0px; padding-right: 0px !important; padding-bottom: 0px; padding-left: 0px !important; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 306.062px;" rowspan="1" colspan="1" data-original-value="<div class=&quot;dataTables_sizing&quot; style=&quot;height: 0px; overflow: hidden;&quot;></div>" data-order="<div class=&quot;dataTables_sizing&quot; style=&quot;height: 0px; overflow: hidden;&quot;></div>"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"></div></th><th class="" style="padding-top: 0px; padding-right: 0px !important; padding-bottom: 0px; padding-left: 0px !important; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 83.375px;" rowspan="1" colspan="1" data-original-value="<div class=&quot;dataTables_sizing&quot; style=&quot;height: 0px; overflow: hidden;&quot;></div>" data-order="<div class=&quot;dataTables_sizing&quot; style=&quot;height: 0px; overflow: hidden;&quot;></div>"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"></div></th><th class="" style="padding-top: 0px; padding-right: 0px !important; padding-bottom: 0px; padding-left: 0px !important; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 98.5625px;" rowspan="1" colspan="1" data-original-value="<div class=&quot;dataTables_sizing&quot; style=&quot;height: 0px; overflow: hidden;&quot;></div>" data-order="<div class=&quot;dataTables_sizing&quot; style=&quot;height: 0px; overflow: hidden;&quot;></div>"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"></div></th></tr></thead>



<tbody>





<?php

//Asis adulto mayor


$sql = "SELECT codasistencia,nombreasistencia,CASE WHEN user_points.eventossolic IS NULL   THEN catalogocoomevars.eventos WHEN user_points.eventossolic='sin limite' THEN catalogocoomevars.eventos ELSE catalogocoomevars.eventos  END AS eventos ,catalogocoomevars.puntos,info,tipo FROM catalogocoomevars LEFT JOIN user_points ON user_points.servicio=catalogocoomevars.nombreasistencia WHERE tipo=2 GROUP BY catalogocoomevars.codasistencia,catalogocoomevars.nombreasistencia,user_points.eventossolic,catalogocoomevars.eventos,catalogocoomevars.puntos,catalogocoomevars.info";
$result = $conn ->query($sql);





while($row=$result->fetch_array(MYSQLI_NUM)){

?>


<tr class="odd"><td style=" width: 2%;" data-cell-id="A1" data-x="0" data-y="1" data-db-index="1" class="underline htMiddle htCenter color-333333 fsize-17" data-cell-type="text" data-original-value="Asistencias" data-order="Asistencias" style="min-width: 75%; width: 328.297px; color: rgb(51, 51, 51); font-size: 17px; line-height: 23px;"></td>


</tr>
<tr  class="even">



<td data-cell-id="A2" data-x="0" data-y="2" data-db-index="2" class="htMiddle color-333333 bg-f5f5f5 fsize-17" data-cell-type="text" data-original-value="Servicio de Plomería por emergencia<br><br> Eventos anuales: 1 evento<br> Puntos: 700" data-order="Servicio de Plomería por emergencia<br><br> Eventos anuales: 1 evento<br> Puntos: 700" data-colspan="1" data-rowspan="2" rowspan="2" style="color: rgb(51, 51, 51); background-color: rgb(245, 245, 245); font-size: 17px; line-height: 23px;"><?php echo mb_convert_encoding($row[1],'UTF-8'); ?><br><br>

<?php



$sqleventos="SELECT codasistencia,nombreasistencia,CASE WHEN user_points.eventossolic IS NULL   THEN catalogocoomevars.eventos WHEN user_points.eventossolic='sin limite' THEN catalogocoomevars.eventos ELSE catalogocoomevars.eventos - SUM(user_points.eventossolic) END AS eventos ,catalogocoomevars.puntos,info,tipo FROM catalogocoomevars LEFT JOIN user_points ON user_points.servicio=catalogocoomevars.nombreasistencia WHERE tipo=2 AND user_points.usuario='".$_SESSION['usuario']."' and nombreasistencia='".$row[1]."' GROUP BY catalogocoomevars.codasistencia,catalogocoomevars.nombreasistencia,user_points.eventossolic,catalogocoomevars.eventos,catalogocoomevars.puntos,catalogocoomevars.info,user_points.usuario";

$resulteventos = $conn ->query($sqleventos);


if($rowev=$resulteventos->fetch_array(MYSQLI_NUM)){
if($row[1]=$rowev[1]){

?>
  
 Eventos anuales: <?php echo utf8_encode($rowev[2]); if($rowev[2]<2 && $rowev[2]>0 ){echo ' Evento';}else{echo ' Eventos';} ?><br>


<?php

}else{
?>

 Eventos anuales: <?php echo utf8_encode($row[2]); if($row[2]<2 && $row[2]>0 ){echo ' Evento';}else{echo ' Eventos';} ?><br>

<?php

}
}else{

?>

Eventos anuales: <?php echo utf8_encode($row[2]); if($row[2]<2 && $row[2]>0 ){echo ' Evento';}else{echo ' Eventos';} ?><br>

<?php

}
?>





 Puntos: <?php echo utf8_encode($row[3]); ?></td>




<td data-cell-id="B2" data-x="1" data-y="2" data-db-index="2" class="color-87b32f bg-f5f5f5 htCenter htMiddle" data-cell-type="text" data-original-value="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/05/tablas-iconos-2-37.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;28&quot; height=&quot;114&quot;>" data-order="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/05/tablas-iconos-2-37.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;28&quot; height=&quot;114&quot;>" data-colspan="1" data-rowspan="2" rowspan="2" style="color: rgb(135, 179, 47); background-color: rgb(245, 245, 245);"><img loading="lazy" src="http://www.igroupsolution.com/wp-content/uploads/2022/05/tablas-iconos-2-37.png" onclick="modalclickinfo('<?php $reemplazo=str_replace("(","",mb_convert_encoding($row[4],'UTF-8')); $reemplazo2=str_replace(")","",$reemplazo); $reemplazo3=str_replace("\r\n","-sl-",$reemplazo2); echo $reemplazo3; ?>');" class="stbSkipLazy alignnone size-full" width="28" height="114"></td>






<?php


$sqleventosbn="SELECT codasistencia,nombreasistencia,CASE WHEN user_points.eventossolic IS NULL   THEN catalogocoomevars.eventos WHEN user_points.eventossolic='sin limite' THEN catalogocoomevars.eventos ELSE catalogocoomevars.eventos - SUM(user_points.eventossolic) END AS eventos ,catalogocoomevars.puntos,info,tipo FROM catalogocoomevars LEFT JOIN user_points ON user_points.servicio=catalogocoomevars.nombreasistencia WHERE tipo=2 AND user_points.usuario='".$_SESSION['usuario']."' and nombreasistencia='".$row[1]."' GROUP BY catalogocoomevars.codasistencia,catalogocoomevars.nombreasistencia,user_points.eventossolic,catalogocoomevars.eventos,catalogocoomevars.puntos,catalogocoomevars.info,user_points.usuario";

$resulteventosbn = $conn ->query($sqleventosbn);


if($rowevn=$resulteventosbn->fetch_array(MYSQLI_NUM)){
if($row[1]=$rowevn[1]){

?>



<td data-cell-id="C2" data-x="2" data-y="2" data-db-index="2" class="bg-f5f5f5 htCenter htMiddle" data-cell-type="text" data-original-value="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;27&quot; height=&quot;84&quot;>" data-order="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;27&quot; height=&quot;84&quot;>" data-colspan="1" data-rowspan="2" rowspan="2" style="background-color: rgb(245, 245, 245);"><img loading="lazy" src="http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png" onclick="modalclick('<?php echo utf8_encode($row[3]); ?>','<?php echo mb_convert_encoding($row[1],'UTF-8'); ?>','<?php echo utf8_encode($rowevn[2]); ?>');" class="stbSkipLazy alignnone size-full" width="27" height="84"></td>



<?php

}
else
{
?>


<td data-cell-id="C2" data-x="2" data-y="2" data-db-index="2" class="bg-f5f5f5 htCenter htMiddle" data-cell-type="text" data-original-value="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;27&quot; height=&quot;84&quot;>" data-order="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;27&quot; height=&quot;84&quot;>" data-colspan="1" data-rowspan="2" rowspan="2" style="background-color: rgb(245, 245, 245);"><img loading="lazy" src="http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png" onclick="abrirModal('<?php echo utf8_encode($row[3]); ?>','<?php echo mb_convert_encoding($row[1],'UTF-8'); ?>','<?php echo utf8_encode($row[2]); ?>');" class="stbSkipLazy alignnone size-full" width="27" height="84"></td>

<?php

}
}
else
{
?>

<td data-cell-id="C2" data-x="2" data-y="2" data-db-index="2" class="bg-f5f5f5 htCenter htMiddle" data-cell-type="text" data-original-value="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;27&quot; height=&quot;84&quot;>" data-order="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;27&quot; height=&quot;84&quot;>" data-colspan="1" data-rowspan="2" rowspan="2" style="background-color: rgb(245, 245, 245);"><img loading="lazy" src="http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png" onclick="abrirModal('<?php echo utf8_encode($row[3]); ?>','<?php echo mb_convert_encoding($row[1],'UTF-8'); ?>','<?php echo utf8_encode($row[2]); ?>');" class="stbSkipLazy alignnone size-full" width="27" height="84"></td>


<?php

}

?>




</tr>



<?php


}

?>


</tbody>







</table></div></div></div><!-- /#supsystic-table-11.supsystic-table --></div><!-- /.supsystic-tables-wrap --><!-- Tables Generator by Supsystic --><!-- Version: 1.10.14 --><!-- http://supsystic.com/ --><p></p></div>
				</div>
								</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-89557c9 elementor-widget elementor-widget-accordion" data-id="89557c9" data-element_type="widget" data-widget_type="accordion.default">
				<div class="elementor-widget-container">
					<div class="elementor-accordion" role="tablist">
							<div class="elementor-accordion-item">
					<h2 id="elementor-tab-title-1441" class="elementor-tab-title elementor-active" data-tab="1" role="tab" aria-controls="elementor-tab-content-1441" aria-expanded="true" tabindex="0" aria-selected="true">
													<span class="elementor-accordion-icon elementor-accordion-icon-right" aria-hidden="true">
															<span class="elementor-accordion-icon-closed"><img src="imagenes-verde/Coomeva-Flecha-abajo.png" class="fas fa-chevron-down"></img></span>
								<span class="elementor-accordion-icon-opened"><img src="imagenes-verde/Coomeva-Flecha-arriba.png" class="fas fa-chevron-down"></img></span>
														</span>
												<a class="elementor-accordion-title" href="">Asistencia Familiar</a>
					</h2>
					<div id="elementor-tab-content-1441" class="elementor-tab-content elementor-clearfix elementor-active" data-tab="1" role="tabpanel" aria-labelledby="elementor-tab-title-1441" style="display: block;"><p></p><div class="supsystic-table-loader spinner" style="background-color: rgb(0, 0, 0); display: none;"></div><div id="supsystic-table-11_68275" class="supsystic-tables-wrap " style="width: 100%; visibility: visible;" data-table-width-fixed="100%" data-table-width-mobile="100%"><div id="supsystic-table-11_wrapper" class="dataTables_wrapper no-footer"><div id="supsystic-table-11_processing" class="dataTables_processing" style="display: none;">Processing...</div><div class="dataTables_scroll"><div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px; width: 100%;"><div class="dataTables_scrollHeadInner" style="box-sizing: content-box; width: 488px; padding-right: 17px;"><table class="supsystic-table paragraphMode border lightboxImg no-border dataTable no-footer" data-id="11" data-view-id="11_68275" data-title="Pide tu asistencia (móvil)" data-currency-format="$1,000.00" data-percent-format="10.00%" data-date-format="DD.MM.YYYY" data-time-format="HH:mm" data-features="[&quot;after_table_loaded_script&quot;]" data-search-value="" data-lightbox-img="" data-head-rows-count="1" data-pagination-length="50,100,All" data-auto-index="off" data-searching-settings="{&quot;columnSearchPosition&quot;:&quot;bottom&quot;,&quot;minChars&quot;:&quot;0&quot;}" data-lang="default" data-override="{&quot;emptyTable&quot;:&quot;&quot;,&quot;info&quot;:&quot;&quot;,&quot;infoEmpty&quot;:&quot;&quot;,&quot;infoFiltered&quot;:&quot;&quot;,&quot;lengthMenu&quot;:&quot;&quot;,&quot;search&quot;:&quot;&quot;,&quot;zeroRecords&quot;:&quot;&quot;,&quot;exportLabel&quot;:&quot;&quot;,&quot;file&quot;:&quot;default&quot;}" data-merged="[{&quot;row&quot;:1,&quot;col&quot;:0,&quot;rowspan&quot;:2,&quot;colspan&quot;:1,&quot;removed&quot;:false},{&quot;row&quot;:1,&quot;col&quot;:1,&quot;rowspan&quot;:2,&quot;colspan&quot;:1,&quot;removed&quot;:false},{&quot;row&quot;:1,&quot;col&quot;:2,&quot;rowspan&quot;:2,&quot;colspan&quot;:1,&quot;removed&quot;:false}]" data-responsive-mode="2" data-from-history="0" role="grid" style="margin-left: 0px; width: 488px;"><thead><tr role="row"><th class="sorting_disabled" style="width: 306.062px; padding: 0px !important;" rowspan="1" colspan="1" data-original-value="" data-order=""></th><th class="sorting_disabled" style="width: 83.375px; padding: 0px !important;" rowspan="1" colspan="1" data-original-value="" data-order=""></th><th class="sorting_disabled" style="width: 98.5625px; padding: 0px !important;" rowspan="1" colspan="1" data-original-value="" data-order=""></th></tr></thead></table></div></div><div class="dataTables_scrollBody" style="position: relative; overflow: auto; width: 100%; "><table id="supsystic-table-11" class="supsystic-table paragraphMode border lightboxImg no-border dataTable no-footer" data-id="11" data-view-id="11_68275" data-title="Pide tu asistencia (móvil)" data-currency-format="$1,000.00" data-percent-format="10.00%" data-date-format="DD.MM.YYYY" data-time-format="HH:mm" data-features="[&quot;after_table_loaded_script&quot;]" data-search-value="" data-lightbox-img="" data-head-rows-count="1" data-pagination-length="50,100,All" data-auto-index="off" data-searching-settings="{&quot;columnSearchPosition&quot;:&quot;bottom&quot;,&quot;minChars&quot;:&quot;0&quot;}" data-lang="default" data-override="{&quot;emptyTable&quot;:&quot;&quot;,&quot;info&quot;:&quot;&quot;,&quot;infoEmpty&quot;:&quot;&quot;,&quot;infoFiltered&quot;:&quot;&quot;,&quot;lengthMenu&quot;:&quot;&quot;,&quot;search&quot;:&quot;&quot;,&quot;zeroRecords&quot;:&quot;&quot;,&quot;exportLabel&quot;:&quot;&quot;,&quot;file&quot;:&quot;default&quot;}" data-merged="[{&quot;row&quot;:1,&quot;col&quot;:0,&quot;rowspan&quot;:2,&quot;colspan&quot;:1,&quot;removed&quot;:false},{&quot;row&quot;:1,&quot;col&quot;:1,&quot;rowspan&quot;:2,&quot;colspan&quot;:1,&quot;removed&quot;:false},{&quot;row&quot;:1,&quot;col&quot;:2,&quot;rowspan&quot;:2,&quot;colspan&quot;:1,&quot;removed&quot;:false}]" data-responsive-mode="2" data-from-history="0" role="grid"><thead><tr role="row" style="height: 0px;"><th class="" style="padding-top: 0px; padding-right: 0px !important; padding-bottom: 0px; padding-left: 0px !important; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 306.062px;" rowspan="1" colspan="1" data-original-value="<div class=&quot;dataTables_sizing&quot; style=&quot;height: 0px; overflow: hidden;&quot;></div>" data-order="<div class=&quot;dataTables_sizing&quot; style=&quot;height: 0px; overflow: hidden;&quot;></div>"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"></div></th><th class="" style="padding-top: 0px; padding-right: 0px !important; padding-bottom: 0px; padding-left: 0px !important; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 83.375px;" rowspan="1" colspan="1" data-original-value="<div class=&quot;dataTables_sizing&quot; style=&quot;height: 0px; overflow: hidden;&quot;></div>" data-order="<div class=&quot;dataTables_sizing&quot; style=&quot;height: 0px; overflow: hidden;&quot;></div>"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"></div></th><th class="" style="padding-top: 0px; padding-right: 0px !important; padding-bottom: 0px; padding-left: 0px !important; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 98.5625px;" rowspan="1" colspan="1" data-original-value="<div class=&quot;dataTables_sizing&quot; style=&quot;height: 0px; overflow: hidden;&quot;></div>" data-order="<div class=&quot;dataTables_sizing&quot; style=&quot;height: 0px; overflow: hidden;&quot;></div>"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"></div></th></tr></thead><tbody>





<?php

//Asis adulto mayor


$sql = "SELECT codasistencia,nombreasistencia,CASE WHEN user_points.eventossolic IS NULL   THEN catalogocoomevars.eventos WHEN user_points.eventossolic='sin limite' THEN catalogocoomevars.eventos ELSE catalogocoomevars.eventos  END AS eventos ,catalogocoomevars.puntos,info,tipo FROM catalogocoomevars LEFT JOIN user_points ON user_points.servicio=catalogocoomevars.nombreasistencia WHERE tipo=3 GROUP BY catalogocoomevars.codasistencia,catalogocoomevars.nombreasistencia,user_points.eventossolic,catalogocoomevars.eventos,catalogocoomevars.puntos,catalogocoomevars.info";
$result = $conn ->query($sql);





while($row=$result->fetch_array(MYSQLI_NUM)){

?>


<tr class="odd"><td style=" width: 2%;" data-cell-id="A1" data-x="0" data-y="1" data-db-index="1" class="underline htMiddle htCenter color-333333 fsize-17" data-cell-type="text" data-original-value="Asistencias" data-order="Asistencias" style="min-width: 75%; width: 328.297px; color: rgb(51, 51, 51); font-size: 17px; line-height: 23px;"></td>


</tr>
<tr  class="even">



<td data-cell-id="A2" data-x="0" data-y="2" data-db-index="2" class="htMiddle color-333333 bg-f5f5f5 fsize-17" data-cell-type="text" data-original-value="Servicio de Plomería por emergencia<br><br> Eventos anuales: 1 evento<br> Puntos: 700" data-order="Servicio de Plomería por emergencia<br><br> Eventos anuales: 1 evento<br> Puntos: 700" data-colspan="1" data-rowspan="2" rowspan="2" style="color: rgb(51, 51, 51); background-color: rgb(245, 245, 245); font-size: 17px; line-height: 23px;"><?php echo mb_convert_encoding($row[1],'UTF-8'); ?><br><br>

<?php



$sqleventos="SELECT codasistencia,nombreasistencia,CASE WHEN user_points.eventossolic IS NULL   THEN catalogocoomevars.eventos WHEN user_points.eventossolic='sin limite' THEN catalogocoomevars.eventos ELSE catalogocoomevars.eventos - SUM(user_points.eventossolic) END AS eventos ,catalogocoomevars.puntos,info,tipo FROM catalogocoomevars LEFT JOIN user_points ON user_points.servicio=catalogocoomevars.nombreasistencia WHERE tipo=3 AND user_points.usuario='".$_SESSION['usuario']."' and nombreasistencia='".$row[1]."' GROUP BY catalogocoomevars.codasistencia,catalogocoomevars.nombreasistencia,user_points.eventossolic,catalogocoomevars.eventos,catalogocoomevars.puntos,catalogocoomevars.info,user_points.usuario";

$resulteventos = $conn ->query($sqleventos);


if($rowev=$resulteventos->fetch_array(MYSQLI_NUM)){
if($row[1]=$rowev[1]){

?>
  
 Eventos anuales: <?php echo utf8_encode($rowev[2]); if($rowev[2]<2 && $rowev[2]>0 ){echo ' Evento';}else{echo ' Eventos';} ?><br>


<?php

}else{
?>

 Eventos anuales: <?php echo utf8_encode($row[2]); if($row[2]<2 && $row[2]>0 ){echo ' Evento';}else{echo ' Eventos';} ?><br>

<?php

}
}else{

?>

Eventos anuales: <?php echo utf8_encode($row[2]); if($row[2]<2 && $row[2]>0 ){echo ' Evento';}else{echo ' Eventos';} ?><br>

<?php

}
?>





 Puntos: <?php echo utf8_encode($row[3]); ?></td>




<td data-cell-id="B2" data-x="1" data-y="2" data-db-index="2" class="color-87b32f bg-f5f5f5 htCenter htMiddle" data-cell-type="text" data-original-value="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/05/tablas-iconos-2-37.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;28&quot; height=&quot;114&quot;>" data-order="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/05/tablas-iconos-2-37.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;28&quot; height=&quot;114&quot;>" data-colspan="1" data-rowspan="2" rowspan="2" style="color: rgb(135, 179, 47); background-color: rgb(245, 245, 245);"><img loading="lazy" src="http://www.igroupsolution.com/wp-content/uploads/2022/05/tablas-iconos-2-37.png" onclick="modalclickinfo('<?php $reemplazo=str_replace("(","",mb_convert_encoding($row[4],'UTF-8')); $reemplazo2=str_replace(")","",$reemplazo); $reemplazo3=str_replace("\r\n","-sl-",$reemplazo2); echo $reemplazo3; ?>');" class="stbSkipLazy alignnone size-full" width="28" height="114"></td>






<?php


$sqleventosbn="SELECT codasistencia,nombreasistencia,CASE WHEN user_points.eventossolic IS NULL   THEN catalogocoomevars.eventos WHEN user_points.eventossolic='sin limite' THEN catalogocoomevars.eventos ELSE catalogocoomevars.eventos - SUM(user_points.eventossolic) END AS eventos ,catalogocoomevars.puntos,info,tipo FROM catalogocoomevars LEFT JOIN user_points ON user_points.servicio=catalogocoomevars.nombreasistencia WHERE tipo=3 AND user_points.usuario='".$_SESSION['usuario']."' and nombreasistencia='".$row[1]."' GROUP BY catalogocoomevars.codasistencia,catalogocoomevars.nombreasistencia,user_points.eventossolic,catalogocoomevars.eventos,catalogocoomevars.puntos,catalogocoomevars.info,user_points.usuario";

$resulteventosbn = $conn ->query($sqleventosbn);


if($rowevn=$resulteventosbn->fetch_array(MYSQLI_NUM)){
if($row[1]=$rowevn[1]){

?>



<td data-cell-id="C2" data-x="2" data-y="2" data-db-index="2" class="bg-f5f5f5 htCenter htMiddle" data-cell-type="text" data-original-value="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;27&quot; height=&quot;84&quot;>" data-order="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;27&quot; height=&quot;84&quot;>" data-colspan="1" data-rowspan="2" rowspan="2" style="background-color: rgb(245, 245, 245);"><img loading="lazy" src="http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png" onclick="modalclick('<?php echo utf8_encode($row[3]); ?>','<?php echo mb_convert_encoding($row[1],'UTF-8'); ?>','<?php echo utf8_encode($rowevn[2]); ?>');" class="stbSkipLazy alignnone size-full" width="27" height="84"></td>



<?php

}
else
{
?>


<td data-cell-id="C2" data-x="2" data-y="2" data-db-index="2" class="bg-f5f5f5 htCenter htMiddle" data-cell-type="text" data-original-value="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;27&quot; height=&quot;84&quot;>" data-order="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;27&quot; height=&quot;84&quot;>" data-colspan="1" data-rowspan="2" rowspan="2" style="background-color: rgb(245, 245, 245);"><img loading="lazy" src="http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png" onclick="abrirModal('<?php echo utf8_encode($row[3]); ?>','<?php echo mb_convert_encoding($row[1],'UTF-8'); ?>','<?php echo utf8_encode($row[2]); ?>');" class="stbSkipLazy alignnone size-full" width="27" height="84"></td>

<?php

}
}
else
{
?>

<td data-cell-id="C2" data-x="2" data-y="2" data-db-index="2" class="bg-f5f5f5 htCenter htMiddle" data-cell-type="text" data-original-value="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;27&quot; height=&quot;84&quot;>" data-order="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;27&quot; height=&quot;84&quot;>" data-colspan="1" data-rowspan="2" rowspan="2" style="background-color: rgb(245, 245, 245);"><img loading="lazy" src="http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png" onclick="abrirModal('<?php echo utf8_encode($row[3]); ?>','<?php echo mb_convert_encoding($row[1],'UTF-8'); ?>','<?php echo utf8_encode($row[2]); ?>');" class="stbSkipLazy alignnone size-full" width="27" height="84"></td>


<?php

}

?>




</tr>



<?php


}

?>



</tbody></table></div></div></div><!-- /#supsystic-table-11.supsystic-table --></div><!-- /.supsystic-tables-wrap --><!-- Tables Generator by Supsystic --><!-- Version: 1.10.14 --><!-- http://supsystic.com/ --><p></p></div>
				</div>
								</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-3b84ff0 elementor-widget elementor-widget-accordion" data-id="3b84ff0" data-element_type="widget" data-widget_type="accordion.default">
				<div class="elementor-widget-container">
					<div class="elementor-accordion" role="tablist">
							<div class="elementor-accordion-item">
					<h2 id="elementor-tab-title-6241" class="elementor-tab-title elementor-active" data-tab="1" role="tab" aria-controls="elementor-tab-content-6241" aria-expanded="true" tabindex="0" aria-selected="true">
													<span class="elementor-accordion-icon elementor-accordion-icon-right" aria-hidden="true">
															<span class="elementor-accordion-icon-closed"><img src="imagenes-verde/Coomeva-Flecha-abajo.png" class="fas fa-chevron-down"></img></span>
								<span class="elementor-accordion-icon-opened"><img src="imagenes-verde/Coomeva-Flecha-arriba.png" class="fas fa-chevron-down"></img></span>
														</span>
												<a class="elementor-accordion-title" href="">Asistencia Movilidad</a>
					</h2>
					<div id="elementor-tab-content-6241" class="elementor-tab-content elementor-clearfix elementor-active" data-tab="1" role="tabpanel" aria-labelledby="elementor-tab-title-6241" style="display: block;"><p></p><div class="supsystic-table-loader spinner" style="background-color: rgb(0, 0, 0); display: none;"></div><div id="supsystic-table-11_68275" class="supsystic-tables-wrap " style="width: 100%; visibility: visible;" data-table-width-fixed="100%" data-table-width-mobile="100%"><div id="supsystic-table-11_wrapper" class="dataTables_wrapper no-footer"><div id="supsystic-table-11_processing" class="dataTables_processing" style="display: none;">Processing...</div><div class="dataTables_scroll"><div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px; width: 100%;"><div class="dataTables_scrollHeadInner" style="box-sizing: content-box; width: 488px; padding-right: 17px;"><table class="supsystic-table paragraphMode border lightboxImg no-border dataTable no-footer" data-id="11" data-view-id="11_68275" data-title="Pide tu asistencia (móvil)" data-currency-format="$1,000.00" data-percent-format="10.00%" data-date-format="DD.MM.YYYY" data-time-format="HH:mm" data-features="[&quot;after_table_loaded_script&quot;]" data-search-value="" data-lightbox-img="" data-head-rows-count="1" data-pagination-length="50,100,All" data-auto-index="off" data-searching-settings="{&quot;columnSearchPosition&quot;:&quot;bottom&quot;,&quot;minChars&quot;:&quot;0&quot;}" data-lang="default" data-override="{&quot;emptyTable&quot;:&quot;&quot;,&quot;info&quot;:&quot;&quot;,&quot;infoEmpty&quot;:&quot;&quot;,&quot;infoFiltered&quot;:&quot;&quot;,&quot;lengthMenu&quot;:&quot;&quot;,&quot;search&quot;:&quot;&quot;,&quot;zeroRecords&quot;:&quot;&quot;,&quot;exportLabel&quot;:&quot;&quot;,&quot;file&quot;:&quot;default&quot;}" data-merged="[{&quot;row&quot;:1,&quot;col&quot;:0,&quot;rowspan&quot;:2,&quot;colspan&quot;:1,&quot;removed&quot;:false},{&quot;row&quot;:1,&quot;col&quot;:1,&quot;rowspan&quot;:2,&quot;colspan&quot;:1,&quot;removed&quot;:false},{&quot;row&quot;:1,&quot;col&quot;:2,&quot;rowspan&quot;:2,&quot;colspan&quot;:1,&quot;removed&quot;:false}]" data-responsive-mode="2" data-from-history="0" role="grid" style="margin-left: 0px; width: 488px;"><thead><tr role="row"><th class="sorting_disabled" style="width: 306.062px; padding: 0px !important;" rowspan="1" colspan="1" data-original-value="" data-order=""></th><th class="sorting_disabled" style="width: 83.375px; padding: 0px !important;" rowspan="1" colspan="1" data-original-value="" data-order=""></th><th class="sorting_disabled" style="width: 98.5625px; padding: 0px !important;" rowspan="1" colspan="1" data-original-value="" data-order=""></th></tr></thead></table></div></div><div class="dataTables_scrollBody" style="position: relative; overflow: auto; width: 100%; "><table id="supsystic-table-11" class="supsystic-table paragraphMode border lightboxImg no-border dataTable no-footer" data-id="11" data-view-id="11_68275" data-title="Pide tu asistencia (móvil)" data-currency-format="$1,000.00" data-percent-format="10.00%" data-date-format="DD.MM.YYYY" data-time-format="HH:mm" data-features="[&quot;after_table_loaded_script&quot;]" data-search-value="" data-lightbox-img="" data-head-rows-count="1" data-pagination-length="50,100,All" data-auto-index="off" data-searching-settings="{&quot;columnSearchPosition&quot;:&quot;bottom&quot;,&quot;minChars&quot;:&quot;0&quot;}" data-lang="default" data-override="{&quot;emptyTable&quot;:&quot;&quot;,&quot;info&quot;:&quot;&quot;,&quot;infoEmpty&quot;:&quot;&quot;,&quot;infoFiltered&quot;:&quot;&quot;,&quot;lengthMenu&quot;:&quot;&quot;,&quot;search&quot;:&quot;&quot;,&quot;zeroRecords&quot;:&quot;&quot;,&quot;exportLabel&quot;:&quot;&quot;,&quot;file&quot;:&quot;default&quot;}" data-merged="[{&quot;row&quot;:1,&quot;col&quot;:0,&quot;rowspan&quot;:2,&quot;colspan&quot;:1,&quot;removed&quot;:false},{&quot;row&quot;:1,&quot;col&quot;:1,&quot;rowspan&quot;:2,&quot;colspan&quot;:1,&quot;removed&quot;:false},{&quot;row&quot;:1,&quot;col&quot;:2,&quot;rowspan&quot;:2,&quot;colspan&quot;:1,&quot;removed&quot;:false}]" data-responsive-mode="2" data-from-history="0" role="grid"><thead><tr role="row" style="height: 0px;"><th class="" style="padding-top: 0px; padding-right: 0px !important; padding-bottom: 0px; padding-left: 0px !important; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 306.062px;" rowspan="1" colspan="1" data-original-value="<div class=&quot;dataTables_sizing&quot; style=&quot;height: 0px; overflow: hidden;&quot;></div>" data-order="<div class=&quot;dataTables_sizing&quot; style=&quot;height: 0px; overflow: hidden;&quot;></div>"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"></div></th><th class="" style="padding-top: 0px; padding-right: 0px !important; padding-bottom: 0px; padding-left: 0px !important; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 83.375px;" rowspan="1" colspan="1" data-original-value="<div class=&quot;dataTables_sizing&quot; style=&quot;height: 0px; overflow: hidden;&quot;></div>" data-order="<div class=&quot;dataTables_sizing&quot; style=&quot;height: 0px; overflow: hidden;&quot;></div>"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"></div></th><th class="" style="padding-top: 0px; padding-right: 0px !important; padding-bottom: 0px; padding-left: 0px !important; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 98.5625px;" rowspan="1" colspan="1" data-original-value="<div class=&quot;dataTables_sizing&quot; style=&quot;height: 0px; overflow: hidden;&quot;></div>" data-order="<div class=&quot;dataTables_sizing&quot; style=&quot;height: 0px; overflow: hidden;&quot;></div>"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"></div></th></tr></thead><tbody>





<?php

//Asis adulto mayor


$sql = "SELECT codasistencia,nombreasistencia,CASE WHEN user_points.eventossolic IS NULL   THEN catalogocoomevars.eventos WHEN user_points.eventossolic='sin limite' THEN catalogocoomevars.eventos ELSE catalogocoomevars.eventos  END AS eventos ,catalogocoomevars.puntos,info,tipo FROM catalogocoomevars LEFT JOIN user_points ON user_points.servicio=catalogocoomevars.nombreasistencia WHERE tipo=4 GROUP BY catalogocoomevars.codasistencia,catalogocoomevars.nombreasistencia,user_points.eventossolic,catalogocoomevars.eventos,catalogocoomevars.puntos,catalogocoomevars.info";
$result = $conn ->query($sql);



$anio="";

while($row=$result->fetch_array(MYSQLI_NUM)){


if($row[1]=="Traslado hacia el aeropuerto." || $row[1]=="Traslado desde el aeropuerto." ){

$anio=" por año";

}

?>


<tr class="odd"><td style=" width: 2%;" data-cell-id="A1" data-x="0" data-y="1" data-db-index="1" class="underline htMiddle htCenter color-333333 fsize-17" data-cell-type="text" data-original-value="Asistencias" data-order="Asistencias" style="min-width: 75%; width: 328.297px; color: rgb(51, 51, 51); font-size: 17px; line-height: 23px;"></td>


</tr>
<tr  class="even">



<td data-cell-id="A2" data-x="0" data-y="2" data-db-index="2" class="htMiddle color-333333 bg-f5f5f5 fsize-17" data-cell-type="text" data-original-value="Servicio de Plomería por emergencia<br><br> Eventos anuales: 1 evento<br> Puntos: 700" data-order="Servicio de Plomería por emergencia<br><br> Eventos anuales: 1 evento<br> Puntos: 700" data-colspan="1" data-rowspan="2" rowspan="2" style="color: rgb(51, 51, 51); background-color: rgb(245, 245, 245); font-size: 17px; line-height: 23px;"><?php echo mb_convert_encoding($row[1],'UTF-8'); ?><br><br>

<?php



$sqleventos="SELECT codasistencia,nombreasistencia,CASE WHEN user_points.eventossolic IS NULL   THEN catalogocoomevars.eventos WHEN user_points.eventossolic='sin limite' THEN catalogocoomevars.eventos ELSE catalogocoomevars.eventos - SUM(user_points.eventossolic) END AS eventos ,catalogocoomevars.puntos,info,tipo FROM catalogocoomevars LEFT JOIN user_points ON user_points.servicio=catalogocoomevars.nombreasistencia WHERE tipo=4 AND user_points.usuario='".$_SESSION['usuario']."' and nombreasistencia='".$row[1]."' GROUP BY catalogocoomevars.codasistencia,catalogocoomevars.nombreasistencia,user_points.eventossolic,catalogocoomevars.eventos,catalogocoomevars.puntos,catalogocoomevars.info,user_points.usuario";

$resulteventos = $conn ->query($sqleventos);


if($rowev=$resulteventos->fetch_array(MYSQLI_NUM)){
if($row[1]=$rowev[1]){

?>
  
 Eventos anuales: <?php echo utf8_encode($rowev[2]); if($rowev[2]<2 && $rowev[2]>0 ){echo ' Evento'.$anio;}else{echo ' Eventos'.$anio;} ?><br>


<?php

}else{
?>

 Eventos anuales: <?php echo utf8_encode($row[2]); if($row[2]<2 && $row[2]>0 ){echo ' Evento'.$anio;}else{echo ' Eventos'.$anio;} ?><br>

<?php

}
}else{

?>

Eventos anuales: <?php echo utf8_encode($row[2]); if($row[2]<2 && $row[2]>0 ){echo ' Evento'.$anio;}else{echo ' Eventos'.$anio;} ?><br>

<?php
$anio="";
}
?>





 Puntos: <?php echo utf8_encode($row[3]); ?></td>




<td data-cell-id="B2" data-x="1" data-y="2" data-db-index="2" class="color-87b32f bg-f5f5f5 htCenter htMiddle" data-cell-type="text" data-original-value="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/05/tablas-iconos-2-37.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;28&quot; height=&quot;114&quot;>" data-order="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/05/tablas-iconos-2-37.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;28&quot; height=&quot;114&quot;>" data-colspan="1" data-rowspan="2" rowspan="2" style="color: rgb(135, 179, 47); background-color: rgb(245, 245, 245);"><img loading="lazy" src="http://www.igroupsolution.com/wp-content/uploads/2022/05/tablas-iconos-2-37.png" onclick="modalclickinfo('<?php $reemplazo=str_replace("(","",mb_convert_encoding($row[4],'UTF-8')); $reemplazo2=str_replace(")","",$reemplazo); $reemplazo3=str_replace("\r\n","-sl-",$reemplazo2); echo $reemplazo3; ?>');" class="stbSkipLazy alignnone size-full" width="28" height="114"></td>






<?php


$sqleventosbn="SELECT codasistencia,nombreasistencia,CASE WHEN user_points.eventossolic IS NULL   THEN catalogocoomevars.eventos WHEN user_points.eventossolic='sin limite' THEN catalogocoomevars.eventos ELSE catalogocoomevars.eventos - SUM(user_points.eventossolic) END AS eventos ,catalogocoomevars.puntos,info,tipo FROM catalogocoomevars LEFT JOIN user_points ON user_points.servicio=catalogocoomevars.nombreasistencia WHERE tipo=4 AND user_points.usuario='".$_SESSION['usuario']."' and nombreasistencia='".$row[1]."' GROUP BY catalogocoomevars.codasistencia,catalogocoomevars.nombreasistencia,user_points.eventossolic,catalogocoomevars.eventos,catalogocoomevars.puntos,catalogocoomevars.info,user_points.usuario";

$resulteventosbn = $conn ->query($sqleventosbn);


if($rowevn=$resulteventosbn->fetch_array(MYSQLI_NUM)){
if($row[1]=$rowevn[1]){

?>



<td data-cell-id="C2" data-x="2" data-y="2" data-db-index="2" class="bg-f5f5f5 htCenter htMiddle" data-cell-type="text" data-original-value="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;27&quot; height=&quot;84&quot;>" data-order="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;27&quot; height=&quot;84&quot;>" data-colspan="1" data-rowspan="2" rowspan="2" style="background-color: rgb(245, 245, 245);"><img loading="lazy" src="http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png" onclick="modalclick('<?php echo utf8_encode($row[3]); ?>','<?php echo mb_convert_encoding($row[1],'UTF-8'); ?>','<?php echo utf8_encode($rowevn[2]); ?>');" class="stbSkipLazy alignnone size-full" width="27" height="84"></td>



<?php

}
else
{
?>


<td data-cell-id="C2" data-x="2" data-y="2" data-db-index="2" class="bg-f5f5f5 htCenter htMiddle" data-cell-type="text" data-original-value="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;27&quot; height=&quot;84&quot;>" data-order="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;27&quot; height=&quot;84&quot;>" data-colspan="1" data-rowspan="2" rowspan="2" style="background-color: rgb(245, 245, 245);"><img loading="lazy" src="http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png" onclick="abrirModal('<?php echo utf8_encode($row[3]); ?>','<?php echo mb_convert_encoding($row[1],'UTF-8'); ?>','<?php echo utf8_encode($row[2]); ?>');" class="stbSkipLazy alignnone size-full" width="27" height="84"></td>

<?php

}
}
else
{
?>

<td data-cell-id="C2" data-x="2" data-y="2" data-db-index="2" class="bg-f5f5f5 htCenter htMiddle" data-cell-type="text" data-original-value="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;27&quot; height=&quot;84&quot;>" data-order="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;27&quot; height=&quot;84&quot;>" data-colspan="1" data-rowspan="2" rowspan="2" style="background-color: rgb(245, 245, 245);"><img loading="lazy" src="http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png" onclick="abrirModal('<?php echo utf8_encode($row[3]); ?>','<?php echo mb_convert_encoding($row[1],'UTF-8'); ?>','<?php echo utf8_encode($row[2]); ?>');" class="stbSkipLazy alignnone size-full" width="27" height="84"></td>


<?php

}

?>




</tr>



<?php


}

?>



</tbody></table></div></div></div><!-- /#supsystic-table-11.supsystic-table --></div><!-- /.supsystic-tables-wrap --><!-- Tables Generator by Supsystic --><!-- Version: 1.10.14 --><!-- http://supsystic.com/ --><p></p></div>
				</div>
								</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-815f824 elementor-widget elementor-widget-accordion" data-id="815f824" data-element_type="widget" data-widget_type="accordion.default">
				<div class="elementor-widget-container">
					<div class="elementor-accordion" role="tablist">
							<div class="elementor-accordion-item">
					<h2 id="elementor-tab-title-1351" class="elementor-tab-title elementor-active" data-tab="1" role="tab" aria-controls="elementor-tab-content-1351" aria-expanded="true" tabindex="0" aria-selected="true">
													<span class="elementor-accordion-icon elementor-accordion-icon-right" aria-hidden="true">
															<span class="elementor-accordion-icon-closed"><img src="imagenes-verde/Coomeva-Flecha-abajo.png" class="fas fa-chevron-down"></img></span>
								<span class="elementor-accordion-icon-opened"><img src="imagenes-verde/Coomeva-Flecha-arriba.png" class="fas fa-chevron-down"></img></span>
														</span>
												<a class="elementor-accordion-title" href="">Asistencia Mascotas</a>
					</h2>
					<div id="elementor-tab-content-1351" class="elementor-tab-content elementor-clearfix elementor-active" data-tab="1" role="tabpanel" aria-labelledby="elementor-tab-title-1351" style="display: block;"><p></p><div class="supsystic-table-loader spinner" style="background-color: rgb(0, 0, 0); display: none;"></div><div id="supsystic-table-11_68275" class="supsystic-tables-wrap " style="width: 100%; visibility: visible;" data-table-width-fixed="100%" data-table-width-mobile="100%"><div id="supsystic-table-11_wrapper" class="dataTables_wrapper no-footer"><div id="supsystic-table-11_processing" class="dataTables_processing" style="display: none;">Processing...</div><div class="dataTables_scroll"><div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px; width: 100%;"><div class="dataTables_scrollHeadInner" style="box-sizing: content-box; width: 488px; padding-right: 17px;"><table class="supsystic-table paragraphMode border lightboxImg no-border dataTable no-footer" data-id="11" data-view-id="11_68275" data-title="Pide tu asistencia (móvil)" data-currency-format="$1,000.00" data-percent-format="10.00%" data-date-format="DD.MM.YYYY" data-time-format="HH:mm" data-features="[&quot;after_table_loaded_script&quot;]" data-search-value="" data-lightbox-img="" data-head-rows-count="1" data-pagination-length="50,100,All" data-auto-index="off" data-searching-settings="{&quot;columnSearchPosition&quot;:&quot;bottom&quot;,&quot;minChars&quot;:&quot;0&quot;}" data-lang="default" data-override="{&quot;emptyTable&quot;:&quot;&quot;,&quot;info&quot;:&quot;&quot;,&quot;infoEmpty&quot;:&quot;&quot;,&quot;infoFiltered&quot;:&quot;&quot;,&quot;lengthMenu&quot;:&quot;&quot;,&quot;search&quot;:&quot;&quot;,&quot;zeroRecords&quot;:&quot;&quot;,&quot;exportLabel&quot;:&quot;&quot;,&quot;file&quot;:&quot;default&quot;}" data-merged="[{&quot;row&quot;:1,&quot;col&quot;:0,&quot;rowspan&quot;:2,&quot;colspan&quot;:1,&quot;removed&quot;:false},{&quot;row&quot;:1,&quot;col&quot;:1,&quot;rowspan&quot;:2,&quot;colspan&quot;:1,&quot;removed&quot;:false},{&quot;row&quot;:1,&quot;col&quot;:2,&quot;rowspan&quot;:2,&quot;colspan&quot;:1,&quot;removed&quot;:false}]" data-responsive-mode="2" data-from-history="0" role="grid" style="margin-left: 0px; width: 488px;"><thead><tr role="row"><th class="sorting_disabled" style="width: 306.062px; padding: 0px !important;" rowspan="1" colspan="1" data-original-value="" data-order=""></th><th class="sorting_disabled" style="width: 83.375px; padding: 0px !important;" rowspan="1" colspan="1" data-original-value="" data-order=""></th><th class="sorting_disabled" style="width: 98.5625px; padding: 0px !important;" rowspan="1" colspan="1" data-original-value="" data-order=""></th></tr></thead></table></div></div><div class="dataTables_scrollBody" style="position: relative; overflow: auto; width: 100%; "><table id="supsystic-table-11" class="supsystic-table paragraphMode border lightboxImg no-border dataTable no-footer" data-id="11" data-view-id="11_68275" data-title="Pide tu asistencia (móvil)" data-currency-format="$1,000.00" data-percent-format="10.00%" data-date-format="DD.MM.YYYY" data-time-format="HH:mm" data-features="[&quot;after_table_loaded_script&quot;]" data-search-value="" data-lightbox-img="" data-head-rows-count="1" data-pagination-length="50,100,All" data-auto-index="off" data-searching-settings="{&quot;columnSearchPosition&quot;:&quot;bottom&quot;,&quot;minChars&quot;:&quot;0&quot;}" data-lang="default" data-override="{&quot;emptyTable&quot;:&quot;&quot;,&quot;info&quot;:&quot;&quot;,&quot;infoEmpty&quot;:&quot;&quot;,&quot;infoFiltered&quot;:&quot;&quot;,&quot;lengthMenu&quot;:&quot;&quot;,&quot;search&quot;:&quot;&quot;,&quot;zeroRecords&quot;:&quot;&quot;,&quot;exportLabel&quot;:&quot;&quot;,&quot;file&quot;:&quot;default&quot;}" data-merged="[{&quot;row&quot;:1,&quot;col&quot;:0,&quot;rowspan&quot;:2,&quot;colspan&quot;:1,&quot;removed&quot;:false},{&quot;row&quot;:1,&quot;col&quot;:1,&quot;rowspan&quot;:2,&quot;colspan&quot;:1,&quot;removed&quot;:false},{&quot;row&quot;:1,&quot;col&quot;:2,&quot;rowspan&quot;:2,&quot;colspan&quot;:1,&quot;removed&quot;:false}]" data-responsive-mode="2" data-from-history="0" role="grid"><thead><tr role="row" style="height: 0px;"><th class="" style="padding-top: 0px; padding-right: 0px !important; padding-bottom: 0px; padding-left: 0px !important; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 306.062px;" rowspan="1" colspan="1" data-original-value="<div class=&quot;dataTables_sizing&quot; style=&quot;height: 0px; overflow: hidden;&quot;></div>" data-order="<div class=&quot;dataTables_sizing&quot; style=&quot;height: 0px; overflow: hidden;&quot;></div>"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"></div></th><th class="" style="padding-top: 0px; padding-right: 0px !important; padding-bottom: 0px; padding-left: 0px !important; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 83.375px;" rowspan="1" colspan="1" data-original-value="<div class=&quot;dataTables_sizing&quot; style=&quot;height: 0px; overflow: hidden;&quot;></div>" data-order="<div class=&quot;dataTables_sizing&quot; style=&quot;height: 0px; overflow: hidden;&quot;></div>"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"></div></th><th class="" style="padding-top: 0px; padding-right: 0px !important; padding-bottom: 0px; padding-left: 0px !important; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 98.5625px;" rowspan="1" colspan="1" data-original-value="<div class=&quot;dataTables_sizing&quot; style=&quot;height: 0px; overflow: hidden;&quot;></div>" data-order="<div class=&quot;dataTables_sizing&quot; style=&quot;height: 0px; overflow: hidden;&quot;></div>"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"></div></th></tr></thead><tbody>




<?php

//Asis adulto mayor


$sql = "SELECT codasistencia,nombreasistencia,CASE WHEN user_points.eventossolic IS NULL   THEN catalogocoomevars.eventos WHEN user_points.eventossolic='sin limite' THEN catalogocoomevars.eventos ELSE catalogocoomevars.eventos  END AS eventos ,catalogocoomevars.puntos,info,tipo FROM catalogocoomevars LEFT JOIN user_points ON user_points.servicio=catalogocoomevars.nombreasistencia WHERE tipo=5 GROUP BY catalogocoomevars.codasistencia,catalogocoomevars.nombreasistencia,user_points.eventossolic,catalogocoomevars.eventos,catalogocoomevars.puntos,catalogocoomevars.info";
$result = $conn ->query($sql);





while($row=$result->fetch_array(MYSQLI_NUM)){

?>


<tr class="odd"><td style=" width: 2%;" data-cell-id="A1" data-x="0" data-y="1" data-db-index="1" class="underline htMiddle htCenter color-333333 fsize-17" data-cell-type="text" data-original-value="Asistencias" data-order="Asistencias" style="min-width: 75%; width: 328.297px; color: rgb(51, 51, 51); font-size: 17px; line-height: 23px;"></td>


</tr>
<tr  class="even">



<td data-cell-id="A2" data-x="0" data-y="2" data-db-index="2" class="htMiddle color-333333 bg-f5f5f5 fsize-17" data-cell-type="text" data-original-value="Servicio de Plomería por emergencia<br><br> Eventos anuales: 1 evento<br> Puntos: 700" data-order="Servicio de Plomería por emergencia<br><br> Eventos anuales: 1 evento<br> Puntos: 700" data-colspan="1" data-rowspan="2" rowspan="2" style="color: rgb(51, 51, 51); background-color: rgb(245, 245, 245); font-size: 17px; line-height: 23px;"><?php echo mb_convert_encoding($row[1],'UTF-8'); ?><br><br>

<?php



$sqleventos="SELECT codasistencia,nombreasistencia,CASE WHEN user_points.eventossolic IS NULL   THEN catalogocoomevars.eventos WHEN user_points.eventossolic='sin limite' THEN catalogocoomevars.eventos ELSE catalogocoomevars.eventos - SUM(user_points.eventossolic) END AS eventos ,catalogocoomevars.puntos,info,tipo FROM catalogocoomevars LEFT JOIN user_points ON user_points.servicio=catalogocoomevars.nombreasistencia WHERE tipo=5 AND user_points.usuario='".$_SESSION['usuario']."' and nombreasistencia='".$row[1]."' GROUP BY catalogocoomevars.codasistencia,catalogocoomevars.nombreasistencia,user_points.eventossolic,catalogocoomevars.eventos,catalogocoomevars.puntos,catalogocoomevars.info,user_points.usuario";

$resulteventos = $conn ->query($sqleventos);


if($rowev=$resulteventos->fetch_array(MYSQLI_NUM)){
if($row[1]=$rowev[1]){

?>
  
 Eventos anuales: <?php echo mb_convert_encoding($rowev[2],'UTF-8'); if($rowev[2]<2 && $rowev[2]>0 ){echo ' Evento';}else{echo ' Eventos';} ?><br>


<?php

}else{
?>

 Eventos anuales: <?php echo mb_convert_encoding($rowev[2],'UTF-8'); if($row[2]<2 && $row[2]>0 ){echo ' Evento';}else{echo ' Eventos';} ?><br>

<?php

}
}else{

?>

Eventos anuales: <?php echo mb_convert_encoding($rowev[2],'UTF-8'); if($row[2]<2 && $row[2]>0 ){echo ' Evento';}else{echo ' Eventos';} ?><br>

<?php

}
?>





 Puntos: <?php echo utf8_encode($row[3]); ?></td>




<td data-cell-id="B2" data-x="1" data-y="2" data-db-index="2" class="color-87b32f bg-f5f5f5 htCenter htMiddle" data-cell-type="text" data-original-value="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/05/tablas-iconos-2-37.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;28&quot; height=&quot;114&quot;>" data-order="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/05/tablas-iconos-2-37.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;28&quot; height=&quot;114&quot;>" data-colspan="1" data-rowspan="2" rowspan="2" style="color: rgb(135, 179, 47); background-color: rgb(245, 245, 245);"><img loading="lazy" src="http://www.igroupsolution.com/wp-content/uploads/2022/05/tablas-iconos-2-37.png" onclick="modalclickinfo('<?php $reemplazo=str_replace("(","",mb_convert_encoding($row[4],'UTF-8')); $reemplazo2=str_replace(")","",$reemplazo); $reemplazo3=str_replace("\r\n","-sl-",$reemplazo2); echo $reemplazo3; ?>');" class="stbSkipLazy alignnone size-full" width="28" height="114"></td>






<?php


$sqleventosbn="SELECT codasistencia,nombreasistencia,CASE WHEN user_points.eventossolic IS NULL   THEN catalogocoomevars.eventos WHEN user_points.eventossolic='sin limite' THEN catalogocoomevars.eventos ELSE catalogocoomevars.eventos - SUM(user_points.eventossolic) END AS eventos ,catalogocoomevars.puntos,info,tipo FROM catalogocoomevars LEFT JOIN user_points ON user_points.servicio=catalogocoomevars.nombreasistencia WHERE tipo=5 AND user_points.usuario='".$_SESSION['usuario']."' and nombreasistencia='".$row[1]."' GROUP BY catalogocoomevars.codasistencia,catalogocoomevars.nombreasistencia,user_points.eventossolic,catalogocoomevars.eventos,catalogocoomevars.puntos,catalogocoomevars.info,user_points.usuario";

$resulteventosbn = $conn ->query($sqleventosbn);


if($rowevn=$resulteventosbn->fetch_array(MYSQLI_NUM)){
if($row[1]=$rowevn[1]){

?>



<td data-cell-id="C2" data-x="2" data-y="2" data-db-index="2" class="bg-f5f5f5 htCenter htMiddle" data-cell-type="text" data-original-value="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;27&quot; height=&quot;84&quot;>" data-order="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;27&quot; height=&quot;84&quot;>" data-colspan="1" data-rowspan="2" rowspan="2" style="background-color: rgb(245, 245, 245);"><img loading="lazy" src="http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png" onclick="modalclick('<?php echo utf8_encode($row[3]); ?>','<?php echo mb_convert_encoding($row[1],'UTF-8'); ?>','<?php echo utf8_encode($rowevn[2]); ?>');" class="stbSkipLazy alignnone size-full" width="27" height="84"></td>



<?php

}
else
{
?>


<td data-cell-id="C2" data-x="2" data-y="2" data-db-index="2" class="bg-f5f5f5 htCenter htMiddle" data-cell-type="text" data-original-value="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;27&quot; height=&quot;84&quot;>" data-order="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;27&quot; height=&quot;84&quot;>" data-colspan="1" data-rowspan="2" rowspan="2" style="background-color: rgb(245, 245, 245);"><img loading="lazy" src="http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png" onclick="abrirModal('<?php echo utf8_encode($row[3]); ?>','<?php echo mb_convert_encoding($row[1],'UTF-8'); ?>','<?php echo utf8_encode($row[2]); ?>');" class="stbSkipLazy alignnone size-full" width="27" height="84"></td>

<?php

}
}
else
{
?>

<td data-cell-id="C2" data-x="2" data-y="2" data-db-index="2" class="bg-f5f5f5 htCenter htMiddle" data-cell-type="text" data-original-value="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;27&quot; height=&quot;84&quot;>" data-order="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;27&quot; height=&quot;84&quot;>" data-colspan="1" data-rowspan="2" rowspan="2" style="background-color: rgb(245, 245, 245);"><img loading="lazy" src="http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png" onclick="abrirModal('<?php echo utf8_encode($row[3]); ?>','<?php echo mb_convert_encoding($row[1],'UTF-8'); ?>','<?php echo utf8_encode($row[2]); ?>');" class="stbSkipLazy alignnone size-full" width="27" height="84"></td>


<?php

}

?>




</tr>



<?php


}

?>



</tbody></table></div></div></div><!-- /#supsystic-table-11.supsystic-table --></div><!-- /.supsystic-tables-wrap --><!-- Tables Generator by Supsystic --><!-- Version: 1.10.14 --><!-- http://supsystic.com/ --><p></p></div>
				</div>
								</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-082bfd7 elementor-widget elementor-widget-accordion" data-id="082bfd7" data-element_type="widget" data-widget_type="accordion.default">
				<div class="elementor-widget-container">
					<div class="elementor-accordion" role="tablist">
							<div class="elementor-accordion-item">
					<h2 id="elementor-tab-title-8561" class="elementor-tab-title elementor-active" data-tab="1" role="tab" aria-controls="elementor-tab-content-8561" aria-expanded="true" tabindex="0" aria-selected="true">
													<span class="elementor-accordion-icon elementor-accordion-icon-right" aria-hidden="true">
															<span class="elementor-accordion-icon-closed"><img src="imagenes-verde/Coomeva-Flecha-abajo.png" class="fas fa-chevron-down"></img></span>
								<span class="elementor-accordion-icon-opened"><img src="imagenes-verde/Coomeva-Flecha-arriba.png" class="fas fa-chevron-down"></img></span>
														</span>
												<a class="elementor-accordion-title" href="">Asistencia Adulto Mayor</a>
					</h2>
					<div id="elementor-tab-content-8561" class="elementor-tab-content elementor-clearfix elementor-active" data-tab="1" role="tabpanel" aria-labelledby="elementor-tab-title-8561" style="display: block;"><p></p><div class="supsystic-table-loader spinner" style="background-color: rgb(0, 0, 0); display: none;"></div><div id="supsystic-table-11_68275" class="supsystic-tables-wrap " style="width: 100%; visibility: visible;" data-table-width-fixed="100%" data-table-width-mobile="100%"><div id="supsystic-table-11_wrapper" class="dataTables_wrapper no-footer"><div id="supsystic-table-11_processing" class="dataTables_processing" style="display: none;">Processing...</div><div class="dataTables_scroll"><div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px; width: 100%;"><div class="dataTables_scrollHeadInner" style="box-sizing: content-box; width: 488px; padding-right: 17px;"><table class="supsystic-table paragraphMode border lightboxImg no-border dataTable no-footer" data-id="11" data-view-id="11_68275" data-title="Pide tu asistencia (móvil)" data-currency-format="$1,000.00" data-percent-format="10.00%" data-date-format="DD.MM.YYYY" data-time-format="HH:mm" data-features="[&quot;after_table_loaded_script&quot;]" data-search-value="" data-lightbox-img="" data-head-rows-count="1" data-pagination-length="50,100,All" data-auto-index="off" data-searching-settings="{&quot;columnSearchPosition&quot;:&quot;bottom&quot;,&quot;minChars&quot;:&quot;0&quot;}" data-lang="default" data-override="{&quot;emptyTable&quot;:&quot;&quot;,&quot;info&quot;:&quot;&quot;,&quot;infoEmpty&quot;:&quot;&quot;,&quot;infoFiltered&quot;:&quot;&quot;,&quot;lengthMenu&quot;:&quot;&quot;,&quot;search&quot;:&quot;&quot;,&quot;zeroRecords&quot;:&quot;&quot;,&quot;exportLabel&quot;:&quot;&quot;,&quot;file&quot;:&quot;default&quot;}" data-merged="[{&quot;row&quot;:1,&quot;col&quot;:0,&quot;rowspan&quot;:2,&quot;colspan&quot;:1,&quot;removed&quot;:false},{&quot;row&quot;:1,&quot;col&quot;:1,&quot;rowspan&quot;:2,&quot;colspan&quot;:1,&quot;removed&quot;:false},{&quot;row&quot;:1,&quot;col&quot;:2,&quot;rowspan&quot;:2,&quot;colspan&quot;:1,&quot;removed&quot;:false}]" data-responsive-mode="2" data-from-history="0" role="grid" style="margin-left: 0px; width: 488px;"><thead><tr role="row"><th class="sorting_disabled" style="width: 306.062px; padding: 0px !important;" rowspan="1" colspan="1" data-original-value="" data-order=""></th><th class="sorting_disabled" style="width: 83.375px; padding: 0px !important;" rowspan="1" colspan="1" data-original-value="" data-order=""></th><th class="sorting_disabled" style="width: 98.5625px; padding: 0px !important;" rowspan="1" colspan="1" data-original-value="" data-order=""></th></tr></thead></table></div></div><div class="dataTables_scrollBody" style="position: relative; overflow: auto; width: 100%; "><table id="supsystic-table-11" class="supsystic-table paragraphMode border lightboxImg no-border dataTable no-footer" data-id="11" data-view-id="11_68275" data-title="Pide tu asistencia (móvil)" data-currency-format="$1,000.00" data-percent-format="10.00%" data-date-format="DD.MM.YYYY" data-time-format="HH:mm" data-features="[&quot;after_table_loaded_script&quot;]" data-search-value="" data-lightbox-img="" data-head-rows-count="1" data-pagination-length="50,100,All" data-auto-index="off" data-searching-settings="{&quot;columnSearchPosition&quot;:&quot;bottom&quot;,&quot;minChars&quot;:&quot;0&quot;}" data-lang="default" data-override="{&quot;emptyTable&quot;:&quot;&quot;,&quot;info&quot;:&quot;&quot;,&quot;infoEmpty&quot;:&quot;&quot;,&quot;infoFiltered&quot;:&quot;&quot;,&quot;lengthMenu&quot;:&quot;&quot;,&quot;search&quot;:&quot;&quot;,&quot;zeroRecords&quot;:&quot;&quot;,&quot;exportLabel&quot;:&quot;&quot;,&quot;file&quot;:&quot;default&quot;}" data-merged="[{&quot;row&quot;:1,&quot;col&quot;:0,&quot;rowspan&quot;:2,&quot;colspan&quot;:1,&quot;removed&quot;:false},{&quot;row&quot;:1,&quot;col&quot;:1,&quot;rowspan&quot;:2,&quot;colspan&quot;:1,&quot;removed&quot;:false},{&quot;row&quot;:1,&quot;col&quot;:2,&quot;rowspan&quot;:2,&quot;colspan&quot;:1,&quot;removed&quot;:false}]" data-responsive-mode="2" data-from-history="0" role="grid"><thead><tr role="row" style="height: 0px;"><th class="" style="padding-top: 0px; padding-right: 0px !important; padding-bottom: 0px; padding-left: 0px !important; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 306.062px;" rowspan="1" colspan="1" data-original-value="<div class=&quot;dataTables_sizing&quot; style=&quot;height: 0px; overflow: hidden;&quot;></div>" data-order="<div class=&quot;dataTables_sizing&quot; style=&quot;height: 0px; overflow: hidden;&quot;></div>"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"></div></th><th class="" style="padding-top: 0px; padding-right: 0px !important; padding-bottom: 0px; padding-left: 0px !important; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 83.375px;" rowspan="1" colspan="1" data-original-value="<div class=&quot;dataTables_sizing&quot; style=&quot;height: 0px; overflow: hidden;&quot;></div>" data-order="<div class=&quot;dataTables_sizing&quot; style=&quot;height: 0px; overflow: hidden;&quot;></div>"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"></div></th><th class="" style="padding-top: 0px; padding-right: 0px !important; padding-bottom: 0px; padding-left: 0px !important; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 98.5625px;" rowspan="1" colspan="1" data-original-value="<div class=&quot;dataTables_sizing&quot; style=&quot;height: 0px; overflow: hidden;&quot;></div>" data-order="<div class=&quot;dataTables_sizing&quot; style=&quot;height: 0px; overflow: hidden;&quot;></div>"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"></div></th></tr></thead><tbody>






<?php

//Asis adulto mayor


$sql = "SELECT codasistencia,nombreasistencia,CASE WHEN user_points.eventossolic IS NULL   THEN catalogocoomevars.eventos WHEN user_points.eventossolic='sin limite' THEN catalogocoomevars.eventos ELSE catalogocoomevars.eventos  END AS eventos ,catalogocoomevars.puntos,info,tipo FROM catalogocoomevars LEFT JOIN user_points ON user_points.servicio=catalogocoomevars.nombreasistencia WHERE tipo=6 GROUP BY catalogocoomevars.codasistencia,catalogocoomevars.nombreasistencia,user_points.eventossolic,catalogocoomevars.eventos,catalogocoomevars.puntos,catalogocoomevars.info";
$result = $conn ->query($sql);





while($row=$result->fetch_array(MYSQLI_NUM)){

?>


<tr class="odd"><td style=" width: 2%;" data-cell-id="A1" data-x="0" data-y="1" data-db-index="1" class="underline htMiddle htCenter color-333333 fsize-17" data-cell-type="text" data-original-value="Asistencias" data-order="Asistencias" style="min-width: 75%; width: 328.297px; color: rgb(51, 51, 51); font-size: 17px; line-height: 23px;"></td>


</tr>
<tr  class="even">



<td data-cell-id="A2" data-x="0" data-y="2" data-db-index="2" class="htMiddle color-333333 bg-f5f5f5 fsize-17" data-cell-type="text" data-original-value="Servicio de Plomería por emergencia<br><br> Eventos anuales: 1 evento<br> Puntos: 700" data-order="Servicio de Plomería por emergencia<br><br> Eventos anuales: 1 evento<br> Puntos: 700" data-colspan="1" data-rowspan="2" rowspan="2" style="color: rgb(51, 51, 51); background-color: rgb(245, 245, 245); font-size: 17px; line-height: 23px;"><?php echo mb_convert_encoding($row[1],'UTF-8'); ?><br><br>

<?php



$sqleventos="SELECT codasistencia,nombreasistencia,CASE WHEN user_points.eventossolic IS NULL   THEN catalogocoomevars.eventos WHEN user_points.eventossolic='sin limite' THEN catalogocoomevars.eventos ELSE catalogocoomevars.eventos - SUM(user_points.eventossolic) END AS eventos ,catalogocoomevars.puntos,info,tipo FROM catalogocoomevars LEFT JOIN user_points ON user_points.servicio=catalogocoomevars.nombreasistencia WHERE tipo=6 AND user_points.usuario='".$_SESSION['usuario']."' and nombreasistencia='".$row[1]."' GROUP BY catalogocoomevars.codasistencia,catalogocoomevars.nombreasistencia,user_points.eventossolic,catalogocoomevars.eventos,catalogocoomevars.puntos,catalogocoomevars.info,user_points.usuario";

$resulteventos = $conn ->query($sqleventos);


if($rowev=$resulteventos->fetch_array(MYSQLI_NUM)){
if($row[1]=$rowev[1]){

?>
  
 Eventos anuales: <?php echo mb_convert_encoding($rowev[2],'UTF-8'); if($rowev[2]<2 && $rowev[2]>0 ){echo ' Evento';}else{echo ' Eventos';} ?><br>


<?php

}else{
?>

 Eventos anuales: <?php echo mb_convert_encoding($rowev[2],'UTF-8'); if($row[2]<2 && $row[2]>0 ){echo ' Evento';}else{echo ' Eventos';} ?><br>

<?php

}
}else{

?>

Eventos anuales: <?php echo mb_convert_encoding($rowev[2],'UTF-8'); if($row[2]<2 && $row[2]>0 ){echo ' Evento';}else{echo ' Eventos';} ?><br>

<?php

}
?>





 Puntos: <?php echo utf8_encode($row[3]); ?></td>




<td data-cell-id="B2" data-x="1" data-y="2" data-db-index="2" class="color-87b32f bg-f5f5f5 htCenter htMiddle" data-cell-type="text" data-original-value="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/05/tablas-iconos-2-37.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;28&quot; height=&quot;114&quot;>" data-order="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/05/tablas-iconos-2-37.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;28&quot; height=&quot;114&quot;>" data-colspan="1" data-rowspan="2" rowspan="2" style="color: rgb(135, 179, 47); background-color: rgb(245, 245, 245);"><img loading="lazy" src="http://www.igroupsolution.com/wp-content/uploads/2022/05/tablas-iconos-2-37.png" onclick="modalclickinfo('<?php $reemplazo=str_replace("(","",mb_convert_encoding($row[4],'UTF-8')); $reemplazo2=str_replace(")","",$reemplazo); $reemplazo3=str_replace("\r\n","-sl-",$reemplazo2); echo $reemplazo3; ?>');" class="stbSkipLazy alignnone size-full" width="28" height="114"></td>






<?php


$sqleventosbn="SELECT codasistencia,nombreasistencia,CASE WHEN user_points.eventossolic IS NULL   THEN catalogocoomevars.eventos WHEN user_points.eventossolic='sin limite' THEN catalogocoomevars.eventos ELSE catalogocoomevars.eventos - SUM(user_points.eventossolic) END AS eventos ,catalogocoomevars.puntos,info,tipo FROM catalogocoomevars LEFT JOIN user_points ON user_points.servicio=catalogocoomevars.nombreasistencia WHERE tipo=6 AND user_points.usuario='".$_SESSION['usuario']."' and nombreasistencia='".$row[1]."' GROUP BY catalogocoomevars.codasistencia,catalogocoomevars.nombreasistencia,user_points.eventossolic,catalogocoomevars.eventos,catalogocoomevars.puntos,catalogocoomevars.info,user_points.usuario";

$resulteventosbn = $conn ->query($sqleventosbn);


if($rowevn=$resulteventosbn->fetch_array(MYSQLI_NUM)){
if($row[1]=$rowevn[1]){

?>



<td data-cell-id="C2" data-x="2" data-y="2" data-db-index="2" class="bg-f5f5f5 htCenter htMiddle" data-cell-type="text" data-original-value="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;27&quot; height=&quot;84&quot;>" data-order="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;27&quot; height=&quot;84&quot;>" data-colspan="1" data-rowspan="2" rowspan="2" style="background-color: rgb(245, 245, 245);"><img loading="lazy" src="http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png" onclick="modalclick('<?php echo utf8_encode($row[3]); ?>','<?php echo mb_convert_encoding($row[1],'UTF-8'); ?>','<?php echo utf8_encode($rowevn[2]); ?>');" class="stbSkipLazy alignnone size-full" width="27" height="84"></td>



<?php

}
else
{
?>


<td data-cell-id="C2" data-x="2" data-y="2" data-db-index="2" class="bg-f5f5f5 htCenter htMiddle" data-cell-type="text" data-original-value="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;27&quot; height=&quot;84&quot;>" data-order="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;27&quot; height=&quot;84&quot;>" data-colspan="1" data-rowspan="2" rowspan="2" style="background-color: rgb(245, 245, 245);"><img loading="lazy" src="http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png" onclick="abrirModal('<?php echo utf8_encode($row[3]); ?>','<?php echo mb_convert_encoding($row[1],'UTF-8'); ?>','<?php echo utf8_encode($row[2]); ?>');" class="stbSkipLazy alignnone size-full" width="27" height="84"></td>

<?php

}
}
else
{
?>

<td data-cell-id="C2" data-x="2" data-y="2" data-db-index="2" class="bg-f5f5f5 htCenter htMiddle" data-cell-type="text" data-original-value="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;27&quot; height=&quot;84&quot;>" data-order="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;27&quot; height=&quot;84&quot;>" data-colspan="1" data-rowspan="2" rowspan="2" style="background-color: rgb(245, 245, 245);"><img loading="lazy" src="http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png" onclick="abrirModal('<?php echo utf8_encode($row[3]); ?>','<?php echo mb_convert_encoding($row[1],'UTF-8'); ?>','<?php echo utf8_encode($row[2]); ?>');" class="stbSkipLazy alignnone size-full" width="27" height="84"></td>


<?php

}

?>




</tr>



<?php


}

?>




</tbody></table></div></div></div><!-- /#supsystic-table-11.supsystic-table --></div><!-- /.supsystic-tables-wrap --><!-- Tables Generator by Supsystic --><!-- Version: 1.10.14 --><!-- http://supsystic.com/ --><p></p></div>
				</div>
								</div>
				</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-ca18f2c elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="ca18f2c" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-5eb5869" data-id="5eb5869" data-element_type="column">
			<div class="elementor-column-wrap">
							<div class="elementor-widget-wrap">
								</div>
					</div>
		</div>
								</div>
					</div>
		</section>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-769b437 elementor-hidden-tablet" data-id="769b437" data-element_type="column">
			<div class="elementor-column-wrap">
							<div class="elementor-widget-wrap">
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
<link rel="stylesheet" id="jquery-contextmenu-css" href="https://www.igroupsolution.com/wp-content/plugins/data-tables-generator-by-supsystic/src/SupsysticTables/Core/assets/css/lib/jquery.contextMenu.min.css?ver=2.6.4" type="text/css" media="all">
<link rel="stylesheet" id="supsystic-tables-tables-loaders-css-css" href="https://www.igroupsolution.com/wp-content/plugins/data-tables-generator-by-supsystic/src/SupsysticTables/Tables/assets/css/loaders.css?ver=1.1.0" type="text/css" media="all">
<link rel="stylesheet" id="supsystic-tables-shortcode-css-css" href="https://www.igroupsolution.com/wp-content/plugins/data-tables-generator-by-supsystic/src/SupsysticTables/Tables/assets/css/tables.shortcode.css?ver=1.10.14" type="text/css" media="all">
<link rel="stylesheet" id="supsystic-tables-datatables-css-css" href="https://www.igroupsolution.com/wp-content/plugins/data-tables-generator-by-supsystic/src/SupsysticTables/Core/assets/css/lib/jquery.dataTables.min.css?ver=1.10.23" type="text/css" media="all">
<link rel="stylesheet" id="supsystic-tables-datatables-responsive-css-css" href="https://www.igroupsolution.com/wp-content/plugins/data-tables-generator-by-supsystic/src/SupsysticTables/Core/assets/css/lib/responsive.dataTables.min.css?ver=2.0.2" type="text/css" media="all">
<link rel="stylesheet" id="supsystic-tables-datatables-fixed-columns-css-css" href="https://www.igroupsolution.com/wp-content/plugins/data-tables-generator-by-supsystic/src/SupsysticTables/Core/assets/css/lib/fixedColumns.dataTables.min.css?ver=3.2.2" type="text/css" media="all">
<link rel="stylesheet" id="supsystic-tables-datatables-fixed-headers-css-css" href="https://www.igroupsolution.com/wp-content/plugins/data-tables-generator-by-supsystic/src/SupsysticTables/Core/assets/css/lib/fixedHeader.dataTables.min.css?ver=3.1.2" type="text/css" media="all">
<script type="text/javascript" src="https://www.igroupsolution.com/wp-content/plugins/data-tables-generator-by-supsystic/app/assets/js/dtgsnonce.js?ver=0.01" id="dtgs_nonce_frontend-js"></script>
<script type="text/javascript" id="dtgs_nonce_frontend-js-after">
var DTGS_NONCE_FRONTEND = "69094838ad"
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
var ElementorProFrontendConfig = {"ajaxurl":"https:\/\/www.igroupsolution.com\/wp-admin\/admin-ajax.php","nonce":"34fad45cf9","urls":{"assets":"https:\/\/www.igroupsolution.com\/wp-content\/plugins\/elementor-pro\/assets\/","rest":"https:\/\/www.igroupsolution.com\/wp-json\/"},"i18n":{"toc_no_headings_found":"No headings were found on this page."},"shareButtonsNetworks":{"facebook":{"title":"Facebook","has_counter":true},"twitter":{"title":"Twitter"},"linkedin":{"title":"LinkedIn","has_counter":true},"pinterest":{"title":"Pinterest","has_counter":true},"reddit":{"title":"Reddit","has_counter":true},"vk":{"title":"VK","has_counter":true},"odnoklassniki":{"title":"OK","has_counter":true},"tumblr":{"title":"Tumblr"},"digg":{"title":"Digg"},"skype":{"title":"Skype"},"stumbleupon":{"title":"StumbleUpon","has_counter":true},"mix":{"title":"Mix"},"telegram":{"title":"Telegram"},"pocket":{"title":"Pocket","has_counter":true},"xing":{"title":"XING","has_counter":true},"whatsapp":{"title":"WhatsApp"},"email":{"title":"Email"},"print":{"title":"Print"}},
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
"version":"3.5.4","is_static":false,"experimentalFeatures":{"e_import_export":true,"e_hidden_wordpress_widgets":true,"theme_builder_v2":true,"landing-pages":true,"elements-color-picker":true,"favorite-widgets":true,"admin-top-bar":true,"form-submissions":true},"urls":{"assets":"https:\/\/www.igroupsolution.com\/wp-content\/plugins\/elementor\/assets\/"},"settings":{"page":[],"editorPreferences":[]},"kit":{"active_breakpoints":["viewport_mobile","viewport_tablet"],"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description"},"post":{"id":11643,"title":"Coomeva%20%2F%20Programa%20asistencia%20integral%20%2F%20Pide%20tus%20servicios%202%20%2F%20m%C3%B3vil%20%E2%80%93%20IGS","excerpt":"","featuredImage":false}};
</script>
<script type="text/javascript" src="https://www.igroupsolution.com/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.5.4" id="elementor-frontend-js"></script><span id="elementor-device-mode" class="elementor-screen-only"></span>
<script type="text/javascript" src="https://www.igroupsolution.com/wp-content/plugins/elementor-pro/assets/js/preloaded-elements-handlers.min.js?ver=3.5.2" id="pro-preloaded-elements-handlers-js"></script><svg style="display: none;" class="e-font-icon-svg-symbols"></svg>
<script type="text/javascript" src="https://www.igroupsolution.com/wp-content/plugins/elementor/assets/js/preloaded-modules.min.js?ver=3.5.4" id="preloaded-modules-js"></script><svg style="display: none;" class="e-font-icon-svg-symbols"></svg>
<script type="text/javascript" src="https://www.igroupsolution.com/wp-content/plugins/elementor-pro/assets/lib/sticky/jquery.sticky.min.js?ver=3.5.2" id="e-sticky-js"></script>
<script type="text/javascript" src="https://www.igroupsolution.com/wp-content/plugins/data-tables-generator-by-supsystic/src/SupsysticTables/Core/assets/js/lib/jquery.contextMenu.min.js?ver=2.6.4" id="jquery-contextmenu-js"></script>
<script type="text/javascript" id="tables-core-js-extra">
/* <![CDATA[ */
var ajax_obj = {"ajaxurl":"https:\/\/www.igroupsolution.com\/wp-admin\/admin-ajax.php"};
var g_stbStandartFontsList = [];
var g_stbAllFontsList = [];
/* ]]> */
</script>
<script type="text/javascript" src="https://www.igroupsolution.com/wp-content/plugins/data-tables-generator-by-supsystic/src/SupsysticTables/Core/assets/js/core.js?ver=1.10.14" id="tables-core-js"></script>
<script type="text/javascript" src="https://www.igroupsolution.com/wp-content/plugins/data-tables-generator-by-supsystic/src/SupsysticTables/Tables/assets/libraries/ruleJS/ruleJS.lib.full.js" id="supsystic-tables-rulejs-libs-js-js"></script>
<script type="text/javascript" src="https://www.igroupsolution.com/wp-content/plugins/data-tables-generator-by-supsystic/src/SupsysticTables/Tables/assets/libraries/ruleJS/parser.js" id="supsystic-tables-rulejs-parser-js-js"></script>
<script type="text/javascript" src="https://www.igroupsolution.com/wp-content/plugins/data-tables-generator-by-supsystic/src/SupsysticTables/Tables/assets/libraries/ruleJS/ruleJS.js" id="supsystic-tables-rulejs-js-js"></script>
<script type="text/javascript" src="https://www.igroupsolution.com/wp-content/plugins/data-tables-generator-by-supsystic/src/SupsysticTables/Core/assets/js/lib/jquery.dataTables.min.js?ver=1.10.23" id="supsystic-tables-datatables-js-js"></script>
<script type="text/javascript" src="https://www.igroupsolution.com/wp-content/plugins/data-tables-generator-by-supsystic/src/SupsysticTables/Core/assets/js/lib/intl.js?ver=1.10.23" id="intl.js-js"></script>
<script type="text/javascript" src="https://www.igroupsolution.com/wp-content/plugins/data-tables-generator-by-supsystic/src/SupsysticTables/Core/assets/js/lib/dataTables.responsive.min.js?ver=2.0.2" id="supsystic-tables-datatables-responsive-js-js"></script>
<script type="text/javascript" src="https://www.igroupsolution.com/wp-content/plugins/data-tables-generator-by-supsystic/src/SupsysticTables/Core/assets/js/lib/dataTables.fixedColumns.min.js?ver=3.2.2" id="supsystic-tables-datatables-fixed-columns-js-js"></script>
<script type="text/javascript" src="https://www.igroupsolution.com/wp-content/plugins/data-tables-generator-by-supsystic/src/SupsysticTables/Core/assets/js/lib/dataTables.fixedHeader.min.js?ver=3.2.2" id="supsystic-tables-datatables-fixed-headers-js-js"></script>
<script type="text/javascript" src="https://www.igroupsolution.com/wp-content/plugins/data-tables-generator-by-supsystic/src/SupsysticTables/Core/assets/js/lib/dataTables.customExtensions.js?ver=1.10.11" id="supsystic-tables-datatables-extensions-js-js"></script>
<!--<script type="text/javascript" src="https://www.igroupsolution.com/wp-content/plugins/data-tables-generator-by-supsystic/src/SupsysticTables/Tables/assets/libraries/moment.min.js?ver=2.8.4" id="supsystic-tables-moment-js-js"></script>-->
<script type="text/javascript" src="https://www.igroupsolution.com/wp-content/plugins/data-tables-generator-by-supsystic/src/SupsysticTables/Tables/assets/libraries/datetime-moment.js?ver=2.8.4" id="supsystic-tables-datetime-moment-js-js"></script>
<script type="text/javascript" src="https://www.igroupsolution.com/wp-content/plugins/data-tables-generator-by-supsystic/src/SupsysticTables/Core/assets/js/lib/natural.js?ver=1.10.11" id="supsystic-tables-datatables-natural-sort-js-js"></script>
<script type="text/javascript" src="https://www.igroupsolution.com/wp-content/plugins/data-tables-generator-by-supsystic/src/SupsysticTables/Tables/assets/libraries/numeral.min.js?ver=1.10.14" id="supsystic-tables-datatables-numeral-js"></script>
<script type="text/javascript" src="https://www.igroupsolution.com/wp-content/plugins/data-tables-generator-by-supsystic/src/SupsysticTables/Tables/assets/js/tables.shortcode.js?ver=1.10.14" id="supsystic-tables-shortcode-js"></script>
<script type="text/javascript" src="https://www.igroupsolution.com/wp-content/plugins/data-tables-generator-by-supsystic/app/assets/js/notify.js?ver=1.10.14" id="supsystic-tables-notify-js"></script>
	







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
				var celular=document.getElementById("lblcelular").value;
				var correo=document.getElementById("lblcorreo").value;
				var nombre=document.getElementById("lblnombre").value;
				var apellido=document.getElementById("lblprimerapellido").value;
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


				//Actualiza contraseña
				jQuery.ajax({ 
					url: "aai_lib/aai_correoscat.php",
					method: "POST",
					type: "POST",
					data: 	{
						servicio: servicio,
						puntos: puntos,
						usuario: usuario,
						celular: celular,
						correo: correo,
						nombre: nombre,
						apellido: apellido
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





function modalclick_bolsa($puntos,$servicio,$eventos){
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
				document.getElementById("modalinfopts2").textContent="Con la solicitud de este servicio no podrá hacer uso de las asistencias de Limpieza dental básica, limpieza de vidrios del hogar y limpieza de cocina y un baño.";
				document.getElementById("btnmodalaceptar").onclick=function() { GuardarPuntos($puntos,$servicio,$eventos);};
				body.style.position = "static";
				body.style.height = "100%";
				body.style.overflow = "hidden";
			//}
				}
			}

			
			
		}






  </script>





</body>





</html>



<?php



}else{









?>
<html lang="es"><head>
	<meta charset="UTF-8">
		<title>Coomeva / Programa asistencia integral / Pide tus servicios 2 / responsive – IGS</title>
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
<link rel="stylesheet" id="elementor-post-10103-css" href="https://www.igroupsolution.com/wp-content/uploads/elementor/css/post-10103.css?ver=1655497043" type="text/css" media="all">
<!--<link rel="stylesheet" id="fluentform-elementor-widget-css" href="https://www.igroupsolution.com/wp-content/plugins/fluentform/public/css/fluent-forms-elementor-widget.css?ver=4.3.1" type="text/css" media="all">-->
<!--<link rel="stylesheet" id="hfe-widgets-style-css" href="https://www.igroupsolution.com/wp-content/plugins/header-footer-elementor/inc/widgets-css/frontend.css?ver=1.6.7" type="text/css" media="all">-->
<link rel="stylesheet" id="hello-elementor-css" href="https://www.igroupsolution.com/wp-content/themes/hello-elementor/style.min.css?ver=2.4.2" type="text/css" media="all">
<link rel="stylesheet" id="hello-elementor-theme-style-css" href="https://www.igroupsolution.com/wp-content/themes/hello-elementor/theme.min.css?ver=2.4.2" type="text/css" media="all">
<link rel="stylesheet" id="elementor-post-7807-css" href="https://www.igroupsolution.com/wp-content/uploads/elementor/css/post-7807.css?ver=1655307070" type="text/css" media="all">
<link rel="stylesheet" id="google-fonts-1-css" href="https://fonts.googleapis.com/css?family=Roboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRaleway%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=auto&amp;ver=5.8.4" type="text/css" media="all">
<link rel="stylesheet" id="elementor-icons-shared-0-css" href="https://www.igroupsolution.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css?ver=5.15.3" type="text/css" media="all">
<link rel="stylesheet" id="elementor-icons-fa-solid-css" href="https://www.igroupsolution.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min.css?ver=5.15.3" type="text/css" media="all">
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
<script src='http://code.jquery.com/jquery-2.1.3.js'></script>
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
<link rel="https://api.w.org/" href="https://www.igroupsolution.com/wp-json/"><link rel="alternate" type="application/json" href="https://www.igroupsolution.com/wp-json/wp/v2/pages/10103"><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://www.igroupsolution.com/xmlrpc.php?rsd">
<meta name="generator" content="WordPress 5.8.4">
<meta name="generator" content="WooCommerce 3.7.3">
<link rel="canonical" href="https://www.igroupsolution.com/coomeva-programa-asistencia-integral-pide-tus-servicios-2-responsive/">
<link rel="shortlink" href="https://www.igroupsolution.com/?p=10103">
<link rel="alternate" type="application/json+oembed" href="https://www.igroupsolution.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.igroupsolution.com%2Fcoomeva-programa-asistencia-integral-pide-tus-servicios-2-responsive%2F">
<link rel="alternate" type="text/xml+oembed" href="https://www.igroupsolution.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.igroupsolution.com%2Fcoomeva-programa-asistencia-integral-pide-tus-servicios-2-responsive%2F&amp;format=xml">
<meta name="generator" content="Site Kit by Google 1.49.0"><meta name="referrer" content="always">	<noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
	<!--<meta name="google-site-verification" content="9ULMLTcv69MWIXigtNW_Ipdd99WOqJC477FADv6-Mpg"><link rel="icon" href="https://www.igroupsolution.com/wp-content/uploads/2019/06/cropped-FaviIGS-32x32.png" sizes="32x32">-->
<!-- <link rel="icon" href="https://www.igroupsolution.com/wp-content/uploads/2019/06/cropped-FaviIGS-192x192.png" sizes="192x192">-->
<link rel="apple-touch-icon" href="https://www.igroupsolution.com/wp-content/uploads/2019/06/cropped-FaviIGS-180x180.png">
<meta name="msapplication-TileImage" content="https://www.igroupsolution.com/wp-content/uploads/2019/06/cropped-FaviIGS-270x270.png">
<meta name="generator" content="WordPress Download Manager 3.2.34">
                <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
                <link href="css/pedir-servicio.css" rel="stylesheet">
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
		}
		.modalContainer .modal-contentinf{
			width: 100% !important;
			border-radius: 12px 12px 12px 12px;
		}
		.modalContainer .modal-content{
			width: 100% !important;
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

			width: 40% !important;
    			height: auto;
   			max-width: 100vw;
    			//max-height: 100vh;
   			padding: 70;
   			//overflow: auto;

		}
		.modalContainer .modal-content {
			background-color: #fefefe;
			margin: auto;
			text-align:center;
			padding: 20px;
			border: 1px solid lightgray;
			//border-top: 10px solid #58abb7;
			width: 30% !important;
			text-align: center;
    			color: var( --e-global-color-4ece358 );
   			font-family: "Raleway", Sans-serif;
    			font-size: 17px;
    			font-weight: 400;
			border-radius: 12px 12px 12px 12px;

			width: 40% !important;
    			height: auto;
   			max-width: 100vw;
    			//max-height: 100vh;
   			padding: 70;
   			//overflow: auto;
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



		<script type="text/javascript">
			function GuardarPuntos($puntos,$servicio,$eventos){
				
				var usuario=document.getElementById("lblusuario").value;
				var celular=document.getElementById("lblcelular").value;
				var correo=document.getElementById("lblcorreo").value;
				var nombre=document.getElementById("lblnombre").value;
				var apellido=document.getElementById("lblprimerapellido").value;
				var puntos=$puntos;
				var servicio=$servicio;
				var eventos=$eventos;



				

	
				//Actualiza contraseña
				$.ajax({ 
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

				
	
				//Actualiza contraseña
				jQuery.ajax({ 
					url: "aai_lib/aai_correoscat.php",
					method: "POST",
					type: "POST",
					data: 	{
						servicio: servicio,
						puntos: puntos,
						usuario: usuario,
						celular: celular,
						correo: correo,
						nombre: nombre,
						apellido: apellido
					},
					dataType: 'html'
				});

				
			

				

				modalfinal();

			}

		</script>

	

<body id="bdpg" class="page-template page-template-elementor_canvas page page-id-10103 theme-hello-elementor woocommerce-js ehf-template-hello-elementor ehf-stylesheet-hello-elementor elementor-default elementor-template-canvas elementor-kit-6306 elementor-page elementor-page-10103 e--ua-blink e--ua-chrome e--ua-webkit" data-elementor-device-mode="desktop">
			<div data-elementor-type="wp-page" data-elementor-id="10103" class="elementor elementor-10103" data-elementor-settings="[]">
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
												<img src="https://www.igroupsolution.com/wp-content/uploads/2022/02/Solicitar-3-1.png" title="Solicitar-3" alt="Solicitar-3">														</div>
						</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-8e88730 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="8e88730" data-element_type="section" id="titulo">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-row" style="justify-content: center;">
                    <div style="display: none" class="elementor-column elementor-col-16 elementor-top-column elementor-element elementor-element-d7bdf82" data-id="d7bdf82" data-element_type="column">
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
				<div class="elementor-column elementor-col-16 elementor-top-column elementor-element elementor-element-8b0f4fa" data-id="8b0f4fa" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-d1479fb elementor-align-justify elementor-widget elementor-widget-button" data-id="d1479fb" data-element_type="widget" data-widget_type="button.default">
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
				<div class="elementor-column elementor-col-16 elementor-top-column elementor-element elementor-element-d1eae89" data-id="d1eae89" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-f1b2db3 elementor-align-justify elementor-widget elementor-widget-button" data-id="f1b2db3" data-element_type="widget" data-widget_type="button.default">
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
						<span class="elementor-button-text">Detalles</span>
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
					<div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-abeb32e elementor-hidden-tablet elementor-hidden-mobile" data-id="abeb32e" data-element_type="column">
			<div class="elementor-column-wrap">
							<div class="elementor-widget-wrap">
								</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-938fdfd" data-id="938fdfd" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<section class="elementor-section elementor-inner-section elementor-element elementor-element-314607c elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-sticky" data-id="314607c" data-element_type="section" data-settings="{&quot;sticky&quot;:&quot;top&quot;,&quot;sticky_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;sticky_offset&quot;:0,&quot;sticky_effects_offset&quot;:0}">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-4a3bb2f" data-id="4a3bb2f" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-fc2ea96 elementor-widget elementor-widget-text-editor" data-id="fc2ea96" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
								<div class="elementor-text-editor elementor-clearfix">
				<p>Puntos disponibles:</p>					</div>
						</div>
				</div>
						</div>
					</div>
		</div>





				<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-1f622d5" data-id="1f622d5" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-bd31ccb elementor-widget elementor-widget-text-editor" data-id="bd31ccb" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
								<div class="elementor-text-editor elementor-clearfix">
				<?php echo '<p id="puntosvalor">'.$row[0].'</p>' ?>					</div>
						</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
                    <br><br>
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
		</section>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-971c428" data-id="971c428" data-element_type="column">
			<div class="elementor-column-wrap">
							<div class="elementor-widget-wrap">
								</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-da1c0b1" data-id="da1c0b1" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-8a7d9c1 elementor-widget elementor-widget-text-editor" data-id="8a7d9c1" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
								<div class="elementor-text-editor elementor-clearfix">
				<p>A continuación encontrarás las asistencias que <span style="color: #333333;">tienes disponibles en cada categoría</span></p>					</div>
						</div>
				</div>
<div class="elementor-element elementor-element-f522df2 elementor-widget elementor-widget-text-editor" data-id="f522df2" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
								<div class="elementor-text-editor elementor-clearfix">
				<p>Solicita las que necesites teniendo en cuenta que cada una tiene una cantidad de puntos asignados en el año y los servicios se agotaran cuando llegues a 5.000 puntos.
</br>
</br>

<p style="font-weight: 400; text-align: center;"><strong>Recuerda que puedes utilizar un servicio por mes.</strong></p>
</br>
</br>
Antes de solicitar tus asistencias, te recomendamos revisar su descripción y condiciones.
</p>					</div>
						</div>
				</div>





<div id="myModalinfo" class="modalContainer">
 <div class="modal-contentinf">
  <!--<a  onclick="ocultarinfo();"><span onclick="ocultarinfo();" class="close">X</span> </a>-->
	<h11 style="text-align:left !important;" class="texto1" id="modalmoldinfo">Esta seguro que desea tomar esta asistencia</h11><br></br>
	<h11 id="modalmoldtexto">Esta seguro que desea tomar esta asistencia</h11><br></br>
	<h11 id="modalmoldtexto2">Esta seguro que desea tomar esta asistencia</h11><br></br>
	<h11 id="modalmoldtexto3">Esta seguro que desea tomar esta asistencia</h11><br></br>


	<input type="button"  style="border:#65f365;background: #65f365;color: white;font-family: 'Raleway', Sans-serif;font-size: 17px;font-weight: 500;background-color: #87B32F;border-radius: 6px 6px 6px 6px;" id="btnmodal" onclick="ocultarinfo();" value="Cerrar"/>
 </div> 



</div>

<div id="myModal" class="modalContainer">
 <div class="modal-content">
 <!--<a  onclick="ocultarinfo();"><span onclick="ocultarinfo();" class="close">X</span>  </a>-->
	<h11 class="subraya" id="modalmold">Esta seguro que desea tomar esta asistencia</h11><br></br>
	</br>
	<h11 class="subraya" id="modalinfopts2"></h11><br></br>
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
	<h15>Recibirás la llamada de uno de nuestros asesores, para continuar con la programación de tu asistencia.</h9><br></br>
	<h15>Gracias por confiar en nuestros servicios.</h9><br></br>
	<input type="button" style="border:#65f365;background: #65f365;color: white;font-family: 'Raleway', Sans-serif;font-size: 17px;font-weight: 500;background-color: #87B32F;border-radius: 6px 6px 6px 6px;" onclick="window.location.href='pide-tu-servicio.php';"  value="Cerrar"/>
 </div> 


<script type="text/javascript">

function ocultarinfo(){

	document.getElementById("myModalinfo").style.display="none";
	document.getElementById("myModal").style.display="none";
	document.getElementById("myModalfinal").style.display="none";
	document.getElementById("bdpg").style.overflow="auto";

}


</script>
</div>



				<div class="elementor-element elementor-element-082bfd7 elementor-widget elementor-widget-accordion" data-id="082bfd7" data-element_type="widget" data-widget_type="accordion.default">
				<div class="elementor-widget-container">
					<div class="elementor-accordion" role="tablist">
							<div class="elementor-accordion-item">
					<h2 id="elementor-tab-title-8561" class="elementor-tab-title elementor-active" data-tab="1" role="tab" aria-controls="elementor-tab-content-8561" aria-expanded="true" tabindex="0" aria-selected="true">
													<span class="elementor-accordion-icon elementor-accordion-icon-right" aria-hidden="true">
															<span class="elementor-accordion-icon-closed"><img src="imagenes-verde/Coomeva-Flecha-abajo.png" class="fas fa-chevron-down"></img></span>
								<span class="elementor-accordion-icon-opened"><img src="imagenes-verde/Coomeva-Flecha-arriba.png" class="fas fa-chevron-up"></img></span>
														</span>
												<a class="elementor-accordion-title" href="">Asistencia Hogar</a>
					</h2>





<div id="elementor-tab-content-8561" class="elementor-tab-content elementor-clearfix elementor-active" data-tab="1" role="tabpanel" aria-labelledby="elementor-tab-title-8561" style="display: block;"><div class="supsystic-table-loader la-ball-spin-clockwise-fade-rotating la-2x" style="color: rgb(51, 51, 51); display: none;"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div><div id="supsystic-table-1_18210" class="supsystic-tables-wrap " style="width: 100%; visibility: visible;" data-table-width-fixed="100%" data-table-width-mobile="100%"><div id="supsystic-table-1_wrapper" class="dataTables_wrapper no-footer"><div id="supsystic-table-1_processing" class="dataTables_processing" style="display: none;">Processing...</div><table id="supsystic-table-1" class="supsystic-table border stripe lightboxImg no-border dataTable no-footer" data-id="1" data-view-id="1_18210" data-title="Asistencia Adulto Mayor" data-currency-format="$1,000.00" data-percent-format="10.00%" data-date-format="DD.MM.YYYY" data-time-format="HH:mm" data-features="[&quot;after_table_loaded_script&quot;]" data-search-value="" data-lightbox-img="" data-head-rows-count="1" data-pagination-length="50,100,All" data-auto-index="off" data-searching-setP��.�U  P��.�U                  ��.�U          p�.�U  ���.�U          p��.�U   @      p��.�U          ng="default" data-override="{&quot;emptyTable&quot;:&quot;&quot;,&quot;info&quot;:&quot;&quot;,&quot;infoEmpty&quot;:&quot;&quot;,&quot;infoFiltered&quot;:&quot;&quot;,&quot;lengthMenu&quot;:&quot;&quot;,&quot;search&quot;:&quot;&quot;,&quot;zeroRecords&quot;:&quot;&quot;,&quot;exportLabel&quot;:&quot;&quot;,&quot;file&quot;:&quot;default&quot;}" data-merged="[]" data-responsive-mode="0" data-from-history="0" role="grid" style="width: 100%;"><thead><tr role="row"><th class="" style="width:; padding: 0 !important;" rowspan="1" colspan="1" data-original-value="" data-order=""></th><th class="" style="width:; padding: 0 !impor�l�.�U  �l�.�U                  `�.�U          0�.�U  8m�.�U          �l�.�U   @      �l�.�U          ding: 0 !important;" rowspan="1" colspan="1" data-original-value="" data-order=""></th><th class="" style="width:; padding: 0 !important;" rowspan="1" colspan="1" data-original-value="" data-order=""></th><th class="" style="width:; padding: 0 !important;" rowspan="1" colspan="1" data-original-value="" data-order=""></th></tr></thead><tbody><tr class="odd"><td data-cell-id="A1" data-x="0" data-y="1" data-db-index="1" class="fsize-16 htCenter underline htMiddle" data-cell-type="text" data-original-value="Asistencias" data-order="Asistencias" style="min-width: 55.0265%; font-size: 16px; line-height: 22px;">Asistencias</td><td data-cell-id="B1" data-x="1" data-y="1" data-db-index="1" class="fsize-16 htCenter underline htMiddle" data-cell-type="text" data-original-value="Eventos semestre" data-order="Eventos semestre" style="min-width: 16.7549%; font-size: 16px; line-height: 22px;">Eventos anuales</td><td data-cell-id="C1" data-x="2" data-y="1" data-db-index="1" class="fsize-16 htCenter underline htMiddle" data-cell-type="text" data-original-value="Puntos" data-order="Puntos" style="min-width: 10.4938%; font-size: 16px; line-height: 22px;">Puntos</td><td data-cell-id="D1" data-x="3" data-y="1" data-db-index="1" class="fsize-16 htCenter underline htMiddle" data-cell-type="text" data-original-value="Ver más" data-order="Ver más" style="min-width: 9.3474%; font-size: 16px; line-height: 22px;">Ver más</td><td data-cell-id="E1" data-x="4" data-y="1" data-db-index="1" class="fsize-16 htCenter htMiddle��.�U  ��.�U                  ��.�U          ��.�U  ��.�U          ��.�U   @      ��.�U          h: 8.3774%; font-size: 16px; line-height: 22px;">Solicitar</td></tr>


<?php

//Asis adulto mayor


$sql = "SELECT codasistencia,nombreasistencia,CASE WHEN user_points.eventossolic IS NULL   THEN catalogocoomevars.eventos WHEN user_points.eventossolic='sin limite' THEN catalogocoomevars.eventos ELSE catalogocoomevars.eventos  END AS eventos ,catalogocoomevars.puntos,info,tipo FROM catalogocoomevars LEFT JOIN user_points ON user_points.servicio=catalogocoomevars.nombreasistencia WHERE tipo=1 GROUP BY catalogocoomevars.codasistencia,catalogocoomevars.nombreasistencia,user_points.eventossolic,catalogocoomevars.eventos,catalogocoomevars.puntos,catalogocoomevars.info";
$result = $conn ->query($sql);




$anio="";
while($row=$result->fetch_array(MYSQLI_NUM)){




if($row[1]=="Instalacion de pantallas television, cuadros o articulos decorativos." || $row[1]=="Limpieza de vidrios del hogar." || mb_convert_encoding($row[1],'UTF-8')=="Limpieza profunda de cocina y un baño." || mb_convert_encoding($row[1],'UTF-8')=="Limpieza dental básica." ){

$anio=" EN BOLSA1";

}


if(mb_convert_encoding($row[1],'UTF-8')=="Mano amiga o ayuda para decorar una reunión en tu hogar o salón comunal." || mb_convert_encoding($row[1],'UTF-8')=="Limpieza a BBQ o Asador." || mb_convert_encoding($row[1],'UTF-8')=="Limpieza de muebles."  || mb_convert_encoding($row[1],'UTF-8')=="Lavado basico de carro o moto." || mb_convert_encoding($row[1],'UTF-8')=="Clase virtual de jardinería." ){

$anio2=" EN BOLSA2";

}



?>


					<tr class="even"><td id="a22" data-cell-id="A2" data-x="0" data-y="2" data-db-index="2" class="color-333333 fsize-16 htMiddle" data-cell-type="text" data-original-value="Enfermera para cuidado del adulto después de hospitalización, cirugía o accidente" value="Enfermera para cuidado del adulto después de hospitalización, cirugía o accidente" data-order="Enfermera para cuidado del adulto después de hospitalización, cirugía o accidente" style="color: rgb(51, 51, 51); font-size: 16px; line-height: 22px;">
<?php echo mb_convert_encoding($row[1],'UTF-8') ?></td>

<?php



$sqleventos="SELECT codasistencia,nombreasistencia,CASE WHEN user_points.eventossolic IS NULL   THEN catalogocoomevars.eventos WHEN user_points.eventossolic='sin limite' THEN catalogocoomevars.eventos ELSE catalogocoomevars.eventos - SUM(user_points.eventossolic) END AS eventos ,catalogocoomevars.puntos,info,tipo,bolsa FROM catalogocoomevars LEFT JOIN user_points ON user_points.servicio=catalogocoomevars.nombreasistencia WHERE tipo=1 AND user_points.usuario='".$_SESSION['usuario']."' and nombreasistencia='".$row[1]."' GROUP BY catalogocoomevars.codasistencia,catalogocoomevars.nombreasistencia,user_points.eventossolic,catalogocoomevars.eventos,catalogocoomevars.puntos,catalogocoomevars.info,user_points.usuario";

$resulteventos = $conn ->query($sqleventos);


if($rowev=$resulteventos->fetch_array(MYSQLI_NUM)){
if($row[1]=$rowev[1]){

?>
<td data-cell-id="B2" data-x="1" data-y="2" data-db-index="2" class="htCenter color-333333 fsize-16 htMiddle" data-cell-type="text" data-original-value="1 evento" data-order="1 evento" style="color: rgb(51, 51, 51); font-size: 16px; line-height: 22px;"><?php




if( mb_convert_encoding($row[1],'UTF-8')!="Instalacion de pantallas television, cuadros o articulos decorativos." && mb_convert_encoding($row[1],'UTF-8')!="Limpieza de vidrios del hogar." && mb_convert_encoding($row[1],'UTF-8')!="Limpieza dental básica." && mb_convert_encoding($row[1],'UTF-8')!="Limpieza profunda de cocina y un baño."   &&   mb_convert_encoding($row[1],'UTF-8')=="Mano amiga o ayuda para decorar una reunión en tu hogar o salón comunal."  &&  mb_convert_encoding($row[1],'UTF-8')!="Limpieza a BBQ o Asador."  &&  mb_convert_encoding($row[1],'UTF-8')!="Limpieza de muebles."   &&  mb_convert_encoding($row[1],'UTF-8')!="Lavado basico de carro o moto."  &&  mb_convert_encoding($row[1],'UTF-8')!="Clase virtual de jardinería."){
 echo utf8_encode($rowev[2]); if($rowev[2]<2 && $rowev[2]>0 ){echo ' Evento'.$anio;}else{echo ' Eventos'.$anio;} 
}

if(mb_convert_encoding($row[1],'UTF-8')=="Limpieza de vidrios del hogar." ){
echo utf8_encode('<p id="datop" value="'.$rowev[2].'">'.$rowev[2].'</p>'); if($rowev[2]<2 && $rowev[2]>0 ){echo ' Evento'.$anio;}else{echo ' Eventos'.$anio;} 
}
if(mb_convert_encoding($row[1],'UTF-8')=="Limpieza dental básica." ){
echo utf8_encode('<p id="datop2" value="'.$rowev[2].'">'.$rowev[2].'</p>'); if($rowev[2]<2 && $rowev[2]>0 ){echo ' Evento'.$anio;}else{echo ' Eventos'.$anio;} 
}
if(mb_convert_encoding($row[1],'UTF-8')=="Limpieza profunda de cocina y un baño." ){
echo utf8_encode('<p id="datop3" value="'.$rowev[2].'">'.$rowev[2].'</p>'); if($rowev[2]<2 && $rowev[2]>0 ){echo ' Evento'.$anio;}else{echo ' Eventos'.$anio;} 
}
if(mb_convert_encoding($row[1],'UTF-8')=="Instalacion de pantallas television, cuadros o articulos decorativos." ){
echo utf8_encode('<p id="datop4" value="'.$rowev[2].'">'.$rowev[2].'</p>'); if($rowev[2]<2 && $rowev[2]>0 ){echo ' Evento'.$anio;}else{echo ' Eventos'.$anio;} 
}




//bolsa2


if(mb_convert_encoding($row[1],'UTF-8')!="Mano amiga o ayuda para decorar una reunión en tu hogar o salón comunal." && mb_convert_encoding($row[1],'UTF-8')!="Limpieza a BBQ o Asador." && mb_convert_encoding($row[1],'UTF-8')!="Limpieza de muebles." && mb_convert_encoding($row[1],'UTF-8')!="Lavado basico de carro o moto." &&  mb_convert_encoding($row[1],'UTF-8')!="Clase virtual de jardinería."  ){
 //echo utf8_encode($rowev[2]); if($rowev[2]<2 && $rowev[2]>0 ){echo ' Evento'.$anio;}else{echo ' Eventos'.$anio;} 
}

if(mb_convert_encoding($row[1],'UTF-8')=="Mano amiga o ayuda para decorar una reunión en tu hogar o salón comunal." ){
echo utf8_encode('<p id="datop" value="'.$rowev[2].'">'.$rowev[2].'</p>'); if($rowev[2]<2 && $rowev[2]>0 ){echo ' Evento'.$anio;}else{echo ' Eventos'.$anio;} 
}
if(mb_convert_encoding($row[1],'UTF-8')=="Limpieza a BBQ o Asador." ){
echo utf8_encode('<p id="datop2" value="'.$rowev[2].'">'.$rowev[2].'</p>'); if($rowev[2]<2 && $rowev[2]>0 ){echo ' Evento'.$anio;}else{echo ' Eventos'.$anio;} 
}
if(mb_convert_encoding($row[1],'UTF-8')=="Limpieza de muebles." ){
echo utf8_encode('<p id="datop3" value="'.$rowev[2].'">'.$rowev[2].'</p>'); if($rowev[2]<2 && $rowev[2]>0 ){echo ' Evento'.$anio;}else{echo ' Eventos'.$anio;} 
}
if(mb_convert_encoding($row[1],'UTF-8')=="Lavado basico de carro o moto." ){
echo utf8_encode('<p id="datop4" value="'.$rowev[2].'">'.$rowev[2].'</p>'); if($rowev[2]<2 && $rowev[2]>0 ){echo ' Evento'.$anio;}else{echo ' Eventos'.$anio;} 
}
if(mb_convert_encoding($row[1],'UTF-8')=="Clase virtual de jardinería." ){
echo utf8_encode('<p id="datop4" value="'.$rowev[2].'">'.$rowev[2].'</p>'); if($rowev[2]<2 && $rowev[2]>0 ){echo ' Evento'.$anio;}else{echo ' Eventos'.$anio;} 
}

?></td>

<?php

}else{
?>

<td data-cell-id="B2" data-x="1" data-y="2" data-db-index="2" class="htCenter color-333333 fsize-16 htMiddle" data-cell-type="text" data-original-value="1 evento" data-order="1 evento" style="color: rgb(51, 51, 51); font-size: 16px; line-height: 22px;"><?php 


 if(mb_convert_encoding($row[1],'UTF-8')!="Instalacion de pantallas television, cuadros o articulos decorativos." && mb_convert_encoding($row[1],'UTF-8')!="Limpieza de vidrios del hogar." && mb_convert_encoding($row[1],'UTF-8')!="Limpieza dental básica." && mb_convert_encoding($row[1],'UTF-8')!="Limpieza profunda de cocina y un baño." && mb_convert_encoding($row[1],'UTF-8')=="Instalacion de pantallas television, cuadros o articulos decorativos."  &&  mb_convert_encoding($row[1],'UTF-8')!="Mano amiga o ayuda para decorar una reunión en tu hogar o salón comunal."  &&  mb_convert_encoding($row[1],'UTF-8')!="Limpieza a BBQ o Asador."  &&  mb_convert_encoding($row[1],'UTF-8')=="Limpieza de muebles."   &&  mb_convert_encoding($row[1],'UTF-8')!="Lavado basico de carro o moto."  &&  mb_convert_encoding($row[1],'UTF-8')!="Clase virtual de jardinería."){
echo utf8_encode($row[2]); if($row[2]<2 && $row[2]>0 ){echo ' Evento'.$anio;}else{echo ' Eventos'.$anio;} 
}

if(mb_convert_encoding($row[1],'UTF-8')=="Limpieza de vidrios del hogar." ){
echo utf8_encode('<p id="datop" value="'.$row[2].'">'.$row[2].'</p>'); if($row[2]<2 && $row[2]>0 ){echo ' Evento'.$anio;}else{echo ' Eventos'.$anio;} 
}
if(mb_convert_encoding($row[1],'UTF-8')=="Limpieza dental básica." ){
echo utf8_encode('<p id="datop2" value="'.$row[2].'">'.$row[2].'</p>'); if($row[2]<2 && $row[2]>0 ){echo ' Evento'.$anio;}else{echo ' Eventos'.$anio;} 
}
if(mb_convert_encoding($row[1],'UTF-8')=="Limpieza profunda de cocina y un baño."  ){
echo utf8_encode('<p id="datop3" value="'.$row[2].'">'.$row[2].'</p>'); if($row[2]<2 && $row[2]>0 ){echo ' Evento'.$anio;}else{echo ' Eventos'.$anio;} 
}
if(mb_convert_encoding($row[1],'UTF-8')=="Instalacion de pantallas television, cuadros o articulos decorativos." ){
echo utf8_encode('<p id="datop4" value="'.$row[2].'">'.$row[2].'</p>'); if($row[2]<2 && $row[2]>0 ){echo ' Evento'.$anio;}else{echo ' Eventos'.$anio;} 
}


if(mb_convert_encoding($row[1],'UTF-8')=="Mano amiga o ayuda para decorar una reunión en tu hogar o salón comunal." || mb_convert_encoding($row[1],'UTF-8')=="Limpieza a BBQ o Asador." || mb_convert_encoding($row[1],'UTF-8')=="Limpieza de muebles."  || mb_convert_encoding($row[1],'UTF-8')=="Lavado basico de carro o moto." || mb_convert_encoding($row[1],'UTF-8')=="Clase virtual de jardinería." ){


 echo utf8_encode($row[2]); if($row[2]<2 && $row[2]>0 ){echo ' Evento'.$anio2;}else{echo ' Eventos'.$anio2;} 
}

if(mb_convert_encoding($row[1],'UTF-8')=="Mano amiga o ayuda para decorar una reunión en tu hogar o salón comunal." ){
echo utf8_encode('<p id="datop5" value="'.$row[2].'">'.$row[2].'</p>'); if($row[2]<2 && $row[2]>0 ){echo ' Evento'.$anio2;}else{echo ' Eventos'.$anio2;} 
}
if(mb_convert_encoding($row[1],'UTF-8')=="Limpieza a BBQ o Asador." ){
echo utf8_encode('<p id="datop6" value="'.$row[2].'">'.$row[2].'</p>'); if($row[2]<2 && $row[2]>0 ){echo ' Evento'.$anio2;}else{echo ' Eventos'.$anio2;} 
}
if(mb_convert_encoding($row[1],'UTF-8')=="Limpieza de muebles." ){
echo utf8_encode('<p id="datop7" value="'.$row[2].'">'.$row[2].'</p>'); if($row[2]<2 && $row[2]>0 ){echo ' Evento'.$anio2;}else{echo ' Eventos'.$anio2;} 
}
if(mb_convert_encoding($row[1],'UTF-8')=="Lavado basico de carro o moto." ){
echo utf8_encode('<p id="datop8" value="'.$row[2].'">'.$row[2].'</p>'); if($row[2]<2 && $row[2]>0 ){echo ' Evento'.$anio2;}else{echo ' Eventos'.$anio2;} 
}

if(mb_convert_encoding($row[1],'UTF-8')=="Clase virtual de jardinería." ){
echo utf8_encode('<p id="datop9" value="'.$row[2].'">'.$row[2].'</p>'); if($row[2]<2 && $row[2]>0 ){echo ' Evento'.$anio2;}else{echo ' Eventos'.$anio2;} 
}


?></td>

<?php
}
}
else{
?>


<td data-cell-id="B2" data-x="1" data-y="2" data-db-index="2" class="htCenter color-333333 fsize-16 htMiddle" data-cell-type="text" data-original-value="1 evento" data-order="1 evento" style="color: rgb(51, 51, 51); font-size: 16px; line-height: 22px;"><?php 


if(mb_convert_encoding($row[1],'UTF-8')!="Instalacion de pantallas television, cuadros o articulos decorativos." && mb_convert_encoding($row[1],'UTF-8')!="Limpieza de vidrios del hogar." && mb_convert_encoding($row[1],'UTF-8')!="Limpieza profunda de cocina y un baño." && mb_convert_encoding($row[1],'UTF-8')!="Limpieza dental básica." && mb_convert_encoding($row[1],'UTF-8')!="Limpieza profunda de cocina y un baño."  && mb_convert_encoding($row[1],'UTF-8')!="Mano amiga o ayuda para decorar una reunión en tu hogar o salón comunal."  &&  mb_convert_encoding($row[1],'UTF-8')!="Limpieza a BBQ o Asador."  &&  mb_convert_encoding($row[1],'UTF-8')!="Limpieza de muebles."   &&  mb_convert_encoding($row[1],'UTF-8')!="Lavado basico de carro o moto."  &&  mb_convert_encoding($row[1],'UTF-8')!="Clase virtual de jardinería."){
echo utf8_encode($row[2]); if($row[2]<2 && $row[2]>0 ){echo ' Evento'.$anio;}else{echo ' Eventos'.$anio;} 
}


if(mb_convert_encoding($row[1],'UTF-8')=="Limpieza de vidrios del hogar." ){
echo utf8_encode('<p id="datop" value="'.$row[2].'">'.$row[2].'</p>'); if($row[2]<2 && $row[2]>0 ){echo ' Evento'.$anio;}else{echo ' Eventos'.$anio;} 
}
if(mb_convert_encoding($row[1],'UTF-8')=="Limpieza dental básica." ){
echo utf8_encode('<p id="datop2" value="'.$row[2].'">'.$row[2].'</p>'); if($row[2]<2 && $row[2]>0 ){echo ' Evento'.$anio;}else{echo ' Eventos'.$anio;} 
}
if(mb_convert_encoding($row[1],'UTF-8')=="Limpieza profunda de cocina y un baño." ){
echo utf8_encode('<p id="datop3" value="'.$row[2].'">'.$row[2].'</p>'); if($row[2]<2 && $row[2]>0 ){echo ' Evento'.$anio;}else{echo ' Eventos'.$anio;} 
}
if(mb_convert_encoding($row[1],'UTF-8')=="Instalacion de pantallas television, cuadros o articulos decorativos." ){
echo utf8_encode('<p id="datop4" value="'.$row[2].'">'.$row[2].'</p>'); if($row[2]<2 && $row[2]>0 ){echo ' Evento'.$anio;}else{echo ' Eventos'.$anio;} 
}


//bolsa2

if(mb_convert_encoding($row[1],'UTF-8')=="Mano amiga o ayuda para decorar una reunión en tu hogar o salón comunal." || mb_convert_encoding($row[1],'UTF-8')=="Limpieza a BBQ o Asador." || mb_convert_encoding($row[1],'UTF-8')=="Limpieza de muebles."  || mb_convert_encoding($row[1],'UTF-8')=="Lavado basico de carro o moto." || mb_convert_encoding($row[1],'UTF-8')=="Clase virtual de jardinería." ){
 echo utf8_encode($row[2]); if($row[2]<2 && $row[2]>0 ){echo ' Evento'.$anio2;}else{echo ' Eventos'.$anio2;} 
}
/*
if(mb_convert_encoding($row[1],'UTF-8')=="Mano amiga o ayuda para decorar una reunión en tu hogar o salón comunal." ){
echo utf8_encode('<p id="datop5" value="'.$row[2].'">'.$row[2].'</p>'); if($row[2]<2 && $row[2]>0 ){echo ' Evento'.$anio2;}else{echo ' Eventos'.$anio2;} 
}
if(mb_convert_encoding($row[1],'UTF-8')=="Limpieza a BBQ o Asador." ){
echo utf8_encode('<p id="datop6" name="datop6" value="'.$row[2].'">'.$row[2].'</p>'); if($row[2]<2 && $row[2]>0 ){echo ' Evento'.$anio2;}else{echo ' Eventos'.$anio2;} 
}
if(mb_convert_encoding($row[1],'UTF-8')=="Limpieza de muebles." ){
echo utf8_encode('<p id="datop7" name="datop7" value="'.$row[2].'">'.$row[2].'</p>'); if($row[2]<2 && $row[2]>0 ){echo ' Evento'.$anio2;}else{echo ' Eventos'.$anio2;} 
}
if(mb_convert_encoding($row[1],'UTF-8')=="Lavado basico de carro o moto." ){
echo utf8_encode('<p id="datop8" value="'.$row[2].'">'.$row[2].'</p>'); if($row[2]<2 && $row[2]>0 ){echo ' Evento'.$anio2;}else{echo ' Eventos'.$anio2;} 
}

if(mb_convert_encoding($row[1],'UTF-8')=="Clase virtual de jardinería." ){
echo utf8_encode('<p id="datop9" value="'.$row[2].'">'.$row[2].'</p>'); if($row[2]<2 && $row[2]>0 ){echo ' Evento'.$anio2;}else{echo ' Eventos'.$anio2;} 
}

*/
?></td>


<?php
$anio="";
$anio2="";
}

?>


<td id="c300" data-cell-id="C2" data-x="2" data-y="2" data-db-index="2" class="htCenter color-333333 fsize-16 htMiddle" data-cell-type="text" data-cell-format-type="number" data-original-value="300" data-order="300" style="color: rgb(51, 51, 51); font-size: 16px; line-height: 22px;"><?php echo utf8_encode($row[3]); ?></td>


<?php
if(mb_convert_encoding($row[1],'UTF-8')!="Limpieza dental básica." && mb_convert_encoding($row[1],'UTF-8')!="Limpieza profunda de cocina y un baño." && mb_convert_encoding($row[1],'UTF-8')!="Instalacion de pantallas television, cuadros o articulos decorativos." && mb_convert_encoding($row[1],'UTF-8')!="Limpieza a BBQ o Asador."  && mb_convert_encoding($row[1],'UTF-8')!="Limpieza de muebles." &&  mb_convert_encoding($row[1],'UTF-8')!="Clase virtual de jardinería." &&  mb_convert_encoding($row[1],'UTF-8')!="Mano amiga o ayuda para decorar una reunión en tu hogar o salón comunal."){
?>
<td id="d22" data-cell-id="D2" data-x="3" data-y="2" data-db-index="2" class="htCenter htMiddle" data-cell-type="text" data-original-value="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/05/tablas-iconos-2-37.png&quot; class=&quot;stbSkipLazy alignnone size-small&quot; width=&quot;27&quot; height=&quot;114&quot;>" data-order="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/05/tablas-iconos-2-37.png&quot; class=&quot;stbSkipLazy alignnone size-small&quot; width=&quot;27&quot; height=&quot;114&quot;>"><img loading="lazy" src="http://www.igroupsolution.com/wp-content/uploads/2022/05/tablas-iconos-2-37.png" style="cursor: pointer" class="stbSkipLazy alignnone size-small" width="27" onclick="modalclickinfo('<?php $reemplazo=str_replace("(","",mb_convert_encoding($row[4],'UTF-8')); $reemplazo2=str_replace(")","",$reemplazo); $reemplazo3=str_replace("\r\n","-sl-",$reemplazo2); echo $reemplazo3; ?>');" height="114"></td>
<?php
}
else{
?>

<td id="d22" data-cell-id="D2" data-x="3" data-y="2" data-db-index="2" class="htCenter htMiddle" data-cell-type="text" ></td>

<?php
}

?>


<?php


$sqleventosbn="SELECT codasistencia,nombreasistencia,CASE WHEN user_points.eventossolic IS NULL   THEN catalogocoomevars.eventos WHEN user_points.eventossolic='sin limite' THEN catalogocoomevars.eventos ELSE catalogocoomevars.eventos - SUM(user_points.eventossolic) END AS eventos ,catalogocoomevars.puntos,info,tipo FROM catalogocoomevars LEFT JOIN user_points ON user_points.servicio=catalogocoomevars.nombreasistencia WHERE tipo=1 AND user_points.usuario='".$_SESSION['usuario']."' and nombreasistencia='".$row[1]."' GROUP BY catalogocoomevars.codasistencia,catalogocoomevars.nombreasistencia,user_points.eventossolic,catalogocoomevars.eventos,catalogocoomevars.puntos,catalogocoomevars.info,user_points.usuario";

$resulteventosbn = $conn ->query($sqleventosbn);





if($rowevn=$resulteventosbn->fetch_array(MYSQLI_NUM)){



if($row[1]=$rowevn[1]){

?>

<td data-cell-id="E2" data-x="4" data-y="2" data-db-index="2" class="color-333333 fsize-16 htCenter htMiddle" data-cell-type="text" data-original-value="<img  loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;28&quot; height=&quot;84&quot;>" data-order="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;28&quot; height=&quot;84&quot;>" style="color: rgb(51, 51, 51); font-size: 16px; line-height: 22px;"><img loading="lazy" src="http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png" style="cursor: pointer"  id="btnModal" onclick="('<?php echo utf8_encode($row[3]); ?>','<?php echo mb_convert_encoding($row[1],'UTF-8'); ?>','<?php echo utf8_encode($rowevn[2]); ?>');"  class="stbSkipLazy alignnone size-full" width="28" height="84"></td></tr>

<?php

}
else
{
?>

<td data-cell-id="E2" data-x="4" data-y="2" data-db-index="2" class="color-333333 fsize-16 htCenter htMiddle" data-cell-type="text" data-original-value="<img  loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;28&quot; height=&quot;84&quot;>" data-order="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;28&quot; height=&quot;84&quot;>" style="color: rgb(51, 51, 51); font-size: 16px; line-height: 22px;"><img loading="lazy" src="http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png" style="cursor: pointer"  id="btnModal" onclick="abrirModal('<?php echo utf8_encode($row[3]); ?>','<?php echo mb_convert_encoding($row[1],'UTF-8'); ?>','<?php echo utf8_encode($row[2]); ?>');"  class="stbSkipLazy alignnone size-full" width="28" height="84"></td></tr>


<?php

}
}else
{


if(mb_convert_encoding($row[1],'UTF-8')=="Limpieza dental básica."){


?>


<td data-cell-id="E2" data-x="4" data-y="2" data-db-index="2" class="color-333333 fsize-16 htCenter htMiddle" data-cell-type="text" data-original-value="<img  loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;28&quot; height=&quot;84&quot;>" data-order="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;28&quot; height=&quot;84&quot;>" style="color: rgb(51, 51, 51); font-size: 16px; line-height: 22px;"><img loading="lazy" src="http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png" style="cursor: pointer"  id="btnModalld" onclick="modalclick_bolsa('<?php echo utf8_encode($row[3]); ?>','<?php echo mb_convert_encoding($row[1],'UTF-8'); ?>','<?php echo utf8_encode($row[2]); ?>');"  class="stbSkipLazy alignnone size-full" width="28" height="84"></td></tr>


<?php
}
else if(mb_convert_encoding($row[1],'UTF-8')=="Limpieza de vidrios del hogar."){


?>


<td data-cell-id="E2" data-x="4" data-y="2" data-db-index="2" class="color-333333 fsize-16 htCenter htMiddle" data-cell-type="text" data-original-value="<img  loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;28&quot; height=&quot;84&quot;>" data-order="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;28&quot; height=&quot;84&quot;>" style="color: rgb(51, 51, 51); font-size: 16px; line-height: 22px;"><img loading="lazy" src="http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png" style="cursor: pointer"  id="btnModalhg" onclick="modalclick_bolsa2('<?php echo utf8_encode($row[3]); ?>','<?php echo mb_convert_encoding($row[1],'UTF-8'); ?>','<?php echo utf8_encode($row[2]); ?>');"  class="stbSkipLazy alignnone size-full" width="28" height="84"></td></tr>


<?php
}
else if(mb_convert_encoding($row[1],'UTF-8')=="Limpieza profunda de cocina y un baño."){


?>


<td data-cell-id="E2" data-x="4" data-y="2" data-db-index="2" class="color-333333 fsize-16 htCenter htMiddle" data-cell-type="text" data-original-value="<img  loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;28&quot; height=&quot;84&quot;>" data-order="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;28&quot; height=&quot;84&quot;>" style="color: rgb(51, 51, 51); font-size: 16px; line-height: 22px;"><img loading="lazy" src="http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png" style="cursor: pointer"  id="btnModalcb" onclick="modalclick_bolsa3('<?php echo utf8_encode($row[3]); ?>','<?php echo mb_convert_encoding($row[1],'UTF-8'); ?>','<?php echo utf8_encode($row[2]); ?>');"  class="stbSkipLazy alignnone size-full" width="28" height="84"></td></tr>


<?php
}
else if(mb_convert_encoding($row[1],'UTF-8')=="Instalación de pantallas televisión, cuadros o artículos decorativos."){


?>


<td data-cell-id="E2" data-x="4" data-y="2" data-db-index="2" class="color-333333 fsize-16 htCenter htMiddle" data-cell-type="text" data-original-value="<img  loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;28&quot; height=&quot;84&quot;>" data-order="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;28&quot; height=&quot;84&quot;>" style="color: rgb(51, 51, 51); font-size: 16px; line-height: 22px;"><img loading="lazy" src="http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png" style="cursor: pointer"  id="btnModaltv" onclick="modalclick_bolsa4('<?php echo utf8_encode($row[3]); ?>','<?php echo mb_convert_encoding($row[1],'UTF-8'); ?>','<?php echo utf8_encode($row[2]); ?>');"  class="stbSkipLazy alignnone size-full" width="28" height="84"></td></tr>


<?php
}

/*

else if(mb_convert_encoding($row[1],'UTF-8')=="Mano amiga o ayuda para decorar una reunión en tu hogar o salón comunal."){


?>


<td data-cell-id="E2" data-x="4" data-y="2" data-db-index="2" class="color-333333 fsize-16 htCenter htMiddle" data-cell-type="text" data-original-value="<img  loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;28&quot; height=&quot;84&quot;>" data-order="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;28&quot; height=&quot;84&quot;>" style="color: rgb(51, 51, 51); font-size: 16px; line-height: 22px;"><img loading="lazy" src="http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png" style="cursor: pointer"  id="btnModaltv" onclick="modalclick_bolsa5('<?php echo utf8_encode($row[3]); ?>','<?php echo mb_convert_encoding($row[1],'UTF-8'); ?>','<?php echo utf8_encode($row[2]); ?>');"  class="stbSkipLazy alignnone size-full" width="28" height="84"></td></tr>


<?php
}

else if(mb_convert_encoding($row[1],'UTF-8')=="Limpieza a BBQ o Asador."){


?>


<td data-cell-id="E2" data-x="4" data-y="2" data-db-index="2" class="color-333333 fsize-16 htCenter htMiddle" data-cell-type="text" data-original-value="<img  loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;28&quot; height=&quot;84&quot;>" data-order="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;28&quot; height=&quot;84&quot;>" style="color: rgb(51, 51, 51); font-size: 16px; line-height: 22px;"><img loading="lazy" src="http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png" style="cursor: pointer"  id="btnModaltv" onclick="modalclick_bolsa6('<?php echo utf8_encode($row[3]); ?>','<?php echo mb_convert_encoding($row[1],'UTF-8'); ?>','<?php echo utf8_encode($row[2]); ?>');"  class="stbSkipLazy alignnone size-full" width="28" height="84"></td></tr>


<?php
}
else if(mb_convert_encoding($row[1],'UTF-8')=="Limpieza de muebles."){


?>


<td data-cell-id="E2" data-x="4" data-y="2" data-db-index="2" class="color-333333 fsize-16 htCenter htMiddle" data-cell-type="text" data-original-value="<img  loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;28&quot; height=&quot;84&quot;>" data-order="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;28&quot; height=&quot;84&quot;>" style="color: rgb(51, 51, 51); font-size: 16px; line-height: 22px;"><img loading="lazy" src="http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png" style="cursor: pointer"  id="btnModaltv" onclick="modalclick_bolsa7('<?php echo utf8_encode($row[3]); ?>','<?php echo mb_convert_encoding($row[1],'UTF-8'); ?>','<?php echo utf8_encode($row[2]); ?>');"  class="stbSkipLazy alignnone size-full" width="28" height="84"></td></tr>


<?php
}

else if(mb_convert_encoding($row[1],'UTF-8')=="Clase virtual de jardinería."){


?>


<td data-cell-id="E2" data-x="4" data-y="2" data-db-index="2" class="color-333333 fsize-16 htCenter htMiddle" data-cell-type="text" data-original-value="<img  loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;28&quot; height=&quot;84&quot;>" data-order="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;28&quot; height=&quot;84&quot;>" style="color: rgb(51, 51, 51); font-size: 16px; line-height: 22px;"><img loading="lazy" src="http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png" style="cursor: pointer"  id="btnModaltv" onclick="modalclick_bolsa8('<?php echo utf8_encode($row[3]); ?>','<?php echo mb_convert_encoding($row[1],'UTF-8'); ?>','<?php echo utf8_encode($row[2]); ?>');"  class="stbSkipLazy alignnone size-full" width="28" height="84"></td></tr>


<?php
}

else if(mb_convert_encoding($row[1],'UTF-8')=="Lavado basico de carro o moto."){


?>


<td data-cell-id="E2" data-x="4" data-y="2" data-db-index="2" class="color-333333 fsize-16 htCenter htMiddle" data-cell-type="text" data-original-value="<img  loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;28&quot; height=&quot;84&quot;>" data-order="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;28&quot; height=&quot;84&quot;>" style="color: rgb(51, 51, 51); font-size: 16px; line-height: 22px;"><img loading="lazy" src="http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png" style="cursor: pointer"  id="btnModaltv" onclick="modalclick_bolsa9('<?php echo utf8_encode($row[3]); ?>','<?php echo mb_convert_encoding($row[1],'UTF-8'); ?>','<?php echo utf8_encode($row[2]); ?>');"  class="stbSkipLazy alignnone size-full" width="28" height="84"></td></tr>


<?php
}

*/



else{
?>


<td data-cell-id="E2" data-x="4" data-y="2" data-db-index="2" class="color-333333 fsize-16 htCenter htMiddle" data-cell-type="text" data-original-value="<img  loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;28&quot; height=&quot;84&quot;>" data-order="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;28&quot; height=&quot;84&quot;>" style="color: rgb(51, 51, 51); font-size: 16px; line-height: 22px;"><img loading="lazy" src="http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png" style="cursor: pointer"   id="btnModal" onclick="abrirModal('<?php echo utf8_encode($row[3]); ?>','<?php echo mb_convert_encoding($row[1],'UTF-8'); ?>','<?php echo utf8_encode($row[2]); ?>');"  class="stbSkipLazy alignnone size-full" width="28" height="84"></td></tr>

<?php
}
}

}
?>




</tr></tbody><style>#supsystic-table-1.oneColumnWithLabels td:nth-of-type(1):before { content: ""; }#supsystic-table-1.oneColumnWithLabels td:nth-of-type(2):before { content: ""; }#supsystic-table-1.oneColumnWithLabels td:nth-of-type(3):before { content: ""; }#supsystic-table-1.oneColumnWithLabels td:nth-of-type(4):before { content: ""; }#supsystic-table-1.oneColumnWithLabels td:nth-of-type(5):before { content: ""; }</style></table></div><!-- /#supsystic-table-1.supsystic-table --></div><!-- /.supsystic-tables-wrap --><!-- Tables Generator by Supsystic --><!-- Version: 1.10.14 --><!-- http://supsystic.com/ --></div>
				</div>
								</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-017f8ef elementor-widget elementor-widget-accordion" data-id="017f8ef" data-element_type="widget" data-widget_type="accordion.default">
				<div class="elementor-widget-container">
					<div class="elementor-accordion" role="tablist">
							<div class="elementor-accordion-item">
					<h2 id="elementor-tab-title-2291" class="elementor-tab-title elementor-active" data-tab="1" role="tab" aria-controls="elementor-tab-content-2291" aria-expanded="true" tabindex="0" aria-selected="true">
													<span class="elementor-accordion-icon elementor-accordion-icon-right" aria-hidden="true">
															<span class="elementor-accordion-icon-closed"><img src="imagenes-verde/Coomeva-Flecha-abajo.png" class="fas fa-chevron-down"></img></span>
								<span class="elementor-accordion-icon-opened"><img src="imagenes-verde/Coomeva-Flecha-arriba.png" class="fas fa-chevron-up"></img></span>
														</span>
												<a class="elementor-accordion-title" href="">Asistencia Médica</a>
					</h2>
					<div id="elementor-tab-content-2291" class="elementor-tab-content elementor-clearfix elementor-active" data-tab="1" role="tabpanel" aria-labelledby="elementor-tab-title-2291" style="display: block;"><div class="supsystic-table-loader spinner" style="background-color: rgb(0, 0, 0); display: none;"></div><div id="supsystic-table-2_78977" class="supsystic-tables-wrap " style="width: 100%; visibility: visible;" data-table-width-fixed="100%" data-table-width-mobile="100%"><div id="supsystic-table-2_wrapper" class="dataTables_wrapper no-footer"><div id="supsystic-table-2_processing" class="dataTables_processing" style="display: none;">Processing...</div><table id="supsystic-table-2" class="supsystic-table border stripe lightboxImg no-border dataTable no-footer" data-id="2" data-view-id="2_78977" data-title="Asistencia Hogar" data-currency-format="$1,000.00" data-percent-format="10.00%" data-date-format="DD.MM.YYYY" data-time-format="HH:mm" data-features="[&quot;after_table_loaded_script&quot;]" data-search-value="" data-lightbox-img="" data-head-rows-count="1" data-pagination-length="50,100,All" data-auto-index="off" data-searching-settings="{&quot;columnSearchPosition&quot;:&quot;bottom&quot;,&quot;minChars&quot;:&quot;0&quot;}" data-lang="default" data-override="{&quot;emptyTable&quot;:&quot;&quot;,&quot;info&quot;:&quot;&quot;,&quot;infoEmpty&quot;:&quot;&quot;,&quot;infoFiltered&quot;:&quot;&quot;,&quot;lengthMenu&quot;:&quot;&quot;,&quot;search&quot;:&quot;&quot;,&quot;zeroRecords&quot;:&quot;&quot;,&quot;exportLabel&quot;:&quot;&quot;,&quot;file&quot;:&quot;default&quot;}" data-merged="[]" data-responsive-mode="0" data-from-history="0" role="grid" style="width: 100%;"><thead><tr role="row"><th class="" style="width:; padding: 0 !important;" rowspan="1" colspan="1" data-original-value="" data-order=""></th><th class="" style="width:; padding: 0 !important;" rowspan="1" colspan="1" data-original-value="" data-order=""></th><th class="" style="width:; padding: 0 !important;" rowspan="1" colspan="1" data-original-value="" data-order=""></th><th class="" style="width:; padding: 0 !important;" rowspan="1" colspan="1" data-original-value="" data-order=""></th><th class="" style="width:; padding: 0 !important;" rowspan="1" colspan="1" data-original-value="" data-order=""></th></tr></thead><tbody><tr class="odd"><td data-cell-id="A1" data-x="0" data-y="1" data-db-index="1" class="htCenter htMiddle fsize-16 underline color-333333" data-cell-type="text" data-original-value="Asistencias" data-order="Asistencias" style="min-width: 32.4042%; color: rgb(51, 51, 51); font-size: 16px; line-height: 22px;">Asistencias</td><td data-cell-id="B1" data-x="1" data-y="1" data-db-index="1" class="htCenter fsize-16 color-333333 htMiddle underline" data-cell-type="text" data-original-value="Eventos semestre" data-order="Eventos semestre" style="min-width: 17.9443%; color: rgb(51, 51, 51); font-size: 16px; line-height: 22px;">Eventos anuales</td><td data-cell-id="C1" data-x="2" data-y="1" data-db-index="1" class="htCenter fsize-16 color-333333 htMiddle underline" data-cell-type="text" data-original-value="Puntos" data-order="Puntos" style="min-width: 14.2857%; color: rgb(51, 51, 51); font-size: 16px; line-height: 22px;">Puntos</td><td data-cell-id="D1" data-x="3" data-y="1" data-db-index="1" class="htMiddle htCenter underline" data-cell-type="text" data-original-value="Ver más" data-order="Ver más" style="min-width: 17.5958%; ">Ver más</td><td data-cell-id="E1" data-x="4" data-y="1" data-db-index="1" class="htCenter fsize-16 color-333333 htMiddle underline" data-cell-type="text" data-original-value="Solicitar" data-order="Solicitar" style="min-width: 17.77%; color: rgb(51, 51, 51); font-size: 16px; line-height: 22px;">Solicitar</td></tr>









<?php

//Asis Hogar


$sql = "SELECT codasistencia,nombreasistencia,CASE WHEN user_points.eventossolic IS NULL   THEN catalogocoomevars.eventos WHEN user_points.eventossolic='sin limite' THEN catalogocoomevars.eventos ELSE catalogocoomevars.eventos END AS eventos ,catalogocoomevars.puntos,info,tipo FROM catalogocoomevars LEFT JOIN user_points ON user_points.servicio=catalogocoomevars.nombreasistencia WHERE tipo=2 GROUP BY catalogocoomevars.codasistencia,catalogocoomevars.nombreasistencia,user_points.eventossolic,catalogocoomevars.eventos,catalogocoomevars.puntos,catalogocoomevars.info";
$result = $conn ->query($sql);






while($row=$result->fetch_array(MYSQLI_NUM)){

?>




<tr class="even"><td data-cell-id="A2" data-x="0" data-y="2" data-db-index="2" class="color-333333 fsize-16 htMiddle" data-cell-type="text" data-original-value="Servicio de plomería por emergencia" data-order="Servicio de plomería por emergencia" style="color: rgb(51, 51, 51); font-size: 16px; line-height: 22px;">

<?php echo $row[1];  ?></td>



<?php


$sqleventos="SELECT codasistencia,nombreasistencia,CASE WHEN user_points.eventossolic IS NULL   THEN catalogocoomevars.eventos WHEN user_points.eventossolic='sin limite' THEN catalogocoomevars.eventos ELSE catalogocoomevars.eventos - SUM(user_points.eventossolic) END AS eventos ,catalogocoomevars.puntos,info,tipo FROM catalogocoomevars LEFT JOIN user_points ON user_points.servicio=catalogocoomevars.nombreasistencia WHERE tipo=2 AND user_points.usuario='".$_SESSION['usuario']."' and nombreasistencia='".$row[1]."' GROUP BY catalogocoomevars.codasistencia,catalogocoomevars.nombreasistencia,user_points.eventossolic,catalogocoomevars.eventos,catalogocoomevars.puntos,catalogocoomevars.info,user_points.usuario";

$resulteventos = $conn ->query($sqleventos);


if($rowev=$resulteventos->fetch_array(MYSQLI_NUM)){
if($row[1]=$rowev[1]){

?>
<td data-cell-id="B2" data-x="1" data-y="2" data-db-index="2" class="htCenter color-333333 fsize-16 htMiddle" data-cell-type="text" data-original-value="1 evento" data-order="1 evento" style="color: rgb(51, 51, 51); font-size: 16px; line-height: 22px;"><?php echo utf8_encode($rowev[2]); if($rowev[2]<2 && $rowev[2]>0 ){echo ' Evento';}else{echo ' Eventos';} ?></td>

<?php

}else{
?>

<td data-cell-id="B2" data-x="1" data-y="2" data-db-index="2" class="htCenter color-333333 fsize-16 htMiddle" data-cell-type="text" data-original-value="1 evento" data-order="1 evento" style="color: rgb(51, 51, 51); font-size: 16px; line-height: 22px;"><?php echo utf8_encode($row[2]); if($row[2]<2 && $row[2]>0 ){echo ' Evento';}else{echo ' Eventos';} ?></td>

<?php

}
}else{
?>
<td data-cell-id="B2" data-x="1" data-y="2" data-db-index="2" class="htCenter color-333333 fsize-16 htMiddle" data-cell-type="text" data-original-value="1 evento" data-order="1 evento" style="color: rgb(51, 51, 51); font-size: 16px; line-height: 22px;"><?php echo utf8_encode($row[2]); if($row[2]<2 && $row[2]>0 ){echo ' Evento';}else{echo ' Eventos';} ?></td>

<?php

}
?>



<td data-cell-id="C2" data-x="2" data-y="2" data-db-index="2" class="color-333333 htCenter htMiddle fsize-16" data-cell-type="text" data-cell-format-type="number" data-original-value="700" data-order="700" style="color: rgb(51, 51, 51); font-size: 16px; line-height: 22px;"><?php echo utf8_encode($row[3]);  ?></td>





<td data-cell-id="D2" data-x="3" data-y="2" data-db-index="2" class="htCenter htMiddle" data-cell-type="text" data-original-value="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/05/tablas-iconos-2-37.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;27&quot; height=&quot;114&quot;>" data-order="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/05/tablas-iconos-2-37.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;27&quot; height=&quot;114&quot;>"><img loading="lazy" src="http://www.igroupsolution.com/wp-content/uploads/2022/05/tablas-iconos-2-37.png" class="stbSkipLazy alignnone size-full" width="27" style="cursor: pointer" onclick="modalclickinfo('<?php $reemplazo=str_replace("(","",mb_convert_encoding($row[4],'UTF-8')); $reemplazo2=str_replace(")","",$reemplazo); $reemplazo3=str_replace("\r\n","-sl-",$reemplazo2); echo $reemplazo3; ?>');" height="114"></td>








<?php


$sqleventosbn="SELECT codasistencia,nombreasistencia,CASE WHEN user_points.eventossolic IS NULL   THEN catalogocoomevars.eventos WHEN user_points.eventossolic='sin limite' THEN catalogocoomevars.eventos ELSE catalogocoomevars.eventos - SUM(user_points.eventossolic) END AS eventos ,catalogocoomevars.puntos,info,tipo FROM catalogocoomevars LEFT JOIN user_points ON user_points.servicio=catalogocoomevars.nombreasistencia WHERE tipo=2 AND user_points.usuario='".$_SESSION['usuario']."' and nombreasistencia='".$row[1]."' GROUP BY catalogocoomevars.codasistencia,catalogocoomevars.nombreasistencia,user_points.eventossolic,catalogocoomevars.eventos,catalogocoomevars.puntos,catalogocoomevars.info,user_points.usuario";

$resulteventosbn = $conn ->query($sqleventosbn);


if($rowevn=$resulteventosbn->fetch_array(MYSQLI_NUM)){
if($row[1]=$rowevn[1]){

?>

<td data-cell-id="E2" data-x="4" data-y="2" data-db-index="2" class="color-333333 fsize-16 htCenter htMiddle" data-cell-type="text" data-original-value="<img  loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;28&quot; height=&quot;84&quot;>" data-order="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;28&quot; height=&quot;84&quot;>" style="color: rgb(51, 51, 51); font-size: 16px; line-height: 22px;"><img loading="lazy" src="http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png" style="cursor: pointer"  id="btnModal" onclick="modalclick('<?php echo utf8_encode($row[3]); ?>','<?php echo mb_convert_encoding($row[1],'UTF-8'); ?>','<?php echo utf8_encode($rowevn[2]); ?>');"  class="stbSkipLazy alignnone size-full" width="28" height="84"></td></tr>

<?php

}
else
{
?>

<td data-cell-id="E2" data-x="4" data-y="2" data-db-index="2" class="color-333333 fsize-16 htCenter htMiddle" data-cell-type="text" data-original-value="<img  loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;28&quot; height=&quot;84&quot;>" data-order="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;28&quot; height=&quot;84&quot;>" style="color: rgb(51, 51, 51); font-size: 16px; line-height: 22px;"><img loading="lazy" src="http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png" style="cursor: pointer"  id="btnModal" onclick="abrirModal('<?php echo utf8_encode($row[3]); ?>','<?php echo mb_convert_encoding($row[1],'UTF-8'); ?>','<?php echo utf8_encode($row[2]); ?>');"  class="stbSkipLazy alignnone size-full" width="28" height="84"></td></tr>


<?php

}
}else
{
?>

<td data-cell-id="E2" data-x="4" data-y="2" data-db-index="2" class="color-333333 fsize-16 htCenter htMiddle" data-cell-type="text" data-original-value="<img  loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;28&quot; height=&quot;84&quot;>" data-order="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;28&quot; height=&quot;84&quot;>" style="color: rgb(51, 51, 51); font-size: 16px; line-height: 22px;"><img loading="lazy" src="http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png" style="cursor: pointer"  id="btnModal" onclick="abrirModal('<?php echo utf8_encode($row[3]); ?>','<?php echo mb_convert_encoding($row[1],'UTF-8'); ?>','<?php echo utf8_encode($row[2]); ?>');"  class="stbSkipLazy alignnone size-full" width="28" height="84"></td></tr>

<?php
}
}
?>





</tbody><style>#supsystic-table-2.oneColumnWithLabels td:nth-of-type(1):before { content: ""; }#supsystic-table-2.oneColumnWithLabels td:nth-of-type(2):before { content: ""; }#supsystic-table-2.oneColumnWithLabels td:nth-of-type(3):before { content: ""; }#supsystic-table-2.oneColumnWithLabels td:nth-of-type(4):before { content: ""; }#supsystic-table-2.oneColumnWithLabels td:nth-of-type(5):before { content: ""; }</style></table></div><!-- /#supsystic-table-2.supsystic-table --></div><!-- /.supsystic-tables-wrap --><!-- Tables Generator by Supsystic --><!-- Version: 1.10.14 --><!-- http://supsystic.com/ --></div>
				</div>
								</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-89557c9 elementor-widget elementor-widget-accordion" data-id="89557c9" data-element_type="widget" data-widget_type="accordion.default">
				<div class="elementor-widget-container">
					<div class="elementor-accordion" role="tablist">
							<div class="elementor-accordion-item">
					<h2 id="elementor-tab-title-4961" class="elementor-tab-title elementor-active" data-tab="1" role="tab" aria-controls="elementor-tab-content-4961" aria-expanded="true" tabindex="0" aria-selected="true">
													<span class="elementor-accordion-icon elementor-accordion-icon-right" aria-hidden="true">
															<span class="elementor-accordion-icon-closed"><img src="imagenes-verde/Coomeva-Flecha-abajo.png" class="fas fa-chevron-down"></img></span>
								<span class="elementor-accordion-icon-opened"><img src="imagenes-verde/Coomeva-Flecha-arriba.png" class="fas fa-chevron-up"></img></span>
														</span>
												<a class="elementor-accordion-title" href="">Asistencia Familiar</a>
					</h2>
					<div id="elementor-tab-content-4961" class="elementor-tab-content elementor-clearfix elementor-active" data-tab="1" role="tabpanel" aria-labelledby="elementor-tab-title-4961" style="display: block;"><div class="supsystic-table-loader spinner" style="background-color: rgb(0, 0, 0); display: none;"></div><div id="supsystic-table-4_1461" class="supsystic-tables-wrap " style="width: 100%; visibility: visible;" data-table-width-fixed="100%" data-table-width-mobile="100%"><div id="supsystic-table-4_wrapper" class="dataTables_wrapper no-footer"><div id="supsystic-table-4_processing" class="dataTables_processing" style="display: none;">Processing...</div><table id="supsystic-table-4" class="supsystic-table border stripe lightboxImg no-border dataTable no-footer" data-id="4" data-view-id="4_1461" data-title="ASISTENCIAS HOGAR EXPRESS" data-currency-format="$1,000.00" data-percent-format="10.00%" data-date-format="DD.MM.YYYY" data-time-format="HH:mm" data-features="[&quot;after_table_loaded_script&quot;]" data-search-value="" data-lightbox-img="" data-head-rows-count="1" data-pagination-length="50,100,All" data-auto-index="off" data-searching-settings="{&quot;columnSearchPosition&quot;:&quot;bottom&quot;,&quot;minChars&quot;:&quot;0&quot;}" data-lang="default" data-override="{&quot;emptyTable&quot;:&quot;&quot;,&quot;info&quot;:&quot;&quot;,&quot;infoEmpty&quot;:&quot;&quot;,&quot;infoFiltered&quot;:&quot;&quot;,&quot;lengthMenu&quot;:&quot;&quot;,&quot;search&quot;:&quot;&quot;,&quot;zeroRecords&quot;:&quot;&quot;,&quot;exportLabel&quot;:&quot;&quot;,&quot;file&quot;:&quot;default&quot;}" data-merged="[]" data-responsive-mode="0" data-from-history="0" role="grid" style="width: 100%;"><thead><tr role="row"><th class="" style="width:; padding: 0 !important;" rowspan="1" colspan="1" data-original-value="" data-order=""></th><th class="" style="width:; padding: 0 !important;" rowspan="1" colspan="1" data-original-value="" data-order=""></th><th class="" style="width:; padding: 0 !important;" rowspan="1" colspan="1" data-original-value="" data-order=""></th><th class="" style="width:; padding: 0 !important;" rowspan="1" colspan="1" data-original-value="" data-order=""></th><th class="" style="width:; padding: 0 !important;" rowspan="1" colspan="1" data-original-value="" data-order=""></th></tr></thead><tbody><tr class="odd"><td data-cell-id="A1" data-x="0" data-y="1" data-db-index="1" class="htCenter htMiddle fsize-16 color-333333 underline" data-cell-type="text" data-original-value="Asistencias" data-order="Asistencias" style="min-width: 41.9453%; color: rgb(51, 51, 51); font-size: 16px; line-height: 22px;">Asistencias</td><td data-cell-id="B1" data-x="1" data-y="1" data-db-index="1" class="htCenter htMiddle fsize-16 color-333333 underline" data-cell-type="text" data-original-value="Eventos semestre" data-order="Eventos semestre" style="min-width: 15.0456%; color: rgb(51, 51, 51); font-size: 16px; line-height: 22px;">Eventos anuales</td><td data-cell-id="C1" data-x="2" data-y="1" data-db-index="1" class="htCenter htMiddle fsize-16 color-333333 underline" data-cell-type="text" data-original-value="Puntos" data-order="Puntos" style="min-width: 11.3982%; color: rgb(51, 51, 51); font-size: 16px; line-height: 22px;">Puntos</td><td data-cell-id="D1" data-x="3" data-y="1" data-db-index="1" class="htCenter htMiddle underline" data-cell-type="text" data-original-value="Ver más" data-order="Ver más" style="min-width: 14.4377%; ">Ver más</td><td data-cell-id="E1" data-x="4" data-y="1" data-db-index="1" class="htCenter htMiddle fsize-16 color-333333 underline" data-cell-type="text" data-original-value="Solicitar" data-order="Solicitar" style="min-width: 17.1733%; color: rgb(51, 51, 51); font-size: 16px; line-height: 22px;">Solicitar</td></tr>






<?php

//Asis Hogar Express


$sql = "SELECT codasistencia,nombreasistencia,CASE WHEN user_points.eventossolic IS NULL   THEN catalogocoomevars.eventos WHEN user_points.eventossolic='sin limite' THEN catalogocoomevars.eventos ELSE catalogocoomevars.eventos  END AS eventos ,catalogocoomevars.puntos,info,tipo FROM catalogocoomevars LEFT JOIN user_points ON user_points.servicio=catalogocoomevars.nombreasistencia WHERE tipo=3 GROUP BY catalogocoomevars.codasistencia,catalogocoomevars.nombreasistencia,user_points.eventossolic,catalogocoomevars.eventos,catalogocoomevars.puntos,catalogocoomevars.info";
$result = $conn ->query($sql);






while($row=$result->fetch_array(MYSQLI_NUM)){

?>


<tr class="odd"><td data-cell-id="A3" data-x="0" data-y="3" data-db-index="3" class="color-333333 fsize-16 htMiddle" data-cell-type="text" data-original-value="Perforación de muros" data-order="Perforación de muros" style="color: rgb(51, 51, 51); font-size: 16px; line-height: 22px;"><?php echo mb_convert_encoding($row[1],'UTF-8'); ?></td>



<?php

$sqleventos="SELECT codasistencia,nombreasistencia,CASE WHEN user_points.eventossolic IS NULL   THEN catalogocoomevars.eventos WHEN user_points.eventossolic='sin limite' THEN catalogocoomevars.eventos ELSE catalogocoomevars.eventos - SUM(user_points.eventossolic) END AS eventos ,catalogocoomevars.puntos,info,tipo FROM catalogocoomevars LEFT JOIN user_points ON user_points.servicio=catalogocoomevars.nombreasistencia WHERE tipo=3 AND user_points.usuario='".$_SESSION['usuario']."' and nombreasistencia='".$row[1]."' GROUP BY catalogocoomevars.codasistencia,catalogocoomevars.nombreasistencia,user_points.eventossolic,catalogocoomevars.eventos,catalogocoomevars.puntos,catalogocoomevars.info,user_points.usuario";

$resulteventos = $conn ->query($sqleventos);


if($rowev=$resulteventos->fetch_array(MYSQLI_NUM)){
if($row[1]=$rowev[1]){

?>
<td data-cell-id="B2" data-x="1" data-y="2" data-db-index="2" class="htCenter color-333333 fsize-16 htMiddle" data-cell-type="text" data-original-value="1 evento" data-order="1 evento" style="color: rgb(51, 51, 51); font-size: 16px; line-height: 22px;"><?php echo utf8_encode($rowev[2]); if($rowev[2]<2 && $rowev[2]>0 ){echo ' Evento';}else{echo ' Eventos';} ?></td>

<?php

}else{
?>

<td data-cell-id="B2" data-x="1" data-y="2" data-db-index="2" class="htCenter color-333333 fsize-16 htMiddle" data-cell-type="text" data-original-value="1 evento" data-order="1 evento" style="color: rgb(51, 51, 51); font-size: 16px; line-height: 22px;"><?php echo utf8_encode($row[2]); if($row[2]<2 && $row[2]>0 ){echo ' Evento';}else{echo ' Eventos';} ?></td>

<?php

}
}else{
?>
<td data-cell-id="B2" data-x="1" data-y="2" data-db-index="2" class="htCenter color-333333 fsize-16 htMiddle" data-cell-type="text" data-original-value="1 evento" data-order="1 evento" style="color: rgb(51, 51, 51); font-size: 16px; line-height: 22px;"><?php echo utf8_encode($row[2]); if($row[2]<2 && $row[2]>0 ){echo ' Evento';}else{echo ' Eventos';} ?></td>

<?php

}
?>



<td data-cell-id="C3" data-x="2" data-y="3" data-db-index="3" class="htCenter htMiddle color-333333 fsize-16" data-cell-type="text" data-cell-format-type="number" data-original-value="300" data-order="300" style="color: rgb(51, 51, 51); font-size: 16px; line-height: 22px;"><?php echo utf8_encode($row[3]); ?></td>




<td data-cell-id="D3" data-x="3" data-y="3" data-db-index="3" class="htCenter htMiddle" data-cell-type="text" data-original-value="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/05/tablas-iconos-2-37.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;27&quot; height=&quot;114&quot;>" data-order="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/05/tablas-iconos-2-37.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;27&quot; height=&quot;114&quot;>"><img loading="lazy" src="http://www.igroupsolution.com/wp-content/uploads/2022/05/tablas-iconos-2-37.png" class="stbSkipLazy alignnone size-full" width="27" style="cursor: pointer" onclick="modalclickinfo('<?php $reemplazo=str_replace("(","",mb_convert_encoding($row[4],'UTF-8')); $reemplazo2=str_replace(")","",$reemplazo); $reemplazo3=str_replace("\r\n","-sl-",$reemplazo2); echo $reemplazo3; ?>');" height="114"></td>




<?php


$sqleventosbn="SELECT codasistencia,nombreasistencia,CASE WHEN user_points.eventossolic IS NULL   THEN catalogocoomevars.eventos WHEN user_points.eventossolic='sin limite' THEN catalogocoomevars.eventos ELSE catalogocoomevars.eventos - SUM(user_points.eventossolic) END AS eventos ,catalogocoomevars.puntos,info,tipo FROM catalogocoomevars LEFT JOIN user_points ON user_points.servicio=catalogocoomevars.nombreasistencia WHERE tipo=3 AND user_points.usuario='".$_SESSION['usuario']."' and nombreasistencia='".$row[1]."' GROUP BY catalogocoomevars.codasistencia,catalogocoomevars.nombreasistencia,user_points.eventossolic,catalogocoomevars.eventos,catalogocoomevars.puntos,catalogocoomevars.info,user_points.usuario";

$resulteventosbn = $conn ->query($sqleventosbn);


if($rowevn=$resulteventosbn->fetch_array(MYSQLI_NUM)){
if($row[1]=$rowevn[1]){

?>

<td data-cell-id="E2" data-x="4" data-y="2" data-db-index="2" class="color-333333 fsize-16 htCenter htMiddle" data-cell-type="text" data-original-value="<img  loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;28&quot; height=&quot;84&quot;>" data-order="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;28&quot; height=&quot;84&quot;>" style="color: rgb(51, 51, 51); font-size: 16px; line-height: 22px;"><img loading="lazy" src="http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png" style="cursor: pointer"  id="btnModal" onclick="modalclick('<?php echo utf8_encode($row[3]); ?>','<?php echo mb_convert_encoding($row[1],'UTF-8'); ?>','<?php echo utf8_encode($rowevn[2]); ?>');"  class="stbSkipLazy alignnone size-full" width="28" height="84"></td></tr>

<?php

}
else
{
?>

<td data-cell-id="E2" data-x="4" data-y="2" data-db-index="2" class="color-333333 fsize-16 htCenter htMiddle" data-cell-type="text" data-original-value="<img  loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;28&quot; height=&quot;84&quot;>" data-order="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;28&quot; height=&quot;84&quot;>" style="color: rgb(51, 51, 51); font-size: 16px; line-height: 22px;"><img loading="lazy" src="http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png" style="cursor: pointer"  id="btnModal" onclick="modalclick('<?php echo utf8_encode($row[3]); ?>','<?php echo  mb_convert_encoding($row[1],'UTF-8'); ?>','<?php echo utf8_encode($row[2]); ?>');"  class="stbSkipLazy alignnone size-full" width="28" height="84"></td></tr>


<?php

}
}else
{
?>

<td data-cell-id="E2" data-x="4" data-y="2" data-db-index="2" class="color-333333 fsize-16 htCenter htMiddle" data-cell-type="text" data-original-value="<img  loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;28&quot; height=&quot;84&quot;>" data-order="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;28&quot; height=&quot;84&quot;>" style="color: rgb(51, 51, 51); font-size: 16px; line-height: 22px;"><img loading="lazy" src="http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png" style="cursor: pointer"  id="btnModal" onclick="abrirModal('<?php echo utf8_encode($row[3]); ?>','<?php echo mb_convert_encoding($row[1],'UTF-8'); ?>','<?php echo utf8_encode($row[2]); ?>');"  class="stbSkipLazy alignnone size-full" width="28" height="84"></td></tr>

<?php
}
}
?>




</tbody><style>#supsystic-table-4.oneColumnWithLabels td:nth-of-type(1):before { content: ""; }#supsystic-table-4.oneColumnWithLabels td:nth-of-type(2):before { content: ""; }#supsystic-table-4.oneColumnWithLabels td:nth-of-type(3):before { content: ""; }#supsystic-table-4.oneColumnWithLabels td:nth-of-type(4):before { content: ""; }#supsystic-table-4.oneColumnWithLabels td:nth-of-type(5):before { content: ""; }</style></table></div><!-- /#supsystic-table-4.supsystic-table --></div><!-- /.supsystic-tables-wrap --><!-- Tables Generator by Supsystic --><!-- Version: 1.10.14 --><!-- http://supsystic.com/ --></div>
				</div>
								</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-815f824 elementor-widget elementor-widget-accordion" data-id="815f824" data-element_type="widget" data-widget_type="accordion.default">
				<div class="elementor-widget-container">
					<div class="elementor-accordion" role="tablist">
							<div class="elementor-accordion-item">
					<h2 id="elementor-tab-title-1351" class="elementor-tab-title elementor-active" data-tab="1" role="tab" aria-controls="elementor-tab-content-1351" aria-expanded="true" tabindex="0" aria-selected="true">
													<span class="elementor-accordion-icon elementor-accordion-icon-right" aria-hidden="true">
															<span class="elementor-accordion-icon-closed"><img src="imagenes-verde/Coomeva-Flecha-abajo.png" class="fas fa-chevron-down"></img></span>
								<span class="elementor-accordion-icon-opened"><img src="imagenes-verde/Coomeva-Flecha-arriba.png" class="fas fa-chevron-up"></img></span>
														</span>
												<a class="elementor-accordion-title" href="">Asistencia Movilidad</a>
					</h2>
					<div id="elementor-tab-content-1351" class="elementor-tab-content elementor-clearfix elementor-active" data-tab="1" role="tabpanel" aria-labelledby="elementor-tab-title-1351" style="display: block;"><div class="supsystic-table-loader spinner" style="background-color: rgb(0, 0, 0); display: none;"></div><div id="supsystic-table-5_33779" class="supsystic-tables-wrap " style="width: 100%; visibility: visible;" data-table-width-fixed="100%" data-table-width-mobile="100%"><div id="supsystic-table-5_wrapper" class="dataTables_wrapper no-footer"><div id="supsystic-table-5_processing" class="dataTables_processing" style="display: none;">Processing...</div><table id="supsystic-table-5" class="supsystic-table border stripe lightboxImg no-border dataTable no-footer" data-id="5" data-view-id="5_33779" data-title="ASISTENCIA MASCOTAS" data-currency-format="$1,000.00" data-percent-format="10.00%" data-date-format="DD.MM.YYYY" data-time-format="HH:mm" data-features="[&quot;after_table_loaded_script&quot;]" data-search-value="" data-lightbox-img="" data-head-rows-count="1" data-pagination-length="50,100,All" data-auto-index="off" data-searching-settings="{&quot;columnSearchPosition&quot;:&quot;bottom&quot;,&quot;minChars&quot;:&quot;0&quot;}" data-lang="default" data-override="{&quot;emptyTable&quot;:&quot;&quot;,&quot;info&quot;:&quot;&quot;,&quot;infoEmpty&quot;:&quot;&quot;,&quot;infoFiltered&quot;:&quot;&quot;,&quot;lengthMenu&quot;:&quot;&quot;,&quot;search&quot;:&quot;&quot;,&quot;zeroRecords&quot;:&quot;&quot;,&quot;exportLabel&quP��.�U  P��.�U                  ��.�U          p�.�U  ���.�U          p��.�U   @      p��.�U          rom-history="0" role="grid" style="width: 100%;"><thead><tr role="row"><th class="" style="width:; padding: 0 !important;" rowspan="1" colspan="1" data-original-value="" data-order=""></th><th class="" style="width:; padding: 0 !important;" rowspan="1" colspan="1" data-original-value="" data-order=""></th><th class="" style="width:; padding: 0 !important;" rowspan="1" colspan="1" data-original-value="" data-order=""></th><th class="" style="width:; padding: 0 !important;" rowspan="1" colspan="1" data-original-value="" data-order=""></th><th class="" style="width:; padding: 0 !important;" rowspan="1" colspan="1" data-original-value="" data-order=""></th></tr></thead><tbody><tr class="odd"><td data-cell-id="A1" data-x="0" data-y="1" data-db-index="1" class="htCenter htMiddle fsize-16 color-333333 underline" data-cell-type="text" data-original-value="Asistencias" data-order="Asistencias" style="min-width: 43.5345%; color: rgb(51, 51, 51); font-size: 16px; line-height: 22px;">Asistencias</td><td data-cell-id="BB1" data-x="1" data-y="1" data-db-index="1" class="htCenter htMiddle fsize-16 colo�!�.�U  �!�.�U                  ��.�U          �
�.�U  "�.�U          �!�.�U   @      �!�.�U          les" style="min-width: 15.0456%; color: rgb(51, 51, 51); font-size: 16px; line-height: 22px;">Eventos anuales</td><td data-cell-id="C1" data-x="2" data-y="1" data-db-index="1" class="htCenter htMiddle fsize-16 color-333333 underline" data-cell-type="text" data-original-value�;�.�U  �;�.�U                  ��.�U          ං.�U  �;�.�U          �;�.�U   @      �;�.�U          height: 22px;">Puntos</td><td data-cell-id="D1" data-x="3" data-y="1" data-db-index="1" class="htCenter htMiddle underline" data-cell-type="text" data-original-value="Ver más" data-order="Ver más" style="min-width: 13.7931%; ">Ver más</td><td data-cell-id="E1" data-x="4" data-y="1" data-db-index="1" class="htCenter htMiddle fsize-16 color-333333 underline" data-cell-type="text" data-original-value="Solicitar" data-order="Solicitar" style="min-width: 17.1733%; color: rgb(51, 51, 51); font-size: 16px; line-height: 22px;">Solicitar</td></tr>





<?php

//Asis Mascotas


$sql = "SELECT codasistencia,nombreasistencia,CASE WHEN user_points.eventossolic IS NULL   THEN catalogocoomevars.eventos WHEN user_points.eventossolic='sin limite' THEN catalogocoomevars.eventos ELSE catalogocoomevars.eventos  END AS eventos ,catalogocoomevars.puntos,info,tipo FROM catalogocoomevars LEFT JOIN user_points ON user_points.servicio=catalogocoomevars.nombreasistencia WHERE tipo=4 GROUP BY catalogocoomevars.codasistencia,catalogocoomevars.nombreasistencia,user_points.eventossolic,catalogocoomevars.eventos,catalogocoomevars.puntos,catalogocoomevars.info";
$result = $conn ->query($sql);



$anio="";


while($row=$result->fetch_array(MYSQLI_NUM)){



if($row[1]=="Traslado hacia el aeropuerto." || $row[1]=="Traslado desde el aeropuerto." ){

$anio=" por año";

}


?>


<tr class="even"><td data-db-index="2" class="htMiddle htLeft fsize-16 color-333333" data-cell-type="text" data-original-value="Orientación médica veterinaria telefónica" data-order="Orientación médica veterinaria telefónica" style="color: rgb(51, 51, 51); font-size: 16px; line-height: 22px;"><?php echo mb_convert_encoding($row[1],'UTF-8'); ?></td>


<?php

$sqleventos="SELECT codasistencia,nombreasistencia,CASE WHEN user_points.eventossolic IS NULL   THEN catalogocoomevars.eventos WHEN user_points.eventossolic='sin limite' THEN catalogocoomevars.eventos ELSE catalogocoomevars.eventos - SUM(user_points.eventossolic) END AS eventos ,catalogocoomevars.puntos,info,tipo FROM catalogocoomevars LEFT JOIN user_points ON user_points.servicio=catalogocoomevars.nombreasistencia WHERE tipo=4 AND user_points.usuario='".$_SESSION['usuario']."' and nombreasistencia='".$row[1]."' GROUP BY catalogocoomevars.codasistencia,catalogocoomevars.nombreasistencia,user_points.eventossolic,catalogocoomevars.eventos,catalogocoomevars.puntos,catalogocoomevars.info,user_points.usuario";

$resulteventos = $conn ->query($sqleventos);


if($rowev=$resulteventos->fetch_array(MYSQLI_NUM)){
if($row[1]=$rowev[1]){

?>
<td data-cell-id="B2" data-x="1" data-y="2" data-db-index="2" class="htCenter color-333333 fsize-16 htMiddle" data-cell-type="text" data-original-value="1 evento" data-order="1 evento" style="color: rgb(51, 51, 51); font-size: 16px; line-height: 22px;"><?php echo utf8_encode($rowev[2]); if($rowev[2]<2 && $rowev[2]>0 ){echo ' Evento'.$anio; }else{echo ' Eventos' . $anio;} ?></td>

<?php

}else{
?>

<td data-cell-id="B2" data-x="1" data-y="2" data-db-index="2" class="htCenter color-333333 fsize-16 htMiddle" data-cell-type="text" data-original-value="1 evento" data-order="1 evento" style="color: rgb(51, 51, 51); font-size: 16px; line-height: 22px;"><?php echo utf8_encode($row[2]); if($row[2]<2 && $row[2]>0 ){echo ' Evento'.$anio;}else{echo ' Eventos'.$anio;} ?></td>

<?php

}
}else{
?>
<td data-cell-id="B2" data-x="1" data-y="2" data-db-index="2" class="htCenter color-333333 fsize-16 htMiddle" data-cell-type="text" data-original-value="1 evento" data-order="1 evento" style="color: rgb(51, 51, 51); font-size: 16px; line-height: 22px;"><?php echo utf8_encode($row[2]); if($row[2]<2 && $row[2]>0 ){echo ' Evento'.$anio;}else{echo ' Eventos'.$anio;} ?></td>

<?php
$anio="";
}
?>


<td data-cell-id="C2" data-x="2" data-y="2" data-db-index="2" class="htCenter htMiddle fsize-16 color-333333" data-cell-type="text" data-cell-format-type="number" data-original-value="200" data-order="200" style="color: rgb(51, 51, 51); font-size: 16px; line-height: 22px;"><?php echo utf8_encode($row[3]); ?></td>



<td data-cell-id="D2" data-x="3" data-y="2" data-db-index="2" class="htCenter htMiddle" data-cell-type="text" data-original-value="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/05/tablas-iconos-2-37.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;27&quot; height=&quot;114&quot;>" data-order="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/05/tablas-iconos-2-37.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;27&quot; height=&quot;114&quot;>"><img loading="lazy" src="http://www.igroupsolution.com/wp-content/uploads/2022/05/tablas-iconos-2-37.png" class="stbSkipLazy alignnone size-full" width="27" style="cursor: pointer" onclick="modalclickinfo('<?php $reemplazo=str_replace("(","",mb_convert_encoding($row[4],'UTF-8')); $reemplazo2=str_replace(")","",$reemplazo); $reemplazo3=str_replace("\r\n","-sl-",$reemplazo2); echo $reemplazo3; ?>');" height="114"></td>




<?php


$sqleventosbn="SELECT codasistencia,nombreasistencia,CASE WHEN user_points.eventossolic IS NULL   THEN catalogocoomevars.eventos WHEN user_points.eventossolic='sin limite' THEN catalogocoomevars.eventos ELSE catalogocoomevars.eventos - SUM(user_points.eventossolic) END AS eventos ,catalogocoomevars.puntos,info,tipo FROM catalogocoomevars LEFT JOIN user_points ON user_points.servicio=catalogocoomevars.nombreasistencia WHERE tipo=4 AND user_points.usuario='".$_SESSION['usuario']."' and nombreasistencia='".$row[1]."' GROUP BY catalogocoomevars.codasistencia,catalogocoomevars.nombreasistencia,user_points.eventossolic,catalogocoomevars.eventos,catalogocoomevars.puntos,catalogocoomevars.info,user_points.usuario";

$resulteventosbn = $conn ->query($sqleventosbn);


if($rowevn=$resulteventosbn->fetch_array(MYSQLI_NUM)){
if($row[1]=$rowevn[1]){

?>

<td data-cell-id="E2" data-x="4" data-y="2" data-db-index="2" class="color-333333 fsize-16 htCenter htMiddle" data-cell-type="text" data-original-value="<img  loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;28&quot; height=&quot;84&quot;>" data-order="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;28&quot; height=&quot;84&quot;>" style="color: rgb(51, 51, 51); font-size: 16px; line-height: 22px;"><img loading="lazy" src="http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png" style="cursor: pointer"  id="btnModal" onclick="modalclick('<?php echo utf8_encode($row[3]); ?>','<?php echo mb_convert_encoding($row[1],'UTF-8'); ?>','<?php echo utf8_encode($rowevn[2]); ?>');"  class="stbSkipLazy alignnone size-full" width="28" height="84"></td></tr>

<?php

}
else
{
?>

<td data-cell-id="E2" data-x="4" data-y="2" data-db-index="2" class="color-333333 fsize-16 htCenter htMiddle" data-cell-type="text" data-original-value="<img  loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;28&quot; height=&quot;84&quot;>" data-order="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;28&quot; height=&quot;84&quot;>" style="color: rgb(51, 51, 51); font-size: 16px; line-height: 22px;"><img loading="lazy" src="http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png" style="cursor: pointer"  id="btnModal" onclick="abrirModal('<?php echo utf8_encode($row[3]); ?>','<?php echo mb_convert_encoding($row[1],'UTF-8'); ?>','<?php echo utf8_encode($row[2]); ?>');"  class="stbSkipLazy alignnone size-full" width="28" height="84"></td></tr>


<?php

}
}else
{
?>

<td data-cell-id="E2" data-x="4" data-y="2" data-db-index="2" class="color-333333 fsize-16 htCenter htMiddle" data-cell-type="text" data-original-value="<img  loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;28&quot; height=&quot;84&quot;>" data-order="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;28&quot; height=&quot;84&quot;>" style="color: rgb(51, 51, 51); font-size: 16px; line-height: 22px;"><img loading="lazy" src="http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png" style="cursor: pointer"  id="btnModal" onclick="abrirModal('<?php echo utf8_encode($row[3]); ?>','<?php echo mb_convert_encoding($row[1],'UTF-8'); ?>','<?php echo utf8_encode($row[2]); ?>');"  class="stbSkipLazy alignnone size-full" width="28" height="84"></td></tr>

<?php
}
}
?>






</tbody><style>#supsystic-table-5.oneColumnWithLabels td:nth-of-type(1):before { content: ""; }#supsystic-table-5.oneColumnWithLabels td:nth-of-type(2):before { content: ""; }#supsystic-table-5.oneColumnWithLabels td:nth-of-type(3):before { content: ""; }#supsystic-table-5.oneColumnWithLabels td:nth-of-type(4):before { content: ""; }#supsystic-table-5.oneColumnWithLabels td:nth-of-type(5):before { content: ""; }</style></table></div><!-- /#supsystic-table-5.supsystic-table --></div><!-- /.supsystic-tables-wrap --><!-- Tables Generator by Supsystic --><!-- Version: 1.10.14 --><!-- http://supsystic.com/ --></div>
				</div>
								</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-89557c9 elementor-widget elementor-widget-accordion" data-id="89557c9" data-element_type="widget" data-widget_type="accordion.default">
				<div class="elementor-widget-container">
					<div class="elementor-accordion" role="tablist">
							<div class="elementor-accordion-item">
					<h2 id="elementor-tab-title-1441" class="elementor-tab-title elementor-active" data-tab="1" role="tab" aria-controls="elementor-tab-content-1441" aria-expanded="true" tabindex="0" aria-selected="true">
													<span class="elementor-accordion-icon elementor-accordion-icon-right" aria-hidden="true">
															<span class="elementor-accordion-icon-closed"><img src="imagenes-verde/Coomeva-Flecha-abajo.png" class="fas fa-chevron-down"></img></span>
								<span class="elementor-accordion-icon-opened"><img src="imagenes-verde/Coomeva-Flecha-arriba.png" class="fas fa-chevron-up"></img></span>
														</span>
												<a class="elementor-accordion-title" href="">Asistencia Mascotas</a>
					</h2>
					<div id="elementor-tab-content-1441" class="elementor-tab-content elementor-clearfix elementor-active" data-tab="1" role="tabpanel" aria-labelledby="elementor-tab-title-1441" style="display: block;"><div class="supsystic-table-loader spinner" style="background-color: rgb(0, 0, 0); display: none;"></div><div id="supsystic-table-6_25786" class="supsystic-tables-wrap " style="width: 100%; visibility: visible;" data-table-width-fixed="100%" data-table-width-mobile="100%"><div id="supsystic-table-6_wrapper" class="dataTables_wrapper no-footer"><div id="supsystic-table-6_processing" class="dataTables_processing" style="display: none;">Processing...</div><table id="supsystic-table-6" class="supsystic-table border stripe lightboxImg no-border dataTable no-footer" data-id="6" data-view-id="6_25786" data-title="ASISTENCIA FAMILIAR" data-currency-format="$1,000.00" data-percent-format="10.00%" data-date-format="DD.MM.YYYY" data-time-format="HH:mm" data-features="[&quot;after_table_loaded_script&quot;]" data-search-value="" data-lightbox-img="" data-head-rows-count="1" data-pagination-length="50,100,All" data-auto-index="off" data-searching-settings="{&quot;columnSearchPosition&quot;:&quot;bottom&quot;,&quot;minChars&quot;:&quot;0&quot;}" data-lang="default" data-override="{&quot;emptyTable&quot;:&quot;&quot;,&quot;info&quot;:&quot;&quot;,&quot;infoEmpty&quot;:&quot;&quot;,&quot;infoFiltered&quot;:&quot;&quot;,&quot;lengthMenu&quot;:&quot;&quot;,&quot;search&quot;:&quot;&quot;,&quot;zeroRecords&quot;:&quot;&quot;,&quot;exportLabel&quot;:&quot;&quot;,&quot;file&quot;:&quot;default&quot;}" data-merged="[]" data-responsive-mode="0" data-from-history="0" role="grid" style="width: 100%;"><thead><tr role="row"><th class="" style="width:; padding: 0 !important;" rowspan="1" colspan="1" data-original-value="" data-order=""></th><th class="" style="width:; padding: 0 !important;" rowspan="1" colspan="1" data-original-value="" data-order=""></th><th class="" style="width:; padding: 0 !important;" rowspan="1" colspan="1" data-original-value="" data-order=""></th><th class="" style="width:; padding: 0 !important;" rowspan="1" colspan="1" data-original-value="" data-order=""></th><th class="" style="width:; padding: 0 !important;" rowspan="1" colspan="1" data-original-value="" data-order=""></th></tr></thead><tbody><tr class="odd"><td data-cell-id="A1" data-x="0" data-y="1" data-db-index="1" class="htCenter htMiddle fsize-16 color-333333 underline" data-cell-type="text" data-original-value="Asistencias" data-order="Asistencias" style="min-width: 31.8644%; color: rgb(51, 51, 51); font-size: 16px; line-height: 22px;">Asistencias</td><td data-cell-id="B1" data-x="1" data-y="1" data-db-index="1" class="htCenter htMiddle fsize-16 color-333333 underline" data-cell-type="text" data-original-value="Eventos semestre" data-order="Eventos semestre" style="min-width: 16.2712%; color: rgb(51, 51, 51); font-size: 16px; line-height: 22px;">Eventos anuales</td><td data-cell-id="C1" data-x="2" data-y="1" data-db-index="1" class="htCenter htMiddle fsize-16 color-333333 underline" data-cell-type="text" data-original-value="Puntos" data-order="Puntos" style="min-width: 16.1017%; color: rgb(51, 51, 51); font-size: 16px; line-height: 22px;">Puntos</td><td data-cell-id="D1" data-x="3" data-y="1" data-db-index="1" class="htCenter htMiddle underline" data-cell-type="text" data-original-value="Ver más" data-order="Ver más" style="min-width: 16.1017%; ">Ver más</td><td data-cell-id="E1" data-x="4" data-y="1" data-db-index="1" class="htCenter htMiddle fsize-16 color-333333 underline" data-cell-type="text" data-original-value="Solicitar" data-order="Solicitar" style="min-width: 19.661%; color: rgb(51, 51, 51); font-size: 16px; line-height: 22px;">Solicitar</td></tr>







<?php

//Asis Hogar


$sql = "SELECT codasistencia,nombreasistencia,CASE WHEN user_points.eventossolic IS NULL   THEN catalogocoomevars.eventos WHEN user_points.eventossolic='sin limite' THEN catalogocoomevars.eventos ELSE catalogocoomevars.eventos  END AS eventos ,catalogocoomevars.puntos,info,tipo FROM catalogocoomevars LEFT JOIN user_points ON user_points.servicio=catalogocoomevars.nombreasistencia WHERE tipo=5 GROUP BY catalogocoomevars.codasistencia,catalogocoomevars.nombreasistencia,user_points.eventossolic,catalogocoomevars.eventos,catalogocoomevars.puntos,catalogocoomevars.info";
$result = $conn ->query($sql);






while($row=$result->fetch_array(MYSQLI_NUM)){

?>




<tr class="even"><td data-cell-id="A2" data-x="0" data-y="2" data-db-index="2" class="htMiddle htLeft fsize-16 color-333333" data-cell-type="text" data-original-value="Examen preventivo de citología" data-order="Examen preventivo de citología" style="color: rgb(51, 51, 51); font-size: 16px; line-height: 22px;"><?php echo mb_convert_encoding($row[1],'UTF-8'); ?></td>

<?php

$sqleventos="SELECT codasistencia,nombreasistencia,CASE WHEN user_points.eventossolic IS NULL   THEN catalogocoomevars.eventos WHEN user_points.eventossolic='sin limite' THEN catalogocoomevars.eventos ELSE catalogocoomevars.eventos - SUM(user_points.eventossolic) END AS eventos ,catalogocoomevars.puntos,info,tipo FROM catalogocoomevars LEFT JOIN user_points ON user_points.servicio=catalogocoomevars.nombreasistencia WHERE tipo=5 AND user_points.usuario='".$_SESSION['usuario']."' and nombreasistencia='".$row[1]."' GROUP BY catalogocoomevars.codasistencia,catalogocoomevars.nombreasistencia,user_points.eventossolic,catalogocoomevars.eventos,catalogocoomevars.puntos,catalogocoomevars.info,user_points.usuario";

$resulteventos = $conn ->query($sqleventos);


if($rowev=$resulteventos->fetch_array(MYSQLI_NUM)){
if($row[1]=$rowev[1]){

?>
<td data-cell-id="B2" data-x="1" data-y="2" data-db-index="2" class="htCenter color-333333 fsize-16 htMiddle" data-cell-type="text" data-original-value="1 evento" data-order="1 evento" style="color: rgb(51, 51, 51); font-size: 16px; line-height: 22px;"><?php echo utf8_encode($rowev[2]); if($rowev[2]<2 && $rowev[2]>0 ){echo ' Evento';}else{echo ' Eventos';} ?></td>

<?php

}else{
?>

<td data-cell-id="B2" data-x="1" data-y="2" data-db-index="2" class="htCenter color-333333 fsize-16 htMiddle" data-cell-type="text" data-original-value="1 evento" data-order="1 evento" style="color: rgb(51, 51, 51); font-size: 16px; line-height: 22px;"><?php echo utf8_encode($row[2]); if($row[2]<2 && $row[2]>0 ){echo ' Evento';}else{echo ' Eventos';} ?></td>

<?php

}
}else{
?>
<td data-cell-id="B2" data-x="1" data-y="2" data-db-index="2" class="htCenter color-333333 fsize-16 htMiddle" data-cell-type="text" data-original-value="1 evento" data-order="1 evento" style="color: rgb(51, 51, 51); font-size: 16px; line-height: 22px;"><?php echo utf8_encode($row[2]); if($row[2]<2 && $row[2]>0 ){echo ' Evento';}else{echo ' Eventos';} ?></td>

<?php

}
?>


<td data-cell-id="C2" data-x="2" data-y="2" data-db-index="2" class="htCenter htMiddle fsize-16 color-333333" data-cell-type="text" data-cell-format-type="number" data-original-value="500" data-order="500" style="color: rgb(51, 51, 51); font-size: 16px; line-height: 22px;"><?php echo utf8_encode($row[3]); ?></td>



<td data-cell-id="D2" data-x="3" data-y="2" data-db-index="2" class="htCenter htMiddle" data-cell-type="text" data-original-value="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/05/tablas-iconos-2-37.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;27&quot; height=&quot;114&quot;>" data-order="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/05/tablas-iconos-2-37.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;27&quot; height=&quot;114&quot;>"><img loading="lazy" src="http://www.igroupsolution.com/wp-content/uploads/2022/05/tablas-iconos-2-37.png" class="stbSkipLazy alignnone size-full" width="27"  style="cursor: pointer" onclick="modalclickinfo('<?php $reemplazo=str_replace("(","",mb_convert_encoding($row[4],'UTF-8')); $reemplazo2=str_replace(")","",$reemplazo); $reemplazo3=str_replace("\r\n","-sl-",$reemplazo2); echo $reemplazo3; ?>');" height="114"></td>



<?php


$sqleventosbn="SELECT codasistencia,nombreasistencia,CASE WHEN user_points.eventossolic IS NULL   THEN catalogocoomevars.eventos WHEN user_points.eventossolic='sin limite' THEN catalogocoomevars.eventos ELSE catalogocoomevars.eventos - SUM(user_points.eventossolic) END AS eventos ,catalogocoomevars.puntos,info,tipo FROM catalogocoomevars LEFT JOIN user_points ON user_points.servicio=catalogocoomevars.nombreasistencia WHERE tipo=5 AND user_points.usuario='".$_SESSION['usuario']."' and nombreasistencia='".$row[1]."' GROUP BY catalogocoomevars.codasistencia,catalogocoomevars.nombreasistencia,user_points.eventossolic,catalogocoomevars.eventos,catalogocoomevars.puntos,catalogocoomevars.info,user_points.usuario";

$resulteventosbn = $conn ->query($sqleventosbn);


if($rowevn=$resulteventosbn->fetch_array(MYSQLI_NUM)){
if($row[1]=$rowevn[1]){

?>

<td data-cell-id="E2" data-x="4" data-y="2" data-db-index="2" class="color-333333 fsize-16 htCenter htMiddle" data-cell-type="text" data-original-value="<img  loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;28&quot; height=&quot;84&quot;>" data-order="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;28&quot; height=&quot;84&quot;>" style="color: rgb(51, 51, 51); font-size: 16px; line-height: 22px;"><img loading="lazy" src="http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png" style="cursor: pointer"  id="btnModal" onclick="modalclick('<?php echo utf8_encode($row[3]); ?>','<?php echo mb_convert_encoding($row[1],'UTF-8'); ?>','<?php echo utf8_encode($rowevn[2]); ?>');"  class="stbSkipLazy alignnone size-full" width="28" height="84"></td></tr>

<?php

}
else
{
?>

<td data-cell-id="E2" data-x="4" data-y="2" data-db-index="2" class="color-333333 fsize-16 htCenter htMiddle" data-cell-type="text" data-original-value="<img  loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;28&quot; height=&quot;84&quot;>" data-order="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;28&quot; height=&quot;84&quot;>" style="color: rgb(51, 51, 51); font-size: 16px; line-height: 22px;"><img loading="lazy" src="http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png" style="cursor: pointer"  id="btnModal" onclick="abrirModal('<?php echo utf8_encode($row[3]); ?>','<?php echo mb_convert_encoding($row[1],'UTF-8'); ?>','<?php echo utf8_encode($row[2]); ?>');"  class="stbSkipLazy alignnone size-full" width="28" height="84"></td></tr>


<?php

}
}else
{
?>

<td data-cell-id="E2" data-x="4" data-y="2" data-db-index="2" class="color-333333 fsize-16 htCenter htMiddle" data-cell-type="text" data-original-value="<img  loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;28&quot; height=&quot;84&quot;>" data-order="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;28&quot; height=&quot;84&quot;>" style="color: rgb(51, 51, 51); font-size: 16px; line-height: 22px;"><img loading="lazy" src="http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png" style="cursor: pointer"  id="btnModal" onclick="abrirModal('<?php echo utf8_encode($row[3]); ?>','<?php echo mb_convert_encoding($row[1],'UTF-8'); ?>','<?php echo utf8_encode($row[2]); ?>');"  class="stbSkipLazy alignnone size-full" width="28" height="84"></td></tr>

<?php
}
}
?>



</tbody><style>#supsystic-table-6.oneColumnWithLabels td:nth-of-type(1):before { content: ""; }#supsystic-table-6.oneColumnWithLabels td:nth-of-type(2):before { content: ""; }#supsystic-table-6.oneColumnWithLabels td:nth-of-type(3):before { content: ""; }#supsystic-table-6.oneColumnWithLabels td:nth-of-type(4):before { content: ""; }#supsystic-table-6.oneColumnWithLabels td:nth-of-type(5):before { content: ""; }</style></table></div><!-- /#supsystic-table-6.supsystic-table --></div><!-- /.supsystic-tables-wrap --><!-- Tables Generator by Supsystic --><!-- Version: 1.10.14 --><!-- http://supsystic.com/ --></div>






				</div>
								</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-017f8ef elementor-widget elementor-widget-accordion" data-id="017f8ef" data-element_type="widget" data-widget_type="accordion.default">
				<div class="elementor-widget-container">
					<div class="elementor-accordion" role="tablist">
							<div class="elementor-accordion-item">
					<h2 id="elementor-tab-title-1571" class="elementor-tab-title elementor-active" data-tab="1" role="tab" aria-controls="elementor-tab-content-1571" aria-expanded="true" tabindex="0" aria-selected="true">
													<span class="elementor-accordion-icon elementor-accordion-icon-right" aria-hidden="true">
															<span class="elementor-accordion-icon-closed"><img src="imagenes-verde/Coomeva-Flecha-abajo.png" class="fas fa-chevron-down"></img></span>
								<span class="elementor-accordion-icon-opened"><img src="imagenes-verde/Coomeva-Flecha-arriba.png" class="fas fa-chevron-up"></img></span>
														</span>
												<a class="elementor-accordion-title" href="">Asistencia Adulto Mayor</a>
					</h2>
					<div id="elementor-tab-content-1571" class="elementor-tab-content elementor-clearfix elementor-active" data-tab="1" role="tabpanel" aria-labelledby="elementor-tab-title-1571" style="display: block;"><div class="supsystic-table-loader la-ball-spin-clockwise-fade-rotating la-2x" style="color: rgb(0, 0, 0); display: none;"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div><div id="supsystic-table-8_85089" class="supsystic-tables-wrap " style="width: 100%; visibility: visible;" data-table-width-fixed="100%" data-table-width-mobile="100%"><div id="supsystic-table-8_wrapper" class="dataTables_wrapper no-footer"><div id="supsystic-table-8_processing" class="dataTables_processing" style="display: none;">Processing...</div><table id="supsystic-table-8" class="supsystic-table border stripe lightboxImg no-border dataTable no-footer" data-id="8" data-view-id="8_85089" data-title="ASISTENCIA MÉDICA" data-currency-format="$1,000.00" data-percent-format="10.00%" data-date-format="DD.MM.YYYY" data-time-format="HH:mm" data-features="[&quot;after_table_loaded_script&quot;]" data-search-value="" data-lightbox-img="" data-head-rows-count="1" data-pagination-length="50,100,All" data-auto-index="off" data-searching-settings="{&quot;columnSearchPosition&quot;:&quot;bottom&quot;,&quot;minChars&quot;:&quot;0&quot;}" data-lang="default" data-override="{&quot;emptyTable&quot;:&quot;&quot;,&quot;info&quot;:&quot;&quot;,&quot;infoEmpty&quot;:&quot;&quot;,&quot;infoFiltered&quot;:&quot;&quot;,&quot;lengthMenu&quot;:&quot;&quot;,&quot;search&quot;:&quot;&quot;,&quot;zeroRecords&quoP��.�U  P��.�U                  ��.�U          p�.�U  ���.�U          p��.�U   @      p��.�U          "[]" data-responsive-mode="0" data-from-history="0" role="grid" style="width: 100%;"><thead><tr role="row"><th class="" style="width:; padding: 0 !important;" rowspan="1" colspan="1" data-original-value="" data-order=""></th><th class="" style="width:; padding: 0 !important;" rowspan="1" colspan="1" data-original-value="" data-order=""></th><th class="" style="width:; padding: 0 !important;" rowspan="1" colspan="1" data-original-value="" data-order=""></th><th class="" style="width:; padding: 0 !important;" rowspan="1" colspan="1" data-original-value="" data-order=""></th><th class="" style="width:; padding: 0 !important;" rowspan="1" colspan="1" data-original-value="" data-order=""></th></tr></thead><tbody>



<tr class="odd"><td data-cell-id="A1" data-x="0" data-y="1" data-db-index="1" class="htCenter htMiddle fsize-16 color-333333 underline" data-cell-type="text" data-original-value="Asistencias" data-order="Asistencias" style="min-width: 43.5345%; color: rgb(51, 51, 51); font-size: 16px; line-height: 22px;">Asistencias</td><td data-cell-id="BB1" data-x="1" data-y="1" data-db-index="1" class="htCenter htMiddle fsize-16 colo�!�.�U  �!�.�U                  ��.�U          �
�.�U  "�.�U          �!�.�U   @      �!�.�U          les" style="min-width: 15.0456%; color: rgb(51, 51, 51); font-size: 16px; line-height: 22px;"> Eventos semestre</td>



<td data-cell-id="C1" data-x="2" data-y="1" dat�;�.�U  �;�.�U                  ��.�U          ං.�U  �;�.�U          �;�.�U   @      �;�.�U          inal-value="Puntos" data-order="Puntos" style="min-width: 16.4179%; color: rgb(51, 51, 51); font-size: 16px; line-height: 22px;">Puntos</td>



<td data-cell-id="D1" data-x="3" data-y="1" data-db-index="1" class="htCenter htMiddle fsize-16 color-333333 underline" data-cell-type="text" data-original-value="Ver más" data-order="Ver más" style="min-width: 13.7313%; color: rgb(51, 51, 51); font-size: 16px; line-height: 22px;">Ver más</td><td data-cell-id="E1" data-x="4" data-y="1" data-db-index="1" c��.�U  ��.�U                  ��.�U          ��.�U  ��.�U          ��.�U   @      ��.�U          citar" data-order="Solicitar" style="min-width: 14.1791%; color: rgb(51, 51, 51); font-size: 16px; line-height: 22px;">Solicitar</td></tr>






<?php

//Asis Hogar


$sql = "SELECT codasistencia,nombreasistencia,CASE WHEN user_points.eventossolic IS NULL   THEN catalogocoomevars.eventos WHEN user_points.eventossolic='sin limite' THEN catalogocoomevars.eventos ELSE catalogocoomevars.eventos  END AS eventos ,catalogocoomevars.puntos,info,tipo FROM catalogocoomevars LEFT JOIN user_points ON user_points.servicio=catalogocoomevars.nombreasistencia WHERE tipo=6 GROUP BY catalogocoomevars.codasistencia,catalogocoomevars.nombreasistencia,user_points.eventossolic,catalogocoomevars.eventos,catalogocoomevars.puntos,catalogocoomevars.info";
$result = $conn ->query($sql);






while($row=$result->fetch_array(MYSQLI_NUM)){

?>


<tr class="even"><td data-cell-id="A2" data-x="0" data-y="2" data-db-index="2" class="htMiddle fsize-16 color-333333" data-cell-type="text" data-original-value="Servicio de ambulancia por emergencia" data-order="Servicio de ambulancia por emergencia" style="color: rgb(51, 51, 51); font-size: 16px; line-height: 22px;"><?php echo mb_convert_encoding($row[1],'UTF-8');  ?></td>

<?php


$sqleventos="SELECT codasistencia,nombreasistencia,CASE WHEN user_points.eventossolic IS NULL   THEN catalogocoomevars.eventos WHEN user_points.eventossolic='sin limite' THEN catalogocoomevars.eventos ELSE catalogocoomevars.eventos - SUM(user_points.eventossolic) END AS eventos ,catalogocoomevars.puntos,info,tipo FROM catalogocoomevars LEFT JOIN user_points ON user_points.servicio=catalogocoomevars.nombreasistencia WHERE tipo=6 AND user_points.usuario='".$_SESSION['usuario']."' and nombreasistencia='".$row[1]."' GROUP BY catalogocoomevars.codasistencia,catalogocoomevars.nombreasistencia,user_points.eventossolic,catalogocoomevars.eventos,catalogocoomevars.puntos,catalogocoomevars.info,user_points.usuario";

$resulteventos = $conn ->query($sqleventos);


if($rowev=$resulteventos->fetch_array(MYSQLI_NUM)){
if($row[1]=$rowev[1]){

?>
<td data-cell-id="B2" data-x="1" data-y="2" data-db-index="2" class="htCenter color-333333 fsize-16 htMiddle" data-cell-type="text" data-original-value="1 evento" data-order="1 evento" style="color: rgb(51, 51, 51); font-size: 16px; line-height: 22px;"><?php echo utf8_encode($rowev[2]); if($rowev[2]<2 && $rowev[2]>0 ){echo ' Evento';}else{echo ' Eventos';} ?></td>

<?php

}else{
?>

<td data-cell-id="B2" data-x="1" data-y="2" data-db-index="2" class="htCenter color-333333 fsize-16 htMiddle" data-cell-type="text" data-original-value="1 evento" data-order="1 evento" style="color: rgb(51, 51, 51); font-size: 16px; line-height: 22px;"><?php echo utf8_encode($row[2]); if($row[2]<2 && $row[2]>0 ){echo ' Evento';}else{echo ' Eventos';} ?></td>

<?php

}
}else{
?>
<td data-cell-id="B2" data-x="1" data-y="2" data-db-index="2" class="htCenter color-333333 fsize-16 htMiddle" data-cell-type="text" data-original-value="1 evento" data-order="1 evento" style="color: rgb(51, 51, 51); font-size: 16px; line-height: 22px;"><?php echo utf8_encode($row[2]); if($row[2]<2 && $row[2]>0 ){echo ' Evento';}else{echo ' Eventos';} ?></td>

<?php

}
?>


<td data-cell-id="C2" data-x="2" data-y="2" data-db-index="2" class="htMiddle htCenter fsize-16 color-333333" data-cell-type="text" data-original-value="1,000" data-order="1,000" style="color: rgb(51, 51, 51); font-size: 16px; line-height: 22px;"><?php echo utf8_encode($row[3]);  ?></td>



<td data-cell-id="D2" data-x="3" data-y="2" data-db-index="2" class="htCenter htMiddle" data-cell-type="text" data-original-value="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/05/tablas-iconos-2-37.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;27&quot; height=&quot;114&quot;>" data-order="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/05/tablas-iconos-2-37.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;27&quot; height=&quot;114&quot;>"><img loading="lazy" src="http://www.igroupsolution.com/wp-content/uploads/2022/05/tablas-iconos-2-37.png" class="stbSkipLazy alignnone size-full" width="27" style="cursor: pointer" onclick="modalclickinfo('<?php $reemplazo=str_replace("(","",mb_convert_encoding($row[4],'UTF-8')); $reemplazo2=str_replace(")","",$reemplazo); $reemplazo3=str_replace("\r\n","-sl-",$reemplazo2); echo $reemplazo3; ?>');" height="114"></td>



<?php


$sqleventosbn="SELECT codasistencia,nombreasistencia,CASE WHEN user_points.eventossolic IS NULL   THEN catalogocoomevars.eventos WHEN user_points.eventossolic='sin limite' THEN catalogocoomevars.eventos ELSE catalogocoomevars.eventos - SUM(user_points.eventossolic) END AS eventos ,catalogocoomevars.puntos,info,tipo FROM catalogocoomevars LEFT JOIN user_points ON user_points.servicio=catalogocoomevars.nombreasistencia WHERE tipo=6 AND user_points.usuario='".$_SESSION['usuario']."' and nombreasistencia='".$row[1]."' GROUP BY catalogocoomevars.codasistencia,catalogocoomevars.nombreasistencia,user_points.eventossolic,catalogocoomevars.eventos,catalogocoomevars.puntos,catalogocoomevars.info,user_points.usuario";

$resulteventosbn = $conn ->query($sqleventosbn);


if($rowevn=$resulteventosbn->fetch_array(MYSQLI_NUM)){
if($row[1]=$rowevn[1]){

?>

<td data-cell-id="E2" data-x="4" data-y="2" data-db-index="2" class="color-333333 fsize-16 htCenter htMiddle" data-cell-type="text" data-original-value="<img  loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;28&quot; height=&quot;84&quot;>" data-order="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;28&quot; height=&quot;84&quot;>" style="color: rgb(51, 51, 51); font-size: 16px; line-height: 22px;"><img loading="lazy" src="http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png" style="cursor: pointer"  id="btnModal" onclick="modalclick('<?php echo utf8_encode($row[3]); ?>','<?php echo mb_convert_encoding($row[1],'UTF-8'); ?>','<?php echo utf8_encode($rowevn[2]); ?>');"  class="stbSkipLazy alignnone size-full" width="28" height="84"></td></tr>

<?php

}
else
{
?>

<td data-cell-id="E2" data-x="4" data-y="2" data-db-index="2" class="color-333333 fsize-16 htCenter htMiddle" data-cell-type="text" data-original-value="<img  loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;28&quot; height=&quot;84&quot;>" data-order="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;28&quot; height=&quot;84&quot;>" style="color: rgb(51, 51, 51); font-size: 16px; line-height: 22px;"><img loading="lazy" src="http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png" style="cursor: pointer"  id="btnModal" onclick="abrirModal('<?php echo utf8_encode($row[3]); ?>','<?php echo mb_convert_encoding($row[1],'UTF-8'); ?>','<?php echo utf8_encode($row[2]); ?>');"  class="stbSkipLazy alignnone size-full" width="28" height="84"></td></tr>


<?php

}
}else
{
?>

<td data-cell-id="E2" data-x="4" data-y="2" data-db-index="2" class="color-333333 fsize-16 htCenter htMiddle" data-cell-type="text" data-original-value="<img  loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;28&quot; height=&quot;84&quot;>" data-order="<img loading=&quot;lazy&quot; src=&quot;http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png&quot; class=&quot;stbSkipLazy alignnone size-full&quot; width=&quot;28&quot; height=&quot;84&quot;>" style="color: rgb(51, 51, 51); font-size: 16px; line-height: 22px;"><img loading="lazy" src="http://www.igroupsolution.com/wp-content/uploads/2022/06/icono-solicitar-52.png" style="cursor: pointer"  id="btnModal" onclick="abrirModal('<?php echo utf8_encode($row[3]); ?>','<?php echo mb_convert_encoding($row[1],'UTF-8'); ?>','<?php echo utf8_encode($row[2]); ?>');"  class="stbSkipLazy alignnone size-full" width="28" height="84"></td></tr>

<?php
}
}
?>










</tbody><style>#supsystic-table-8.oneColumnWithLabels td:nth-of-type(1):before { content: ""; }#supsystic-table-8.oneColumnWithLabels td:nth-of-type(2):before { content: ""; }#supsystic-table-8.oneColumnWithLabels td:nth-of-type(3):before { content: ""; }#supsystic-table-8.oneColumnWithLabels td:nth-of-type(4):before { content: ""; }#supsystic-table-8.oneColumnWithLabels td:nth-of-type(5):before { content: ""; }</style></table></div><!-- /#supsystic-table-8.supsystic-table --></div><!-- /.supsystic-tables-wrap --><!-- Tables Generator by Supsystic --><!-- Version: 1.10.14 --><!-- http://supsystic.com/ --></div>
				</div>
								</div>
				</div>
				</div>




<div class="elementor-element elementor-element-c77197a elementor-widget elementor-widget-text-editor" data-id="c77197a" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
								<div class="elementor-text-editor elementor-clearfix">
				<p>También puedes solicitar tus asistencias marcando desde celular <strong>300 910 9898  opción 4-2-1 </strong>o desde la aplicación <strong>Mi Coomeva.</strong></p>					</div>
						</div>
				</div>




								
				</div>
				</div>
				<div class="elementor-element elementor-element-3bf9737 elementor-align-center elementor-hidden-desktop elementor-hidden-tablet elementor-hidden-mobile elementor-widget elementor-widget-button" data-id="3bf9737" data-element_type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
					<div class="elementor-button-wrapper">
			<a href="https://www.igroupsolution.com/coomeva-programa-asistencia-integral-arma-tu-plan-responsive-3/#titulo" class="elementor-button-link elementor-button elementor-size-md" role="button">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">Volver arriba</span>
		</span>
					</a>
		</div>
				</div>
				</div>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-769b437 elementor-hidden-tablet" data-id="769b437" data-element_type="column">
			<div class="elementor-column-wrap">
							<div class="elementor-widget-wrap">
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
						</div>
						</div>
					</div>






<!-- Modal Agendar Asistencia-->

<div id="myModalAgenda" class="modalContainer" style="display: none;">
<div class="modal-content" style="width: 60% !important;">
    <h11 class="subraya" id="modalmold">Agendar Asistencia</h11><br>
    <br>
    <h11 class="subraya" id="modalinfopts2">Seleccione la fecha y hora para prestar el servicio:</h11><br><br>
    <div class="fechaHoraAgendar">
        <div class="fechas">
            <div class="fechaAgendar">
                <label>Fecha 1</label>
                <input type="datetime-local" id="fechaAgendaAsistencia" min="08:00" max="17:00">
            </div>
            <div class="fechaAgendar">
                <label>Fecha 2</label>
                <input type="datetime-local" id="fechaAgendaAsistencia2" min="08:00" max="17:00">
            </div>
        </div>
        <form method="post" enctype="multipart/form-data">
            <div class="divSubirArchivo">
                <label for="file">Selecciona un archivo: </label><br>
                <input type="file" id="file" name="file" multiple />
            </div>
        </form>
        
        <!--<div class="horaAgendar">
            <h11 class="subraya" id="modalinfopts"><span style="color: #87B32F;">Fecha seleccionada:</span><span id="fechaSeleccionada">--/--/----</span></h11><br><br>
            <div>
                <label style="color: #87B32F;">Hora: </label>
                <input type="time" id="horaAgendaAsistencia" min="08:00" max="17:00">
            </div>
        </div>-->

    </div>
    <!--<h11 class="subraya" id="modalinfopts">La fecha tentativa de prestastación de su asistencia es el <span id="fechaSeleccionada2">--/--/----</span> a las <span id="horaSeleccionada">00:00</span> horas.</h11><br>-->
    <h11 class="subraya" id="modalinfopts">Tenga en cuenta que esta fecha esta sujeta a disponibilidad y podria cambiar. Nos estaremos comunicando con usted para confirmar los detalles.</h11><br>
    <br>
    <div class="elementor-row">
    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-0da911a">
    <div class="elementor-column-wrap elementor-element-populated">
    <input type="button" class="cerrar" id="btnmodal" onclick="ocultarModalAgenda();" value="Cancelar">
    
    
    </div>
    </div>
<div class="elementor-row"></div>
    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-0da911a">
    <div class="elementor-column-wrap elementor-element-populated">
    <input type="button" style="border:#65f365;background: #65f365;color: white;font-family: 'Raleway', Sans-serif;font-size: 17px;font-weight: 500;background-color: #87B32F;border-radius: 6px 6px 6px 6px;" value="Agendar" id="btnAgendar">
    </div>
    </div>  
    
</div>



 </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    const inputFecha = document.getElementById('fechaAgendaAsistencia');
    const inputHora = document.getElementById('horaAgendaAsistencia');
    const fechaSeleccionada = document.getElementById('fechaSeleccionada');
    const fechaSeleccionada2 = document.getElementById('fechaSeleccionada2');
    const horaSeleccionada = document.getElementById('horaSeleccionada');

    inputFecha.addEventListener('input', actualizarFecha);
    inputHora.addEventListener('input', actualizarHora);

    function actualizarFecha() {
        const fecha = new Date(this.value + 'T00:00:00');
        const opcionesCorta = { day: '2-digit', month: '2-digit', year: 'numeric' };
        const meses = [
            'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 
            'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
        ];
        const dia = fecha.getDate().toString().padStart(2, '0');
        const mes = meses[fecha.getMonth()];
        const year = fecha.getFullYear();

        fechaSeleccionada.textContent = fecha.toLocaleDateString('es-ES', opcionesCorta);
        fechaSeleccionada2.textContent = `${dia}/${mes}/${year}`;
    }

    function actualizarHora() {
        horaSeleccionada.textContent = this.value;
    }
    
    function abrirModal(puntos, servicio, eventos) {
        document.getElementById("myModalAgenda").style.display="block";
    }

</script>
<script type="text/javascript">
    
    function mostrarModalAgenda(){
       document.getElementById("myModalAgenda").style.display="block";
    }

    function ocultarModalAgenda(){
        document.getElementById("myModalAgenda").style.display="none";
    }

    document.getElementById("btnAgendar").addEventListener("click", function () {
        // Validar que todos los campos estén llenos
        if (
            $('#fechaAgendaAsistencia').val() == "" ||
            $('#fechaAgendaAsistencia2').val() == "" ||
            $('#file').val() == ""
        ) {
            swal("Debes llenar todos los campos!");
            return false;
        }

        // Validar que solo se haya seleccionado un archivo
        var archivoInput = document.getElementById("file");
        if (archivoInput.files.length > 1) {
            swal("Solo puedes subir un archivo!");
            archivoInput.value = ""; // Limpiar el campo
            return false;
        }

        // Obtener valores de los campos
        var formData = new FormData();
        formData.append("fecha1", $('#fechaAgendaAsistencia').val());
        formData.append("fecha2", $('#fechaAgendaAsistencia2').val());
        formData.append("archivo", $('#file')[0].files[0]);

        console.log("Datos enviados (cadena):", formData);

        swal({
            title: "Creando asistencia...",
            text: "Por favor espera un momento.",
            icon: "info",
            buttons: false, // Ocultar botones
            closeOnClickOutside: false, // Evitar que se cierre al hacer clic fuera
            closeOnEsc: false // Evitar que se cierre con Esc
        });

        $.ajax({
            type: "POST",
            url: "servicios-Apolo/funciones-Ws.php",
            contentType: false,
            processData: false,
            data: formData,
            success:function(r){
                // Vaciar los campos
                $('#fechaAgendaAsistencia').val('');
                $('#fechaAgendaAsistencia2').val('');
                $('#file').val('');
                console.log(r);
                swal.close();
                if(r==1){
                    swal("Asistencia creada!");
                }
                else if(r==3){
                    swal("Solo puedes subir un archivo!");
                    
                }else{
                    swal("Ha ocurrido un error!");
                }
            }
        });
    });

</script>











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
<link rel="stylesheet" id="jquery-contextmenu-css" href="https://www.igroupsolution.com/wp-content/plugins/data-tables-generator-by-supsystic/src/SupsysticTables/Core/assets/css/lib/jquery.contextMenu.min.css?ver=2.6.4" type="text/css" media="all">
<link rel="stylesheet" id="supsystic-tables-tables-loaders-css-css" href="https://www.igroupsolution.com/wp-content/plugins/data-tables-generator-by-supsystic/src/SupsysticTables/Tables/assets/css/loaders.css?ver=1.1.0" type="text/css" media="all">
<link rel="stylesheet" id="supsystic-tables-shortcode-css-css" href="https://www.igroupsolution.com/wp-content/plugins/data-tables-generator-by-supsystic/src/SupsysticTables/Tables/assets/css/tables.shortcode.css?ver=1.10.14" type="text/css" media="all">
<link rel="stylesheet" id="supsystic-tables-datatables-css-css" href="https://www.igroupsolution.com/wp-content/plugins/data-tables-generator-by-supsystic/src/SupsysticTables/Core/assets/css/lib/jquery.dataTables.min.css?ver=1.10.23" type="text/css" media="all">
<link rel="stylesheet" id="supsystic-tables-datatables-responsive-css-css" href="https://www.igroupsolution.com/wp-content/plugins/data-tables-generator-by-supsystic/src/SupsysticTables/Core/assets/css/lib/responsive.dataTables.min.css?ver=2.0.2" type="text/css" media="all">
<link rel="stylesheet" id="supsystic-tables-datatables-fixed-columns-css-css" href="https://www.igroupsolution.com/wp-content/plugins/data-tables-generator-by-supsystic/src/SupsysticTables/Core/assets/css/lib/fixedColumns.dataTables.min.css?ver=3.2.2" type="text/css" media="all">
<link rel="stylesheet" id="supsystic-tables-datatables-fixed-headers-css-css" href="https://www.igroupsolution.com/wp-content/plugins/data-tables-generator-by-supsystic/src/SupsysticTables/Core/assets/css/lib/fixedHeader.dataTables.min.css?ver=3.1.2" type="text/css" media="all">
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
<!--<script type="text/javascript" src="https://www.igroupsolution.com/wp-content/plugins/mailchimp-for-woocommerce/public/js/mailchimp-woocommerce-public.min.js?ver=2.2.4" id="mailchimp-woocommerce-js"></script>-->
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
"version":"3.5.4","is_static":false,"experimentalFeatures":{"e_import_export":true,"e_hidden_wordpress_widgets":true,"theme_builder_v2":true,"landing-pages":true,"elements-color-picker":true,"favorite-widgets":true,"admin-top-bar":true,"form-submissions":true},"urls":{"assets":"https:\/\/www.igroupsolution.com\/wp-content\/plugins\/elementor\/assets\/"},"settings":{"page":[],"editorPreferences":[]},"kit":{"active_breakpoints":["viewport_mobile","viewport_tablet"],"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description"},"post":{"id":10103,"title":"Coomeva%20%2F%20Programa%20asistencia%20integral%20%2F%20Pide%20tus%20servicios%202%20%2F%20responsive%20%E2%80%93%20IGS","excerpt":"","featuredImage":false}};
</script>
<script type="text/javascript" src="https://www.igroupsolution.com/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.5.4" id="elementor-frontend-js"></script><span id="elementor-device-mode" class="elementor-screen-only"></span>
<script type="text/javascript" src="https://www.igroupsolution.com/wp-content/plugins/elementor-pro/assets/js/preloaded-elements-handlers.min.js?ver=3.5.2" id="pro-preloaded-elements-handlers-js"></script><svg style="display: none;" class="e-font-icon-svg-symbols"></svg>
<script type="text/javascript" src="https://www.igroupsolution.com/wp-content/plugins/elementor/assets/js/preloaded-modules.min.js?ver=3.5.4" id="preloaded-modules-js"></script><svg style="display: none;" class="e-font-icon-svg-symbols"></svg>
<script type="text/javascript" src="https://www.igroupsolution.com/wp-content/plugins/elementor-pro/assets/lib/sticky/jquery.sticky.min.js?ver=3.5.2" id="e-sticky-js"></script>
<script type="text/javascript" src="https://www.igroupsolution.com/wp-content/plugins/data-tables-generator-by-supsystic/src/SupsysticTables/Core/assets/js/lib/jquery.contextMenu.min.js?ver=2.6.4" id="jquery-contextmenu-js"></script>
<script type="text/javascript" id="tables-core-js-extra">
/* <![CDATA[ */
var ajax_obj = {"ajaxurl":"https:\/\/www.igroupsolution.com\/wp-admin\/admin-ajax.php"};
var g_stbStandartFontsList = [];
var g_stbAllFontsList = [];
/* ]]> */
</script>
<script type="text/javascript" src="https://www.igroupsolution.com/wp-content/plugins/data-tables-generator-by-supsystic/src/SupsysticTables/Core/assets/js/core.js?ver=1.10.14" id="tables-core-js"></script>
<script type="text/javascript" src="https://www.igroupsolution.com/wp-content/plugins/data-tables-generator-by-supsystic/src/SupsysticTables/Tables/assets/libraries/ruleJS/ruleJS.lib.full.js" id="supsystic-tables-rulejs-libs-js-js"></script>
<script type="text/javascript" src="https://www.igroupsolution.com/wp-content/plugins/data-tables-generator-by-supsystic/src/SupsysticTables/Tables/assets/libraries/ruleJS/parser.js" id="supsystic-tables-rulejs-parser-js-js"></script>
<script type="text/javascript" src="https://www.igroupsolution.com/wp-content/plugins/data-tables-generator-by-supsystic/src/SupsysticTables/Tables/assets/libraries/ruleJS/ruleJS.js" id="supsystic-tables-rulejs-js-js"></script>
<script type="text/javascript" src="https://www.igroupsolution.com/wp-content/plugins/data-tables-generator-by-supsystic/src/SupsysticTables/Core/assets/js/lib/jquery.dataTables.min.js?ver=1.10.23" id="supsystic-tables-datatables-js-js"></script>
<script type="text/javascript" src="https://www.igroupsolution.com/wp-content/plugins/data-tables-generator-by-supsystic/src/SupsysticTables/Core/assets/js/lib/intl.js?ver=1.10.23" id="intl.js-js"></script>
<script type="text/javascript" src="https://www.igroupsolution.com/wp-content/plugins/data-tables-generator-by-supsystic/src/SupsysticTables/Core/assets/js/lib/dataTables.responsive.min.js?ver=2.0.2" id="supsystic-tables-datatables-responsive-js-js"></script>
<script type="text/javascript" src="https://www.igroupsolution.com/wp-content/plugins/data-tables-generator-by-supsystic/src/SupsysticTables/Core/assets/js/lib/dataTables.fixedColumns.min.js?ver=3.2.2" id="supsystic-tables-datatables-fixed-columns-js-js"></script>
<script type="text/javascript" src="https://www.igroupsolution.com/wp-content/plugins/data-tables-generator-by-supsystic/src/SupsysticTables/Core/assets/js/lib/dataTables.fixedHeader.min.js?ver=3.2.2" id="supsystic-tables-datatables-fixed-headers-js-js"></script>
<script type="text/javascript" src="https://www.igroupsolution.com/wp-content/plugins/data-tables-generator-by-supsystic/src/SupsysticTables/Core/assets/js/lib/dataTables.customExtensions.js?ver=1.10.11" id="supsystic-tables-datatables-extensions-js-js"></script>
<!--<script type="text/javascript" src="https://www.igroupsolution.com/wp-content/plugins/data-tables-generator-by-supsystic/src/SupsysticTables/Tables/assets/libraries/moment.min.js?ver=2.8.4" id="supsystic-tables-moment-js-js"></script>-->
<script type="text/javascript" src="https://www.igroupsolution.com/wp-content/plugins/data-tables-generator-by-supsystic/src/SupsysticTables/Tables/assets/libraries/datetime-moment.js?ver=2.8.4" id="supsystic-tables-datetime-moment-js-js"></script>
<script type="text/javascript" src="https://www.igroupsolution.com/wp-content/plugins/data-tables-generator-by-supsystic/src/SupsysticTables/Core/assets/js/lib/natural.js?ver=1.10.11" id="supsystic-tables-datatables-natural-sort-js-js"></script>
<script type="text/javascript" src="https://www.igroupsolution.com/wp-content/plugins/data-tables-generator-by-supsystic/src/SupsysticTables/Tables/assets/libraries/numeral.min.js?ver=1.10.14" id="supsystic-tables-datatables-numeral-js"></script>
<script type="text/javascript" src="https://www.igroupsolution.com/wp-content/plugins/data-tables-generator-by-supsystic/src/SupsysticTables/Tables/assets/js/tables.shortcode.js?ver=1.10.14" id="supsystic-tables-shortcode-js"></script>
<script type="text/javascript" src="https://www.igroupsolution.com/wp-content/plugins/data-tables-generator-by-supsystic/app/assets/js/notify.js?ver=1.10.14" id="supsystic-tables-notify-js"></script>
	











  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery-3.4.1.min.js"></script>

  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap-4.4.1.js"></script>

  <script>
    //$("body").on("click", "[data-function='mostrar-en-modal']", function(){
      //mostrarEnModal(this,$puntos,$servicio);

    //});

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


				//document.getElementById("btnmodalaceptar").onclick=function() { GuardarPuntos($puntos,$servicio);};
				body.style.position = "static";
				body.style.height = "100%";
				body.style.overflow = "hidden";
			//}

			
			
		}


   function modalclick($puntos,$servicio,$eventos){
            document.getElementById("myModalAgenda").style.display="none";
			var modal = document.getElementById("myModal");
			var btn = document.getElementById("btnModal");
			var span = document.getElementsByClassName("close")[0];
			var body = document.getElementsByTagName("body")[0];
			
			document.getElementById("modalinfopts2").value="";
			if($eventos==0){
			modalclickinfo("No puedes usar este servicio porque no tienes eventos disponibles.");
			//alert ("No puedes usar este servicio porque tienes (0) eventos.");

			//window.location.href="pide-tu-servicio.php";
			}
			else{
				var puntosvalor=Number(document.getElementById("puntosvalor").textContent);
				
				if($puntos >  puntosvalor){
					//modalclickinfo("No puede solicitar el servicio si no tiene los puntos suficientes, usted tiene " + puntosvalor + " puntos.");
					alert("No puede solicitar el servicio si no tiene los puntos suficientes, usted tiene " + puntosvalor + " puntos.");
					//window.location.href="pide-tu-servicio.php"
				}
				else{

			//btn.onclick = function() {
				modal.style.display = "block";


				document.getElementById("modalmold").textContent="¿Estas seguro de solicitar el servicio de "+ $servicio + "?  ";
				document.getElementById("modalinfopts").textContent="Se descontarán "+ $puntos+" puntos de tu bolsa.";
				document.getElementById("modalinfopts2").textContent="Sin Bolsa.";
				document.getElementById("btnmodalaceptar").onclick=function() { GuardarPuntos($puntos,$servicio,$eventos);};
				body.style.position = "static";
				body.style.height = "100%";
				body.style.overflow = "hidden";
			//}
				}
			}

			
			
		}





function modalclick_bolsa4($puntos,$servicio,$eventos){
			var modal = document.getElementById("myModal");
			var btn = document.getElementById("btnModal");
			var span = document.getElementsByClassName("close")[0];
			var body = document.getElementsByTagName("body")[0];
			


			


			document.getElementById("modalinfopts2").value="";
			if($eventos==0){

			alert ("No puede usar este servicio porque tiene 0 eventos.");

			//window.location.href="pide-tu-servicio.php";
			}
			else{



var dato=document.getElementById("datop").innerText;
var dato2=document.getElementById("datop2").innerText;
var dato3=document.getElementById("datop3").innerText;
var dato4=document.getElementById("datop4").innerText;



if(dato==0 || dato2==0 || dato3==0 || dato4==0 ){
alert ("No puede usar este servicio porque tiene 0 eventos en bolsa.");
	document.getElementById("btnModalld").disabled=true;
	document.getElementById("btnModaltv").disabled=true;
	document.getElementById("btnModalcb").disabled=true;
	document.getElementById("btnModalhg").disabled=true;
	alert ("No puede usar este servicio porque tiene 0 eventos.");
}




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
				document.getElementById("modalinfopts2").textContent="Con la solicitud de este servicio no podrá hacer uso de las asistencias de Limpieza dental básica, limpieza de vidrios del hogar y limpieza de cocina y un baño.";
				document.getElementById("btnmodalaceptar").onclick=function() { GuardarPuntos($puntos,$servicio,$eventos);};
				body.style.position = "static";
				body.style.height = "100%";
				body.style.overflow = "hidden";
			//}
				}
			}

			
			
		}





function modalclick_bolsa2($puntos,$servicio,$eventos){
			var modal = document.getElementById("myModal");
			var btn = document.getElementById("btnModal");
			var span = document.getElementsByClassName("close")[0];
			var body = document.getElementsByTagName("body")[0];
			
			document.getElementById("modalinfopts2").value="";

			


			if($eventos==0){

			alert ("No puede usar este servicio porque tiene 0 eventos.");

			//window.location.href="pide-tu-servicio.php";
			}
			else{




var dato=document.getElementById("datop").innerText;
var dato2=document.getElementById("datop2").innerText;
var dato3=document.getElementById("datop3").innerText;
var dato4=document.getElementById("datop4").innerText;

if(dato==0 || dato2==0 || dato3==0 || dato4==0){
alert ("No puede usar este servicio porque tiene 0 eventos en bolsa.");
	document.getElementById("btnModalld").disabled=true;
	document.getElementById("btnModaltv").disabled=true;
	document.getElementById("btnModalcb").disabled=true;
	document.getElementById("btnModalhg").disabled=true;
	alert ("No puede usar este servicio porque tiene 0 eventos.");
}


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
				document.getElementById("modalinfopts2").textContent="Con la solicitud de este servicio no podrá hacer uso de las asistencias de Limpieza de cocina y baño, limpieza dental basica e Instalación de pantallas de tv, cuadros o artículos decorativos.";
				document.getElementById("btnmodalaceptar").onclick=function() { GuardarPuntos($puntos,$servicio,$eventos);};
				body.style.position = "static";
				body.style.height = "100%";
				body.style.overflow = "hidden";
			//}
				}
			}

			
			
		}




function modalclick_bolsa3($puntos,$servicio,$eventos){
			var modal = document.getElementById("myModal");
			var btn = document.getElementById("btnModal");
			var span = document.getElementsByClassName("close")[0];
			var body = document.getElementsByTagName("body")[0];
			
			document.getElementById("modalinfopts2").value="";




			if($eventos==0){

			alert ("No puede usar este servicio porque tiene 0 eventos.");

			//window.location.href="pide-tu-servicio.php";
			}
			else{




var dato=document.getElementById("datop").innerText;
var dato2=document.getElementById("datop2").innerText;
var dato3=document.getElementById("datop3").innerText;
var dato4=document.getElementById("datop4").innerText;

if(dato==0 || dato2==0 || dato3==0 || dato4==0){

alert ("No puede usar este servicio porque tiene 0 eventos en bolsa.");
	document.getElementById("btnModalld").disabled=true;
	document.getElementById("btnModaltv").disabled=true;
	document.getElementById("btnModalcb").disabled=true;
	document.getElementById("btnModalhg").disabled=true;
	
}


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
				document.getElementById("modalinfopts2").textContent="Con la solicitud de este servicio no podrá hacer uso de las asistencias de Limpieza dental básica, limpieza de vidrios del hogar e Instalación de pantallas de tv, cuadros o artículos decorativos.";
				document.getElementById("btnmodalaceptar").onclick=function() { GuardarPuntos($puntos,$servicio,$eventos);};
				body.style.position = "static";
				body.style.height = "100%";
				body.style.overflow = "hidden";
			//}
				}
			}

			
			
		}




function modalclick_bolsa($puntos,$servicio,$eventos){
			var modal = document.getElementById("myModal");
			var btn = document.getElementById("btnModal");
			var span = document.getElementsByClassName("close")[0];
			var body = document.getElementsByTagName("body")[0];
			
			document.getElementById("modalinfopts2").value="";





			if($eventos==0){

			alert ("No puede usar este servicio porque tiene 0 eventos.");

			//window.location.href="pide-tu-servicio.php";
			}
			else{



var dato=document.getElementById("datop").innerText;
var dato2=document.getElementById("datop2").innerText;
var dato3=document.getElementById("datop3").innerText;
var dato4=document.getElementById("datop4").innerText;

if(dato==0 || dato2==0 || dato3==0 || dato4==0){
alert ("No puede usar este servicio porque tiene 0 eventos en bolsa.");
	document.getElementById("btnModalld").disabled=true;
	document.getElementById("btnModaltv").disabled=true;
	document.getElementById("btnModalcb").disabled=true;
	document.getElementById("btnModalhg").disabled=true;
	alert ("No puede usar este servicio porque tiene 0 eventos en bolsa..");
}


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
				document.getElementById("modalinfopts2").textContent="Con la solicitud de este servicio no podrá hacer uso de las asistencias de Limpieza de cocina y baño, limpieza de vidrios del hogar e Instalación de pantallas de tv, cuadros o artículos decorativos.";
				document.getElementById("btnmodalaceptar").onclick=function() { GuardarPuntos($puntos,$servicio,$eventos);};
				body.style.position = "static";
				body.style.height = "100%";
				body.style.overflow = "hidden";
			//}
				}
			}

			
			
		}






function modalclick_bolsa5($puntos,$servicio,$eventos){
			var modal = document.getElementById("myModal");
			var btn = document.getElementById("btnModal");
			var span = document.getElementsByClassName("close")[0];
			var body = document.getElementsByTagName("body")[0];
			
			document.getElementById("modalinfopts2").value="";





			if($eventos==0){

			alert ("No puede usar este servicio porque tiene 0 eventos.");

			//window.location.href="pide-tu-servicio.php";
			}
			else{



var dato=document.getElementById("datop5").innerText;
var dato2=document.getElementById("datop6").innerText;
var dato3=document.getElementById("datop7").innerText;
var dato4=document.getElementById("datop8").innerText;
var dato5=document.getElementById("datop9").innerText;

if(dato==0 || dato2==0 ||  dato4==0 || dato5==0){
alert ("No puede usar este servicio porque tiene 0 eventos en bolsa.");
	document.getElementById("btnModalld").disabled=true;
	document.getElementById("btnModaltv").disabled=true;
	document.getElementById("btnModalcb").disabled=true;
	document.getElementById("btnModalhg").disabled=true;
	alert ("No puede usar este servicio porque tiene 0 eventos en bolsa..");
}


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
				document.getElementById("modalinfopts2").textContent="Con la solicitud de este servicio no podrá hacer uso de las asistencias de Limpieza de cocina y baño, limpieza de vidrios del hogar e Instalación de pantallas de tv, cuadros o artículos decorativos.";
				document.getElementById("btnmodalaceptar").onclick=function() { GuardarPuntos($puntos,$servicio,$eventos);};
				body.style.position = "static";
				body.style.height = "100%";
				body.style.overflow = "hidden";
			//}
				}
			}

			
			
		}




function modalclick_bolsa6($puntos,$servicio,$eventos){
			var modal = document.getElementById("myModal");
			var btn = document.getElementById("btnModal");
			var span = document.getElementsByClassName("close")[0];
			var body = document.getElementsByTagName("body")[0];
			
			document.getElementById("modalinfopts2").value="";





			if($eventos==0){

			alert ("No puede usar este servicio porque tiene 0 eventos.");

			//window.location.href="pide-tu-servicio.php";
			}
			else{



var dato=document.getElementById("datop5").innerText;
var dato2=document.getElementById("datop6").innerText;
var dato3=document.getElementById("datop7").innerText;
var dato4=document.getElementById("datop8").innerText;
var dato5=document.getElementById("datop9").innerText;

if(dato==0 || dato2==0 || dato3==0 || dato4==0 || dato5==0){
alert ("No puede usar este servicio porque tiene 0 eventos en bolsa.");
	document.getElementById("btnModalld").disabled=true;
	document.getElementById("btnModaltv").disabled=true;
	document.getElementById("btnModalcb").disabled=true;
	document.getElementById("btnModalhg").disabled=true;
	alert ("No puede usar este servicio porque tiene 0 eventos en bolsa..");
}


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
				document.getElementById("modalinfopts2").textContent="Con la solicitud de este servicio no podrá hacer uso de las asistencias de Limpieza de cocina y baño, limpieza de vidrios del hogar e Instalación de pantallas de tv, cuadros o artículos decorativos.";
				document.getElementById("btnmodalaceptar").onclick=function() { GuardarPuntos($puntos,$servicio,$eventos);};
				body.style.position = "static";
				body.style.height = "100%";
				body.style.overflow = "hidden";
			//}
				}
			}

			
			
		}



function modalclick_bolsa7($puntos,$servicio,$eventos){
			var modal = document.getElementById("myModal");
			var btn = document.getElementById("btnModal");
			var span = document.getElementsByClassName("close")[0];
			var body = document.getElementsByTagName("body")[0];
			
			document.getElementById("modalinfopts2").value="";





			if($eventos==0){

			alert ("No puede usar este servicio porque tiene 0 eventos.");

			//window.location.href="pide-tu-servicio.php";
			}
			else{



var dato=document.getElementById("datop5").innerText;
var dato2=document.getElementById("datop6").innerText;
var dato3=document.getElementById("datop7").innerText;
var dato4=document.getElementById("datop8").innerText;
var dato5=document.getElementById("datop9").innerText;

if(dato==0 || dato2==0 || dato3==0 || dato4==0 || dato5==0){
alert ("No puede usar este servicio porque tiene 0 eventos en bolsa.");
	document.getElementById("btnModalld").disabled=true;
	document.getElementById("btnModaltv").disabled=true;
	document.getElementById("btnModalcb").disabled=true;
	document.getElementById("btnModalhg").disabled=true;
	alert ("No puede usar este servicio porque tiene 0 eventos en bolsa..");
}


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
				document.getElementById("modalinfopts2").textContent="Con la solicitud de este servicio no podrá hacer uso de las asistencias de Limpieza de cocina y baño, limpieza de vidrios del hogar e Instalación de pantallas de tv, cuadros o artículos decorativos.";
				document.getElementById("btnmodalaceptar").onclick=function() { GuardarPuntos($puntos,$servicio,$eventos);};
				body.style.position = "static";
				body.style.height = "100%";
				body.style.overflow = "hidden";
			//}
				}
			}

			
			
		}


function modalclick_bolsa8($puntos,$servicio,$eventos){
			var modal = document.getElementById("myModal");
			var btn = document.getElementById("btnModal");
			var span = document.getElementsByClassName("close")[0];
			var body = document.getElementsByTagName("body")[0];
			
			document.getElementById("modalinfopts2").value="";





			if($eventos==0){

			alert ("No puede usar este servicio porque tiene 0 eventos.");

			//window.location.href="pide-tu-servicio.php";
			}
			else{



var dato=document.getElementById("datop5").innerText;
var dato2=document.getElementById("datop6").innerText;
var dato3=document.getElementById("datop7").innerText;
var dato4=document.getElementById("datop8").innerText;
var dato5=document.getElementById("datop9").innerText;

if(dato==0 || dato2==0 || dato3==0 || dato4==0 || dato5==0){
alert ("No puede usar este servicio porque tiene 0 eventos en bolsa.");
	document.getElementById("btnModalld").disabled=true;
	document.getElementById("btnModaltv").disabled=true;
	document.getElementById("btnModalcb").disabled=true;
	document.getElementById("btnModalhg").disabled=true;
	alert ("No puede usar este servicio porque tiene 0 eventos en bolsa..");
}


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
				document.getElementById("modalinfopts2").textContent="Con la solicitud de este servicio no podrá hacer uso de las asistencias de Limpieza de cocina y baño, limpieza de vidrios del hogar e Instalación de pantallas de tv, cuadros o artículos decorativos.";
				document.getElementById("btnmodalaceptar").onclick=function() { GuardarPuntos($puntos,$servicio,$eventos);};
				body.style.position = "static";
				body.style.height = "100%";
				body.style.overflow = "hidden";
			//}
				}
			}

			
			
		}





function modalclick_bolsa9($puntos,$servicio,$eventos){
			var modal = document.getElementById("myModal");
			var btn = document.getElementById("btnModal");
			var span = document.getElementsByClassName("close")[0];
			var body = document.getElementsByTagName("body")[0];
			
			document.getElementById("modalinfopts2").value="";





			if($eventos==0){

			alert ("No puede usar este servicio porque tiene 0 eventos.");

			//window.location.href="pide-tu-servicio.php";
			}
			else{



var dato=document.getElementById("datop5").innerText;
var dato2=document.getElementById("datop6").innerText;
var dato3=document.getElementById("datop7").innerText;
var dato4=document.getElementById("datop8").innerText;
var dato5=document.getElementById("datop9").innerText;

if(dato==0 || dato2==0 || dato3==0 || dato4==0 || dato5==0){
alert ("No puede usar este servicio porque tiene 0 eventos en bolsa.");
	document.getElementById("btnModalld").disabled=true;
	document.getElementById("btnModaltv").disabled=true;
	document.getElementById("btnModalcb").disabled=true;
	document.getElementById("btnModalhg").disabled=true;
	alert ("No puede usar este servicio porque tiene 0 eventos en bolsa..");
}


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
				document.getElementById("modalinfopts2").textContent="Con la solicitud de este servicio no podrá hacer uso de las asistencias de Limpieza de cocina y baño, limpieza de vidrios del hogar e Instalación de pantallas de tv, cuadros o artículos decorativos.";
				document.getElementById("btnmodalaceptar").onclick=function() { GuardarPuntos($puntos,$servicio,$eventos);};
				body.style.position = "static";
				body.style.height = "100%";
				body.style.overflow = "hidden";
			//}
				}
			}

			
			
		}



  </script>




<script>
window.onload = function(){
if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {

const celular= window.location.search;
if(celular == "?parametro=celular"){
}else{
window.location.replace("pide-tu-servicio.php?parametro=celular");
}

}
else {
}
}
</script>


<?php

echo "<input type='text' style='visibility:hidden;height: 0px;' id='lblusuario' value='".$_SESSION['usuario']."' />";



$sqlcelularcorreo = "SELECT CASE WHEN telefono = 'Modelo2' THEN telefono2 ELSE telefono END AS telefono,email,nombre1,primerapellido,segundoapellido,user_points.id FROM usuariocoomeva  left join user_points on user_points.usuario=usuariocoomeva.usuario  WHERE usuariocoomeva.usuario='".$_SESSION['usuario']."' ORDER BY usuariocoomeva.id  DESC limit 1 ";
$resultcelularcorreo = $conn ->query($sqlcelularcorreo);




$rowcelularcorreo=$resultcelularcorreo->fetch_array(MYSQLI_NUM);
if($rowcelularcorreo[0]!=""){
echo "<input type='text' style='visibility:hidden;height: 0px;' id='lblcelular' value='".$rowcelularcorreo[0]."' />";
echo "<input type='text' style='visibility:hidden;height: 0px;' id='lblcorreo' value='".$rowcelularcorreo[1]."' />";
echo "<input type='text' style='visibility:hidden;height: 0px;' id='lblnombre' value='".$rowcelularcorreo[2]."' />";
echo "<input type='text' style='visibility:hidden;height: 0px;' id='lblprimerapellido' value='".$rowcelularcorreo[3]." consecutivo: ".$rowcelularcorreo[5]."' />";

}

?>
</body></html>



<?php
}
}
?>
