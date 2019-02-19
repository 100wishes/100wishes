<div class="manageContent">
	<?php
	$delete = isset($_GET['delete'])?($_GET['delete']):false;

	if ($delete == true) {
		echo "Client Deleted";
	}
	?>
	<h1>Clients</h1>
	<?php
	foreach($arrData['clients'] as $client) {
	?>
		<div class="list">
			<a href="index.php?controller=admin&action=add&cID=<?=$client['id']?>"><span class="far fa-edit"></span></a>
			<a href="index.php?controller=admin&action=delete&cID=<?=$client['id']?>"><span class="far fa-trash-alt"></span></a>
			<p class="list-client"><?=$client['strFirstName']?> <?=$client['strLastName']?></p>
			<p class="list-clientemail"><?=$client['strEmail']?></p>
		</div><!--list-->
	<?php
	}
	?>
</div><!--manageContent-->