<nav>
	<ul>
	<?php
	foreach($arrData['nav'] as $nav) {
	?>
		<li><a href="index.php?controler=pages&amp;action=<?=strtolower($nav['strNav'])?>"><?=$nav['strNav']?></a></li>
	<?php
	}
	?>
	</ul>
</nav>