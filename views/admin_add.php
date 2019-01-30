<?php
if(isset($_GET['cID'])) {
	$client = $arrData['client'][0];

	$firstName = $client['strFirstName'];
	$lastName = $client['strLastName'];
	$email = $client['strEmail'];
	$password = $client['strPassword'];
	$phone = $client['nPhone'];
	$city = $client['strCity'];
	$provinceID = $client['strProvince'];
?>
	<h1>Edit Client Info</h1>

	<form id="clientForm" method="post" action="index.php?controller=admin&action=save&cID=<?=$_GET['cID']?>">
		<label>First Name:</label>
		<input class="required" type="text" id="firstName" name="strFirstName" value="<?=$firstName?>" />

		<label>Last Name:</label>
		<input class="required" type="text" id="lastName" name="strLastName" value="<?=$lastName?>" />

		<label>E-mail:</label>
		<input class="required" type="email" id="email" name="strEmail" value="<?=$email?>" />

		<label>Password:</label>
		<input type="password" id="password" name="strPassword" />
		<input type="hidden" id="pastpassword" name="strPastPassword" value="<?=$password?>" />


		<label>Phone Number:</label>
		<input type="text" id="phone" name="nPhone" value="<?=$phone?>" />

		<label>City:</label>
		<input type="text" id="city" name="strCity" value="<?=$city?>" />

		<label>Province:</label>
		<select id="province" name="nProvinceID">
		<?php
			foreach ($arrData['provinces'] as $province) {
			$selected = $provinceID == $province['id']?"selected":"";
		?>
			<option value="<?=$province["id"]?>" <?=$selected?>><?=$province["strName"]?></option>
		<?php
			}
		?>
		</select>

		<p>Wishes Fulfilled: <span><?=$client['nWishes'];?></span></p>

		<input id="btn-clientForm" type="submit" name="submit" value="Save" />
	</form>
<?php
}

if(isset($_GET['uID'])) {
	if($_GET['uID'] == 0) {
		$firstName = '';
		$lastName = '';
		$email = '';
		$password = '';
		$phone = '';
		$hospital = '';
	} else {
		$user = $arrData['user'][0];
		$firstName = $user['strFirstName'];
		$lastName = $user['strLastName'];
		$email = $user['strEmail'];
		$password = $user['strPassword'];
		$phone = $user['nPhone'];
		$hospital = $user['hospitalName'];
		$nHospital = $user['nHospitalID'];
	}
?>
	<h1>Edit User Info</h1>

	<form id="userForm" method="post" action="index.php?controller=admin&action=save&uID=<?=$_GET['uID']?>">
		<label>First Name:</label>
		<input class="required" type="text" id="firstName" name="strFirstName" value="<?=$firstName?>" />

		<label>Last Name:</label>
		<input class="required" type="text" id="lastName" name="strLastName" value="<?=$lastName?>" />

		<label>E-mail:</label>
		<input class="required" type="email" id="email" name="strEmail" value="<?=$email?>" />

		<label>Password:</label>
		<input type="password" id="password" name="strPassword" />
		<input type="hidden" id="pastpassword" name="strPastPassword" value="<?=$password?>" />

		<label>Phone Number:</label>
		<input type="text" id="phone" name="nPhone" value="<?=$phone?>" />
		
<?php
	if($_SESSION["bAdmin"] == 1 && $_GET['uID'] == 0) {
?>
		<label>Hospital:</label>
		<select id="hospital" name="nHospitalID">
		<?php
			foreach ($arrData['hospitalsList'] as $hospitalid) {
		?>
			<option value="<?=$hospitalid["id"]?>"><?=$hospitalid["strName"]?></option>
		<?php
			}
		?>
		</select>
<?php
	} else if($_SESSION["bAdmin"] == 0 && $_GET['uID'] > 0) {
?>
		<p>Hospital:</p>
		<p><?=$hospital?></p>
<?php
	} else if($_SESSION["bAdmin"] == 0 && $_GET['uID'] == 0) {
?>
		<input type="hidden" id="hospital" name="nHospitalID" value="<?=$_SESSION["hospitalID"]?>" />
<?php
	}
?>
		<input id="btn-userForm" type="submit" name="submit" value="Save" />
	</form>
<?php
}

if(isset($_GET['hID'])) {
	if($_GET['hID'] == 0) {
		$name = '';
		$email = '';
		$kids = '';
		$phone = '';
		$bio = '';
		$provinceID = '';
		$city = '';
		$postal = '';
		$address = '';
		$photo = '';
		$image = '';
	} else {
		$hospInfo = $arrData['hospitalInfo'][0];
		$name = $hospInfo['strName'];
		$email = $hospInfo['strEmail'];
		$kids = $hospInfo['nKids'];
		$phone = $hospInfo['nPhone'];
		$bio = $hospInfo['strBio'];
		$provinceID = $hospInfo['nProvinceID'];
		$city = $hospInfo['strCity'];
		$postal = $hospInfo['strPostalCode'];
		$address = $hospInfo['strAddress'];
		$image = $hospInfo['strPhoto'];
	}
?>
	<h1>Edit Hospital Info</h1>

	<form id="hospForm" method="post" action="index.php?controller=admin&action=save&hID=<?=$_GET['hID']?>" enctype="multipart/form-data">
		<div>
			<label>Logo:</label>
			<input type="file" name="strPhoto" />
		<?php
		if($image) {
		?>
			<div class="editImg">
				<img src="assets/<?=$image?>" alt="<?=$image?>" />
				<input type="hidden" name="photo" value="<?=$image?>" />
			</div>
		<?php
		}
		?>
		</div>

		<label>Hospital Name:</label>
		<input class="required" type="text" id="name" name="strName" value="<?=$name?>" />

		<label>E-mail:</label>
		<input class="required" type="email" id="email" name="strEmail" value="<?=$email?>" />

		<label>Phone Number:</label>
		<input type="text" id="phone" name="nPhone" value="<?=$phone?>" />

		<label>Number of Kids:</label>
		<input type="text" id="kids" name="nKids" value="<?=$kids?>" />
		
		<label>Bio:</label>
		<textarea id="bio" name="strBio"><?=$bio?></textarea>

		<label>Address:</label>
		<input type="text" id="address" name="strAddress" value="<?=$address?>" />

		<label>City:</label>
		<input type="text" id="city" name="strCity" value="<?=$city?>" />
		
		<label>Province:</label>
		<select id="province" name="nProvinceID">
		<?php
			foreach ($arrData['provinces'] as $province) {
			$selected = $provinceID == $province['id']?"selected":"";
		?>
			<option value="<?=$province["id"]?>" <?=$selected?>><?=$province["strName"]?></option>
		<?php
			}
		?>
		</select>

		<label>Postal Code:</label>
		<input type="text" id="postal" name="strPostalCode" value="<?=$postal?>" />

		<input id="btn-hospForm" type="submit" name="submit" value="Save" />
	</form>
<?php
}

if(isset($_GET['wID'])) {
	if($_GET['wID'] == 0) {
		$wishName = '';
	} else {
		$wishes = $arrData['wishInfo'][0];

		$wishName = $wishes['strWish'];
		$statusID = $wishes['nStatusID'];
		$hospitalName = $wishes['strName'];
		$userID = $wishes['nUserID'];
		$user = $wishes['strFirstName'];
		$phone = $wishes['nPhone'];
		$email = $wishes['strEmail'];
	}
?>
	<h1>Edit Wish</h1>

	<form id="wishtForm" method="post" action="index.php?controller=admin&action=save&wID=<?=$_GET['wID']?>">
<?php
	if($_GET['wID'] == 0) {
?>
		<label>Wish:</label>
		<input type="text" id="wish" name="strWish" value="<?=$wishName?>" />
<?php
	} else {
?>
		<label>Wish:</label>
		<p><?=$wishName?></p>

		<label>Status:</label>
		<select id="status" name="nStatusID">
		<?php
			foreach ($arrData['status'] as $status) {
			$selected = $statusID == $status['id']?"selected":"";
		?>
			<option value="<?=$status["id"]?>" <?=$selected?>><?=$status["strName"]?></option>
		<?php
			}
		?>
		</select>

		<?php
		if($_SESSION["bAdmin"] == 1) {
		?>
			<label>Hospital:</label>
			<p><?=$hospitalName?></p>
		<?php
		}

		if($userID != 0) {
		?>
			<label>Who Fulfilled:</label>
			<p><?=$user?></p>
			<p><?=$email?></p>
			<p><?=$phone?></p>
<?php
		}
	}
?>

		<input id="btn-wishForm" type="submit" name="submit" value="Save" />
	</form>
<?php
}
?>