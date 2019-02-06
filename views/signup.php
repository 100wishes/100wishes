<div id="smallHero">
	<div class="smallHero-header">
		<img src="assets/<?=$arrData['page']['strHeroImg']?>"/>
		<h2><?=$arrData['page']['strMainTitle']?></h2>
	</div><!-- //smallHero-header-->
</div><!-- //smallHero-->

<div class="signUpContainer">
	<div class="signUpDetails">
		<h3>Create Account</h3>
		<div class="signUpForm">
			<form method="post" action="saveContact.php" onsubmit="return validateForm()">
				<label>First Name</label>
				<input type="text" name="strFirstName" class="requiredField" id="strFirstName">

				<label>Last Name</label>
				<input type="text" name="strLastName" class="requiredField" id="strLastName">
				
				<label>Email Address</label>
				<input type="text" name="strEmail" class="requiredField" id="strEmail">

				<label>Password</label>
				<input type="text" name="strPassword" class="requiredField" id="strPassword">

				<label>Phone Number</label>
				<input type="text" name="nPhone" class="requiredField" id="nPhone">

				<label>City</label>
				<input type="text" name="strCity" class="requiredField" id="strCity">

				<label>Province</label>
				<input type="text" name="nProvinceID" class="requiredField" id="nProvinceID">

				<input type="submit" value="Sign Up" class="completeBtn"> 
			</form>
		</div><!--signUpForm-->	
	</div><!--signUpDetails-->
</div><!--signUpContainer-->