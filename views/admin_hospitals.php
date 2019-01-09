<a href="#">Add a hospital</a>
<h1>List of the registered hospitals</h1>
<?php
foreach($arrData['hospitals'] as $hospital) {
?>
	<img src="assets/<?=$hospital['strPhoto']?>" alt="<?=$hospital['strName']?>" />
	<p><?=$hospital['strName']?></p>
	<p><?=$hospital['strCity']?>, <?=$hospital['province']?></p>
	<a href="#">Edit</a>
	<a href="#">Delete</a>
<?php
}