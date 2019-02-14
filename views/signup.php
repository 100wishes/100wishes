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
			<form id="clientSiteForm" method="post" action="">
				<label>First Name:</label>
				<input class="required" type="text" id="firstName" name="strFirstName" />

				<label>Last Name:</label>
				<input class="required" type="text" id="lastName" name="strLastName" />

				<label>E-mail:</label>
				<input class="required" type="email" id="email" name="strEmail" />

				<label>Password:</label>
				<input type="password" class="required" id="password" name="strPassword" />

				<label>Phone Number:</label>
				<input type="text" class="required" id="phone" name="nPhone" />

				<label>City:</label>
				<input type="text" class="required" id="city" name="strCity" />

				<label>Province:</label>
				<select id="province" name="nProvinceID" class="required">
				<?php
					foreach ($arrData['provinces'] as $province) {
				?>
					<option value="<?=$province["id"]?>"><?=$province["strName"]?></option>
				<?php
					}
				?>
				</select>

				<input id="btn-clientSiteForm" type="submit" name="submit" value="Sign Up" class="completeBtn" /> 
			</form>
		</div><!--signUpForm-->	
	</div><!--signUpDetails-->
</div><!--signUpContainer-->