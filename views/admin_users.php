<div id="manageContent">
	<a class="btn-action" href="index.php?controller=admin&action=add&uID=0">Add a User</a>
	<h1>List of Users</h1>
	<?php
	foreach($arrData['users'] as $user) {
	?>
		<div class="list">
			<a href="index.php?controller=admin&action=add&uID=<?=$user['id']?>"><span class="far fa-edit"></span></a>
			<a href="index.php?controller=admin&action=delete&uID=<?=$user['id']?>"><span class="far fa-trash-alt"></span></a>
			<p><?=$user['strFirstName']?> <?=$user['strLastName']?> (<?=$user['hospitalName']?>)</p>
		</div><!--user-->
	<?php
	}
	?>
</div><!--manageContent-->