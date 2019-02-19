<div id="smallHero">
	<div class="smallHero-header">
		<img src="assets/<?=$arrData['page']['strHeroImg']?>"/>
		<h2><?=$arrData['page']['strMainTitle']?></h2>
	</div><!-- //smallHero-header-->
</div><!-- //smallHero-->

<div class="editProfileContainer">
	<div class="signUpDetails">
		<h3>Edit Profile</h3>
		<div class="editProfile">
			<form id="clientSiteForm" method="post" action="">
				<input type="hidden" id="id" name="id" value="<?=$_SESSION["arrClient"]?>" />

				<label>First Name:</label>
				<input class="required" type="text" id="firstName" name="strFirstName" value="<?=$arrData['client']['strFirstName']?>" />

				<label>Last Name:</label>
				<input class="required" type="text" id="lastName" name="strLastName" value="<?=$arrData['client']['strLastName']?>" />

				<label>E-mail:</label>
				<input class="required" type="email" id="email" name="strEmail" value="<?=$arrData['client']['strEmail']?>" />

				<label>Password:</label>
				<input type="password" id="password" name="strPassword" />
				<input type="hidden" id="pastpassword" name="strPastPassword" value="<?=$arrData['client']['strPassword']?>" />

				<label>Phone Number:</label>
				<input type="text" class="required" id="phone" name="nPhone" value="<?=$arrData['client']['nPhone']?>" />

				<label>City:</label>
				<input type="text" class="required" id="city" name="strCity" value="<?=$arrData['client']['strCity']?>" />

				<label>Province:</label>
				<select id="province" name="nProvinceID">
				<?php
					foreach ($arrData['provinces'] as $province) {
					$selected = $arrData['client']['nProvinceID'] == $province['id']?"selected":"";
				?>
					<option value="<?=$province["id"]?>" <?=$selected?>><?=$province["strName"]?></option>
				<?php
					}
				?>
				</select>

				<input id="btn-updateClientSiteForm" type="submit" value="Save Changes" class="completeBtn"> 
				<a href="index.php?controller=pages&action=profile" class="btn-primary-reverse">Cancel</a>
			</form>
		</div><!--signUpForm-->	
	</div><!--signUpDetails-->
</div><!--signUpContainer-->