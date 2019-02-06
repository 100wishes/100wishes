<div id="smallHero">
	<div class="smallHero-header">
		<img src="assets/<?=$arrData['page']['strHeroImg']?>"/>
		<h2><?=$arrData['page']['strMainTitle']?></h2>
	</div><!-- //smallHero-header-->
</div><!-- //smallHero-->

<div class="loginContainer">
	<div class="signUp">
		<h3>Sign Up</h3>
		<div class="signUpForm">
			<form method="post" action="saveContact.php" onsubmit="return validateForm()">
				<label>Full Name</label>
				<input type="text" name="strFullName" class="requiredField" id="strFullName">
				
				<label>Email Address</label>
				<input type="text" name="strEmailAddress" class="requiredField" id="strEmailAddress">

				<label>Password</label>
				<input type="text" name="strPassword" class="requiredField" id="strPassword">

				<input type="submit" value="Sign Up" class="completeBtn"> 
			</form>
		</div><!--signUpForm-->	
	</div><!--signUp-->
</div><!--loginContainer-->