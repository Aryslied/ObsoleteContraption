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
			<h2>{$translations[$lang]['historyTitle']}</h2>
			<p>{$translations[$lang]['historyText1']}</p>
		<div class="grid_4">
			<h2>{$translations[$lang]['historySubitle1']}</h2>
			<br>
			<a href="images/plymouthold.jpg" class="gal"><img src="images/plymouthold.jpg" alt="{$translations[$lang]['historyAlt1']}" /></a>
		</div>
		<div class="grid_4">
			<h2>{$translations[$lang]['historySubitle2']}</h2>
			<a href="images/plymouth1910.jpg" class="gal"><img class="gal" src="images/plymouth1910.jpg" alt="{$translations[$lang]['historyAlt2']}" /></a>
		</div>
		<div class="grid_4">
			<h2>{$translations[$lang]['historySubitle3']}</h2>
			<br>
			<a href="images/plymouthchristmas.jpg" class="gal"><img class="gal" src="images/plymouthchristmas.jpg" alt="{$translations[$lang]['historyAlt3']}" /></a>
		</div>
		</div>
	</div>

$footer

EOPAGE;

echo $pageContents;
?>
