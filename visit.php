<?php

include('include/header.inc.php');
include('include/footer.inc.php');

$pageContents = <<< EOPAGE
	$header
	<div class="gray_block gb1">
			<div class="container_12">
				<div class="grid_8">
					<div class="blog">
						<img class="carre" src="images/barbican.jpg" alt="Barbican Harbour">
						<div class="extra_wrapper">
							<div class="text1">
							<a href="#">{$translations[$lang]['barbicantitle']}</a>
							</div><p>{$translations[$lang]['barbicantext']}</p>
							<br>
						</div>
					</div>
					<div class="blog bd1">
						<img class="carre" src="images/hoe.jpg" alt="Plymouth Hoe">
						<div class="extra_wrapper">
							<div class="text1">
							<a href="#">Plymouth Hoe</a>
							</div><p>{$translations[$lang]['hoetext']}</p>
							<br>
						</div>
					</div>
					<div class="blog bd1">
						<img class="carre" src="images/royalwilliam.jpg" alt="Royal William">
						<div class="extra_wrapper">
							<div class="text1">
							<a href="#">{$translations[$lang]['royal']}</a>
							</div><p>{$translations[$lang]['royaltext']}</p>
							<br>
						</div>
					</div>
		
	</div>

$footer

EOPAGE;

echo $pageContents;
?>
