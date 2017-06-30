<?php

$footer = <<< EOD
<div id="bottom">
	<a href="#" id="toTop"><span id="toTopHover"></span></a>
	<div class="clear"></div>
	<div class="container_12">
	  <div class="copy" id="contain_bottom">
		<a href="" target="popup" onclick="window.open('infos_legales.php','Window','width=600,height=400')" title="Mentions légales - popup">{$translations[$lang]['mentionlegaltitle']}</a> <span class="espace">|</span>
		<a href="mailto:aurore.dandine@supagro.fr" title="Contact">{$translations[$lang]['contact']}</a>
	  </div>
	</div>
	</div>
</div>
</body>

</html>
EOD;

?>
