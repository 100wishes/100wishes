<div id="smallHero">
	<div class="smallHero-header">
		<img src="assets/<?=$arrData['page']['strHeroImg']?>"/>
		<h2><?=$arrData['page']['strMainTitle']?></h2>
	</div><!-- //smallHero-header-->
</div><!-- //smallHero-->

<div class="loginContainer">
	<div class="login contact">
		<h3>Log In</h3>
		<div class="loginForm">
			<form method="post" action="" autocomplete="off">
				
				<label>Email Address</label>
				<input type="text" class="required" id="email" name="strEmail" />

				<label>Password</label>
				<input type="password" class="required" id="password" name="strPassword" />

				<input id="loginForm" type="submit" value="Log In" class="completeBtn"> 
			</form>
		</div><!--loginForm-->	
	</div><!--login-->

	<div class="signUp contact contactInfo">
		<h3>Sign Up</h3>
		<p>Don’t have an account yet? Sign up now to start fulfilling wishes.</p>
		<a href="index.php?controller=pages&action=signup" class="btn-secondary">Sign Up Now</a>
	</div><!--signUp-->
</div><!--loginContainer-->