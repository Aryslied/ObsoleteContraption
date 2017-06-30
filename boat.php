<?php

include('include/header.inc.php');
include('include/footer.inc.php');

$bdd = new PDO('mysql:host=gulliver.supagro.inra.fr;dbname=bdtdbd','etudiant','de10cace');

$resultat =$bdd->query("SELECT VesselName FROM boats WHERE CountryCode='GBR' AND PortCode='PH'");

if ($resultat == FALSE){
	$taberror = $bdd->errorInfo();
	die("Erreur dans la requête SQL : " . $taberror[2]);
}else{
	$output = '<ul class="list2" id="boat-list" style="display:none;">';
	foreach ($resultat as $ligne)  {
		$output = $output."<li>".$ligne['VesselName']."</li>";
	}
		$output = $output."</ul>";
		$resultat->closeCursor();
	}

//debug without the database
//$output= '<p id="boat-list" style="display:none;">debug liste des bateaux</p>';

$pageContents = <<< EOPAGE
	$header
	<div class="gray_block gb1">
	<br>
	<div class="container_12">
		<h2>{$translations[$lang]['boatTitle']}</h2>
		<img src="images/ferry.jpg" alt="ferry Plymouth-Princetown">
		<h3>{$translations[$lang]['boatText1']}</h3>
		<ul>
			<li><a id="boat-display" href="#" foo="false">{$translations[$lang]['displayboatlist']}</a>
			{$translations[$lang]['displayboat2']}</li>
		</ul>

		$output

		<script type="text/javascript">
			$(document).ready(function(){
				$("#boat-display").click(function(){
					console.log("click");
					if($("#boat-display").attr('foo') == 'true'){
						$("#boat-list").css('display', 'none');
						$("#boat-display").attr('foo', 'false');
						console.log("Salut");
					}else{
						$("#boat-list").css('display', 'block');
						$("#boat-display").attr('foo', 'true');
						console.log("Patrick");
					}
				});
			});
		</script>
	</div>
	</div>
$footer

EOPAGE;

echo $pageContents;
?>
