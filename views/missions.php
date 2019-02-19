<div id="smallHero">
	<div class="smallHero-header">
		<img src="assets/<?=$arrData['page']['strHeroImg']?>"/>
		<h2><?=$arrData['page']['strMainTitle']?></h2>
	</div><!-- //smallHero-header-->
</div><!-- //smallHero-->

<div id="missions">
	<div class="missions-heading">
		<h3>Wish</h3>
		<h3>Hospital</h3>
	</div><!--// missions-heading-->

	<div id="wishlist">
<?php
	if(empty($_SESSION["arrMission"])) {
?>
		<div class="wish-item">
			<p>No missions added.</p>
		</div>
<?php
	} else {
		$arrWish = $_SESSION["arrMission"];
		$arrNb = 0;
		$a = 1;

		foreach ($arrWish as $mission) {
	?>
			<div class="wish-item">
				<div>
					<a href="index.php?controller=pages&action=deleteMission&&wish=<?=$arrNb?>"><span class="fas fa-minus-circle"></span></a>
					<p><?=$mission['strWish']?></p>
				</div>
				<p><?=$mission['hospName']?></p>

				<a href="#" data-id="<?=$mission['wID']?>" data-wish="<?=$mission['strWish']?>" data-hospital="<?=$mission['hospName']?>" data-hospid="<?=$mission['hID']?>" class="fulfillBtn">Fulfill</a>
			</div><!--//wish-->
<?php
			$arrNb += $a;
		}
	}
?>
	</div><!--//wishlist-->

	<div id="modal">
		<section id="booking">
			<div id="bookingForm">
				<img src="images/booking.jpg" alt="booking-hero" class="booking-hero">

				<form method="post" action="" class="bForm">
				<?php
					if(!isset($_SESSION['arrClient']) || empty($_SESSION['arrClient'])){
						echo '<a href="index.php?controller=pages&action=login">Please, log in</a>';
					} else {
				?>
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

</div><!--//missions-->