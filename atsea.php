<?php

include('include/header.inc.php');
include('include/footer.inc.php');

$pageContents = <<< EOPAGE
	$header
	<div class="content cont2">
			<div class="container_12">
				<div class="grid_12">
					<h2 class="mb0">{$translations[$lang]['sea0']}</h2>
					<h3>2003-2014</h3>
				</div>
			</div>
		</div>
		<div class="gray_block gb1">
			<div class="container_12">
				<div class="gallery">
					<div class="grid_3">
						<a href="images/1.jpg" class="gal"><img src="images/1.jpg" alt=""></a>
						<div class="text1"><a href="#">{$translations[$lang]['sea1']}</a></div>
						{$translations[$lang]['sea1text']}
						<br>
					</div>
					<div class="grid_3">
						<a href="images/2.jpg" class="gal bd1"><img src="images/2.jpg" alt=""></a>
						<div class="text1"><a href="#">{$translations[$lang]['sea2']}</a></div>
						{$translations[$lang]['sea2text']}
						<br>
					</div>
					<div class="grid_3">
						<a href="images/3.jpg" class="gal bd2"><img src="images/3.jpg" alt=""></a>
						<div class="text1"><a href="#">{$translations[$lang]['sea3']}</a></div>
						{$translations[$lang]['sea3text']}
						<br>
					</div>
					<div class="grid_3">
						<a href="images/4.jpg" class="gal bd3"><img src="images/4.jpg" alt=""></a>
						<div class="text1"><a href="#">{$translations[$lang]['sea4']}</a></div>
						{$translations[$lang]['sea4text']}
						<br>
					</div>
					<div class="clear"></div>
					<div class="grid_3">
						<a href="images/5.jpg" class="gal"><img src="images/5.jpg" alt=""></a>
						<div class="text1"><a href="#"er >{$translations[$lang]['sea5']}</a></div>
						{$translations[$lang]['sea5text']}
						<br>
					</div>
					<div class="grid_3">
						<a href="images/6.jpg" class="gal bd1"><img src="images/6.jpg" alt=""></a>
						<div class="text1"><a href="#">{$translations[$lang]['sea6']}</a></div>
						{$translations[$lang]['sea6text']}
						<br>
					</div>
					<div class="grid_3">
						<a href="images/7.jpg" class="gal bd2"><img src="images/7.jpg" alt=""></a>
						<div class="text1"><a href="#">{$translations[$lang]['sea7']}</a></div>
						{$translations[$lang]['sea7text']}
						<br>
					</div>
					<div class="grid_3">
						<a href="images/8.jpg" class="gal bd3"><img src="images/8.jpg" alt=""></a>
						<div class="text1"><a href="#">{$translations[$lang]['sea8']}</a></div>
						{$translations[$lang]['sea8text']}
						<br>
					</div>
				</div>
			</div>
		</div>

$footer

EOPAGE;

echo $pageContents;
?>
