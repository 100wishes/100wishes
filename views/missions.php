<div id="smallHero">
	<div class="smallHero-header">
		<img src="assets/<?=$arrData['page']['strHeroImg']?>"/>
		<h2><?=$arrData['page']['strMainTitle']?></h2>
	</div><!-- //smallHero-header-->
</div><!-- //smallHero-->

<div id="missions">
	<div class="missions-heading">
		<h3>Wish</h3>
		<h3>Hospital</h3>
	</div><!--// missions-heading-->

	<div id="wishlist">
<?php
	if(empty($_SESSION["arrMission"])) {
?>
		<div class="wish-item">
			<p>No missions added.</p>
		</div>
<?php
	} else {
		$arrWish = $_SESSION["arrMission"];
		$arrNb = 0;
		$a = 1;

		foreach ($arrWish as $mission) {
	?>
			<div class="wish-item">
				<div>
					<a href="index.php?controller=pages&action=deleteMission&&wish=<?=$arrNb?>"><span class="fas fa-minus-circle"></span></a>
					<p><?=$mission['strWish']?></p>
				</div>
				<p><?=$mission['hospName']?></p>
				<a href="#" class="fulfillBtn">Fulfill</a>
			</div><!--//wish-->
<?php
			$arrNb += $a;
		}
	}
?>
	</div><!--//wishlist-->

	<div id="modal"></div>

</div><!--//missions-->