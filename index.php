<?php

include('include/header.inc.php');
include('include/footer.inc.php');

//TODO session pour garder la langue active d'une page à l'autre
//TODO idée : par défaut, $langue='fr', sinon, ?lang=en En cliquant sur un drapeau en, on change de page pour aller à index.php?lang=en (ou locale=en?)

$pageContents = <<< EOPAGE
	$header
	<div class="contain">
		<div class="slider_wrapper">
			<div id="camera_wrap" class="">
				<div data-src="images/slide.jpg"></div>
				<div data-src="images/slide1.jpg"></div>
				<div data-src="images/slide2.png"></div>
				<div data-src="images/slide3.jpg"></div>
			</div>
		</div>
	</div>

$footer

EOPAGE;

echo $pageContents;
?>
