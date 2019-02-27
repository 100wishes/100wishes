<nav>
	<ul>
<?php
	foreach($arrData['nav'] as $nav) {
?>
		<li><a href="index.php?controler=pages&amp;action=<?=strtolower($nav['strNav'])?>" class="primaryNav"><?=$nav['strNav']?></a></li>
<?php
	}
?>
	</ul>
</nav>