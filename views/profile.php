<?php
$nWishes = $arrData['client']['nWishes'];
$nLevel = 0;
for ($counter = 0; $counter < $nWishes; $counter++ ) {
	if ($counter % 5 == 0) {
        $nLevel++;
    }
}
?>
<div id="smallHero">
	<div class="smallHero-header">
		<img src="assets/<?=$arrData['page']['strHeroImg']?>"/>
		<h2><?=$arrData['page']['strMainTitle']?></h2>
	</div><!-- //smallHero-header-->
</div><!-- //smallHero-->

<div id="profile">
	<div class="profile-pic"></div>

	<div class="profile-info">
		<div>
		<?php
		if($nWishes == 0) {
			echo "<h2>Beginner";
		} else {
			echo "<h2>Level ".$nLevel;
		}
		?>	
			</h2>
			<p><span class="label">Full Name: </span><?=$arrData['client']['strFirstName']?> <?=$arrData['client']['strLastName']?></p>
			<p><span class="label">E-mail address: </span><?=$arrData['client']['strEmail']?></p>
			<p><span class="label">Phone #: </span><?=$arrData['client']['nPhone']?></p>
			<p><span class="label">City: </span><?=$arrData['client']['strCity']?></p>
			<p><span class="label">Missions fulfilled: </span><?=$nWishes?></p>
		</div>

		<a href="index.php?controller=pages&action=editprofile" class="profileSecondaryBtn">Edit Profile</a>
		<a href="index.php?controller=pages&action=logoutSite" class="profilePrimaryBtn">Logout</a>
	</div><!--profile-info-->
</div><!--profile-->

