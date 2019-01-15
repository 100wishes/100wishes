<a href="index.php?controller=admin&action=add">Add a User</a>
<h1>List of Users</h1>
<?php
foreach($arrData['users'] as $user) {
?>
	<p><?=$user['strFirstName']?> <?=$user['strLastName']?> (<?=$user['hospitalName']?>)</p>
	<a href="index.php?controller=admin&action=add&uID=<?=$user['id']?>">Edit</a>
	<a href="index.php?controller=admin&action=add&uID=<?=$user['id']?>">Delete</a>
<?php
}