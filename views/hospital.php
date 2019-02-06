<div id="smallHero">
	<div class="smallHero-header">
		<img src="assets/hospitalshero.jpg"/>
		<h2><?=$arrData['hospital']['strName']?></h2>
	</div><!-- //smallHero-header-->
</div><!-- //smallHero-->

<div class="hospitalsProfileContainer">
	<div class="hospitalsProfile">
		<img src="assets/<?=$arrData['hospital']['strPhoto']?>" alt="bchildrenshospital">
	</div><!--hospitalsProfile-->

	<div class="hospitalsProfile">
		<p><?=$arrData['hospital']['strBio']?></p>
		<p><?=$arrData['hospital']['nPhone']?></p>
		<p><?=$arrData['hospital']['strEmail']?></p>
		<p><?=$arrData['hospital']['strAddress']?>, <?=$arrData['hospital']['strCity']?>, <?=$arrData['hospital']['province']?></p>
	</div><!--hospitalsProfile-->
</div><!--hospitalsProfileContainer-->

<div class="wishesContainer">
	<h3>Wishes:</h3>
<?php 
if($arrData['wishes']) {
	foreach($arrData['wishes'] as $wish) {
		?>
			<div class="wish">
				<p><?=$wish['strWish']?></p>
			</div><!--wish-->
	
			<div class="wish wish-btns">
				<a href="" class="btn-primary fulfill">Fulfill</a>
				<a href="" class="btn-primary-reverse">Add to missions</a>
			</div><!--wish button-->
	<?php
	}
} else {
?>
	<div class="wish">
		<p>Yay! All the wishes were fulfilled.</p>
	</div><!--wish-->
<?php
}
?>
</div><!--wishesContainer-->