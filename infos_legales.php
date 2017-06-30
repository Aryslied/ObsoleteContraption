<?php

include('include/lang.php');

$header = <<< EOD
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Pop-up infos légales du site port de Plymouth</title>
<link rel="stylesheet" href="css/camera.css">
<link rel="stylesheet" href="css/component.css">
<link rel="stylesheet" href="css/style.css">
</head>

<body>

<div id="contenu">
	<div id="header" title="Port de Plymouth">
		<div id="flag" class="slogan">
			<div id="marge-flag">
			</div>
			<a href="{$_SERVER['PHP_SELF']}?lang=en">
				<img alt="{$translations[$lang]['english']}" src="images/flag.png" title="{$translations[$lang]['english']}" />
			</a>
			<a href="{$_SERVER['PHP_SELF']}?lang=fr">
				<img alt="{$translations[$lang]['french']}" src="images/fr_flag.png" title="{$translations[$lang]['french']}"/>
			</a>
		</div>
	</div>
	<div class="container_12">
	<div class="grid_12">
		<h2>{$translations[$lang]['mention']}</h2>
		<p>{$translations[$lang]['cadre']}</p>
		<h2><a href="" onclick="window.close('infos_legales.php')">{$translations[$lang]['close']}</a></h2>
	</div>
	</div>
</div>

</body>

</html>
EOD;

echo $header

?>