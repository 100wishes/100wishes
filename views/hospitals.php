<div id="smallHero">
	<div class="smallHero-header">
		<img src="assets/<?=$arrData['page']['strHeroImg']?>"/>
		<h2><?=$arrData['page']['strMainTitle']?></h2>
	</div><!-- //smallHero-header-->
</div><!-- //smallHero-->

<div class="hospitalsContainer">
<?php
foreach($arrData['hospitals'] as $hospital) {
?>
	<div class="hospitalsThumb">
		<a href="index.php?controler=pages&amp;action=hospital&amp;hID=<?=$hospital['id']?>"><img src="assets/<?=$hospital['strPhoto']?>" alt="<?=$hospital['strName']?>" /></a>
		<p><?=$hospital['strName']?></p>
		<p class="location"><?=$hospital['strCity']?>, <?=$hospital['province']?></p>
		<a href="index.php?controler=pages&amp;action=hospital&amp;hID=<?=$hospital['id']?>" class="btn-primary">View wishes</a>
	</div><!--hospitalsThumb-->
<?php
}
?>
</div><!--hospitalsContainer-->




