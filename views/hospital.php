<h1><?=$arrData['hospital']['strName']?></h1>
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