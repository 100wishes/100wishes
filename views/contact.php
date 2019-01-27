<div id="smallHero">
	<div class="smallHero-header">
		<img src="assets/smallhero2.jpg"/>
		<h2>Contact Us</h2>
	</div><!-- //smallHero-header-->
</div><!-- //smallHero-->

<div class="contactContainer">
	<div class="contact">
		<div class="contactForm">
		<form method="post" action="saveContact.php" onsubmit="return validateForm()">
			<label>Full Name</label>
			<input type="text" name="strFullName" class="requiredField" id="strFullName">
			
			<label>Email Address</label>
			<input type="text" name="strEmailAddress" class="requiredField" id="strEmailAddress">

			<label>Telephone</label>	
			<input type="text" name="strPhoneNumber" class="requiredField" id="strPhoneNumber">
			
			<label>Message</label>
			<textarea name="strMessage">Write us a note.</textarea>

			<input type="submit" value="Complete" class="completeBtn"> 
		</form>
		</div><!--contactForm-->	
	</div><!--contact-->

	<div class="contact">
		<div class="contactInfo">
			<h1>Get in touch</h1>
			<p>570 Dunsmuir St #600</p>
			<p>Vancouver, BC V6B 1Y1</p>
			<p>(604) 682-2287</p>
		</div><!--contactInfo-->
	</div><!--contact-->
</div><!--contactContainer-->