<?php

include('include/lang.php');

$header = <<< EOD
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<title>Site non officiel du port de Plymouth</title>
	<link rel="icon" href="images/favicon.ico">
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="stylesheet" href="css/camera.css">
	<link rel="stylesheet" href="css/component.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<script src="js/jquery.js"></script>
	<script src="js/jquery-migrate-1.1.1.js"></script>
	<script src="js/jquery.equalheights.js"></script>
	<script src="js/jquery.ui.totop.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/camera.js"></script>
	<script src="js/snap.svg-min.js"></script>
	<!--[if (gt IE 9)|!(IE)]><!-->
	<script src="js/jquery.mobile.customized.min.js"></script>
	<!--<![endif]-->
	<script>
	$(document).ready(function(){
		jQuery('#camera_wrap').camera({
		loader: false,
		pagination: true ,
		minHeight: '394',
		thumbnails: false,
		height: '40.1875%',
		caption: false,
		navigation: false,
		fx: 'mosaic'
		});
		$().UItoTop({ easingType: 'easeOutQuart' });
	})
	</script>
	<!--[if lt IE 8]>
	<div style=' clear: both; text-align:center; position: relative;'>
		<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
			<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
		</a>
	</div>
	<![endif]-->
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<link rel="stylesheet" media="screen" href="css/ie.css">
	<![endif]-->
	<!--[if lt IE 10]>
	<link rel="stylesheet" media="screen" href="css/ie1.css">
	<![endif]-->
</head>

<body class="page1">
<!--==============================header=================================-->
<header>
	<div class="container_12">
		<div id="nav-search">
			<div id="padding-nav-search">
				<form action="./pages/#resultats" method="post" name="rechercheG" onsubmit="javascript:
				if(document.rechercheG.recherche.value.length&lt;3)
				{ alert('Vous devez saisir au moins 3 caractères');
				return false; document.rechercheG.recherche.focus(); }">
					<input alt="Saisir ici votre recherche" class="habillage-recherche" name="recherche" title="Saisir ici votre  recherche" />
					<input type="hidden" value="recherche_generale" />
					<input id="search-button" alt="Lancer la recherche par mots-clés sur l'ensemble du site" class="alignement" src="images/ok.png" title="Lancer la recherche" type="image" /></form>
				<input idl="" name="" type="hidden" value="19" /></div>
		</div>
		<div id="flag">
			<div id="marge-flag">
			</div>
			<a href="{$_SERVER['PHP_SELF']}?lang=en" class="flag">
				<img alt="{$translations[$lang]['english']}" src="images/flag.png" title="{$translations[$lang]['english']}" />
			</a>
			<a href="{$_SERVER['PHP_SELF']}?lang=fr" class="flag">
				<img alt="{$translations[$lang]['french']}" src="images/fr_flag.png" title="{$translations[$lang]['french']}"/>
			</a>
		</div>
		<div class="grid_12">
			<h1><a href="./"><img src="images/Plymouth.png" alt="Logo Plymouth"></a></h1>
			<div class="menu_block">
				<nav id="bt-menu" class="bt-menu" onclick="changeClass()">
					<a href="#" class="bt-menu-trigger"><span>Menu</span></a>
					<ul>
						<li class="current bt-icon"><a href="./">{$translations[$lang]['home']}</a></li>
						<li class="bt-icon"><a href="about.php" tabindex="">{$translations[$lang]['about']}</a></li>
						<li class="bt-icon"><a href="history.php" tabindex="">{$translations[$lang]['history']}</a></li>
						<li class="bt-icon"><a href="visit.php" tabindex="">{$translations[$lang]['visit']}</a></li>
						<li class="bt-icon"><a href="boat.php">{$translations[$lang]['boats']}</a></li>
						<li class="bt-icon"><a href="atsea.php" tabindex="">{$translations[$lang]['sea']}</a></li>
					</ul>
				</nav>
				<div class="clear"></div>
			</div>
		</div>
		<div class="clear"></div>
	</div>
</header>
EOD;

?>
