<?php
	if($_SESSION["bAdmin"] === "1") {
?>
	<a href="index.php?controller=admin&action=add&hID=0">Add a hospital</a>
<?php
	}
?>
<h1>List of the registered hospitals</h1>
<?php
foreach($arrData['hospitals'] as $hospital) {
?>
	<img src="assets/<?=$hospital['strPhoto']?>" alt="<?=$hospital['strName']?>" />
	<p><?=$hospital['strName']?></p>
	<p><?=$hospital['strCity']?>, <?=$hospital['province']?></p>
	<a href="index.php?controller=admin&action=add&hID=<?=$hospital['id']?>">Edit</a>
<?php
if($_SESSION["bAdmin"] === "1") {
?>
	<a href="index.php?controller=admin&action=delete&hID=<?=$hospital['id']?>">Delete</a>
<?php
	}
?>
<?php
}
?>