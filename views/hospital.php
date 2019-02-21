<div id="smallHero">
	<div class="smallHero-header">
		<img src="assets/hospitalshero.jpg"/>
		<h2><?=$arrData['hospital']['strName']?></h2>
	</div><!-- //smallHero-header-->
</div><!-- //smallHero-->

<div class="hospitalsProfileContainer">
	<div class="hospitalsProfile">
		<img src="assets/<?=$arrData['hospital']['strPhoto']?>" alt="bchildrenshospital">
	</div><!--hospitalsProfile-->

	<div class="hospitalsProfile">
		<p class="bio"><?=$arrData['hospital']['strBio']?></p>
		<p class="phone"><?=$arrData['hospital']['nPhone']?></p>
		<p class="email"><?=$arrData['hospital']['strEmail']?></p>
		<p class="address"><?=$arrData['hospital']['strAddress']?>, <?=$arrData['hospital']['strCity']?>, <?=$arrData['hospital']['province']?></p>
	</div><!--hospitalsProfile-->
</div><!--hospitalsProfileContainer-->

<div class="wishesContainer">
	<h3>Wishes:</h3>
<?php 
if($arrData['wishes']) {
	if(isset($_SESSION["arrMission"])) {
		$arrWish = $_SESSION["arrMission"];
	} else {
		$arrWish = "";
	}
	$arrNb = 0;
	$a = 1;

	foreach($arrData['wishes'] as $wish) {
?>
			<div class="wish">
				<p><?=$wish['strWish']?></p>
			</div><!--wish-->
	
			<div class="wish wish-btns">
				<a href="#" data-id="<?=$wish['id']?>" data-wish="<?=$wish['strWish']?>" data-hospital="<?=$arrData['hospital']['strName']?>" class="btn-primary fulfill">Fulfill</a>
				<a href="index.php?controller=pages&action=addMission&wID=<?=$wish['id']?>" class="btn-primary-reverse">Add to missions</a>
			</div><!--wish button-->
	<?php
		$arrNb += $a;
	}
} else {
?>
	<div class="wish">
		<img src="images/yay-no-wishes.png" alt="yay-no-wishes" class="yay-no-wishes">
	</div><!--wish-->
<?php
}
?>
	<div id="modal">
		<?php
			if(!isset($_SESSION['arrClient']) || empty($_SESSION['arrClient'])){
				echo '<a href="index.php?controller=pages&action=login" class="please-log-in">Please log in to fullfill this wish!</a>';
			} else {
		?>
		<section id="booking">
			<div id="bookingForm">
				<img src="images/booking.jpg" alt="wish league"/>
				<form method="post" action="" class="bForm">
				
					<input type="hidden" id="user" name="nUserID" value="<?=$_SESSION['arrClient']?>" />

					<div class="selectedWish">
						<p class="book-wish-label">Wish:</p>
						<input type="hidden" id="formWish" name="id" value="" />
						<p id="pWish"></p>

						<p class="book-wish-label">Hospital:</p>
						<p id="pHospital"></p>
					</div><!--selectedWish-->

					<div class="bookDate">
						<div>
							<label>Date: </label>
							<input class="required" name="dateBook" type="date">
						</div>
						<div>
						<label>Time: </label>
							<select class="required" name="nTime" id="time">
								<option value="10am">10am</option>
								<option value="11am">11am</option>
								<option value="1pm">1pm</option>
							 	<option value="2pm">2pm</option>
							 	<option value="3pm">3pm</option>
							 	<option value="4pm">4pm</option>
							 	<option value="5pm">5pm</option>
							</select>
						</div>
						<label>Message:</label>
						<textarea></textarea>
						<input type="submit" id="btn-bookForm" class="btn-primary" value="Book Now" />
					</div><!--bookDate-->
				<?php
					}
				?>
				</form><!--bForm-->
			</div><!--bookingForm-->
		</section><!--booking-->
	</div><!--modal-->

	<div id="thankyou">
		<h2>Thank You! Message sent!</h2>
		<p>Thank you for your message. We will get back to you as soon as possible.</p>
		<a class="btn-primary-reverse" href="index.php?controller=pages&action=deleteMission&wish=<?=($arrNb)-1?>">Close</a>
	</div><!--thankyou-->
</div><!--wishesContainer-->