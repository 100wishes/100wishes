<div id="smallHero">
	<div class="smallHero-header">
		<img src="assets/hospitalshero.jpg"/>
		<h2><?=$arrData['hospital']['strName']?></h2>
	</div><!-- //smallHero-header-->
</div><!-- //smallHero-->

<div class="hospitalsProfileContainer">
	<div class="hospitalsProfile">
		<img src="assets/bchildrenshospital.png" alt="bchildrenshospital">
	</div><!--hospitalsProfile-->

	<div class="hospitalsProfile">
		<p>This paragraph is meant to be a description of the hospital. This paragraph is meant to be a description of the hospital. This paragraph is meant to be a description of the hospital. This paragraph is meant to be a description of the hospital.</p>
	</div><!--hospitalsProfile-->
</div><!--hospitalsProfileContainer-->

<div class="wishesContainer">
	<h1>Wishes</h1>
	<div class="wish">
		<p>"I want to meet Batman."</p>
	</div><!--wish-->

	<div class="wish wish-btns">
		<a href="" class="btn-primary fulfill">Fulfill</a>
		<a href="" class="btn-primary-reverse">Add to missions</a>
	</div><!--wish-->

	<div class="wish">
		<p>"I want a toy truck."</p>
	</div><!--wish-->

	<div class="wish wish-btns">
		<a href="" class="btn-primary fulfill">Fulfill</a>
		<a href="" class="btn-primary-reverse">Add to missions</a>
	</div><!--wish-->

	<div class="wish">
		<p>"I wish to see the Avengers movie."</p>
	</div><!--wish-->

	<div class="wish wish-btns">
		<a href="" class="btn-primary fulfill">Fulfill</a>
		<a href="" class="btn-primary-reverse">Add to missions</a>
	</div><!--wish-->

	<div class="wish">
		<p>"I want to fly a kite."</p>
	</div><!--wish-->

	<div class="wish wish-btns">
		<a href="" class="btn-primary fulfill">Fulfill</a>
		<a href="" class="btn-primary-reverse">Add to missions</a>
	</div><!--wish-->

	<div class="wish">
		<p>"I want to make slime."</p>
	</div><!--wish-->

	<div class="wish wish-btns">
		<a href="" class="btn-primary fulfill">Fulfill</a>
		<a href="" class="btn-primary-reverse">Add to missions</a>
	</div><!--wish-->
</div><!--wishesContainer-->

<h1><?=$arrData['hospital']['strName']?></h1>
<img src="assets/<?=$arrData['hospital']['strPhoto']?>" alt="<?=$arrData['hospital']['strName']?>" />
<p><?=$arrData['hospital']['strBio']?></p>
<p>Kids: <?=$arrData['hospital']['nKids']?></p>
<p>Phone: <?=$arrData['hospital']['nPhone']?></p>
<p>Phone: <?=$arrData['hospital']['strEmail']?></p>
<p>Location: <?=$arrData['hospital']['strAddress']?>, <?=$arrData['hospital']['strCity']?>, <?=$arrData['hospital']['province']?></p>

<form method="post" action="">
	<h2>Wishes:</h2>
	<?php 
	foreach($arrData['wishes'] as $wish) {
	?>
		<input class="<?=strtolower($wish['status'])?>" type="checkbox" name="wish" value="<?=$wish['id']?>" />
		<label class="<?=strtolower($wish['status'])?>"><?=$wish['strWish']?></label>
	<?php
	}
	?>

	<input type="submit" name="submit" value="Send" />
</form>