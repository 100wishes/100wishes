<div id="smallHero">
	<div class="smallHero-header">
		<img src="assets/<?=$arrData['page']['strHeroImg']?>"/>
		<h2><?=$arrData['page']['strMainTitle']?></h2>
	</div><!-- //smallHero-header-->
</div><!-- //smallHero-->

<div class="loginContainer">
	<div class="login">
		<h3>Log In</h3>
		<div class="loginForm">
			<form method="post" onsubmit="return validateForm()">
				
				<label>Email Address</label>
				<input type="text" name="strEmailAddress" class="requiredField" id="strEmailAddress">

				<label>Password</label>
				<input type="text" name="strPassword" class="requiredField" id="strPassword">


				<input type="submit" value="Log In" class="completeBtn"> 
			</form>
		</div><!--loginForm-->	
	</div><!--login-->

	<div class="signUp">
		<h3>Sign Up</h3>
		<p>Don’t have an account yet? Sign up now to start fulfilling wishes.</p>
		<a href="#" class="btn-secondary">Sign Up Now</a>
	</div><!--signUp-->
</div><!--loginContainer-->