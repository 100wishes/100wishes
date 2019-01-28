<div id="smallHero">
	<div class="smallHero-header">
		<img src="assets/hospitalshero.jpg"/>
		<h2>Hospitals</h2>
	</div><!-- //smallHero-header-->
</div><!-- //smallHero-->

<div class="hospitalsContainer">
		<div class="hospitalsThumb">
			<img src="assets/bchildrenshospital.png" alt="bchildrenshospital">
			<p>BC Children's Hospital</p>
			<p class="location">Vancouver, British Columbia</p>
			<a href="" class="btn-primary">View wishes</a>
		</div><!--hospitalsThumb-->

		<div class="hospitalsThumb">
			<img src="assets/sickkids.jpg" alt="sickkids">
			<p>Sick Kids Hospital</p>
			<p class="location">Toronto, Ontario</p>
			<a href="" class="btn-primary">View wishes</a>
		</div><!--hospitalsThumb-->
</div><!--hospitalsContainer-->

<p><?=$arrData['page']['strMainContent']?></p>

<?php
foreach($arrData['hospitals'] as $hospital) {
?>
	<a href="index.php?controler=pages&amp;action=hospital&amp;hID=<?=$hospital['id']?>"><img src="assets/<?=$hospital['strPhoto']?>" alt="<?=$hospital['strName']?>" /></a>
	<a href="index.php?controler=pages&amp;action=hospital&amp;hID=<?=$hospital['id']?>"><?=$hospital['strName']?></a>
	<p><?=$hospital['strCity']?>, <?=$hospital['province']?></p>
<?php
}
?>