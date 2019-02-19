<?php
//write the code to count the levels according with the wishes
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
			<h2>Level 1</h2>
			<p><span class="label">Full Name: </span><?=$arrData['client']['strFirstName']?> <?=$arrData['client']['strLastName']?></p>
			<p><span class="label">E-mail address: </span><?=$arrData['client']['strEmail']?></p>
			<p><span class="label">Phone #: </span><?=$arrData['client']['nPhone']?></p>
			<p><span class="label">City: </span><?=$arrData['client']['strCity']?></p>
			<p><span class="label">Missions fulfilled: </span><?=$arrData['client']['nWishes']?></p>
		</div>

		<a href="#" class="profileSecondaryBtn">Edit Profile</a>
		<a href="#" class="profilePrimaryBtn">View Missions</a>
	</div><!--profile-info-->
</div><!--profile-->

