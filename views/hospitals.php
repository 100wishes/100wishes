<h1>Hospitals Page</h1>
<p><?=$arrData['page']['strMainContent']?></p>

<?php
foreach($arrData['hospitals'] as $hospital) {
?>
	<a href="index.php?controler=pages&amp;action=hospital&amp;hID=<?=$hospital['id']?>"><?=$hospital['strName']?></a>
	<p><?=$hospital['strCity']?>, <?=$hospital['province']?></p>
<?php
}
?>