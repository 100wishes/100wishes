<h1>List of Clients</h1>
<?php
foreach($arrData['clients'] as $client) {
?>
	<p><?=$client['strFirstName']?> <?=$client['strLastName']?></p>
	<p><?=$client['strEmail']?></p>
	<a href="index.php?controller=admin&action=add&cID=<?=$client['id']?>">Edit</a>
	<a href="index.php?controller=admin&action=delete&cID=<?=$client['id']?>">Delete</a>
<?php
}