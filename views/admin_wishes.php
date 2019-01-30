<?php
	if($_SESSION["bAdmin"] == 0) {
?>
	<a href="index.php?controller=admin&action=add&wID=0">Add a Wish</a>
<?php
	}
?>
<h1>List of Wishes</h1>
<?php
if ($arrData['wishes']) {
	foreach ($arrData['wishes'] as $wish) {
?>
	<ul>
		<li>
			<p><?=$wish['strWish']?></p>
			<p><?=$wish['status']?></p>
	<?php
		if($_SESSION["bAdmin"] == 1) {
	?>
			<p><?=$wish['strName']?></p>
	<?php
		}

		if($wish['nUserID'] != 0) {
	?>
			<p><?=$wish['strFirstName']?></p>
			<p><?=$wish['nPhone']?></p>
			<p><?=$wish['strEmail']?></p>
	<?php
		}
	?>
			<a href="index.php?controller=admin&action=add&wID=<?=$wish['id']?>">Edit</a>
			<a href="index.php?controller=admin&action=delete&wID=<?=$wish['id']?>">Delete</a>
		</li>
	</ul>
<?php
	}
} else {
	echo "No wishes added.";
}
?>