<?
session_start();
$_SESSION['token']=$_GET["token"];

header("Cache-control: no-cache");
header('Pragma: no-cache');
header("X-Frame-Options: deny");
header("X-Content-Type-Options: nosniff");
//include "aai_lib/aai_config.php";
//include "aai_lib/aai_conexion.php";
//require "aai_lib/aai_chklogin.php";

//echo $_SESSION['usuario'];
// Security note: Because of security concerns jquery 1.11.1 was upgraded to jquery lastest version (jquery 3.5.1).


//if(!$_SESSION['usuario']){
	
//	header("Location: index.php");
//}

?>
<html lang="es"><head>
	<meta charset="UTF-8">
		<title>Coomeva / Programa asistencia integral / Cómo solicitar 2 / responsive – IGS</title>
<meta name="robots" content="max-image-preview:large">
<link rel="dns-prefetch" href="//s.w.org">
<link rel="alternate" type="application/rss+xml" title="IGS » Feed" href="https://www.igroupsolution.com/feed/">
<link rel="alternate" type="application/rss+xml" title="IGS » Feed de los comentarios" href="https://www.igroupsolution.com/comments/feed/">
		<script>
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/www.igroupsolution.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.8.7"}};
			!function(e,a,t){var n,r,o,i=a.createElement("canvas"),p=i.getContext&&i.getContext("2d");function s(e,t){var a=String.fromCharCode;p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,e),0,0);e=i.toDataURL();return p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,t),0,0),e===i.toDataURL()}function c(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(o=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},r=0;r<o.length;r++)t.supports[o[r]]=function(e){if(!p||!p.fillText)return!1;switch(p.textBaseline="top",p.font="600 32px Arial",e){case"flag":return s([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])?!1:!s([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!s([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]);case"emoji":return!s([10084,65039,8205,55357,56613],[10084,65039,8203,55357,56613])}return!1}(o[r]),t.supports.everything=t.supports.everything&&t.supports[o[r]],"flag"!==o[r]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[o[r]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(n=t.source||{}).concatemoji?c(n.concatemoji):n.wpemoji&&n.twemoji&&(c(n.twemoji),c(n.wpemoji)))}(window,document,window._wpemojiSettings);
		</script><script src="https://www.igroupsolution.com/wp-includes/js/wp-emoji-release.min.js?ver=5.8.7" type="text/javascript" defer=""></script>
		<style>
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
	<link rel="stylesheet" id="dashicons-css" href="https://www.igroupsolution.com/wp-includes/css/dashicons.min.css?ver=5.8.7" media="all">
<link rel="stylesheet" id="admin-bar-css" href="https://www.igroupsolution.com/wp-includes/css/admin-bar.min.css?ver=5.8.7" media="all">
<link rel="stylesheet" id="elementor-icons-css" href="https://www.igroupsolution.com/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=5.14.0" media="all">
<link rel="stylesheet" id="elementor-common-css" href="https://www.igroupsolution.com/wp-content/plugins/elementor/assets/css/common.min.css?ver=3.5.4" media="all">
<link rel="stylesheet" id="wp-block-library-css" href="https://www.igroupsolution.com/wp-includes/css/dist/block-library/style.min.css?ver=5.8.7" media="all">
<link rel="stylesheet" id="wc-blocks-vendors-style-css" href="https://www.igroupsolution.com/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks-vendors-style.css?ver=8.0.0" media="all">
<link rel="stylesheet" id="wc-blocks-style-css" href="https://www.igroupsolution.com/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks-style.css?ver=8.0.0" media="all">
<link rel="stylesheet" id="wpdm-font-awesome-css" href="https://www.igroupsolution.com/wp-content/plugins/download-manager/assets/fontawesome/css/all.css?ver=5.8.7" media="all">
<link rel="stylesheet" id="wpdm-front-bootstrap-css" href="https://www.igroupsolution.com/wp-content/plugins/download-manager/assets/bootstrap/css/bootstrap.min.css?ver=5.8.7" media="all">
<link rel="stylesheet" id="wpdm-front-css" href="https://www.igroupsolution.com/wp-content/plugins/download-manager/assets/css/front.css?ver=5.8.7" media="all">
<link rel="stylesheet" id="woocommerce-layout-css" href="https://www.igroupsolution.com/wp-content/plugins/woocommerce/assets/css/woocommerce-layout.css?ver=6.8.0" media="all">
<link rel="stylesheet" id="woocommerce-smallscreen-css" href="https://www.igroupsolution.com/wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen.css?ver=6.8.0" media="only screen and (max-width: 768px)">
<link rel="stylesheet" id="woocommerce-general-css" href="https://www.igroupsolution.com/wp-content/plugins/woocommerce/assets/css/woocommerce.css?ver=6.8.0" media="all">
<style id="woocommerce-inline-inline-css">
.woocommerce form .form-row .required { visibility: visible; }
</style>
<!--<link rel="stylesheet" id="hfe-style-css" href="https://www.igroupsolution.com/wp-content/plugins/header-footer-elementor/assets/css/header-footer-elementor.css?ver=1.6.14" media="all">-->
<link rel="stylesheet" id="elementor-frontend-legacy-css" href="https://www.igroupsolution.com/wp-content/plugins/elementor/assets/css/frontend-legacy.min.css?ver=3.5.4" media="all">
<link rel="stylesheet" id="elementor-frontend-css" href="https://www.igroupsolution.com/wp-content/plugins/elementor/assets/css/frontend.min.css?ver=3.5.4" media="all">
<link rel="stylesheet" id="elementor-post-6306-css" href="https://www.igroupsolution.com/wp-content/uploads/elementor/css/post-6306.css?ver=1690597177" media="all">
<link rel="stylesheet" id="elementor-pro-css" href="https://www.igroupsolution.com/wp-content/plugins/elementor-pro/assets/css/frontend.min.css?ver=3.5.2" media="all">
<link rel="stylesheet" id="font-awesome-5-all-css" href="https://www.igroupsolution.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/all.min.css?ver=3.5.4" media="all">
<link rel="stylesheet" id="font-awesome-4-shim-css" href="https://www.igroupsolution.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/v4-shims.min.css?ver=3.5.4" media="all">
<link rel="stylesheet" id="elementor-global-css" href="https://www.igroupsolution.com/wp-content/uploads/elementor/css/global.css?ver=1690597090" media="all">
<link rel="stylesheet" id="elementor-post-12094-css" href="https://www.igroupsolution.com/wp-content/uploads/elementor/css/post-12094.css?ver=1691628755" media="all">
<!--<link rel="stylesheet" id="fluentform-elementor-widget-css" href="https://www.igroupsolution.com/wp-content/plugins/fluentform/public/css/fluent-forms-elementor-widget.css?ver=4.3.10" media="all">-->
<!--<link rel="stylesheet" id="hfe-widgets-style-css" href="https://www.igroupsolution.com/wp-content/plugins/header-footer-elementor/inc/widgets-css/frontend.css?ver=1.6.14" media="all"> -->
<link rel="stylesheet" id="wp-mail-smtp-admin-bar-css" href="https://www.igroupsolution.com/wp-content/plugins/wp-mail-smtp/assets/css/admin-bar.min.css?ver=3.7.0" media="all">
<link rel="stylesheet" id="htbbootstrap-css" href="https://www.igroupsolution.com/wp-content/plugins/ht-mega-for-elementor/assets/css/htbbootstrap.css?ver=1.9.7" media="all">
<link rel="stylesheet" id="font-awesome-css" href="https://www.igroupsolution.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/font-awesome.min.css?ver=4.7.0" media="all">
<link rel="stylesheet" id="htmega-animation-css" href="https://www.igroupsolution.com/wp-content/plugins/ht-mega-for-elementor/assets/css/animation.css?ver=1.9.7" media="all">
<link rel="stylesheet" id="htmega-keyframes-css" href="https://www.igroupsolution.com/wp-content/plugins/ht-mega-for-elementor/assets/css/htmega-keyframes.css?ver=1.9.7" media="all">
<link rel="stylesheet" id="hello-elementor-css" href="https://www.igroupsolution.com/wp-content/themes/hello-elementor/style.min.css?ver=2.6.1" media="all">
<link rel="stylesheet" id="hello-elementor-theme-style-css" href="https://www.igroupsolution.com/wp-content/themes/hello-elementor/theme.min.css?ver=2.6.1" media="all">
<link rel="stylesheet" id="elementor-post-13571-css" href="https://www.igroupsolution.com/wp-content/uploads/elementor/css/post-13571.css?ver=1690597199" media="all">
<link rel="stylesheet" id="elementor-post-19047-css" href="https://www.igroupsolution.com/wp-content/uploads/elementor/css/post-19047.css?ver=1690597091" media="all">
<link rel="stylesheet" id="elementor-post-7807-css" href="https://www.igroupsolution.com/wp-content/uploads/elementor/css/post-7807.css?ver=1690597092" media="all">
<link rel="stylesheet" id="google-fonts-1-css" href="https://fonts.googleapis.com/css?family=Open+Sans%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRaleway%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CPoppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CLibre+Franklin%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=auto&amp;ver=5.8.7" media="all">
<script id="jquery-core-js-extra">
var SDT_DATA = {"ajaxurl":"https:\/\/www.igroupsolution.com\/wp-admin\/admin-ajax.php","siteUrl":"https:\/\/www.igroupsolution.com\/","pluginsUrl":"https:\/\/www.igroupsolution.com\/wp-content\/plugins","isAdmin":""};
</script>
<script src="https://www.igroupsolution.com/wp-includes/js/jquery/jquery.min.js?ver=3.6.0" id="jquery-core-js"></script>
<script src="https://www.igroupsolution.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2" id="jquery-migrate-js"></script>
<script src="https://www.igroupsolution.com/wp-content/plugins/download-manager/assets/bootstrap/js/popper.min.js?ver=5.8.7" id="wpdm-poper-js"></script>
<script src="https://www.igroupsolution.com/wp-content/plugins/download-manager/assets/bootstrap/js/bootstrap.min.js?ver=5.8.7" id="wpdm-front-bootstrap-js"></script>
<script id="wpdm-frontjs-js-extra">
var wpdm_url = {"home":"https:\/\/www.igroupsolution.com\/","site":"https:\/\/www.igroupsolution.com\/","ajax":"https:\/\/www.igroupsolution.com\/wp-admin\/admin-ajax.php"};
var wpdm_js = {"spinner":"<i class=\"fas fa-sun fa-spin\"><\/i>"};
</script>
<script src="https://www.igroupsolution.com/wp-content/plugins/download-manager/assets/js/front.js?ver=3.2.34" id="wpdm-frontjs-js"></script>
<script src="https://www.igroupsolution.com/wp-content/plugins/elementor/assets/lib/font-awesome/js/v4-shims.min.js?ver=3.5.4" id="font-awesome-4-shim-js"></script>
<script id="elementor-pro-app-js-before">
var elementorAppProConfig = {"baseUrl":"https:\/\/www.igroupsolution.com\/wp-content\/plugins\/elementor-pro\/","site-editor":{"urls":{"legacy_view":"https:\/\/www.igroupsolution.com\/wp-admin\/edit.php?post_type=elementor_library&tabs_group=theme"}},
"kit-library":[]};
</script>
<link rel="https://api.w.org/" href="https://www.igroupsolution.com/wp-json/"><link rel="alternate" type="application/json" href="https://www.igroupsolution.com/wp-json/wp/v2/pages/12094"><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://www.igroupsolution.com/xmlrpc.php?rsd">
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://www.igroupsolution.com/wp-includes/wlwmanifest.xml"> 
<meta name="generator" content="WordPress 5.8.7">
<meta name="generator" content="WooCommerce 6.8.0">
<link rel="canonical" href="https://www.igroupsolution.com/coomeva-programa-asistencia-integral-como-solicitar-2-responsive-2/">
<link rel="shortlink" href="https://www.igroupsolution.com/?p=12094">
<link rel="alternate" type="application/json+oembed" href="https://www.igroupsolution.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.igroupsolution.com%2Fcoomeva-programa-asistencia-integral-como-solicitar-2-responsive-2%2F">
<link rel="alternate" type="text/xml+oembed" href="https://www.igroupsolution.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.igroupsolution.com%2Fcoomeva-programa-asistencia-integral-como-solicitar-2-responsive-2%2F&amp;format=xml">
	<noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
	<style media="print">#wpadminbar { display:none; }</style>
	 <!--<style media="screen">
	html { margin-top: 32px !important; }
	* html body { margin-top: 32px !important; }
	@media screen and ( max-width: 782px ) {
		html { margin-top: 46px !important; }
		* html body { margin-top: 46px !important; }
	}
</style>-->
	<!-- <link rel="icon" href="https://www.igroupsolution.com/wp-content/uploads/2019/06/cropped-FaviIGS-32x32.png" sizes="32x32"> -->
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
                --color-primary-hover: #5998ff;
                --color-primary-active: #3281ff;
                --color-secondary: #6c757d;
                --color-secondary-rgb: 108, 117, 125;
                --color-secondary-hover: #6c757d;
                --color-secondary-active: #6c757d;
                --color-success: #018e11;
                --color-success-rgb: 1, 142, 17;
                --color-success-hover: #0aad01;
                --color-success-active: #0c8c01;
                --color-info: #2CA8FF;
                --color-info-rgb: 44, 168, 255;
                --color-info-hover: #2CA8FF;
                --color-info-active: #2CA8FF;
                --color-warning: #FFB236;
                --color-warning-rgb: 255, 178, 54;
                --color-warning-hover: #FFB236;
                --color-warning-active: #FFB236;
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


        </style>
        	<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover"></head>
<body class="page-template page-template-elementor_canvas page page-id-12094 logged-in admin-bar wp-custom-logo theme-hello-elementor woocommerce-js ehf-template-hello-elementor ehf-stylesheet-hello-elementor elementor-default elementor-template-canvas elementor-kit-6306 elementor-page elementor-page-12094 customize-support e--ua-blink e--ua-chrome e--ua-webkit" data-elementor-device-mode="widescreen">
		<script>
		(function() {
			var request, b = document.body, c = 'className', cs = 'customize-support', rcs = new RegExp('(^|\\s+)(no-)?'+cs+'(\\s+|$)');

				request = true;
	
			b[c] = b[c].replace( rcs, ' ' );
			// The customizer requires postMessage and CORS (if the site is cross domain).
			b[c] += ( window.postMessage && request ? ' ' : ' no-' ) + cs;
		}());
	</script>
			
				<div data-elementor-type="wp-page" data-elementor-id="12094" class="elementor elementor-12094" data-elementor-settings="[]">
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
			<a href="https://www.igroupsolution.com/coomeva-programa-asistencia-integral-ingreso-pagina/" class="elementor-button-link elementor-button elementor-size-sm" role="button">
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
												<img src="https://www.igroupsolution.com/wp-content/uploads/2022/02/portadas-paginas-2-2.png" title="portadas-páginas-2" alt="portadas-páginas-2">														</div>
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
							<div style="justify-content: center;" class="elementor-row">
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
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-da1c0b1" data-id="da1c0b1" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-b55c58e elementor-widget elementor-widget-text-editor" data-id="b55c58e" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
								<div class="elementor-text-editor elementor-clearfix">
				<p>Sigue estos sencillos pasos para <span style="color: #333333;">solicitar las asistencias que desees</span></p>					</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-3236a63 elementor-widget elementor-widget-text-editor" data-id="3236a63" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
								<div class="elementor-text-editor elementor-clearfix">
				<p><span style="font-weight: 400;"><span style="color: #028C50;"><strong>1)&nbsp;</strong></span></span>Ingresa a la sección “Pide tu asistencia”.</p>					</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-c3ebcd8 elementor-hidden-mobile elementor-widget elementor-widget-image" data-id="c3ebcd8" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
								<div class="elementor-image">
												<img width="800" height="272" src="imagenes-verde/SOLICITAR-VERDE-02.jpg" class="attachment-large size-large" alt="" loading="lazy" srcset="imagenes-verde/SOLICITAR-VERDE-02.jpg 1024w, imagenes-verde/SOLICITAR-VERDE-02.jpg 300w, imagenes-verde/SOLICITAR-VERDE-02.jpg 768w, imagenes-verde/SOLICITAR-VERDE-02.jpg 1536w, imagenes-verde/SOLICITAR-VERDE-02.jpg 600w, imagenes-verde/SOLICITAR-VERDE-02.jpg 1600w" sizes="(max-width: 800px) 100vw, 800px">														</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-0654b5d elementor-hidden-desktop elementor-hidden-tablet elementor-widget elementor-widget-image" data-id="0654b5d" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
								<div class="elementor-image">
												<img width="512" height="1024" src="https://www.igroupsolution.com/wp-content/uploads/2022/07/Foto-1-1-512x1024.png" class="attachment-large size-large" alt="" loading="lazy" srcset="https://www.igroupsolution.com/wp-content/uploads/2022/07/Foto-1-1-512x1024.png 512w, https://www.igroupsolution.com/wp-content/uploads/2022/07/Foto-1-1-150x300.png 150w, https://www.igroupsolution.com/wp-content/uploads/2022/07/Foto-1-1-768x1535.png 768w, https://www.igroupsolution.com/wp-content/uploads/2022/07/Foto-1-1-769x1536.png 769w, https://www.igroupsolution.com/wp-content/uploads/2022/07/Foto-1-1-1025x2048.png 1025w, https://www.igroupsolution.com/wp-content/uploads/2022/07/Foto-1-1-600x1199.png 600w, https://www.igroupsolution.com/wp-content/uploads/2022/07/Foto-1-1.png 1080w" sizes="(max-width: 512px) 100vw, 512px">														</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-dd31666 elementor-widget elementor-widget-text-editor" data-id="dd31666" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
								<div class="elementor-text-editor elementor-clearfix">
				<p><span style="font-weight: 400;"><span style="color: #028C50;"><strong>2)</strong></span>&nbsp;Revisa la cantidad de puntos que tienes disponibles.</span></p>					</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-2cec121 elementor-hidden-mobile elementor-widget elementor-widget-image" data-id="2cec121" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
								<div class="elementor-image">
												<img width="800" height="272" src="imagenes-verde/SOLICITAR-VERDE-2.jpg" class="attachment-large size-large" alt="" loading="lazy" srcset="imagenes-verde/SOLICITAR-VERDE-2.jpg 1024w, imagenes-verde/SOLICITAR-VERDE-2.jpg 300w, imagenes-verde/SOLICITAR-VERDE-2.jpgg 768w, imagenes-verde/SOLICITAR-VERDE-2.jpg 600w" sizes="(max-width: 800px) 100vw, 800px">														</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-13e6319 elementor-hidden-desktop elementor-hidden-tablet elementor-widget elementor-widget-image" data-id="13e6319" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
								<div class="elementor-image">
												<img width="512" height="1024" src="https://www.igroupsolution.com/wp-content/uploads/2022/07/Foto-2-2-512x1024.png" class="attachment-large size-large" alt="" loading="lazy" srcset="https://www.igroupsolution.com/wp-content/uploads/2022/07/Foto-2-2-512x1024.png 512w, https://www.igroupsolution.com/wp-content/uploads/2022/07/Foto-2-2-150x300.png 150w, https://www.igroupsolution.com/wp-content/uploads/2022/07/Foto-2-2-768x1535.png 768w, https://www.igroupsolution.com/wp-content/uploads/2022/07/Foto-2-2-769x1536.png 769w, https://www.igroupsolution.com/wp-content/uploads/2022/07/Foto-2-2-1025x2048.png 1025w, https://www.igroupsolution.com/wp-content/uploads/2022/07/Foto-2-2-600x1199.png 600w, https://www.igroupsolution.com/wp-content/uploads/2022/07/Foto-2-2.png 1080w" sizes="(max-width: 512px) 100vw, 512px">														</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-2cf24a5 elementor-widget elementor-widget-text-editor" data-id="2cf24a5" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
								<div class="elementor-text-editor elementor-clearfix">
				<p><span style="font-weight: 400;"><span style="color: #028C50;"><strong>3) </strong></span></span>Consulta las asistencias que tienes disponibles en las diferentes categorías y ubica la que quieres usar.</p>					</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-3938e47 elementor-hidden-mobile elementor-widget elementor-widget-image" data-id="3938e47" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
								<div class="elementor-image">
												<img width="800" height="272" src="imagenes-verde/SOLICITAR-VERDE-3.jpg" class="attachment-large size-large" alt="" loading="lazy" srcset="imagenes-verde/SOLICITAR-VERDE-3.jpg 1024w, imagenes-verde/SOLICITAR-VERDE-3.jpg 300w, imagenes-verde/SOLICITAR-VERDE-3.jpg 768w, imagenes-verde/SOLICITAR-VERDE-3.jpg 600w" sizes="(max-width: 800px) 100vw, 800px">														</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-80f4e11 elementor-hidden-desktop elementor-hidden-tablet elementor-widget elementor-widget-image" data-id="80f4e11" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
								<div class="elementor-image">
												<img width="512" height="1024" src="https://www.igroupsolution.com/wp-content/uploads/2022/07/Foto-3-3-512x1024.png" class="attachment-large size-large" alt="" loading="lazy" srcset="https://www.igroupsolution.com/wp-content/uploads/2022/07/Foto-3-3-512x1024.png 512w, https://www.igroupsolution.com/wp-content/uploads/2022/07/Foto-3-3-150x300.png 150w, https://www.igroupsolution.com/wp-content/uploads/2022/07/Foto-3-3-768x1535.png 768w, https://www.igroupsolution.com/wp-content/uploads/2022/07/Foto-3-3-769x1536.png 769w, https://www.igroupsolution.com/wp-content/uploads/2022/07/Foto-3-3-1025x2048.png 1025w, https://www.igroupsolution.com/wp-content/uploads/2022/07/Foto-3-3-600x1199.png 600w, https://www.igroupsolution.com/wp-content/uploads/2022/07/Foto-3-3.png 1080w" sizes="(max-width: 512px) 100vw, 512px">														</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-a31e0dc elementor-widget elementor-widget-text-editor" data-id="a31e0dc" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
								<div class="elementor-text-editor elementor-clearfix">
				<p><span style="font-weight: 400;"><span style="color: #028C50;"><strong>4) </strong></span></span>Compara los puntos que requiere la asistencia que quieres usar con los que tienes disponibles.</p>					</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-d28bfbb elementor-hidden-mobile elementor-widget elementor-widget-image" data-id="d28bfbb" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
								<div class="elementor-image">
												<img width="800" height="272" src="imagenes-verde/SOLICITAR-VERDE-4.jpg" class="attachment-large size-large" alt="" loading="lazy" srcset="imagenes-verde/SOLICITAR-VERDE-4.jpg 1024w, imagenes-verde/SOLICITAR-VERDE-4.jpg 300w, imagenes-verde/SOLICITAR-VERDE-4.jpg 768w, imagenes-verde/SOLICITAR-VERDE-4.jpg 600w" sizes="(max-width: 800px) 100vw, 800px">														</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-092ec1c elementor-hidden-desktop elementor-hidden-tablet elementor-widget elementor-widget-image" data-id="092ec1c" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
								<div class="elementor-image">
												<img width="512" height="1024" src="https://www.igroupsolution.com/wp-content/uploads/2022/07/Foto-4-1-512x1024.png" class="attachment-large size-large" alt="" loading="lazy" srcset="https://www.igroupsolution.com/wp-content/uploads/2022/07/Foto-4-1-512x1024.png 512w, https://www.igroupsolution.com/wp-content/uploads/2022/07/Foto-4-1-150x300.png 150w, https://www.igroupsolution.com/wp-content/uploads/2022/07/Foto-4-1-768x1535.png 768w, https://www.igroupsolution.com/wp-content/uploads/2022/07/Foto-4-1-769x1536.png 769w, https://www.igroupsolution.com/wp-content/uploads/2022/07/Foto-4-1-1025x2048.png 1025w, https://www.igroupsolution.com/wp-content/uploads/2022/07/Foto-4-1-600x1199.png 600w, https://www.igroupsolution.com/wp-content/uploads/2022/07/Foto-4-1.png 1080w" sizes="(max-width: 512px) 100vw, 512px">														</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-e2f932b elementor-widget elementor-widget-text-editor" data-id="e2f932b" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
								<div class="elementor-text-editor elementor-clearfix">
				<p><span style="font-weight: 400;"><span style="color: #028C50;"><strong>5) </strong></span></span>Haz clic en el icono de la opción solicitar una vez hayas validado que tienes los puntos necesarios y después de haber revisado el detalle del servicio que te interesa en la opción “Ver más”.</p>					</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-b738063 elementor-hidden-mobile elementor-widget elementor-widget-image" data-id="b738063" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
								<div class="elementor-image">
												<img width="800" height="272" src="imagenes-verde/SOLICITAR-VERDE-5.jpg" class="attachment-large size-large" alt="" loading="lazy" srcset="imagenes-verde/SOLICITAR-VERDE-5.jpg 1024w, imagenes-verde/SOLICITAR-VERDE-5.jpg 300w, imagenes-verde/SOLICITAR-VERDE-5.jpg 768w, imagenes-verde/SOLICITAR-VERDE-5.jpg 600w" sizes="(max-width: 800px) 100vw, 800px">														</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-4a1086f elementor-hidden-desktop elementor-hidden-tablet elementor-widget elementor-widget-image" data-id="4a1086f" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
								<div class="elementor-image">
												<img width="512" height="1024" src="https://www.igroupsolution.com/wp-content/uploads/2022/07/Foto-5-1-512x1024.png" class="attachment-large size-large" alt="" loading="lazy" srcset="https://www.igroupsolution.com/wp-content/uploads/2022/07/Foto-5-1-512x1024.png 512w, https://www.igroupsolution.com/wp-content/uploads/2022/07/Foto-5-1-150x300.png 150w, https://www.igroupsolution.com/wp-content/uploads/2022/07/Foto-5-1-768x1535.png 768w, https://www.igroupsolution.com/wp-content/uploads/2022/07/Foto-5-1-769x1536.png 769w, https://www.igroupsolution.com/wp-content/uploads/2022/07/Foto-5-1-1025x2048.png 1025w, https://www.igroupsolution.com/wp-content/uploads/2022/07/Foto-5-1-600x1199.png 600w, https://www.igroupsolution.com/wp-content/uploads/2022/07/Foto-5-1.png 1080w" sizes="(max-width: 512px) 100vw, 512px">														</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-1a16b8d elementor-widget elementor-widget-text-editor" data-id="1a16b8d" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
								<div class="elementor-text-editor elementor-clearfix">
				<p><span style="font-weight: 400;"><span style="color: #028C50;"><strong>6) </strong></span></span>Confirma que quieres solicitar la asistencia, una vez lo hagas, Recibirás la llamada de uno de nuestros asesores, para continuar con la programación de tu asistencia.</p>					</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-1f10589 elementor-hidden-mobile elementor-widget elementor-widget-image" data-id="1f10589" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
								<div class="elementor-image">
												<img width="800" height="272" src="imagenes-verde/SOLICITAR-VERDE-6.jpg" class="attachment-large size-large" alt="" loading="lazy" srcset="imagenes-verde/SOLICITAR-VERDE-6.jpg 1024w, imagenes-verde/SOLICITAR-VERDE-6.jpg 300w, imagenes-verde/SOLICITAR-VERDE-6.jpg 768w, imagenes-verde/SOLICITAR-VERDE-6.jpg 600w" sizes="(max-width: 800px) 100vw, 800px">														</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-1d91933 elementor-hidden-desktop elementor-hidden-tablet elementor-widget elementor-widget-image" data-id="1d91933" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
								<div class="elementor-image">
												<img width="512" height="1024" src="https://www.igroupsolution.com/wp-content/uploads/2022/07/Foto-6-1-512x1024.png" class="attachment-large size-large" alt="" loading="lazy" srcset="https://www.igroupsolution.com/wp-content/uploads/2022/07/Foto-6-1-512x1024.png 512w, https://www.igroupsolution.com/wp-content/uploads/2022/07/Foto-6-1-150x300.png 150w, https://www.igroupsolution.com/wp-content/uploads/2022/07/Foto-6-1-768x1535.png 768w, https://www.igroupsolution.com/wp-content/uploads/2022/07/Foto-6-1-769x1536.png 769w, https://www.igroupsolution.com/wp-content/uploads/2022/07/Foto-6-1-1025x2048.png 1025w, https://www.igroupsolution.com/wp-content/uploads/2022/07/Foto-6-1-600x1199.png 600w, https://www.igroupsolution.com/wp-content/uploads/2022/07/Foto-6-1.png 1080w" sizes="(max-width: 512px) 100vw, 512px">														</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-758a783 elementor-align-center elementor-widget elementor-widget-button" data-id="758a783" data-element_type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
					<div class="elementor-button-wrapper">
			<a href="pide-tu-servicio.php" class="elementor-button-link elementor-button elementor-size-md" role="button">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">Solicita tu asistencia</span>
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
            		
				
				
		<script type="text/template" id="tmpl-elementor-templates-modal__header">
	<div class="elementor-templates-modal__header__logo-area"></div>
	<div class="elementor-templates-modal__header__menu-area"></div>
	<div class="elementor-templates-modal__header__items-area">
		<# if ( closeType ) { #>
			<div class="elementor-templates-modal__header__close elementor-templates-modal__header__close--{{{ closeType }}} elementor-templates-modal__header__item">
				<# if ( 'skip' === closeType ) { #>
				<span>Saltar</span>
				<# } #>
				<i class="eicon-close" aria-hidden="true" title="Cerrar"></i>
				<span class="elementor-screen-only">Cerrar</span>
			</div>
		<# } #>
		<div id="elementor-template-library-header-tools"></div>
	</div>
</script>

<script type="text/template" id="tmpl-elementor-templates-modal__header__logo">
	<span class="elementor-templates-modal__header__logo__icon-wrapper e-logo-wrapper">
		<i class="eicon-elementor"></i>
	</span>
	<span class="elementor-templates-modal__header__logo__title">{{{ title }}}</span>
</script>
<script type="text/template" id="tmpl-elementor-finder">
	<div id="elementor-finder__search">
		<i class="eicon-search"></i>
		<input id="elementor-finder__search__input" placeholder="Teclea para encontrar lo que sea en Elementor" autocomplete="off">
	</div>
	<div id="elementor-finder__content"></div>
</script>

<script type="text/template" id="tmpl-elementor-finder-results-container">
	<div id="elementor-finder__no-results">Ningún resultado</div>
	<div id="elementor-finder__results"></div>
</script>

<script type="text/template" id="tmpl-elementor-finder__results__category">
	<div class="elementor-finder__results__category__title">{{{ title }}}</div>
	<div class="elementor-finder__results__category__items"></div>
</script>

<script type="text/template" id="tmpl-elementor-finder__results__item">
	<a href="{{ url }}" class="elementor-finder__results__item__link">
		<div class="elementor-finder__results__item__icon">
			<i class="eicon-{{{ icon }}}"></i>
		</div>
		<div class="elementor-finder__results__item__title">{{{ title }}}</div>
		<# if ( description ) { #>
			<div class="elementor-finder__results__item__description">- {{{ description }}}</div>
		<# } #>
	</a>
	<# if ( actions.length ) { #>
		<div class="elementor-finder__results__item__actions">
		<# jQuery.each( actions, function() { #>
			<a class="elementor-finder__results__item__action elementor-finder__results__item__action--{{ this.name }}" href="{{ this.url }}" target="_blank">
				<i class="eicon-{{{ this.icon }}}"></i>
			</a>
		<# } ); #>
		</div>
	<# } #>
</script>
	<script type="text/javascript">
		(function () {
			var c = document.body.className;
			c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
			document.body.className = c;
		})();
	</script>
	<link rel="stylesheet" id="e-animations-css" href="https://www.igroupsolution.com/wp-content/plugins/elementor/assets/lib/animations/animations.min.css?ver=3.5.4" media="all">
<script src="https://www.igroupsolution.com/wp-content/plugins/data-tables-generator-by-supsystic/app/assets/js/dtgsnonce.js?ver=0.01" id="dtgs_nonce_frontend-js"></script>
<script id="dtgs_nonce_frontend-js-after">
var DTGS_NONCE_FRONTEND = "af8ebb7eff"
</script>
<script src="https://www.igroupsolution.com/wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.13.7" id="regenerator-runtime-js"></script>
<script src="https://www.igroupsolution.com/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0" id="wp-polyfill-js"></script>
<script src="https://www.igroupsolution.com/wp-includes/js/dist/hooks.min.js?ver=a7edae857aab69d69fa10d5aef23a5de" id="wp-hooks-js"></script>
<script src="https://www.igroupsolution.com/wp-includes/js/dist/i18n.min.js?ver=5f1269854226b4dd90450db411a12b79" id="wp-i18n-js"></script>
<script id="wp-i18n-js-after">
wp.i18n.setLocaleData( { 'text direction\u0004ltr': [ 'ltr' ] } );
</script>
<script src="https://www.igroupsolution.com/wp-includes/js/jquery/jquery.form.min.js?ver=4.3.0" id="jquery-form-js"></script>
<script src="https://www.igroupsolution.com/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.7.0-wc.6.8.0" id="jquery-blockui-js"></script>
<script id="wc-add-to-cart-js-extra">
var wc_add_to_cart_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_view_cart":"Ver carrito","cart_url":"https:\/\/www.igroupsolution.com\/cruz-roja-cr\/","is_cart":"","cart_redirect_after_add":"no"};
</script>
<script src="https://www.igroupsolution.com/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=6.8.0" id="wc-add-to-cart-js"></script>
<script src="https://www.igroupsolution.com/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4-wc.6.8.0" id="js-cookie-js"></script>
<script id="woocommerce-js-extra">
var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%"};
</script>
<script src="https://www.igroupsolution.com/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=6.8.0" id="woocommerce-js"></script>
<script id="wc-cart-fragments-js-extra">
var wc_cart_fragments_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_ecf4ccc39196af905463c14c3b32cb4f","fragment_name":"wc_fragments_ecf4ccc39196af905463c14c3b32cb4f","request_timeout":"5000"};
</script>
<script src="https://www.igroupsolution.com/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=6.8.0" id="wc-cart-fragments-js"></script>
<script src="https://www.igroupsolution.com/wp-content/plugins/ht-mega-for-elementor/assets/js/popper.min.js?ver=1.9.7" id="htmega-popper-js"></script>
<script src="https://www.igroupsolution.com/wp-content/plugins/ht-mega-for-elementor/assets/js/htbbootstrap.js?ver=1.9.7" id="htbbootstrap-js"></script>
<script src="https://www.igroupsolution.com/wp-content/plugins/ht-mega-for-elementor/assets/js/waypoints.js?ver=1.9.7" id="waypoints-js"></script>
<script src="https://www.igroupsolution.com/wp-includes/js/jquery/ui/core.min.js?ver=1.12.1" id="jquery-ui-core-js"></script>
<script src="https://www.igroupsolution.com/wp-includes/js/jquery/ui/mouse.min.js?ver=1.12.1" id="jquery-ui-mouse-js"></script>
<script src="https://www.igroupsolution.com/wp-includes/js/jquery/ui/draggable.min.js?ver=1.12.1" id="jquery-ui-draggable-js"></script>
<script src="https://www.igroupsolution.com/wp-includes/js/underscore.min.js?ver=1.13.1" id="underscore-js"></script>
<script src="https://www.igroupsolution.com/wp-includes/js/backbone.min.js?ver=1.4.0" id="backbone-js"></script>
<script src="https://www.igroupsolution.com/wp-content/plugins/elementor/assets/lib/backbone/backbone.marionette.min.js?ver=2.4.5.e1" id="backbone-marionette-js"></script>
<script src="https://www.igroupsolution.com/wp-content/plugins/elementor/assets/lib/backbone/backbone.radio.min.js?ver=1.0.4" id="backbone-radio-js"></script>
<script src="https://www.igroupsolution.com/wp-content/plugins/elementor/assets/js/common-modules.min.js?ver=3.5.4" id="elementor-common-modules-js"></script>
<script src="https://www.igroupsolution.com/wp-content/plugins/elementor/assets/lib/dialog/dialog.min.js?ver=4.9.0" id="elementor-dialog-js"></script>
<script id="wp-api-request-js-extra">
var wpApiSettings = {"root":"https:\/\/www.igroupsolution.com\/wp-json\/","nonce":"b78d066816","versionString":"wp\/v2\/"};
</script>
<script src="https://www.igroupsolution.com/wp-includes/js/api-request.min.js?ver=5.8.7" id="wp-api-request-js"></script>
<script id="elementor-common-js-translations">
( function( domain, translations ) {
	var localeData = translations.locale_data[ domain ] || translations.locale_data.messages;
	localeData[""].domain = domain;
	wp.i18n.setLocaleData( localeData, domain );
} )( "elementor", {"translation-revision-date":"2022-01-23 12:22:25+0000","generator":"GlotPress\/3.0.0-alpha.2","domain":"messages","locale_data":{"messages":{"":{"domain":"messages","plural-forms":"nplurals=2; plural=n != 1;","lang":"es"},"The file exceeds the maximum upload size for this site.":["El archivo supera el tama\u00f1o m\u00e1ximo de subida de este sitio."],"Uploading...":["Subiendo..."],"Enable Unfiltered File Uploads":["Permitir la subida de archivos sin filtrar"],"Unable to connect":["No ha sido posible conectar"],"Before you enable unfiltered files upload, note that this kind of files include a security risk. Elementor does run a process to remove possible malicious code, but there is still risk involved when using such files.":["Antes de que actives la subida de archivos sin filtrar, ten en cuenta que este tipo de archivos implican un riesgo de seguridad. Elementor ejecuta un proceso para eliminar el posible c\u00f3digo malicioso, pero todav\u00eda hay un riesgo inherente al usar estos archivos."],"Finder":["Buscador"],"Enable":["Activar"]}},"comment":{"reference":"assets\/js\/common.js"}} );
</script>
<script id="elementor-common-js-before">
var elementorCommonConfig = {"version":"3.5.4","isRTL":false,"isDebug":false,"isElementorDebug":false,"activeModules":["ajax","finder","connect"],"experimentalFeatures":{"e_import_export":true,"e_hidden_wordpress_widgets":true,"theme_builder_v2":true,"landing-pages":true,"elements-color-picker":true,"favorite-widgets":true,"admin-top-bar":true,"form-submissions":true},"urls":{"assets":"https:\/\/www.igroupsolution.com\/wp-content\/plugins\/elementor\/assets\/","rest":"https:\/\/www.igroupsolution.com\/wp-json\/"},"ajax":{"url":"https:\/\/www.igroupsolution.com\/wp-admin\/admin-ajax.php","nonce":"00653580e5"},"finder":{"data":{"edit":{"title":"Editar","dynamic":true,"name":"edit"},"general":{"title":"General","dynamic":false,"items":{"saved-templates":{"title":"Plantillas guardadas","icon":"library-save","url":"https:\/\/www.igroupsolution.com\/wp-admin\/edit.php?post_type=elementor_library&tabs_group=library","keywords":["template","section","page","library"]},"system-info":{"title":"Informaci\u00f3n del sistema","icon":"info-circle-o","url":"https:\/\/www.igroupsolution.com\/wp-admin\/admin.php?page=elementor-system-info","keywords":["system","info","environment","elementor"]},"role-manager":{"title":"Gestor de perfiles","icon":"person","url":"https:\/\/www.igroupsolution.com\/wp-admin\/admin.php?page=elementor-role-manager","keywords":["role","manager","user","elementor"]},"knowledge-base":{"title":"Base de conocimiento","url":"https:\/\/www.igroupsolution.com\/wp-admin\/admin.php?page=go_knowledge_base_site","keywords":["help","knowledge","docs","elementor"]},"theme-builder":{"title":"Maquetador de temas","icon":"library-save","url":"https:\/\/www.igroupsolution.com\/wp-admin\/admin.php?page=elementor-app&ver=3.5.4#\/site-editor","keywords":["template","header","footer","single","archive","search","404","library"]},"popups":{"title":"Popups","icon":"library-save","url":"https:\/\/www.igroupsolution.com\/wp-admin\/edit.php?post_type=elementor_library&tabs_group=popup&elementor_library_type=popup","keywords":["template","popup","library"]}},
"name":"general"},"create":{"title":"Crear","dynamic":false,"items":{"page":{"title":"A\u00f1adir una nueva plantilla de p\u00e1gina","icon":"plus-circle-o","url":"https:\/\/www.igroupsolution.com\/wp-admin\/edit.php?action=elementor_new_post&post_type=elementor_library&template_type=page&_wpnonce=a12569585a","keywords":["A\u00f1adir una nueva plantilla de p\u00e1gina","post","page","template","new","create"]},"wp-post":{"title":"A\u00f1adir nueva Entrada","icon":"plus-circle-o","url":"https:\/\/www.igroupsolution.com\/wp-admin\/edit.php?action=elementor_new_post&post_type=post&template_type=wp-post&_wpnonce=a12569585a","keywords":["A\u00f1adir nueva Entrada","post","page","template","new","create"]},"wp-page":{"title":"A\u00f1adir nueva P\u00e1gina","icon":"plus-circle-o","url":"https:\/\/www.igroupsolution.com\/wp-admin\/edit.php?action=elementor_new_post&post_type=page&template_type=wp-page&_wpnonce=a12569585a","keywords":["A\u00f1adir nueva P\u00e1gina","post","page","template","new","create"]},"landing-page":{"title":"A\u00f1adir nueva P\u00e1gina de destino","icon":"plus-circle-o","url":"https:\/\/www.igroupsolution.com\/wp-admin\/edit.php?action=elementor_new_post&post_type=e-landing-page&template_type=landing-page&_wpnonce=a12569585a#library","keywords":["A\u00f1adir nueva P\u00e1gina de destino","post","page","template","new","create"]},"product-post":{"title":"A\u00f1adir nueva Product Post","icon":"plus-circle-o","url":"https:\/\/www.igroupsolution.com\/wp-admin\/edit.php?action=elementor_new_post&post_type=product&template_type=wp-post&_wpnonce=a12569585a","keywords":["A\u00f1adir nueva Product Post","post","page","template","new","create"]},"wpdmpro":{"title":"A\u00f1adir nueva Archivo","icon":"plus-circle-o","url":"https:\/\/www.igroupsolution.com\/wp-admin\/edit.php?action=elementor_new_post&post_type=wpdmpro&_wpnonce=a12569585a","keywords":["A\u00f1adir nueva Archivo","post","page","template","new","create"]},"elementor-hf":{"title":"A\u00f1adir nueva Elementor Header & Footer Builder","icon":"plus-circle-o","url":"https:\/\/www.igroupsolution.com\/wp-admin\/edit.php?action=elementor_new_post&post_type=elementor-hf&_wpnonce=a12569585a","keywords":["A\u00f1adir nueva Elementor Header & Footer Builder","post","page","template","new","create"]},"em-form-template":{"title":"A\u00f1adir nueva Form Template","icon":"plus-circle-o","url":"https:\/\/www.igroupsolution.com\/wp-admin\/edit.php?action=elementor_new_post&post_type=em-form-template&_wpnonce=a12569585a","keywords":["A\u00f1adir nueva Form Template","post","page","template","new","create"]},"popups":{"title":"Add New Popup","icon":"plus-circle-o","url":"https:\/\/www.igroupsolution.com\/wp-admin\/edit.php?post_type=elementor_library&tabs_group=popup&elementor_library_type=popup#add_new","keywords":["template","theme","popup","new","create"]},"theme-template":{"title":"Add New Theme Template","icon":"plus-circle-o","url":"https:\/\/www.igroupsolution.com\/wp-admin\/admin.php?page=elementor-app&ver=3.5.4#\/site-editor\/add-new","keywords":["template","theme","new","create"]}},
"name":"create"},"site":{"title":"Sitio","dynamic":false,"items":{"homepage":{"title":"P\u00e1gina de inicio","url":"https:\/\/www.igroupsolution.com","icon":"home-heart","keywords":["home","page"]},"wordpress-dashboard":{"title":"Escritorio","icon":"dashboard","url":"https:\/\/www.igroupsolution.com\/wp-admin\/","keywords":["dashboard","wordpress"]},"wordpress-menus":{"title":"Men\u00fas","icon":"wordpress","url":"https:\/\/www.igroupsolution.com\/wp-admin\/nav-menus.php","keywords":["menu","wordpress"]},"wordpress-themes":{"title":"Temas","icon":"wordpress","url":"https:\/\/www.igroupsolution.com\/wp-admin\/themes.php","keywords":["themes","wordpress"]},"wordpress-customizer":{"title":"Personalizador","icon":"wordpress","url":"https:\/\/www.igroupsolution.com\/wp-admin\/customize.php","keywords":["customizer","wordpress"]},"wordpress-plugins":{"title":"Plugins","icon":"wordpress","url":"https:\/\/www.igroupsolution.com\/wp-admin\/plugins.php","keywords":["plugins","wordpress"]},"wordpress-users":{"title":"Usuarios","icon":"wordpress","url":"https:\/\/www.igroupsolution.com\/wp-admin\/users.php","keywords":["users","profile","wordpress"]}},
"name":"site"},"settings":{"title":"Ajustes","dynamic":false,"items":{"general-settings":{"title":"Ajustes generales","url":"https:\/\/www.igroupsolution.com\/wp-admin\/admin.php?page=elementor","keywords":["general","settings","elementor"]},"advanced":{"title":"Avanzado","url":"https:\/\/www.igroupsolution.com\/wp-admin\/admin.php?page=elementor#tab-advanced","keywords":["advanced","settings","elementor"]},"experiments":{"title":"Experimentos","url":"https:\/\/www.igroupsolution.com\/wp-admin\/admin.php?page=elementor#tab-experiments","keywords":["settings","elementor","experiments"]},"custom-fonts":{"title":"Custom Fonts","icon":"typography","url":"https:\/\/www.igroupsolution.com\/wp-admin\/edit.php?post_type=elementor_font","keywords":["custom","fonts","elementor"]},"custom-icons":{"title":"Custom Icons","icon":"favorite","url":"https:\/\/www.igroupsolution.com\/wp-admin\/edit.php?post_type=elementor_icons","keywords":["custom","icons","elementor"]}},
"name":"settings"},"tools":{"title":"Herramientas","dynamic":false,"items":{"tools":{"title":"Herramientas","icon":"tools","url":"https:\/\/www.igroupsolution.com\/wp-admin\/admin.php?page=elementor-tools","keywords":["tools","regenerate css","safe mode","debug bar","sync library","elementor"]},"replace-url":{"title":"Reemplazar URL","icon":"tools","url":"https:\/\/www.igroupsolution.com\/wp-admin\/admin.php?page=elementor-tools#tab-replace_url","keywords":["tools","replace url","domain","elementor"]},"maintenance-mode":{"title":"Modo de mantenimiento","icon":"tools","url":"https:\/\/www.igroupsolution.com\/wp-admin\/admin.php?page=elementor-tools#tab-maintenance_mode","keywords":["tools","maintenance","coming soon","elementor"]},"version-control":{"title":"Control de versiones","icon":"time-line","url":"https:\/\/www.igroupsolution.com\/wp-admin\/admin.php?page=elementor-tools#tab-versions","keywords":["tools","version","control","rollback","beta","elementor"]}},
"name":"tools"}}},
"connect":[]};
</script>
<script src="https://www.igroupsolution.com/wp-content/plugins/elementor/assets/js/common.min.js?ver=3.5.4" id="elementor-common-js"></script>
<script id="elementor-app-loader-js-before">
var elementorAppConfig = {"menu_url":"https:\/\/www.igroupsolution.com\/wp-admin\/admin.php?page=elementor-app&ver=3.5.4#\/site-editor","assets_url":"https:\/\/www.igroupsolution.com\/wp-content\/plugins\/elementor\/assets\/","return_url":"https:\/\/www.igroupsolution.com\/wp-admin\/","hasPro":true,"admin_url":"https:\/\/www.igroupsolution.com\/wp-admin\/","login_url":"https:\/\/www.igroupsolution.com\/wp-login.php","site-editor":[],"import-export":[],"kit-library":[]};
</script>
<script src="https://www.igroupsolution.com/wp-content/plugins/elementor/assets/js/app-loader.min.js?ver=3.5.4" id="elementor-app-loader-js"></script>
<script src="https://www.igroupsolution.com/wp-includes/js/wp-embed.min.js?ver=5.8.7" id="wp-embed-js"></script>
<script src="https://www.igroupsolution.com/wp-content/plugins/elementor-pro/assets/js/webpack-pro.runtime.min.js?ver=3.5.2" id="elementor-pro-webpack-runtime-js"></script>
<script src="https://www.igroupsolution.com/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.5.4" id="elementor-webpack-runtime-js"></script>
<script src="https://www.igroupsolution.com/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.5.4" id="elementor-frontend-modules-js"></script>
<script id="elementor-pro-frontend-js-before">
var ElementorProFrontendConfig = {"ajaxurl":"https:\/\/www.igroupsolution.com\/wp-admin\/admin-ajax.php","nonce":"bb1535dadb","urls":{"assets":"https:\/\/www.igroupsolution.com\/wp-content\/plugins\/elementor-pro\/assets\/","rest":"https:\/\/www.igroupsolution.com\/wp-json\/"},"i18n":{"toc_no_headings_found":"No headings were found on this page."},"shareButtonsNetworks":{"facebook":{"title":"Facebook","has_counter":true},"twitter":{"title":"Twitter"},"linkedin":{"title":"LinkedIn","has_counter":true},"pinterest":{"title":"Pinterest","has_counter":true},"reddit":{"title":"Reddit","has_counter":true},"vk":{"title":"VK","has_counter":true},"odnoklassniki":{"title":"OK","has_counter":true},"tumblr":{"title":"Tumblr"},"digg":{"title":"Digg"},"skype":{"title":"Skype"},"stumbleupon":{"title":"StumbleUpon","has_counter":true},"mix":{"title":"Mix"},"telegram":{"title":"Telegram"},"pocket":{"title":"Pocket","has_counter":true},"xing":{"title":"XING","has_counter":true},"whatsapp":{"title":"WhatsApp"},"email":{"title":"Email"},"print":{"title":"Print"}},
"menu_cart":{"cart_page_url":"https:\/\/www.igroupsolution.com\/cruz-roja-cr\/","checkout_page_url":"https:\/\/www.igroupsolution.com\/finalizar-compra\/"},"facebook_sdk":{"lang":"es_ES","app_id":""},"lottie":{"defaultAnimationUrl":"https:\/\/www.igroupsolution.com\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json"}};
</script>
<script src="https://www.igroupsolution.com/wp-content/plugins/elementor-pro/assets/js/frontend.min.js?ver=3.5.2" id="elementor-pro-frontend-js"></script>
<script src="https://www.igroupsolution.com/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2" id="elementor-waypoints-js"></script>
<script src="https://www.igroupsolution.com/wp-content/plugins/elementor/assets/lib/swiper/swiper.min.js?ver=5.3.6" id="swiper-js"></script>
<script src="https://www.igroupsolution.com/wp-content/plugins/elementor/assets/lib/share-link/share-link.min.js?ver=3.5.4" id="share-link-js"></script>
<script id="elementor-frontend-js-before">
var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Compartir en Facebook","shareOnTwitter":"Compartir en Twitter","pinIt":"Pinear","download":"Descargar","downloadImage":"Descargar imagen","fullscreen":"Pantalla completa","zoom":"Zoom","share":"Compartir","playVideo":"Reproducir v\u00eddeo","previous":"Anterior","next":"Siguiente","close":"Cerrar"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"M\u00f3vil","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"M\u00f3vil grande","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tableta","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tableta grande","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"Port\u00e1til","value":1366,"default_value":1366,"direction":"max","is_enabled":false},"widescreen":{"label":"Pantalla grande","value":2400,"default_value":2400,"direction":"min","is_enabled":false}}},
"version":"3.5.4","is_static":false,"experimentalFeatures":{"e_import_export":true,"e_hidden_wordpress_widgets":true,"theme_builder_v2":true,"landing-pages":true,"elements-color-picker":true,"favorite-widgets":true,"admin-top-bar":true,"form-submissions":true},"urls":{"assets":"https:\/\/www.igroupsolution.com\/wp-content\/plugins\/elementor\/assets\/"},"settings":{"page":[],"editorPreferences":[]},"kit":{"active_breakpoints":["viewport_mobile","viewport_tablet"],"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description"},"post":{"id":12094,"title":"Coomeva%20%2F%20Programa%20asistencia%20integral%20%2F%20C%C3%B3mo%20solicitar%202%20%2F%20responsive%20%E2%80%93%20IGS","excerpt":"","featuredImage":false},"user":{"roles":["administrator"]}};
</script>
<script src="https://www.igroupsolution.com/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.5.4" id="elementor-frontend-js"></script><span id="elementor-device-mode" class="elementor-screen-only"></span>
<script src="https://www.igroupsolution.com/wp-content/plugins/elementor-pro/assets/js/preloaded-elements-handlers.min.js?ver=3.5.2" id="pro-preloaded-elements-handlers-js"></script><svg style="display: none;" class="e-font-icon-svg-symbols"></svg>
<script src="https://www.igroupsolution.com/wp-content/plugins/elementor/assets/js/preloaded-modules.min.js?ver=3.5.4" id="preloaded-modules-js"></script><svg style="display: none;" class="e-font-icon-svg-symbols"></svg>
<script src="https://www.igroupsolution.com/wp-content/plugins/elementor-pro/assets/lib/sticky/jquery.sticky.min.js?ver=3.5.2" id="e-sticky-js"></script>
<script id="elementor-admin-bar-js-before">
var elementorAdminBarConfig = {"elementor_edit_page":{"id":"elementor_edit_page","title":"Editar con Elementor","href":"https:\/\/www.igroupsolution.com\/wp-admin\/post.php?post=12094&action=elementor","children":{"13571":{"id":"elementor_edit_doc_13571","title":"Asistencia Mochila Ultrassist","sub_title":"Popup","href":"https:\/\/www.igroupsolution.com\/wp-admin\/post.php?post=13571&action=elementor"},"19047":{"id":"elementor_edit_doc_19047","title":"Columbia Multi A.M","sub_title":"Popup","href":"https:\/\/www.igroupsolution.com\/wp-admin\/post.php?post=19047&action=elementor"},"7807":{"id":"elementor_edit_doc_7807","title":"Gracias_CX","sub_title":"Popup","href":"https:\/\/www.igroupsolution.com\/wp-admin\/post.php?post=7807&action=elementor"},"19048":{"id":"elementor_site_settings","title":"Ajustes del sitio","sub_title":"Sitio","href":"https:\/\/www.igroupsolution.com\/wp-admin\/post.php?post=12094&action=elementor#e:run:panel\/global\/open","class":"elementor-site-settings","parent_class":"elementor-second-section"},"19049":{"id":"elementor_app_site_editor","title":"Maquetador de temas","sub_title":"Sitio","href":"https:\/\/www.igroupsolution.com\/wp-admin\/admin.php?page=elementor-app&ver=3.5.4#\/site-editor","class":"elementor-app-link","parent_class":"elementor-second-section"}}}};
</script>
<script src="https://www.igroupsolution.com/wp-content/plugins/elementor/assets/js/elementor-admin-bar.min.js?ver=3.5.4" id="elementor-admin-bar-js"></script>
<script src="https://www.igroupsolution.com/wp-includes/js/hoverintent-js.min.js?ver=2.2.1" id="hoverintent-js-js"></script>
<script src="https://www.igroupsolution.com/wp-includes/js/admin-bar.min.js?ver=5.8.7" id="admin-bar-js"></script>
	

</body></html>