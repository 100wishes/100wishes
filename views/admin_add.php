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
	<h1>Edit Client Info</h1>

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
	} else if($_SESSION["bAdmin"] == 1 && $_GET['uID'] > 0) {
?>
		<p>Hospital:</p>
		<p><?=$hospital?></p>
<?php
	}
?>
		<input id="btn-userForm" type="submit" name="submit" value="Save" />
	</form>
<?php
}
?>