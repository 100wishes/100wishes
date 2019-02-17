<div id="manageContent">
	<?php
		if($_SESSION["bAdmin"] == 0) {
	?>
		<a href="index.php?controller=admin&action=add&wID=0">Add a Wish</a>
	<?php
		}
	?>
	<h1>List of Wishes</h1>

	<div class="list">
	<?php
	if ($arrData['wishes']) {
		foreach ($arrData['wishes'] as $wish) {
	?>
		<ul>
			<li>
				<a href="index.php?controller=admin&action=add&wID=<?=$wish['id']?>"><span class="far fa-edit"></a>
				<a href="index.php?controller=admin&action=delete&wID=<?=$wish['id']?>"><span class="far fa-trash-alt"></span></a>
				<p class="list-wish"><?=$wish['strWish']?></p>
				<p class="list-status"><?=$wish['status']?></p>
		<?php
			if($_SESSION["bAdmin"] == 1) {
		?>
				<p class="list-hospital"><?=$wish['strName']?></p>
		<?php
			}

			if($wish['nUserID'] != 0) {
		?>
				<p class="list-name"><?=$wish['strFirstName']?></p>
				<p class="list-phone"><?=$wish['nPhone']?></p>
				<p class="list-email"><?=$wish['strEmail']?></p>
		<?php
			}
		?>
			</li>
		</ul>
	<?php
		}
	} else {
		echo "No wishes added.";
	}
	?>
	</div><!--list-->
</div><!--manageContent-->