<?php

include('include/header.inc.php');
include('include/footer.inc.php');

//TODO session pour garder la langue active d'une page à l'autre
//TODO idée : par défaut, $langue='fr', sinon, ?lang=en En cliquant sur un drapeau en, on change de page pour aller à index.php?lang=en (ou locale=en?)

$pageContents = <<< EOPAGE
	$header
	<div class="gray_block gb1">
	<div class="container_12">
	<br>
		<h2>{$translations[$lang]['aboutTitle']}</h2>
		<p>{$translations[$lang]['aboutText1']}</p>
		<img src="images/plymouth2015.jpg" alt="{$translations[$lang]['aboutAlt1']}" />
	</div>
	</div>

$footer

EOPAGE;

echo $pageContents;
?>
