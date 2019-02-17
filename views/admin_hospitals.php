<div id="manageContent">
<?php
	if($_SESSION["bAdmin"] === "1") {
?>
	<a class="btn-action btn-hospital" href="index.php?controller=admin&action=add&hID=0">Add a hospital</a>
<?php
	}
?>
<h1>List of registered hospitals</h1>
<?php
foreach($arrData['hospitals'] as $hospital) {
?>
	<div class="list">
		<a href="index.php?controller=admin&action=add&hID=<?=$hospital['id']?>"><span class="far fa-edit"></span></a>
		<?php
		if($_SESSION["bAdmin"] === "1") {
		?>
			<a href="index.php?controller=admin&action=delete&hID=<?=$hospital['id']?>"><span class="far fa-trash-alt"></span></a>
		<?php
			}
		?>
		<img src="assets/<?=$hospital['strPhoto']?>" alt="<?=$hospital['strName']?>" />
		<p class="list-hospitalname"><?=$hospital['strName']?></p>
		<p class="list-hospitalloc"><?=$hospital['strCity']?>, <?=$hospital['province']?></p>
	</div><!--list-->
<?php
}
?>
</div><!--manageContent-->