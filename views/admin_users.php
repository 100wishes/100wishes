<a href="#">Add a User</a>
<h1>List of Users</h1>
<?php
foreach($arrData['users'] as $user) {
?>
	<p><?=$user['strFirstName']?> <?=$user['strLastName']?> (<a class="hID-<?=$user['nHospitalID']?>" href="#"><?=$user['hospitalName']?></a>)</p>
	<a href="#">Edit</a>
	<a href="#">Delete</a>
<?php
}